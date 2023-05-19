<?php

namespace App\Easyjet\HrisBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use App\Easyjet\HrisBundle\Entity\HrisEjint096DemographicData;
use App\Easyjet\HrisBundle\Entity\HrisEjint096DemographicDataSoftRule;
use App\Easyjet\HrisBundle\Form\DemographicDataForm;
use Doctrine\Common\Collections\ArrayCollection;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Security;

use Symfony\Component\HttpFoundation\StreamedResponse;

class Ejint096DemographicDataController extends AbstractController
{
    const SIDEBAR_ITEM = "SHOW_EJINT096_DEMOGRAPHIC_DATA";
    /**
     * @Route("/EJINT096/demographic_data/index", name="ejint096_demographic_data_index")
     * @Security("is_granted('ROLE_HRIS_ADMIN')")
     */
    public function indexAction()
    {
        $entityManager = $this->getDoctrine()->getManager();  

        return $this->render('@EasyjetHris/Ejint096DemographicData/index.html.twig', [
            "selectedSidebar" => self::SIDEBAR_ITEM,
            "demographicData" => $entityManager->getRepository("App\Easyjet\HrisBundle\Entity\HrisEjint096DemographicData")->findAll()
        ]);
    }

    /**
     * @Route("/EJINT096/demographic_data/csv", name="ejint096_demographic_data_csv")
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
            $results = $em->getRepository("App\Easyjet\HrisBundle\Entity\HrisEjint096DemographicData")->findAll();
            $handle = fopen('php://output', 'r+');
            fputcsv($handle, array(
                "Demographic data",
                "oracle field",
                "Triggers"
            ));

            foreach ($results as $currentDemographicData) {
                fputcsv($handle, array(
                    $currentDemographicData->getDemographicData(),
                    $currentDemographicData->getOracleField(),
                    $currentDemographicData->getTriggers('AND'),
                ));
            }
            fclose($handle);
        });

        $response->headers->set('Content-Type', 'application/force-download');
        $response->headers->set('Content-Disposition','attachment; filename="demographic-data.csv"');

        return $response;
    }

    /**
     * @Route("/EJINT096/demographic_data/new", name="ejint096_demographic_data_new")
     */
    public function newAction()
    {
	$this->denyAccessUnlessGranted('IS_AUTHENTICATED_FULLY');
        $demographicDataName = $_GET['demographicData'];

        $em = $this->getDoctrine()->getManager();
        $em->beginTransaction();

        try {
            $demographicData = new HrisEjint096DemographicData();
            $demographicData->setDemographicData($demographicDataName);

            $em->persist($demographicData);
            $em->flush();
            $em->commit();

            return $this->redirect($this->generateUrl("ejint096_demographic_data_edit", array("id" => $demographicData->getId())));


        } catch(\Exception $e) {
            $em->rollback();
            $this->get('session')->getFlashBag()->add(
                'error',
                'Error during the saving : ' . $e->getMessage()
            );

            return $this->redirect($this->generateUrl("ejint096_demographic_data_index"));
        }

    }

    /**
     * @Route("/EJINT096/demographic_data/edit/{id}", name="ejint096_demographic_data_edit")
     * @Security("is_granted('ROLE_HRIS_ADMIN')")
     */
    public function editAction(HrisEjint096DemographicData $demographicData, Request $request)
    {
        $em = $this->getDoctrine()->getManager();

        $originalRules = new ArrayCollection();

        // Create an ArrayCollection of the current Tag objects in the database
        foreach ($demographicData->getSoftRules() as $rule) {
            $originalRules->add($rule);
        }

        $softRule = new HrisEjint096DemographicDataSoftRule();
        $demographicData->addSoftRule($softRule);

        $form = $this->createForm(
            DemographicDataForm::class, 
            $demographicData
        ); 
        $form->handleRequest($request);

        if($form->isSubmitted()) {
            if($form->isValid()) {

                $em->beginTransaction();
                try {
                    foreach ($originalRules as $rule) {
                        if (false === $demographicData->getSoftRules()->contains($rule) or !$rule->getTypeOfRule()) {
                            // remove the Task from the rule
                            $demographicData->removeSoftRule($rule);

                            // if you wanted to delete the rule entirely, you can also do that
                            $em->remove($rule);
                        }
                    }

                    foreach ($demographicData->getSoftRules() as $rule) {
                        if (!$rule->getTypeOfRule()) {
                            $demographicData->getSoftRules()->removeElement($rule);
                        }
                    }

                    
                    $em->persist($demographicData);
                    $em->flush();
                    $em->commit();
                    
                    $this->get('session')->getFlashBag()->add(
                        'success',
                        'Your demographic data has been updated successfully.'
                    );

                } catch (\Exception $e) {
                    $em->rollback();
                    $this->get('session')->getFlashBag()->add(
                        'error',
                        'Error during the saving : ' . $e->getMessage()
                    );
                }
                
                return $this->redirect($this->generateUrl("ejint096_demographic_data_index"));

            }
        }

        return $this->render('@EasyjetHris/Ejint096DemographicData/edit.html.twig', [
            "demographicData" => $demographicData,
            "form" => $form->createView(),
            "selectedSidebar" => self::SIDEBAR_ITEM
        ]);
    }

    /**
     * @Route("/EJINT096/demographic_data/delete/{id}", name="ejint096_demographic_data_delete")
     * @Security("is_granted('ROLE_HRIS_ADMIN')")
     */
    public function deleteAction(HrisEjint096DemographicData $demographicData)
    {
	$this->denyAccessUnlessGranted('IS_AUTHENTICATED_FULLY');
        $em = $this->getDoctrine()->getManager();
        $em->beginTransaction();
        try {
            
            $em->remove($demographicData);
            $em->flush();
            $em->commit();
            
            $this->get('session')->getFlashBag()->add(
                'success',
                'Your demographic data has been removed successfully.'
            );

        } catch (\Exception $e) {
            $em->rollback();
            $this->get('session')->getFlashBag()->add(
                'error',
                'Error during the deletion : ' . $e->getMessage()
            );
        }

        return $this->redirect($this->generateUrl("ejint096_demographic_data_index"));
    }

}
