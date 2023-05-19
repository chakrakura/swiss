<?php

namespace App\Easyjet\HrisBundle\Controller;

use DateTime;
use App\Easyjet\HrisBundle\Classes\EmployeRankingReport\XlsParser;
use App\Easyjet\HrisBundle\Classes\Import\UsersImportLogger;
use App\Easyjet\HrisBundle\Entity\HrisUsersImportLog;
use App\Easyjet\HrisBundle\Form\UploadUserImportForm;
use Exception;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Security;

class UsersImportController extends AbstractController
{
    const SIDEBAR_ITEM = "SHOW_USERS_IMPORT_LOGS";
    /**
     * @Route("/HRIS/users-import/logs/index", name="hris_users_import_logs_index")
     * @Security("is_granted('ROLE_HRIS_ADMIN')")
     */
    public function indexAction(Request $request)
    {
        $now = new DateTime();
        return $this->render('@EasyjetHris/UsersImport/index.html.twig', [
            "selectedSidebar" => self::SIDEBAR_ITEM,
            "logTo" => $request->query->get('logTo', $now->format("d/m/Y")),
            "logFrom" => $request->query->get('logFrom', $now->modify("-1 month")->format("d/m/Y")),
        ]);
    }

    /**
     * @Route("/HRIS/users-import/logs/search", name="hris_users_import_logs_search")
     * @Security("is_granted('ROLE_HRIS_ADMIN')")
     */
    public function searchAction(Request $request)
    {
        $entityManager = $this->getDoctrine()->getManager();

        $jsonYourselfList = $entityManager->getRepository("App\Easyjet\HrisBundle\Entity\HrisUsersImportLog")->logsDatatableResults(
            $request
        );

        $response = new Response(
            $jsonYourselfList
        );

        $response->headers->set('Content-Type', 'application/json');

        return $response;
    }

    /**
     * @Route("/HRIS/users-import/new", name="hris_users_import_new")
     * @Security("is_granted('ROLE_HRIS_ADMIN')")
     */
    public function importUsersAction(Request $request)
    {
        set_time_limit(120);
        
        $form = $this->createForm(
            UploadUserImportForm::class
        );
        $form->handleRequest($request);

        if ($form->isSubmitted()) {
            if ($form->isValid()) {
                $file = $form->get('userImportFile')->getData();
                if ($file) {
                    $fileTarget = $file->getPathName();
                }

                if (is_file($fileTarget)) {
                    // If a file has been uploaded
                    $entityManager = $this->getDoctrine()->getManager();
                    $entityManager->getConnection()->getConfiguration()->setSQLLogger(null);

                    // Load the importer service
                    $usersImporter = $this->get("hris_users_importer");

                    $logger = new UsersImportLogger(
                        $this->get("twig"),
                        "report:userImport.html.twig"
                    );

                    $usersImporter->setImportLogger($logger);
                    
                    $parser = new XlsParser($fileTarget);


                    // Start a mySQL transaction in order to roolback in case of failure
                    $dbalConnexion = $this->get("doctrine.dbal.uman_connection");
                    $dbalConnexion->beginTransaction();

                    $globalError = false;
                    try {
                        $usersImporter
                            ->setEntityManager($entityManager)
                            ->setDbalConnexion($dbalConnexion)
                            ->start($parser->getData());
                        $logger->fileParsedSuccessfully($fileTarget);
                        // Commit the transaction
                        $dbalConnexion->commit();
                    } catch (Exception $e) {
                        // In case of any failure, the transaction is rolled back and the log is updated
                        $dbalConnexion->rollback();
                        $usersImporter->getImportLogger()->fatalException($e->getMessage());
                        $usersImporter->getImportLogger()->fatalException("Transaction rolled back! No data transfered!");
                        $globalError = $e->getMessage();
                    }

                    try {
                        // Save the log in the database
                        $loggerEntity = $usersImporter->getImportLogger()->getEntity();

                        $entityManager->persist($loggerEntity);
                        $entityManager->flush();
                    } catch (Exception $e) {
                        if (!$globalError) {
                            // If the logger can't be saved and the import also failed, return an error and redirect to the form
                            $this->get('session')->getFlashBag()->add(
                                'error',
                                $e->getMessage()
                            );
                            return $this->redirect($this->generateUrl("hris_users_import_new"));
                        }
                    }

                    if ($globalError) {
                        // If the logger can't be saved but the data have been imported, Return an error and redirect to log
                        $this->get('session')->getFlashBag()->add(
                            'error',
                            $globalError
                        );
                        if ($loggerEntity && $loggerEntity->getId()) {
                            return $this->redirect($this->generateUrl('hris_users_import_logs_view', array(
                                "log" => $loggerEntity->getId()
                            )));
                        } else {
                            return $this->redirect($this->generateUrl("hris_users_import_logs_index"));
                        }
                    }

                    // If process success, show a success message and redirect to the log details
                    switch ($loggerEntity->getStatus()) {
                        case HrisUsersImportLog::STATUS_SUCCESS:
                            $this->get('session')->getFlashBag()->add(
                                'warning',
                                'Import process done. See the log details below for more details. <strong>Please note</strong> that this functionality is now deprecated. You should use the <code>php app/console easyjet:import-employee-ranking-report</code> command in order to automatically import from the worday API...'
                            );
                            break;

                        case HrisUsersImportLog::STATUS_FAILED:
                            $this->get('session')->getFlashBag()->add(
                                'error',
                                'An error occured during the process. See the log details below for more details'
                            );
                            break;

                        case HrisUsersImportLog::STATUS_WARNING:
                            $this->get('session')->getFlashBag()->add(
                                'warning',
                                'A warning occured during the process. See the log details below for more details'
                            );
                            break;


                        default:
                            $this->get('session')->getFlashBag()->add(
                                'info',
                                'Process finished in an undefined status. See the log details below for more details'
                            );
                            break;
                    }


                    return $this->redirect($this->generateUrl('hris_users_import_logs_view', array(
                        "log" => $loggerEntity->getId()
                    )));
                } else {
                    // If upload failed ..
                    $this->get('session')->getFlashBag()->add(
                        'error',
                        'Error during the file upload'
                    );

                    return $this->redirect($this->generateUrl("hris_users_import_logs_index"));
                }
            }
        }
        return $this->render('@EasyjetHris/UsersImport/importUsers.html.twig', [
            "form" => $form->createView(),
            "selectedSidebar" => self::SIDEBAR_ITEM
        ]);
    }

    /**
     * @Route("/HRIS/users-import/logs/view/{log}", name="hris_users_import_logs_view")
     * @Security("is_granted('ROLE_HRIS_ADMIN')")
     */
    public function logViewAction(HrisUsersImportLog $log)
    {
        return $this->render('@EasyjetHris/UsersImport/logView.html.twig', [
            "log" => $log,
            "selectedSidebar" => self::SIDEBAR_ITEM
        ]);
    }
}
