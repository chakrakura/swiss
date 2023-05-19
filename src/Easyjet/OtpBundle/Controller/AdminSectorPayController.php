<?php

namespace App\Easyjet\OtpBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Security;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\IsGranted;
use Symfony\Component\Routing\Annotation\Route;
use App\Easyjet\OtpBundle\Entity\SectorPay;
use App\Easyjet\OtpBundle\Form\SectorPayForm;
use App\Easyjet\OtpBundle\Entity\SectorPayByContract;

class AdminSectorPayController extends AbstractController
{
    const SIDEBAR_ITEM = "ADMIN_SECTOR_PAY";

    /**
     * @Route("/admin/sector-pay/index", name="admin_otp_sector_pay_index")
     * @Security("is_granted('ROLE_CLAIMS_ADMIN')")
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();
        return $this->render('@EasyjetOtp/Admin/SectorPay/index.html.twig', [
            "selectedSidebar" => self::SIDEBAR_ITEM,
            "tableData" => $em->getRepository("App\Easyjet\OtpBundle\Entity\SectorPay")->findBy(array(), array("id" => "asc"))
        ]);
    }

    /**
     * @Route("/admin/sector-pay/new", name="admin_otp_sector_pay_new")
     * @Security("is_granted('ROLE_CLAIMS_ADMIN')")
     */
    public function newAction(Request $request)
    {

        $em = $this->getDoctrine()->getManager();
        $sectorPay = new SectorPay();

        $form = $this->createForm(SectorPayForm::class, $sectorPay);
        $form->handleRequest($request);
        $data = $em->getRepository("App\Easyjet\OtpBundle\Entity\SectorPayByContract")->getSectorPayData(0);
        if ($form->isSubmitted()) {
            if ($form->isValid()) {
                $em->persist($sectorPay);
                $em->flush();
                $insertData = $this->getFormatData($request->request->all());
                foreach ($insertData as $data) {
                    $sectorPayContract = new SectorPayByContract();
                    $sectorPayContract->setIdTypeEftr($data['id_type_eftr']);
                    $sectorPayContract->setDVSectorPayId($sectorPay->getId());
                    $sectorPayContract->setSalary($data['salary']);
                    $sectorPayContract->setAllowance($data['allowance']);
                    $em->persist($sectorPayContract);
                    $em->flush();
                }

                $this->get('session')->getFlashBag()->add(
                    'success',
                    'The sector pay has been updated successfully'
                );
                return $this->redirect($this->generateUrl("admin_otp_sector_pay_index"));
            }
        }
        return $this->render('@EasyjetOtp/Admin/SectorPay/add.html.twig', [
            "selectedSidebar" => self::SIDEBAR_ITEM,
            "data" => $data,
            "id" => 0,
            "form" => $form->createView(),
            "title" => "Create the new value for the sector pays"
        ]);
    }

    /**
     * @Route("/admin/sector-pay/edit/{sectorPay}", name="admin_otp_sector_pay_edit")
     * @Security("is_granted('ROLE_CLAIMS_ADMIN')")
     */
    public function editAction(SectorPay $sectorPay, Request $request)
    {
        $em = $this->getDoctrine()->getManager();

        $data = $em->getRepository("App\Easyjet\OtpBundle\Entity\SectorPayByContract")->getSectorPayData($sectorPay->getId());
        try {
            $form = $this->createForm(SectorPayForm::class, $sectorPay);
            $form->handleRequest($request);

            if ($form->isSubmitted()) {
                if ($form->isValid()) {
                    $em->persist($sectorPay);
                    $em->flush();
                    $insertData = $this->getFormatData($request->request->all());

                    foreach ($insertData as $data) {
                        $sectorPayContract = $em->getRepository("App\Easyjet\OtpBundle\Entity\SectorPayByContract")->findOneBy(['idTypeEftr' => $data['id_type_eftr'], 'DVSectorPayId' => $sectorPay->getId()]);
                        if ($sectorPayContract) {
                            $sectorPayContract->setId($sectorPayContract->getId());
                        } else {
                            $sectorPayContract = new SectorPayByContract();
                        }
                        $sectorPayContract->setIdTypeEftr($data['id_type_eftr']);
                        $sectorPayContract->setDVSectorPayId($sectorPay->getId());
                        $sectorPayContract->setSalary($data['salary']);
                        $sectorPayContract->setAllowance($data['allowance']);
                        $em->persist($sectorPayContract);
                        $em->flush();
                    }
                    $this->get('session')->getFlashBag()->add(
                        'success',
                        'The sector pay has been updated successfully'
                    );
                    return $this->redirect($this->generateUrl("admin_otp_sector_pay_index"));
                }
            }
        } catch (\Exception $e) {
            $this->get('session')->getFlashBag()->add(
                'error',
                $e->getMessage()
            );
            return $this->redirect($this->generateUrl("admin_otp_sector_pay_index"));
        }

        return $this->render('@EasyjetOtp/Admin/SectorPay/add.html.twig', [
            "selectedSidebar" => self::SIDEBAR_ITEM,
            "form" => $form->createView(),
            "data" => $data,
            "id" => $sectorPay->getId(),
            "title" => "Edit the value for the sector pays"
        ]);
    }

    /**
     * @Route("/admin/sector-pay/delete/{sectorPay}", name="admin_otp_sector_pay_del")
     * @Security("is_granted('ROLE_CLAIMS_ADMIN')")
     */
    public function deleteAction(SectorPay $sectorPay)
    {
        $em = $this->getDoctrine()->getManager();
        $em->getRepository("App\Easyjet\OtpBundle\Entity\SectorPayByContract")->deleteSectorPayContract($sectorPay->getId());
        $em->remove($sectorPay);
        $em->flush();

        $this->get('session')->getFlashBag()->add(
            'success',
            'The sector pay has been removed successfully'
        );
        return $this->redirect($this->generateUrl("admin_otp_sector_pay_index"));
    }

    public function getFormatData($postData)
    {
        $insertData = [];
        foreach ($postData as $key => $val) {
            $expSectorPay = explode('_', $key);
            if (is_array($expSectorPay) && ($expSectorPay[0] == 'salary' || $expSectorPay[0] == 'allowance')) {
                $insertData[$expSectorPay[1]]['salary'] = $postData['salary_' . $expSectorPay[1]] ?  $postData['salary_' . $expSectorPay[1]] : 0.000;
                $insertData[$expSectorPay[1]]['allowance'] = $postData['allowance_' . $expSectorPay[1]] ? $postData['allowance_' . $expSectorPay[1]] : 0.000;
                $insertData[$expSectorPay[1]]['id_type_eftr'] = $expSectorPay[1];
            }
        }
        return $insertData;
    }
}
