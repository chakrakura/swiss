<?php

namespace App\Easyjet\HrisBundle\Services;

use DateTime;
use Doctrine\DBAL\Connection;
use Doctrine\ORM\EntityManager;
use App\Easyjet\HrisBundle\Classes\EmployeRankingReport\EmployeeRankingReportData;
use App\Easyjet\HrisBundle\Classes\Import\UsersImportLogger;
use App\Easyjet\UmanBundle\Entity\Users;
use App\Easyjet\UmanBundle\Entity\LeaveRequest;
use Exception;
use PDO;
use PHPExcel_Worksheet;
use stdClass;
use Twig_Environment;

class UsersImporterService
{
    private $bashScriptsFolder;

    /**
     * @var UsersImportLogger $loger
     */
    private $importLogger;

    /**
     * Entity manager
     * @var EntityManager EntityManager
     */
    private $entityManager;

    /**
     * Connexion dbal
     * @var Connection $dbalConnexion
     */
    private $dbalConnexion;

    /**
     * The template to generate the final report
     * @var string
     */
    private $reportTemplate;

    /**
     * Twig environment
     * @var Twig_Environment
     */
    private $twigEnv;

    protected $reportData;
    
    /**
     *
     * @var bool
     */
    protected $dryRun;

    public function __construct()
    {
    }
    
    public function getDryRun() {
        return $this->dryRun;
    }

    public function setDryRun($dryRun) {
        $this->dryRun = $dryRun;
        return $this;
    }

    
    public function setDbalConnexion($dbalConnexion)
    {
        $this->dbalConnexion = $dbalConnexion;
        return $this;
    }

    public function setImportLogger(UsersImportLogger $importLogger)
    {
        $this->importLogger = $importLogger;
        return $this;
    }

    public function getImportLogger()
    {
        return $this->importLogger;
    }

    /**
     * Set the entity manager
     * @param EntityManager $entityManager The entity manager
     * @return self
     */
    public function setEntityManager(EntityManager $entityManager)
    {
        $this->entityManager = $entityManager;
        return $this;
    }

    /**
     * Set the bash script folder
     * @param  string $folder Target of the folder wich contains the bash setbashScriptsFolder
     * @return self
     */
    public function setbashScriptsFolder($folder)
    {
        $this->bashScriptsFolder = $folder;
        return $this;
    }

    /**
     * Check if the cell contains the expected value
     * @param  PHPExcel_Worksheet $sheet         Excel sheet to check
     * @param  string             $cell          Cell to read
     * @param  string             $expectedValue Expected value in the requested cell
     * @return null
     * @throws Exception If the value don't match
     */
    protected function assertColumn(PHPExcel_Worksheet $sheet, $cell, $expectedValue)
    {
        if ($sheet->getCell($cell)->getValue() != $expectedValue) {
            throw new Exception(sprintf("The '%s' cell expected '%s' value but '%s' found",
                $cell,
                $expectedValue,
                $sheet->getCell($cell)->getValue()
            ));
        }
    }

    /**
     * Start the import process and update the log
     * @param $file Xls file to be parsed
     * @return null
     * @throws Exception If file does not exist
     */
    public function start(EmployeeRankingReportData $dataProvider)
    {
        $this->importLogger->addLine("Starting import of the data from the data provider ...");

        $bsl = $this->entityManager->getRepository("App\Easyjet\UmanBundle\Entity\Stations")->findOneBy(array("iataCode" => "BSL"));
        $gva = $this->entityManager->getRepository("App\Easyjet\UmanBundle\Entity\Stations")->findOneBy(array("iataCode" => "GVA"));
      
        $compensationGrades = $this->entityManager->getRepository("App\Easyjet\OtpBundle\Entity\CompensationGrades")->getKeyedArray();
       
       
        $sql = "SELECT stations.Comments AS station, users.* FROM users
                LEFT JOIN stations ON stations.id_station=users.id_station
                WHERE log_user=:log_user";
        $preparedUserSearch = $this->dbalConnexion->prepare($sql);
       
        $row = 1;
        $usersFound = 0;
        
        foreach ($dataProvider as $currentUser) {
            /* @var $currentUser App\Easyjet\HrisBundle\Classes\EmployeRankingReport\EmployeeElement */
            
            $initialEmployeeId = $currentUser->getEmployeeId();
          
            // If the A column is empty, we stop the script
            if (!$initialEmployeeId) {
                break;
            }

            $employeeId = str_pad($initialEmployeeId, 6, "0", STR_PAD_LEFT);
            
            
   
            $preparedUserSearch->bindParam(":log_user", $employeeId, PDO::PARAM_STR);
            $result = $preparedUserSearch->execute();

            // Try to find the user in the swissinside database
            $userFound = $result->fetchAssociative(PDO::FETCH_OBJ);
            if (!$userFound) {
               
                // Log the action
                $this->importLogger->addLine(sprintf("A new user has been found ('%s'). Let's create him in the swissinside databse", $employeeId));

                // Create the user entity for the creation
                $user = new Users;
                $user->setLogUser($employeeId);
                $user->setPrenomUser($currentUser->getFirstname());
                $user->setNomUser($currentUser->getLastname());
                $user->setEmailUser($currentUser->getEmail());

                // Convert engagement date from excel format to Y-m-d string format
                $engagementDate = $currentUser->getHireDate();
                if (!$engagementDate) {
                    throw new Exception(sprintf("The engagement date format for '%s' seems wrong", $employeeId));
                }
                $user->setEngagementDate($engagementDate);

                // Set the compensation grade if the correspondance is found in the claims module
                $userCompensationGrade = $currentUser->getCompensationGrade();

                $logUser = array(
                    "employeeId" => $employeeId,
                    "firstname" => $user->getPrenomUser(),
                    "lastname" => $user->getNomUser(),
                    "engagementDate" => $user->getEngagementDate()->format("d/m/Y"),
                    "contract" => "office",
                    "station" => ""
                );

                if (!isset($compensationGrades[$userCompensationGrade])) {
                    // If the compensation grade is not set in the claim module, throw an error
                    throw new Exception(sprintf("The '%s' compensation grade does not exist in the correspondance table of the claims module", $userCompensationGrade));
                } else {
                    if (!$compensationGrades[$userCompensationGrade]->getTypeEftr()) {
                        // If the compensation grade exists and has no linked contract, we set the user as OFFICE
                        $user->setIdTypeEftr(8)
                             ->setTypeEmploye(1);
                    } else {
                        // If a contract is associated to this compensation grade, set the propoer value in the uman entity
                        $user->setIdTypeEftr($compensationGrades[$userCompensationGrade]->getTypeEftr()->getId())
                             ->setTypeEmploye($compensationGrades[$userCompensationGrade]->getTypeEftr()->getEmployeeType());
                        $logUser['contract'] = $compensationGrades[$userCompensationGrade]->getTypeEftr()->getType();
                    }
                }

                // Set the location of the user
                switch ($currentUser->getLocation()) {
                    case 'Geneva Airport':
                        $user->setIdStation($gva->getIdStation());
                        $logUser['station'] = "GVA";
                        break;

                    case 'Basel Airport':
                        $user->setIdStation($bsl->getIdStation());
                        $logUser['station'] = "BSL";
                        break;

                    default:
                        //throw new Exception(sprintf("Unknown location '%s'", $currentUser->getLocation()));
                        $this->importLogger->addWarning(sprintf("Unknown location '%s' for the user with empno '%s'. Ignoring user creation...", $currentUser->getLocation(), $employeeId));
                        $this->importLogger->addUserToBeChecked(array(
                            "employeeId" => $employeeId,
                            "firstname" => $user->getPrenomUser(),
                            "lastname" => $user->getNomUser(),
                            "previousStation" => null,
                            "newStation" => $currentUser->getLocation(),
                            "userExist" => false
                        ));
                        continue 2;
                }


                // Convert termination date from excel format to Y-m-d string format
                if ($currentUser->getFixedTermEndDate()) {
                    $fixedTermEndDate = $currentUser->getFixedTermEndDate();
                    if (!$fixedTermEndDate) {
                        throw new Exception(sprintf("The fixed term end date format for '%s' seems wrong", $employeeId));
                    }
                    $user->setLeaveDate($fixedTermEndDate);
                }

                // Convert termination date from excel format to Y-m-d string format
                if ($currentUser->getTerminationDate()) {
                    $terminationDate = $currentUser->getTerminationDate();
                    if (!$terminationDate) {
                        throw new Exception(sprintf("The termination date format for '%s' seems wrong", $employeeId));
                    }
                    $user->setLeaveEarlyDate($terminationDate);
                }

                $this->createUser($user);

                $this->importLogger->addNewUser($logUser);
            } else {
                // If user does exist in swissinside...
                $user = $this->entityManager->getRepository("App\Easyjet\UmanBundle\Entity\Users")->findOneBy(array("logUser" => $employeeId));
              
                $userCompensationGrade = $currentUser->getCompensationGrade();
                $newFirstname = $currentUser->getFirstname();
                $newLastname = $currentUser->getLastname();
                $newContract = isset($compensationGrades[$userCompensationGrade]) ? $compensationGrades[$userCompensationGrade]->getTypeEftr() : null;
                $newStation = "";
                $updated = false;

                $logUpdateUser = array(
                    "new_station" => "",
                    "new_firstname" => $newFirstname,
                    "new_lastname" => $newLastname,
                    "new_contract" => $newContract ? $newContract->getType() : "",
                    "employeeId" => $employeeId
                );

                // Set the location of the user
                switch ($currentUser->getLocation()) {
                    case 'Geneva Airport':
                        $newStation = $gva->getIdStation();
                        $logUpdateUser["new_station"] = $gva->getIataCode();
                        break;

                    case 'Basel Airport':
                        $newStation = $bsl->getIdStation();
                        $logUpdateUser["new_station"] = $bsl->getIataCode();
                        break;

                    default:
                        $this->importLogger->addWarning(sprintf("Unknown location '%s' for the user with empno '%s'. Ignoring user update...", $currentUser->getLocation(), $employeeId));
                        $this->importLogger->addUserToBeChecked(array(
                            "employeeId" => $employeeId,
                            "firstname" => $user->getPrenomUser(),
                            "lastname" => $user->getNomUser(),
                            "previousStation" => $userFound->station,
                            "newStation" => $currentUser->getLocation(),
                            "userExist" => true
                        ));
                        continue 2;
                }


             

                $oldStation = $this->entityManager->getRepository("App\Easyjet\UmanBundle\Entity\Stations")->find($user->getIdStation());

                if (mb_strtolower($user->getPrenomUser()) != mb_strtolower($newFirstname)) {
                    $this->importLogger->addLine(sprintf("Firstname changed for employee %s", $employeeId));
                    $updated = true;
                }

                if (mb_strtolower($user->getNomUser(), "utf-8") != mb_strtolower($newLastname, "utf-8")) {
                    $this->importLogger->addLine(sprintf("Lastname changed for employee %s (%s to %s)", $employeeId, mb_strtolower($user->getNomUser(), "utf-8"), mb_strtolower($newLastname, "utf-8")));
                    $updated = true;
                }

                if ($user->getIdStation() != $newStation) {
                    $this->importLogger->addLine(sprintf("Station changed for employee %s", $employeeId));
                    $updated = true;
                }

                if ($user->getIdTypeEftr() && $user->getTypeEftr()->getType() != $logUpdateUser["new_contract"]) {
                    if ($logUpdateUser["new_contract"] != "") {
                        $this->importLogger->addLine(sprintf("Contract changed for employee %s", $employeeId));
                        $updated = true;
                    }
                }

   

                if ($updated) {
                    $logUpdateUser["old_station"] = $oldStation ? $oldStation->getIataCode() : "";
                    $logUpdateUser["old_firstname"] = $user->getPrenomUser();
                    $logUpdateUser["old_lastname"] = $user->getNomUser();
                    $logUpdateUser["old_contract"] = $user->getIdTypeEftr() ?  $user->getTypeEftr()->getType() : 0;
                   
                    $this->importLogger->addLine(sprintf("Employee %s %s (based at %s with contract %s) is now updated to  %s %s (based at %s with contract %s)",
                        $logUpdateUser["old_firstname"],
                        $logUpdateUser["old_lastname"],
                        $logUpdateUser["old_station"],
                        $logUpdateUser["old_contract"],
                        $logUpdateUser["new_firstname"],
                        $logUpdateUser["new_lastname"],
                        $logUpdateUser["new_station"],
                        $logUpdateUser["new_contract"]
                    ));

                    $this->importLogger->addUpdate($logUpdateUser);
                    $user
                        ->setPrenomUser($logUpdateUser["new_firstname"])
                        ->setNomUser($logUpdateUser["new_lastname"]);

                    if ($newStation) {
                        $user->setIdStation($newStation);
                    }


                    if ($newContract) {
                        $user->setIdTypeEftr($newContract->getId())
                             ->setTypeEmploye($newContract->getEmployeeType())
                             ->setTypeEftr($newContract);
                    }

                    
                    if (!$this->dryRun) {
                        $this->entityManager->persist($user);
                        $this->entityManager->flush();
                    } else {
                        $this->importLogger->addLine(sprintf("Ignoring update of the employee %s", $employeeId));                        
                    }
                }


                // ... Get the termination date from the excel file
                $terminationDate = $currentUser->getTerminationDate();
             
                // .. If leaver in excel file
                if ($terminationDate) {
                    // Get the user entity from the uman database

                    // If not leaver in swissinside, set him as leaver with the leave date provided in the file
                    // ->fotmat("y") < 0 is set in order to fix the bad format of the legacy leave date format (0000-00-00 which is formatted as -0001-11-30 in PHP)
                    if ($user->getLeaveDate() == null || $user->getLeaveDate()->format("y") < 0) {
                        $this->importLogger->addLine(sprintf("Set the employee '%s' as leaver with leave date = '%s'", $employeeId, $terminationDate->format("d/m/Y")));
                        //dump($user); exit;
                        $this->leaveUser($user, $terminationDate);

                        $this->importLogger->addLeaver($logUser = array(
                            "employeeId" => $employeeId,
                            "firstname" => $user->getPrenomUser(),
                            "lastname" => $user->getNomUser(),
                            "leaveDate" => $terminationDate->format("d/m/Y"),
                            "station" => $currentUser->getLocation()
                        ));
                    }
                }
                
            }
            $row++;
            $usersFound++;
        }
        
        ##### get all active users to check the movers  ######
        $workdayUserArr  = array(); // extract all active users from workday
        $moversArr = array (); //find all the movers ;
        $workdayUserArrFlip = array();
        
        //get all the active/terminate users from workday 
        if(!empty($dataProvider)){
            foreach ($dataProvider as $currentData) {
                /* @var $currentData App\Easyjet\HrisBundle\Classes\EmployeRankingReport\EmployeeElement */
                $initialEmployeeId = $currentData->getEmployeeId();

                // If the A column is empty, we stop the script
                if (!$initialEmployeeId) {
                    break;
                }
                $employeeId = str_pad($initialEmployeeId, 6, "0", STR_PAD_LEFT);
                $workdayUserArr[] = $employeeId ;
            }
            $workdayUserArrFlip = array_flip($workdayUserArr);    // array flip to avoid in_array()
        }
        
        
        $sqlUser="SELECT u.* FROM `users` u inner join  `types_eftr` t on u.id_type_eftr= t.id WHERE `log_user` REGEXP '^[[:digit:]]{6}$' AND   active_user='1' and t.type in ('CC','SCCM','SFO','SO','FO1','FO2','CP','JCC','FO','JFO') order by u.log_user ";
        $prepared = $this->dbalConnexion->prepare($sqlUser);
        $result = $prepared->execute();
        $userData = $result->fetchAssociative();
        
        if(!empty($userData)){
            foreach($userData as $currentID){
                if(isset($currentID["log_user"])){
                    $logUser =  $currentID["log_user"];
                    if (!isset($workdayUserArrFlip[$logUser])) {
                        $moversArr[] =  $logUser;
                    }
                }
            }
        }
        //echo "<pre>"; print_r($moversArr);exit;
        
        ################ Start Moveres removal ####################
        foreach($moversArr as $currentMover){
            
            // Get the user entity from the uman database
            $user = $this->entityManager->getRepository("App\Easyjet\UmanBundle\Entity\Users")->findOneBy(array("logUser" => $currentMover));
           
            // Get the stations entity from the uman database
            $stationsEntity = $this->entityManager->getRepository("App\Easyjet\UmanBundle\Entity\Stations")->find($user->getIdStation());
            $airport = isset($stationsEntity)?$stationsEntity->getAirportName():"";
                        
            $terminationDate = new DateTime("now"); // fake termination date to the current date.
            
            // If not leaver in swissinside, set him as leaver with the leave date provided in the file
            // ->fotmat("y") < 0 is set in order to fix the bad format of the legacy leave date format (0000-00-00 which is formatted as -0001-11-30 in PHP)
            if ($user->getLeaveDate() == null || $user->getLeaveDate()->format("y") < 0) {
                $this->importLogger->addLine(sprintf("Set the  mover employee '%s' as leaver with leave date = '%s'", $currentMover, $terminationDate->format("d/m/Y")));
                $this->leaveUser($user, $terminationDate);

                $this->importLogger->addMover($logUser = array(
                    "employeeId" => $currentMover,
                    "firstname" => $user->getPrenomUser(),
                    "lastname" => $user->getNomUser(),
                    "leaveDate" => $terminationDate->format("d/m/Y"),
                    "station" => $airport,
                    "email" => $user->getEmailUser()
                ));
            }            
        }
        ################ End Moveres removal ####################
        ##############end get all active users to check the movers ###########
       
        $this->importLogger->addLine(sprintf("%s users found in the provider", $usersFound));
        $this->importLogger->addLine(sprintf("%s movers found", count($moversArr)));
        $this->importLogger->parsedSuccessfully();
    }


   /**
     * Set a user as leaver
     * @param  Users  $user User to set as leaver
     * @return nulls
     */
    protected function leaveUser(Users $user, DateTime $leaveDate)
    {
        $user->setActiveUser(0)
             ->setLeaveDate($leaveDate)
             ->setLeaveEarlyDate($leaveDate);

        $entityManager = $this->entityManager;
        $leaveEntry = $entityManager->getRepository("App\Easyjet\UmanBundle\Entity\LeaveRequest")->find(array("idUser" => $user->getIdUser()));


        if (!$leaveEntry) {
            $leaveEntry = new LeaveRequest;
            $leaveEntry
                ->setIdUser($user->getIdUser());
        }

        $leaveEntry
            ->setLeaverType('resignation')
            ->setLeaverReason(1)
            ->setValidationDate(new DateTime)
            ->setState(2)
            ->setResignationDate($leaveDate)
            ->setEndOfContract($leaveDate)
            ->setLastDayInOffice($leaveDate)
            ->setPdfFile('')
            ->setTerminationRequest(0)
            ->setTerminationRequestValid(0)
            ->setHolidaysToPaid(0)
            ->setItTaskGenerated(1);

        if (!$this->dryRun) {
            $this->entityManager->persist($user);
            $this->entityManager->persist($leaveEntry);
            $this->entityManager->flush();
        }
        
    }
    
    /**
     * Create the user based on data object retrieved from the xls file
     * @param  stdClass $user Array of data
     * @return null
     */
    protected function createUser(Users $user)
    {
        // Default values for an internal user to be created
        $user
            ->setManuel(false)
            ->setActiveUser(1);

        // Query to insert the minimal data for an internal user
        $sql = "INSERT IGNORE INTO users (
                    pwd_user,
                    prenom_user,
                    nom_user,
                    date_naiss_user,
                    id_type_eftr,
                    type_employe,
                    email_user,
                    engagement_date,
                    occupation,
                    sex_user,
                    id_station,
                    manuel,
                    date_creation,
                    date_validation,
                    log_user
                ) VALUES (
                    :pwd_user,
                    :prenom_user,
                    :nom_user,
                    :date_naiss_user,
                    :id_type_eftr,
                    :type_employe,
                    :email_user,
                    :engagement_date,
                    :occupation,
                    :sex_user,
                    :id_station,
                    :manuel,
                    :date_creation,
                    :date_validation,
                    :log_user
                )";

        if (!$user->getEmailUser()) {
            $this->importLogger->addWarning(sprintf("The user '%s' has no email set", $user->getLogUser()));
        }

        $preparedUserSearch = $this->dbalConnexion->prepare($sql);
        $preparedUserSearch->bindValue(":log_user", $user->getLogUser(), PDO::PARAM_STR);
        $preparedUserSearch->bindValue(":pwd_user", md5("unused password"), PDO::PARAM_STR);
        $preparedUserSearch->bindValue(":prenom_user", $user->getPrenomUser(), PDO::PARAM_STR);
        $preparedUserSearch->bindValue(":nom_user", $user->getNomUser(), PDO::PARAM_STR);
        $preparedUserSearch->bindValue(":date_naiss_user", null, PDO::PARAM_STR);
        $preparedUserSearch->bindValue(":id_type_eftr", $user->getIdTypeEftr(), PDO::PARAM_INT);
        $preparedUserSearch->bindValue(":type_employe", $user->getTypeEmploye(), PDO::PARAM_INT);
        $preparedUserSearch->bindValue(":email_user", $user->getEmailUser(), PDO::PARAM_STR);
        $preparedUserSearch->bindValue(":engagement_date", $user->getEngagementDate()->format("Y-m-d"), PDO::PARAM_STR);
        $preparedUserSearch->bindValue(":occupation", $user->getOccupation(), PDO::PARAM_INT);
        $preparedUserSearch->bindValue(":sex_user", null, PDO::PARAM_STR);
        $preparedUserSearch->bindValue(":id_station", $user->getIdStation(), PDO::PARAM_INT);
        $preparedUserSearch->bindValue(":manuel", $user->getManuel(), PDO::PARAM_INT);
        $preparedUserSearch->bindValue(":date_creation", date("Y-m-d H:i:s"), PDO::PARAM_STR);
        $preparedUserSearch->bindValue(":date_validation", date("Y-m-d H:i:s"), PDO::PARAM_STR);

        $preparedUserSearch->execute();
    }

    /**
     * Get the value of The template to generate the final report
     *
     * @return string
     */
    public function getReportTemplate()
    {
        return $this->reportTemplate;
    }

    /**
     * Set the value of The template to generate the final report
     *
     * @param string reportTemplate
     *
     * @return self
     */
    public function setReportTemplate($reportTemplate)
    {
        $this->reportTemplate = $reportTemplate;

        return $this;
    }
}
