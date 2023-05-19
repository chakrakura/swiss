<?php

namespace App\Easyjet\HrisBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use App\Easyjet\HrisBundle\Form\CosmicRadiationReportForm;
use App\Easyjet\HrisBundle\Classes\CosmicReport\csvFile; 
use App\Easyjet\HrisBundle\Classes\CosmicReport\xmlFile; 

class CosmicRadiationReportController extends AbstractController
{
    const SIDEBAR_ITEM = "SHOW_COSMIC_RADIATION";    

    /**
     * @Route("/cosmic_radiation_report/new", name="cosmic_radiation_report_new")
     */
    public function newAction(Request $request)
    {
        $em = $this->getDoctrine()->getManager();
        $form = $this->createForm(CosmicRadiationReportForm::class);
        $form->handleRequest($request);
        
        $successFlag = '';
        $errorFileFlag = '';
        
        if($form->isSubmitted()) {
            if($form->isValid()) {
                // Where the file is going to be stored
                // $target_dir = $this->container->getParameter('hris.cosmic_radiation');
                // $target_dir = $this->container->get('parameter_bag')->get('hris.cosmic_radiation');
                $target_dir = "cosmic_radiation";
                $file = $_FILES['cosmic_radiation_report_form']['name']['tmpFile'];
                $path = pathinfo($file);
                $filename = $path['filename'];
                $ext = $path['extension'];
                $temp_name = $_FILES['cosmic_radiation_report_form']['tmp_name']['tmpFile'];
                $path_filename_ext = $target_dir."/".$filename.".".$ext;
                
                if (move_uploaded_file($temp_name,$path_filename_ext)) {
                    $csvFileObj  = new csvFile();  // initialize CSV class file object.
                    $filePath = $path_filename_ext;
                    $csvFileObj->setFileName($filePath);
                    $fileName = $csvFileObj->getFileName();

                    $result = $csvFileObj->fileOpen($fileName); // Open the input file and return current month and file pointer
                    $month=$result[0];
                    $pointerReset=$result[1]; 

                    $fp = file($fileName, FILE_SKIP_EMPTY_LINES);//to skip empty rows
                    $workerCount = count($fp)-2; // to skip first two rows .


                    $strNonExistingUsers = '';
                    $countNonExistingUsers = 0;
                    $connexion = $em->getConnection();
                    $successFlag = '';
                    $errorFileFlag = '';

                    //to validate user in swiss database.
                    while (($countRecord = $csvFileObj->fileRead()) && $countRecord) {
                        $id =str_pad($countRecord["ID"] , 6, '0', STR_PAD_LEFT); //prefix missing zeros
                        $sql = "SELECT u.*  FROM `users` u WHERE `log_user` = '".$id."'";
                        $prepared = $connexion->prepare($sql);
                        $result = $prepared->execute();
                        $userData = $result->fetchAllAssociative();

                        if (empty($userData)) {
                            $countNonExistingUsers = $countNonExistingUsers+1 ;
                            $strNonExistingUsers .= $countRecord["NAME"]."(".$countRecord["ID"]."), ";
                        }
                    }
                    
                    $strNonExistingUsers = rtrim($strNonExistingUsers, ", "); //trim additional "," in the end 

                    $workerCount = $workerCount- $countNonExistingUsers; //remove additional user from xml

                    //Create the instance of the class :xmlFile
                    $xmlFile = new xmlFile();
                    $xmlFile->setOutputPath($target_dir.'/'.'cosmicValues.xml');

                    $checkFileExist = $xmlFile->checkFileExist($xmlFile->getOutputPath());// Checking if output file already exists
                    if ($checkFileExist == 1) {
                            unlink($xmlFile->getOutputPath());// delete the file if already exists
                    }
                    $xmlFile->fileOpen($month, $workerCount); // Open the output file

                    fseek($csvFileObj->handle,$pointerReset);// to reset the csv handle  

                    while (($data = $csvFileObj->fileRead()) && $data) {

                        $id =str_pad($data["ID"] , 6, '0', STR_PAD_LEFT); //prefix missing zeros

                        $sql = "SELECT u.* , n.SWISSDEC_CODE, te.type_label,et.label FROM `users` u left join types_eftr te on te.id = u.id_type_eftr left join nationality n  on n.id  = u.id_nationnalite left join employee_type et on et.id = u.type_employe WHERE u.`log_user` = '".$id."'";
                        $prepared = $connexion->prepare($sql);
                        $result = $prepared->execute();
                        $userData = $result->fetchAllAssociative();

                        if (empty($userData)) 
                            continue; 
                        
                        $name = $userData[0]['nom_user'];
                        $firstName = $userData[0]['prenom_user'];
                        $sex = $userData[0]['sex_user'];
                        $dob = $userData[0]['date_naiss_user'];
                        $ssn = $userData[0]['numero_AVS'];
                        $nation = $userData[0]['SWISSDEC_CODE'];
                        $profession  = $userData[0]['type_label'];
                        $date_creation = ($userData[0]['engagement_date']=="0000-00-00")?$userData[0]['date_creation']:$userData[0]['engagement_date'];
                        $oc = strtoupper($userData[0]['label']);

                        $xmlFile->fileWrite($month, $data["ID"], $data["NAME"], $data["BASE"], $data["AC"], $data["POS"], $data["MILLISV"], $name, $firstName, $sex, $dob, $nation, $profession, $ssn, $date_creation,$oc); 
                    }


                    $xmlFile->fileClose();//closing output file
                    $csvFileObj->fileClose();//closing input file
                    $this->get('session')->getFlashBag()->add(
                            'success',
                            'Your XML file has been generated successfully.'
                        );
                    
                    $successFlag=1;
                    
                    // log missing users.
                    if($strNonExistingUsers!=""){
                        file_put_contents($target_dir.'/'.'error.txt', "Users missing in Swissinside database:".$strNonExistingUsers);
                        $errorFileFlag=1;
                    }
                } else {
                    $this->get('session')->getFlashBag()->add(
                    'error',
                    'Upload failed'
                 );
                }
           }
        }
        return $this->render('@EasyjetHris/CosmicRadiationReport/new.html.twig', [
            "form" => $form->createView(),
            "selectedSidebar" => self::SIDEBAR_ITEM,
            "errorFileFlag" =>  $errorFileFlag,
            "successFlag" =>  $successFlag
        ]);
    }
    /**
     * @Route("/cosmic_radiation_report/new/errordownload", name="download_error_file")
    **/
    public function downloadErrorFileAction(){
        //$target_dir = $this->container->getParameter('hris.cosmic_radiation');
        $target_dir = "cosmic_radiation"; 
        return new Response(file_get_contents($target_dir.'/'.'error.txt'), 200, array(
                            'Content-Type' => 'application/force-download',
                            'Content-Disposition' => 'attachment; filename="error.txt"'
                        ));
    }
    /**
     * @Route("/cosmic_radiation_report/new/xmldownload", name="download_xml_file")
    **/
    public function downloadXmlFileAction(){
        //$target_dir = $this->container->getParameter('hris.cosmic_radiation');
        $target_dir = "cosmic_radiation";
        return new Response(file_get_contents($target_dir.'/'.'cosmicValues.xml'), 200, array(
                            'Content-Type' => 'application/force-download',
                            'Content-Disposition' => 'attachment; filename="cosmicValues.xml"'
                        ));
    }
}
