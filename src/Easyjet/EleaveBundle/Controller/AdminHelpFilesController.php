<?php

namespace App\Easyjet\EleaveBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Security;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\IsGranted;

class AdminHelpFilesController extends AbstractController
{
    const SIDEBAR_ITEM = "ADMIN_HELP_FILES";

    /**
     * @Route("admin/help-files", name="eleave_admin_help_files")
     * @Security("is_granted('ROLE_ELEAVE_ADMIN') or is_granted('ROLE_ELEAVE_CREW_ADMIN_+_LM') or is_granted('ROLE_ELEAVE_CREW_ADMIN')")
     */
    public function indexAction(Request $request)
    {
        return $this->render('@EasyjetEleave/Admin/Files/index.html.twig', [
            'selectedSidebar' => self::SIDEBAR_ITEM,
        ]);
    }


    /**
     * @Route("admin/upload-help-files", name="eleave_admin_upload_help_files")
     * @param FileUploader $uploader
     * @Security("is_granted('ROLE_ELEAVE_ADMIN') or is_granted('ROLE_ELEAVE_CREW_ADMIN_+_LM') or is_granted('ROLE_ELEAVE_CREW_ADMIN')")
     */
    public function uploadFiles(Request $request)
    {
        try {

            $token = $request->get("token");
            if (!$this->isCsrfTokenValid('upload', $token)) {
                throw new \Exception("CSRF failure");
            }
            $gvaFaFile = $request->files->get('gva_fa');
            $gvaPuFile = $request->files->get('gva_pu');
            $gvaFoFile = $request->files->get('gva_fo');
            $gvaCpFile = $request->files->get('gva_cp');
            $bslFaFile = $request->files->get('bsl_fa');
            $bslPuFile = $request->files->get('bsl_pu');
            $bslFoFile = $request->files->get('bsl_fo');
            $bslCpFile = $request->files->get('bsl_cp');

            if (!$gvaFaFile && !$gvaPuFile && !$gvaFoFile && !$gvaCpFile && !$bslFaFile && !$bslPuFile && !$bslFoFile && !$bslCpFile) {
                throw new \Exception("No file selected. Please select file");
            }
            if (
                ($gvaFaFile && $gvaFaFile->getClientOriginalExtension() != 'pdf') ||
                ($gvaPuFile && $gvaPuFile->getClientOriginalExtension() != 'pdf') ||
                ($gvaFoFile && $gvaFoFile->getClientOriginalExtension() != 'pdf') ||
                ($gvaCpFile && $gvaCpFile->getClientOriginalExtension() != 'pdf') ||

                ($bslFaFile && $bslFaFile->getClientOriginalExtension() != 'pdf') ||
                ($bslPuFile && $bslPuFile->getClientOriginalExtension() != 'pdf') ||
                ($bslFoFile && $bslFoFile->getClientOriginalExtension() != 'pdf') ||
                ($bslCpFile && $bslCpFile->getClientOriginalExtension() != 'pdf')

            ) {
                throw new \Exception("Only pdf files.");
            }
            
            if ($gvaFaFile && is_file($gvaFaFile)) move_uploaded_file ($_FILES['gva_fa']['tmp_name'], $this->getParameter('availibility_files_folder') ."/GVA_FA.pdf");
            if ($gvaPuFile && is_file($gvaPuFile)) move_uploaded_file ($_FILES['gva_pu']['tmp_name'], $this->getParameter('availibility_files_folder') ."/GVA_PU.pdf");
            if ($gvaFoFile && is_file($gvaFoFile)) move_uploaded_file ($_FILES['gva_fo']['tmp_name'], $this->getParameter('availibility_files_folder') ."/GVA_FO.pdf");
            if ($gvaCpFile && is_file($gvaCpFile)) move_uploaded_file ($_FILES['gva_cp']['tmp_name'], $this->getParameter('availibility_files_folder') ."/GVA_CP.pdf");

            if ($bslFaFile && is_file($bslFaFile)) move_uploaded_file ($_FILES['bsl_fa']['tmp_name'], $this->getParameter('availibility_files_folder') ."/BSL_FA.pdf");
            if ($bslPuFile && is_file($bslPuFile)) move_uploaded_file ($_FILES['bsl_pu']['tmp_name'], $this->getParameter('availibility_files_folder') ."/BSL_PU.pdf");
            if ($bslFoFile && is_file($bslFoFile)) move_uploaded_file ($_FILES['bsl_fo']['tmp_name'], $this->getParameter('availibility_files_folder') ."/BSL_FO.pdf");
            if ($bslCpFile && is_file($bslCpFile)) move_uploaded_file ($_FILES['bsl_cp']['tmp_name'], $this->getParameter('availibility_files_folder') ."/BSL_CP.pdf");

            $this->get('session')->getFlashBag()->add(
                'success',
                'Files uploaded successfully.'
            );
        } catch (\Exception $e) {
            $this->get('session')->getFlashBag()->add(
                'error',
                $e->getMessage()
            );
            return  $this->redirect($this->generateUrl('eleave_admin_help_files'));
        }
        return $this->redirect($this->generateUrl("eleave_admin_help_files"));
    }
}
