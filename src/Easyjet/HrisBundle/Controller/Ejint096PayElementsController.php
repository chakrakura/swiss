<?php

namespace App\Easyjet\HrisBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use App\Easyjet\HrisBundle\Entity\HrisEjint096PayElement;
use App\Easyjet\HrisBundle\Entity\HrisEjint096PayElementSoftRule;
use App\Easyjet\HrisBundle\Form\PayElementForm;
use Doctrine\Common\Collections\ArrayCollection;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Security;

use Symfony\Component\HttpFoundation\StreamedResponse;

class Ejint096PayElementsController extends AbstractController
{
    const SIDEBAR_ITEM = "SHOW_EJINT096_PAY_ELEMENTS";
    /**
     * @Route("/EJINT096/pay_elements/index", name="ejint096_pay_elements_index")
     * @Security("is_granted('ROLE_HRIS_ADMIN')")
     */
    public function indexAction()
    {
        $entityManager = $this->getDoctrine()->getManager();   

        return $this->render('@EasyjetHris/Ejint096PayElements/index.html.twig', [
            "selectedSidebar" => self::SIDEBAR_ITEM,
            "payElements" => $entityManager->getRepository("App\Easyjet\HrisBundle\Entity\HrisEjint096PayElement")->findAll()
        ]);
    }

    /**
     * @Route("/EJINT096/pay_elements/csv", name="ejint096_pay_elements_csv")
     * @Security("is_granted('ROLE_HRIS_ADMIN')")
     */
    public function csvAction()
    {
       // get the service container to pass to the closure
        $em = $this->getDoctrine()->getManager();

        $response = new StreamedResponse(function() use($em) {

            // The getExportQuery method returns a query that is used to retrieve
            // all the objects (lines of your csv file) you need. The iterate method
            // is used to limit the memory consumption
            $results = $em->getRepository("App\Entity\HrisEjint096PayElement")->findAll();
            $handle = fopen('php://output', 'r+');
            fputcsv($handle, array(
                "Pay element",
                "Mandatory",
                "Type",
                "Triggers"
            ));

            foreach ($results as $currentPayElement) {
                fputcsv($handle, array(
                    $currentPayElement->getPayElement(),
                    $currentPayElement->getMandatory() ? "Yes" : "No",
                    $currentPayElement->getType(),
                    $currentPayElement->getTriggers('AND'),
                ));
            }
            fclose($handle);
        });

        $response->headers->set('Content-Type', 'application/force-download');
        $response->headers->set('Content-Disposition','attachment; filename="export.csv"');

        return $response;
    }

    /**
     * @Route("/EJINT096/pay_elements/new", name="ejint096_pay_elements_new")
     * @Security("is_granted('ROLE_HRIS_ADMIN')")
     */
    public function newAction()
    {
        $payElementName = $_GET['payElement'];

        $em = $this->getDoctrine()->getManager();
        $em->beginTransaction();

        try {
            $payElement = new HrisEjint096PayElement();
            $payElement->setPayElement($payElementName)->setMandatory(false);

            $em->persist($payElement);
            $em->flush();
            $em->commit();

            return $this->redirect($this->generateUrl("ejint096_pay_elements_edit", array("id" => $payElement->getId())));


        } catch(\Exception $e) {
            $em->rollback();
            $this->get('session')->getFlashBag()->add(
                'error',
                'Error during the saving : ' . $e->getMessage()
            );

            return $this->redirect($this->generateUrl("ejint096_pay_elements_index"));
        }

    }

    /**
     * @Route("/EJINT096/pay_elements/edit/{id}", name="ejint096_pay_elements_edit")
     * @Security("is_granted('ROLE_HRIS_ADMIN')")
     */
    public function editAction(HrisEjint096PayElement $payElement, Request $request)
    {
        $em = $this->getDoctrine()->getManager();

        $originalRules = new ArrayCollection();

        // Create an ArrayCollection of the current Tag objects in the database
        foreach ($payElement->getSoftRules() as $rule) {
            $originalRules->add($rule);
        }

        $softRule = new HrisEjint096PayElementSoftRule();
        $payElement->addSoftRule($softRule);

        $form = $this->createForm(
            PayElementForm::class, 
            $payElement
        );
        $form->handleRequest($request);

        if($form->isSubmitted()) {
            if($form->isValid()) {

                $em->beginTransaction();
                try {
                    foreach ($originalRules as $rule) {
                        if (false === $payElement->getSoftRules()->contains($rule)) {
                            // remove the Task from the rule
                            $payElement->removeSoftRule($rule);

                            // if you wanted to delete the rule entirely, you can also do that
                            $em->remove($rule);
                        }
                    }

                    foreach ($payElement->getSoftRules() as $rule) {
                        if (!$rule->getTypeOfRule()) {
                            $payElement->getSoftRules()->removeElement($rule);
                        }
                    }
                    
                    $em->persist($payElement);
                    $em->flush();
                    $em->commit();
                    
                    $this->get('session')->getFlashBag()->add(
                        'success',
                        'Your pay element has been updated successfully.'
                    );

                } catch (\Exception $e) {
                    $em->rollback();
                    $this->get('session')->getFlashBag()->add(
                        'error',
                        'Error during the saving : ' . $e->getMessage()
                    );
                }
                
                return $this->redirect($this->generateUrl("ejint096_pay_elements_index"));

            }
        }

        return $this->render('@EasyjetHris/Ejint096PayElements/edit.html.twig', [
            "payElement" => $payElement,
            "form" => $form->createView(),
            "selectedSidebar" => self::SIDEBAR_ITEM
        ]);
    }

    /**
     * @Route("/EJINT096/pay_elements/delete/{id}", name="ejint096_pay_elements_delete")
     * @Security("is_granted('ROLE_HRIS_ADMIN')")
     */
    public function deleteAction(HrisEjint096PayElement $payElement)
    {
        $em = $this->getDoctrine()->getManager();
        $em->beginTransaction();
        try {
            
            $em->remove($payElement);
            $em->flush();
            $em->commit();
            
            $this->get('session')->getFlashBag()->add(
                'success',
                'Your pay element has been removed successfully.'
            );

        } catch (\Exception $e) {
            $em->rollback();
            $this->get('session')->getFlashBag()->add(
                'error',
                'Error during the deletion : ' . $e->getMessage()
            );
        }

        return $this->redirect($this->generateUrl("ejint096_pay_elements_index"));
    }

}
