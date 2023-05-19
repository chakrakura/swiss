<?php

namespace App\Easyjet\SfsuBundle\Controller;

use Exception;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\ResponseHeaderBag;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Security;
use Symfony\Component\Mailer\MailerInterface;

use App\Easyjet\SfsuBundle\Entity\SfsuFile;
use App\Easyjet\SfsuBundle\Classes\PhpValues;
use App\Easyjet\SfsuBundle\Form\SfsuFileForm;
use App\Easyjet\SfsuBundle\Entity\SfsuFileLog;
use App\Easyjet\SfsuBundle\Classes\UploadHandler;
use App\Easyjet\SfsuBundle\Form\SfsuFileMailForm;
use App\Easyjet\SfsuBundle\Entity\SfsuDownloadToken;
use App\Easyjet\SfsuBundle\Form\SfsuDownloadTokenForm;
use App\Easyjet\SfsuBundle\Classes\GenerateArchiveFile;
use App\Easyjet\SfsuBundle\Form\SfsuFileUploadForm;
use App\Easyjet\SfsuBundle\Entity\SfsuFileAuthorizedEmail;


class FilesController extends AbstractController
{

    const SIDEBAR_ITEM = "SHOW_FILES";

    /**
     * @Route("/files/new", name="sfsu_files_new")
     * @Security("is_granted('ROLE_SFSU_ADMIN') or is_granted('ROLE_SFSU_USER')")
     */
    public function newAction(Request $request)
    {
        $form = $this->createForm(SfsuFileUploadForm::class, [],['attr' => ['id' => 'fileupload']]);
        $form->handleRequest($request);

        return $this->render('@EasyjetSfsu/Files/new.html.twig', [
            "selectedSidebar" => self::SIDEBAR_ITEM,
            "maxUploadSize" => PhpValues::maxUploadSize(),
            "maxHumanFileSize" => PhpValues::maxHumanFileSize(),
            "sfsuForm" => $form->createView(),
            "acceptedExtensions" => implode(",", SfsuFile::$allowedExtArr),
        ]);
    }

    /**
     * @Route("/files/search", name="sfsu_files_search")
     * @Security("is_granted('ROLE_SFSU_ADMIN') or is_granted('ROLE_SFSU_USER')")
     */
    public function searchAction(Request $request)
    {
        $entityManager = $this->getDoctrine()->getManager();
        $myself = $entityManager->getRepository("App\Easyjet\UmanBundle\Entity\Users")->find($this->getUser()->getId());
        $forUser = $myself;

        if ($this->get('security.authorization_checker')->isGranted('ROLE_SFSU_ADMIN')) {
            $forUser = null;
        }

        $jsonYourselfList = $entityManager->getRepository("App\Easyjet\SfsuBundle\Entity\SfsuFile")->logsDatatableResults(
            $request,
            $forUser
        );

        $response = new Response(
            $jsonYourselfList
        );

        $response->headers->set('Content-Type', 'application/json');

        return $response;
    }

    /**
     * @Route("/files/index", name="sfsu_files_index")
     * @Security("is_granted('ROLE_SFSU_ADMIN') or is_granted('ROLE_SFSU_USER')")
     */
    public function indexAction(Request $request)
    {

        return $this->render('@EasyjetSfsu/Files/index.html.twig', [
            "createdFrom" => $request->get("createdFrom"),
            "createdTo" => $request->get("createdTo"),
            "selectedSidebar" => self::SIDEBAR_ITEM
        ]);
    }

    /**
     * @Route("/files/send", name="sfsu_files_send")
     * @Security("is_granted('ROLE_SFSU_ADMIN') or is_granted('ROLE_SFSU_USER')")
     */
    public function sendAction(Request $request): Response
    {
        $sfsuFileUploadForm = $this->createForm(SfsuFileUploadForm::class, []);
        $sfsuFileUploadForm->handleRequest($request);

        if (!$sfsuFileUploadForm->isValid()) {
            throw new \Symfony\Component\Security\Core\Exception\InvalidCsrfTokenException('Invalid CSRF token');
        }

        $extensions = "#(" . str_replace(".", "\.", implode("|", SfsuFile::$allowedExtArr)) . ")$#i";

        $uploadHandler = new UploadHandler(array(
            "upload_dir" => $this->getFilesFolder() . "/",
            "param_name" => "sfsu_file_upload_form",
            "accept_file_types" => $extensions,
            "accept_mime_types" => SfsuFile::$allowedMimeTypeArr
        ), false);

        $entityManager = $this->getDoctrine()->getManager();
        $myself = $this->getDoctrine()->getRepository("App\Easyjet\UmanBundle\Entity\Users")->find($this->getUser()->getId());

        $response = $uploadHandler->setUploadedCallback(function ($tmpName = "", $originalName = "") use ($entityManager, $myself) {

            $file = new SfsuFile();
            $log = new SfsuFileLog("File uploaded", $myself);
            $retention = $entityManager->getRepository("App\Easyjet\SfsuBundle\Entity\SfsuRetention")->findOneBy(array('nbDays' => 7));
            $file
                ->setRetentionDuration($retention)
                ->setFilename($tmpName)
                ->setOriginalFilename($originalName)
                ->setCreatedBy($myself)
                ->setDeleteAfterDownload(false)
                ->addLog($log);
            $entityManager->persist($file);
            $entityManager->flush();

            return $file->getId();
        })->post(false);

        $response = new Response(json_encode($response));

        $response->headers->set('Vary', 'Accept');

        if (isset($_SERVER['HTTP_ACCEPT']) && (strpos($_SERVER['HTTP_ACCEPT'], 'application/json') !== false)) {
            $response->headers->set('Content-Type', 'application/json');
        } else {
            $response->headers->set('Content-Type', 'text/plain');
        }

        return $response;
    }

    protected function getFilesFolder($file = null)
    {
        $folder = $this->getParameter('sfsu.storage_folder');
        if ($file && !$file->existsInFolder($folder)) {
            throw $this->createNotFoundException('The file does not exist');
        }
        return $folder;
    }

    /**
     * @Route("/files/show", name="sfsu_files_multiple_show")
     * @Security("is_granted('ROLE_SFSU_ADMIN') or is_granted('ROLE_SFSU_USER')")
     */
    public function showMultipleAction(Request $request, MailerInterface $mailer)
    {

        try {
            // Get the list of files to be uploaded
            $ids = $request->get("file");
            if (empty($ids)) {
                throw new Exception("Please select at least one file to send by email");
            }

            if (count($ids) == 1) {
                // If there is only one file, we use the showAction controller with only one id
                return $this->showAction($ids[0], $request, $mailer);
            } else {

                // If there is multiple files, we use the showAction controller and send it an array of IDs
                return $this->showAction($ids, $request, $mailer);
            }
        } catch (Exception $e) {
            $this->get('session')->getFlashBag()->add(
                'error',
                $e->getMessage()
            );
            return $this->redirect($this->generateUrl('sfsu_files_index'));
        }
        exit;
    }



    /**
     * @Route("/files/show/{files}", name="sfsu_files_show")
     * @Security("is_granted('ROLE_SFSU_ADMIN') or is_granted('ROLE_SFSU_USER')")
     */
    public function showAction($files, Request $request, MailerInterface $mailer)
    {

        $filesToShow = array();
        $sendBatch = is_array($files);
        $showZipFilename = false;

        if ($sendBatch) {
            foreach ($files as $currentFile) {
                $filesToShow[] = $this->getFile($currentFile);
                if (count($filesToShow) > 1) {
                    $showZipFilename = true;
                }
            }
        } else {
            $filesToShow[] = $this->getFile($files);
        }

        $em = $this->getDoctrine()->getManager();
        $myself = $this->getDoctrine()->getRepository("App\Easyjet\UmanBundle\Entity\Users")->find($this->getUser()->getId());

        $form = $this->createForm(SfsuFileForm::class,  $filesToShow);
        $form->handleRequest($request);
        if ($form->isSubmitted()) {
            if ($request->isMethod('post')) {
                if ($form->isValid()) {
                    $log = new SfsuFileLog("File parameters updated", $myself);
                    $log->setFile($filesToShow[0]);
                    $em->persist($log);
                    $em->flush();
                    $this->get('session')->getFlashBag()->add(
                        'success',
                        'Your parameter have been saved'
                    );
                    return $this->redirect($this->generateUrl('sfsu_files_show', array("files" => $filesToShow[0]->getId())));
                }
            }
        }

        $emailForm = $this->createForm(SfsuFileMailForm::class, [],  ["files" => $filesToShow]);
        $emailForm->handleRequest($request);
        if ($emailForm->isSubmitted()) {
            if ($request->isMethod('post')) {
                if (count($filesToShow) > 1) {

                    // If multiple file, generate the zip file, create the file in the db and send it by email
                    $zipFileGenerator = new GenerateArchiveFile($this->getFilesFolder());
                    $zipFileGenerator->addFiles($filesToShow);

                    // Generate the zip file
                    $file = $zipFileGenerator->createZipFile($emailForm->get('zipFilename')->getData());

                    // Initialize required stuff to assign to the file
                    $log = new SfsuFileLog("Zip file created", $myself);
                    $retention = $em->getRepository("App\Easyjet\SfsuBundle\Entity\SfsuRetention")->findOneBy(array('nbDays' => 7));

                    // Assign required stuff to the generated file
                    $file
                        ->setRetentionDuration($retention)
                        ->setCreatedBy($myself)
                        ->setDeleteAfterDownload(false)
                        ->addLog($log);

                    // Persisting the new file in the DB
                    $em->persist($file);
                    $em->flush();
                } else {
                    // If only one file, we use the existing one and send it as usual
                    $file = $filesToShow[0];
                }

                if ($emailForm->isValid()) {
                    $emailData = $emailForm->getData();
                    //$emailsList = preg_split("/(,|;)/", $emailData['recipient']);
                    $emailsList = json_decode($emailData['recipient']);

                    //$emailsList[] = $myself->getEmailUser();
                    $from = array($myself->getEmailUser() => $myself->getNomUser() . " " . $myself->getPreNomUser());
                    $subject = $emailData['subject'];
                    $content = $emailData['mailContent'];

                    $message = $file->sendByMail($emailsList,  $myself, $subject, $content, $mailer, $this->getParameter('sfsu.public_swissinside_prefix'));

                    $log = new SfsuFileLog(sprintf("Url has been sent to the following recipients : %s", implode(",", $emailsList)), $myself);
                    $log->setFile($file);
                    $log->setEmailAddress($myself->getEmailUser());
                    $em->persist($log);

                    foreach ($emailsList as $email) {
                        $authorized = new SfsuFileAuthorizedEmail($email, $file);
                        $file->addEmail($authorized);
                    }
                    $em->persist($file);
                    $em->flush();
                    $this->get('session')->getFlashBag()->add(
                        'success',
                        sprintf('Your email has been sent to "%s" with a link to the file.', implode(", ", $emailsList))
                    );
                    return $this->redirect($this->generateUrl('sfsu_files_show', array("files" => $file->getId())));
                }
            }
        }

        $folder = $this->getFilesFolder();
        if ($request->get("file")) {
            return $this->render('@EasyjetSfsu/Files/showMultiple.html.twig', [
                "selectedSidebar" => self::SIDEBAR_ITEM,
                "form" => $form->createView(),
                "emailForm" => $emailForm->createView(),
                "fileExists" => $sendBatch ? true : $filesToShow[0]->existsInFolder($folder),
                "showZipFilename" => $showZipFilename
            ]);
        }

        return $this->render('@EasyjetSfsu/Files/show.html.twig', [
            "selectedSidebar" => self::SIDEBAR_ITEM,
            "form" => $form->createView(),
            "emailForm" => $emailForm->createView(),
            "filesToShow" => $filesToShow,
            "fileExists" => $sendBatch ? true : $filesToShow[0]->existsInFolder($folder),
            "showZipFilename" => $showZipFilename
        ]);
    }

    protected function getFile($fileId)
    {
        $file = $this->getDoctrine()->getRepository("App\Easyjet\SfsuBundle\Entity\SfsuFile")->find($fileId);

        if (!$this->get('security.authorization_checker')->isGranted('ROLE_SFSU_ADMIN')) {
            if ($file->getCreatedBy()->getIdUser() != $this->getUser()->getId()) {
                throw new \Symfony\Component\HttpKernel\Exception\AccessDeniedHttpException();
            }
        }
        return $file;
    }


    /**
     * @Route("/external-users/files/{accessKey}", name="sfsu_download_external_users_link")
     */
    public function externalUsersdownloadAction($accessKey,  Request $request, MailerInterface $mailer)
    {
        $em = $this->getDoctrine()->getManager();
        $file = $em->getRepository('App\Easyjet\SfsuBundle\Entity\SfsuFile')->findOneBy(array('accessKey' => $accessKey));
        try {
            $token = new SfsuDownloadToken($file);
            $form = $this->createForm(SfsuDownloadTokenForm::class, $token);
            $form->handleRequest($request);
            if ($form->isSubmitted()) {
                if ($form->isValid()) {
                    if (!$file->isEmailAuthorized($token->getEmailAddress())) {
                        $log = new SfsuFileLog(sprintf("An user tried to get a token on an unauthorized email address ('%s')", $token->getEmailAddress()), null);
                        $log->setFile($file);
                        $em->persist($log);
                        $em->flush();
                        throw new Exception("This email address is not authorized to download this file");
                    }
                    $log = new SfsuFileLog("Request a token", null, $token->getEmailAddress());
                    $log->setFile($file);
                    $em->persist($log);
                    $em->persist($token);
                    $em->flush();
                    $this->get('session')->getFlashBag()->add(
                        'success',
                        sprintf('A token has been generated. Please watch your mail and click the link in order to start the download. If you don\'t receive the email, please try to enter your email again')
                    );
                    $token->sendByMail($token->getEmailAddress(), $mailer, $this->getParameter('sfsu.public_swissinside_prefix'));

                    return $this->redirect($this->generateUrl('sfsu_download_link', array(
                        "accessKey" => $accessKey,
                        "withEmail" => "with-email"
                    )));
                }
            }

            return $this->render('@EasyjetSfsu/Files/download.html.twig', [
                "selectedSidebar" => self::SIDEBAR_ITEM,
                "form" => $form->createView(),
                "file" => $file,
                "redirectTo" =>  $this->generateUrl("sfsu_download_link1", ["accessKey" => urlencode($accessKey)])
            ]);
        } catch (Exception $e) {
            $this->get('session')->getFlashBag()->add(
                'error',
                $e->getMessage()
            );

            return $this->redirect($this->generateUrl('sfsu_download_link', array(
                "accessKey" => $accessKey,
                "withEmail" => "with-email"
            )));
        }
    }


    /**
     * @Route("/files/{accessKey}/download/{withEmail}", name="sfsu_download_link", defaults={"withEmail" = ""})
     */
    public function downloadAction($accessKey, $withEmail, Request $request)
    {
        $em = $this->getDoctrine()->getManager();
        $file = $em->getRepository('App\Easyjet\SfsuBundle\Entity\SfsuFile')->findOneBy(array('accessKey' => $accessKey));

        try {
            if ($this->getUser() && ($withEmail != "with-email")) {
                $myself = $this->getDoctrine()->getRepository("App\Easyjet\UmanBundle\Entity\Users")->find($this->getUser()->getId());
                if (!$file->isEmailAuthorized($this->getUser()->getEmailUser())) {
                    $log = new SfsuFileLog("An authenticated user tried to get a token and was not authorized to download this file", $myself);
                    $log->setFile($file);
                    $em->persist($log);
                    $em->flush();
                    throw new Exception("The email address attached to your Europe account is not authorized to download this file");
                }
                return $this->startDownload($file, $myself->getEmailUser(), $myself, !($file->getCreatedBy()->getIdUser() == $this->getUser()->getId()));
            } else {
                $token = new SfsuDownloadToken($file);
                $form = $this->createForm(
                    SfsuDownloadTokenForm::class,
                    $token,
                    ['action' => $this->generateUrl(
                        'sfsu_download_external_users_link',
                        array(
                            "accessKey" => $accessKey
                        )
                    )]
                );

                $form->handleRequest($request);

                return $this->render('@EasyjetSfsu/Files/download.html.twig', [
                    "selectedSidebar" => self::SIDEBAR_ITEM,
                    "form" => $form->createView(),
                    "file" => $file,
                    "redirectTo" =>  $this->generateUrl("sfsu_download_internal_users_link", ["accessKey" => urlencode($accessKey)])
                ]);
            }
        } catch (Exception $e) {
            $this->get('session')->getFlashBag()->add(
                'error',
                $e->getMessage()
            );

            return $this->redirect($this->generateUrl('sfsu_download_link', array(
                "accessKey" => $accessKey,
                "withEmail" => "with-email"
            )));
        }
    }


    /**
     * @Route("/internal-users/files/{accessKey}", name="sfsu_download_internal_users_link")
     * @Security("is_granted('ROLE_SFSU_ADMIN') or is_granted('ROLE_SFSU_USER')")
     */
    public function internalUsersdownloadAction($accessKey, Request $request)
    {
        $em = $this->getDoctrine()->getManager();
        $file = $em->getRepository('App\Easyjet\SfsuBundle\Entity\SfsuFile')->findOneBy(array('accessKey' => $accessKey));

        try {
            if ($this->getUser()) {
                $myself = $this->getDoctrine()->getRepository("App\Easyjet\UmanBundle\Entity\Users")->find($this->getUser()->getId());
                if (!$file->isEmailAuthorized($this->getUser()->getEmailUser())) {
                    $log = new SfsuFileLog("An authenticated user tried to get a token and was not authorized to download this file", $myself);
                    $log->setFile($file);
                    $em->persist($log);
                    $em->flush();
                    throw new Exception("The email address attached to your Europe account is not authorized to download this file");
                }
                return $this->startDownload($file, $myself->getEmailUser(), $myself, !($file->getCreatedBy()->getIdUser() == $this->getUser()->getId()));
            } else {
                return $this->redirect($this->generateUrl('sfsu_download_link', array(
                    "accessKey" => $accessKey,
                    "withEmail" => "with-email"
                )));
            }
        } catch (Exception $e) {
            $this->get('session')->getFlashBag()->add(
                'error',
                $e->getMessage()
            );

            return $this->redirect($this->generateUrl('sfsu_download_link', array(
                "accessKey" => $accessKey,
                "withEmail" => "with-email"
            )));
        }
    }

    /**
     * @Route("/files/{accessKey}/{token_request}/{token}/confirm_key", name="sfsu_download_link_confirm_key")
     */
    public function confirmKeyAction($accessKey, $token_request, $token)
    {
        $em = $this->getDoctrine()->getManager();
        $file = $em->getRepository('App\Easyjet\SfsuBundle\Entity\SfsuFile')->findOneBy(array('accessKey' => $accessKey));

        if (!$file) {
            throw new NotFoundHttpException('Sorry not existing!');
        }

        $downloadToken = $em->getRepository('App\Easyjet\SfsuBundle\Entity\SfsuDownloadToken')->findOneBy(array('requestId' => $token_request));

        try {
            if (!$downloadToken || $downloadToken->getFile()->getId() != $file->getId() || $downloadToken->getToken() != $token) {
                throw new \Exception('Your token is not valid. Please generate a new token and try again');
            }

            if ($downloadToken->challengeToken() > 3) {
                throw new \Exception('Your token has been challenged too many time. Please generate a new token and try again');
            }

            if ($downloadToken->getExpirationDatetime() < new \Datetime) {
                throw new \Exception('Your token is expired. Please generate a new token and try again');
            }

            if ($downloadToken->getUsed()) {
                throw new \Exception('Your token has already been used. Please generate a new token and try again');
            }

            if ($downloadToken->getIp() != $_SERVER['REMOTE_ADDR']) {
                throw new \Exception('The ip address does not correspond with the generated token. Please generate a new token and try again');
            }
        } catch (\Exception $e) {
            $log = new SfsuFileLog(sprintf("Download failed with following message : %s", $e->getMessage()));
            $log->setFile($file);
            $em->persist($log);
            if ($downloadToken) {
                $em->persist($downloadToken);
                $em->flush();
            }
            $this->get('session')->getFlashBag()->add(
                'error',
                $e->getMessage()
            );
            return $this->redirect($this->generateUrl('sfsu_download_link', array("accessKey" => $accessKey)));
        }

        $downloadToken->setUsed(true);
        $em->persist($downloadToken);
        $em->flush();

        $myself = $this->getUser() ? $this->getDoctrine()->getRepository("App\Easyjet\UmanBundle\Entity\Users")->find($this->getUser()->getId()) : null;

        return $this->startDownload($file, $downloadToken->getEmailAddress(), $myself);
    }

    private function removeAccents($str, $charset = 'utf-8')
    {
        $str = htmlentities($str, ENT_NOQUOTES, $charset);

        $str = preg_replace('#&([A-za-z])(?:acute|cedil|caron|circ|grave|orn|ring|slash|th|tilde|uml);#', '\1', $str);
        $str = preg_replace('#&([A-za-z]{2})(?:lig);#', '\1', $str); // pour les ligatures e.g. '&oelig;'
        $str = preg_replace('#&[^;]+;#', '', $str); // supprime les autres caractères

        return $str;
    }


    private function startDownload(SfsuFile $file, $email = null, $person = null, $countDownload = true)
    {
        $em = $this->getDoctrine()->getManager();
        if (!$email && !$person) {
            $log = new SfsuFileLog("Trying to download file without email or swissinside user");
            $log->setEmailAddress($email);
            $log->setFile($file);
            $em->persist($log);
            $em->flush();
            throw new \Symfony\Component\HttpKernel\Exception\AccessDeniedHttpException();
        }

        $folder = $this->getFilesFolder($file);
        $response = new \Symfony\Component\HttpFoundation\BinaryFileResponse($folder . DIRECTORY_SEPARATOR . $file->getFilename());

        $d = $response->headers->makeDisposition(
            ResponseHeaderBag::DISPOSITION_ATTACHMENT,
            $this->removeAccents($file->getOriginalFilename())
        );
        $log = new SfsuFileLog("Download file", $person);
        $log->setEmailAddress($email);
        $file->addLog($log);
        if ($countDownload) {
            $file->download();
        }
        $em->persist($file);
        $em->flush();

        $response->headers->set('Content-Disposition', $d);

        return $response;
    }

    /**
     * @Route("/files/delete/{file}", name="sfsu_files_delete")
     * @Security("is_granted('ROLE_SFSU_ADMIN') or is_granted('ROLE_SFSU_USER')")
     */
    public function deleteAction(SfsuFile $file)
    {
        if ($file->getCreatedBy()->getIdUser() != $this->getUser()->getId()) {
            throw new \Symfony\Component\HttpKernel\Exception\AccessDeniedHttpException();
        }

        $entityManager = $this->getDoctrine()->getManager();
        $folder = $this->getFilesFolder($file);
        $myself = $entityManager->getRepository("App\Easyjet\UmanBundle\Entity\Users")->find($this->getUser()->getId());

        $file->deleteFrom($folder, $myself);
        $entityManager->persist($file);
        $entityManager->flush();

        $this->get('session')->getFlashBag()->add(
            'success',
            'The file has been removed successfully'
        );
        return $this->redirect($this->generateUrl('sfsu_files_show', array("files" => $file->getId())));
    }
}
