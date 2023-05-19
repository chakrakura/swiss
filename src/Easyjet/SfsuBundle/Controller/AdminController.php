<?php

namespace App\Easyjet\SfsuBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Response;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Security;

class AdminController extends AbstractController
{
    /**
     * @Route("/admin/max-file-size-upload", name="sfsu_admin_max_file_size")
     * @Security("is_granted('ROLE_SFSU_ADMIN')")
     */
    public function maxFileSizeUploadAction(): Response
    {

        return $this->render('@EasyjetSfsu/Admin/maxFileSizeUpload.html.twig', [
            "selectedSidebar" => "SHOW_ADMIN_MAX_SIZE",
            "post_max_size" => ini_get("post_max_size"),
            "upload_max_filesize" => ini_get("upload_max_filesize"),
        ]);
    }
}
