<?php

namespace App\Easyjet\OtpBundle\Controller;


use Symfony\Component\HttpKernel\Exception\AccessDeniedHttpException;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Security;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\IsGranted;
use App\Easyjet\OtpBundle\Entity\OtpImportBatch;


class AdminImportBatchController extends AbstractController
{
    const SIDEBAR_ITEM = "ADMIN_BATCHES_MANAGEMENT";

    /**
     * @Route("/admin/batches/index", name="admin_otp_batches_index")
     * @Security("is_granted('ROLE_CLAIMS_ADMIN')")
     */
    public function batchesIndexAction()
    {
        $em = $this->getDoctrine()->getManager();
        $batches = $em->getRepository("App\Easyjet\OtpBundle\Entity\OtpImportBatch")->findBy(array(
            'removed' => null
        ));

        return $this->render('@EasyjetOtp/Admin/ImportBatch/list.html.twig', [
            "selectedSidebar" => self::SIDEBAR_ITEM,
            "batches" => $batches
        ]);
    }

    protected function checkCsrf($name, $request, $query = '_token')
    {
        $submittedToken = $request->query->get($query);

        if (!$this->isCsrfTokenValid($name, $submittedToken)) {
            throw new AccessDeniedHttpException('CSRF token is invalid.');
        }

        return true;
    }

    /**
     * @Route("/admin/batches/drop/{batch}", name="admin_otp_batch_drop")
     * @Security("is_granted('ROLE_CLAIMS_ADMIN')")
     */
    public function dropAction(OtpImportBatch $batch, Request $request)
    {
        try {
            $em = $this->getDoctrine()->getManager();
            $this->checkCsrf('admin_otp_management', $request);
            $batch->remove();
            $em->persist($batch);
            $em->flush();

            $this->get('session')->getFlashBag()->add(
                'success',
                "The batch has been removed successfully"
            );
        } catch (\Exception $e) {
            $this->get('session')->getFlashBag()->add(
                'error',
                $e->getMessage()
            );
        }

        return $this->redirect($this->generateUrl("admin_otp_batches_index"));
    }

    /**
     * @Route("/admin/batch/publish/{batch}/{status}", name="admin_otp_batch_publish")
     * @Security("is_granted('ROLE_CLAIMS_ADMIN')")
     */
    public function publishAction(OtpImportBatch $batch, $status, Request $request)
    {
        try {
            $em = $this->getDoctrine()->getManager();
            $this->checkCsrf('admin_otp_management', $request);

            $batch->setPublished($status);
            $em->persist($batch);
            $em->flush();

            $this->get('session')->getFlashBag()->add(
                'success',
                "Publishing status has been changed successfully"
            );
        } catch (\Exception $e) {
            $this->get('session')->getFlashBag()->add(
                'error',
                $e->getMessage()
            );
        }

        return $this->redirect($this->generateUrl("admin_otp_batches_index"));
    }
}
