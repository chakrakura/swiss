<?php

namespace App\Easyjet\HrisBundle\Services;

use DateTime;
use Doctrine\DBAL\Connection;
use Doctrine\ORM\EntityManager;
use App\Easyjet\HrisBundle\Classes\EmployeRankingReport\EmployeeRankingReportData;
use App\Easyjet\HrisBundle\Classes\Import\UsersImportLogger;
use App\Easyjet\HrisBundle\Entity\LeaveRequest;
use App\Easyjet\HrisBundle\Entity\User;
use Exception;
use PDO;
use PHPExcel_Cell;

use PHPExcel_Shared_Date;
use PHPExcel_Worksheet;
use stdClass;
use Twig_Environment;

class UsersDisablerService
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
    
    protected $ldapRoot;
    protected $ldapServer;
    protected $ldapBind;
    protected $ldapAdUser;
    protected $ldapAdPassword;
    protected $ldapFindByEmpId;
    protected $ldapConnexion;
    
     /**
     * Dry run or not
     * @var bool
     */
    protected $dryRun;

    public function __construct($ldapRoot, $ldapServer, $ldapBind, $ldapAdUser, $ldapAdPassword, $ldapFindByEmpId, $dryRun = false)
    {

        $this->ldapRoot = $ldapRoot;
        $this->ldapServer = $ldapServer;
        $this->ldapBind = $ldapBind;
        $this->ldapAdUser = $ldapAdUser;
        $this->ldapAdPassword = $ldapAdPassword;
        $this->ldapFindByEmpId = $ldapFindByEmpId;
        $this->dryRun = $dryRun;
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
    public function start(EmployeeRankingReportData $dataProvider, $nbDays)
    {
        $this->importLogger->addLine("Starting disabling leavers found in the data provider ...");
        $allLeavers = ($nbDays == -1);
        $disableLeaversUpTo = new \DateTime();
        if (!$allLeavers) {
            $disableLeaversUpTo->sub(new \DateInterval("P" . $nbDays . "D"));
            $disableLeaversUpTo->setTime(0, 0, 0);
        }
        
        if ($allLeavers) {
            $this->importLogger->addLine("Disable all leavers in AD");
        } else {
            $this->importLogger->addLine(sprintf("Disable employees who left the company at the following date : %s", $disableLeaversUpTo->format ("M d Y")));
        }
        
        
        foreach ($dataProvider as $currentUser) {
            /* @var $currentUser Easyjet\HrisBundle\Classes\EmployeRankingReport\EmployeeElement */
            
            $initialEmployeeId = $currentUser->getEmployeeId();

            // If the A column is empty, we stop the script
            if (!$initialEmployeeId) {
                continue;
            }

            $employeeId = str_pad($initialEmployeeId, 6, "0", STR_PAD_LEFT);
            
            //$currentUser = new \Easyjet\HrisBundle\Classes\EmployeRankingReport\EmployeeElement();
            if (($allLeavers && $currentUser->getTerminationDate()) || ($currentUser->getTerminationDate() && $currentUser->getTerminationDate()->format("Y-m-d") == $disableLeaversUpTo->format("Y-m-d"))) {
                $this->importLogger->addLine(sprintf("Employee '%s' will now be disabled in AD", $employeeId));
                printf("Employee '%s' will now be disabled in AD\n", $employeeId);
                $this->disableUser($employeeId);
            } 
        }
        
        $this->importLogger->parsedSuccessfully();
    }
    
    public function disableUser($employeeId) {
        if (!$this->ldapConnexion) {
            $this->ldapConnexion = \ldap_connect($this->ldapServer);
        
            ldap_set_option($this->ldapConnexion, LDAP_OPT_REFERRALS, 0);
            ldap_set_option($this->ldapConnexion, LDAP_OPT_PROTOCOL_VERSION, 3);

            $binding = \ldap_bind($this->ldapConnexion, preg_replace("/%u/", $this->ldapAdUser, $this->ldapBind), $this->ldapAdPassword);
            if (!$binding) {
                throw new \Exception('Unable to authenticate against the active directory server.');
            }
        }
        
        $LdapRetrievedUser = \ldap_search($this->ldapConnexion, $this->ldapRoot, preg_replace("/%u/", $employeeId, $this->ldapFindByEmpId));
        $info = ldap_get_entries($this->ldapConnexion, $LdapRetrievedUser);
        if ($info) {
            if (isset($info[0]) && isset($info[0]["dn"])) {
                $dn = $info[0]["dn"];
                $ac = $info[0]["useraccountcontrol"][0];
                $flags = $this->getLdapUserFlags($info[0]["useraccountcontrol"][0]);                
                if (isset($flags["ACCOUNTDISABLE"])) {
                    $this->importLogger->addLine(sprintf("Employee '%s' is already disabled in AD. Disaling process aborted...", $employeeId));
                } else {
                    $disable=($ac |  2); // set all bits plus bit 1 (=dec2)
                    $userdata=array();
                    $userdata["useraccountcontrol"][0] = $disable;
                    if ($this->dryRun) {
                        ob_start();
                        echo "\n";
                        var_dump($userdata);
                        echo "\n";
                        $userDataString = ob_get_clean();
                        $this->importLogger->addLine(sprintf("The following update would have been applied for the following user : '%s' if the dry mode would not be ON : %s", $employeeId, $userDataString));
                    } else {
                        ldap_modify($this->ldapConnexion, $dn, $userdata);
                    }
                    
                    $this->importLogger->addLine(sprintf("Employee '%s' was disabled in AD", $employeeId));
                }
                
            } else {
                $this->importLogger->addLine(sprintf("Employee '%s' was not found in the AD. The user won't be disabled", $employeeId));

            }
        }
    }
    
    private function getLdapUserFlags($inputCode)
    {
        /**
        * http://support.microsoft.com/kb/305144
        *
        * You cannot set some of the values on a user or computer object because
        * these values can be set or reset only by the directory service.
        *
        */
        $userAccountControlFlags = array(
            16777216 => "TRUSTED_TO_AUTH_FOR_DELEGATION",
            8388608 => "PASSWORD_EXPIRED",
            4194304 => "DONT_REQ_PREAUTH",
            2097152 => "USE_DES_KEY_ONLY",
            1048576 => "NOT_DELEGATED",
            524288 => "TRUSTED_FOR_DELEGATION",
            262144 => "SMARTCARD_REQUIRED",
            131072 => "MNS_LOGON_ACCOUNT",
            65536 => "DONT_EXPIRE_PASSWORD",
            8192 => "SERVER_TRUST_ACCOUNT",
            4096 => "WORKSTATION_TRUST_ACCOUNT",
            2048 => "INTERDOMAIN_TRUST_ACCOUNT",
            512 => "NORMAL_ACCOUNT",
            256 => "TEMP_DUPLICATE_ACCOUNT",
            128 => "ENCRYPTED_TEXT_PWD_ALLOWED",
            64 => "PASSWD_CANT_CHANGE",
            32 => "PASSWD_NOTREQD",
            16 => "LOCKOUT",
            8 => "HOMEDIR_REQUIRED",
            2 => "ACCOUNTDISABLE",
            1 => "SCRIPT"
        );

        $attributes = NULL;
        while($inputCode > 0) {
            foreach($userAccountControlFlags as $flag => $flagName) {
                $temp = $inputCode-$flag;
                if($temp>0) {
                    $attributes[$userAccountControlFlags[$flag]] = $flag;
                    $inputCode = $temp;
                }
                if($temp==0) {
                    if(isset($userAccountControlFlags[$inputCode])) {
                        $attributes[$userAccountControlFlags[$inputCode]] = $inputCode;
                    }
                    $inputCode = $temp;
                }
            }
        }
        return $attributes;
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
