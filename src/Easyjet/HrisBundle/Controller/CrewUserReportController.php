<?php

namespace App\Easyjet\HrisBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use App\Easyjet\HrisBundle\Form\CrewUserReportForm;
use Symfony\Component\HttpFoundation\StreamedResponse;
use App\Easyjet\HrisBundle\Classes\CrewUser\CsvResponse; 



class CrewUserReportController extends AbstractController
{
    const SIDEBAR_ITEM = "SHOW_CREW_USER";

    
   /**
     * @Route("/crew_user_report/index", name="crew_user_report_index")
     */
    public function indexAction(Request $request)
    {
        $em = $this->getDoctrine()->getManager();
        $form = $this->createForm(CrewUserReportForm::class);
        $form->handleRequest($request);

        if($form->isSubmitted()) {
            if($form->isValid()) {
              $strNonExistingUsers = '';
              $countNonExistingUsers = 0;
              $connexion = $em->getConnection();
              $successFlag = '';
              $errorFileFlag = '';

              // Add the header of the CSV file
              $columns= array('ID','Name', 'Surname', 'Base', 'Rank' , 'Email');
              // Query data from database
              $sql="SELECT u.log_user,u.prenom_user,u.nom_user,s.airport_name,t.type, u.email_user FROM `users` u inner join  `types_eftr` t on u.id_type_eftr= t.id inner join `stations` s on u.id_station = s.id_station WHERE `log_user` REGEXP '^[[:digit:]]{6}$' and active_user='1' and s.id_station in (4,6) and t.type in ('CC','SCCM','SFO','SO','FO1','FO2','CP','JCC','FO','JFO') ";
              
              $prepared = $connexion->prepare($sql);
              $result = $prepared->executeQuery();
              $userData = $result->fetchAllAssociative();
                
              $response = new CSVResponse($userData, 200, $columns);
            
              $response->setFilename( "data.csv" );
            
              return $response;
            }
        }
        else{
          $successFlag = '';
          $errorFileFlag = '';
          
          return $this->render('@EasyjetHris/CrewUserReport/index.html.twig', [
            "form" => $form->createView(),
            "selectedSidebar" => self::SIDEBAR_ITEM,
            "errorFileFlag" =>  $errorFileFlag,
            "successFlag" =>  $successFlag
          ]);
        }  
    }    
}
    

