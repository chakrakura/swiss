<?php
namespace App\Easyjet\WorkingSheetBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Exception;
use App\Easyjet\WorkingSheetBundle\Services\BulkUpdateService;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Security;

class WorkingSheetUpdateHolidaysController extends AbstractController
{
    /**
     * @Route("/working-sheet/update", name="working_sheet_bulk_update")
     * @Security("is_granted('ROLE_WORKING_SHEET_ADMIN')")
     */
    public function updateAction(Request $request, BulkUpdateService $bus)
    {
        $defaultData = array('excelSheet' => null);
        $form = $this->createFormBuilder($defaultData)
            ->add('excelSheet', FileType::class)
            ->getForm();
        $form->handleRequest($request);
        
         if ($form->isSubmitted() && $form->isValid()) {
            // data is an array with "name", "email", and "message" keys
            $data = $form->getData();
            
            try {
                $bus->importExcelSheet($data["excelSheet"]);
                $this->get('session')->getFlashBag()->add(
                    'success',
                    'The data was updated successfully'
                );
            } catch (Exception $ex) {
                $this->get('session')->getFlashBag()->add(
                    'error',
                    'The excel sheet was not imported. The following error occured : ' . $ex->getMessage() 
                );
            }
            
            
            
            $this->redirect($this->generateUrl("working_sheet_bulk_update"));
        }
        return $this->render('@EasyjetWorkingSheet/WorkingSheetUpdateHolidays/update.html.twig', [
            "selectedSidebar" => "BULK_UPDATER",
            "form" => $form->createView()
        ]);   
        
    }

    /**
     * @Route("/working-sheet/update-holidays", name="working_sheet_holidays_update")
     */
    public function updateHolidaysAction(Request $request)
    {
        $defaultData = array('excelSheet' => null);
        $form = $this->createFormBuilder($defaultData)
            ->add('excelSheet', FileType::class)
            ->getForm();
        $form->handleRequest($request);
        
         if ($form->isSubmitted() && $form->isValid()) {
            // data is an array with "name", "email", and "message" keys
            $data = $form->getData();
            $updaterService = $this->get("working_sheet_holidays_update");
            
            try {
                $updaterService->importExcelSheet($data["excelSheet"]);
                $this->get('session')->getFlashBag()->add(
                    'success',
                    'The data was updated successfully'
                );
            } catch (Exception $ex) {
                $this->get('session')->getFlashBag()->add(
                    'error',
                    'The excel sheet was not imported. The following error occured : ' . $ex->getMessage() 
                );
            }
            
            
            
            $this->redirect($this->generateUrl("working_sheet_bulk_update"));
        }
    
        return array(
            "selectedSidebar" => "HOLIDAYS_UPDATER",
            "form" => $form->createView()
        );    
        
    }

}
