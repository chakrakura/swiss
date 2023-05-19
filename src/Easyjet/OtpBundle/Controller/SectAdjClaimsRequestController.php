<?php

namespace App\Easyjet\OtpBundle\Controller;


use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Security;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\IsGranted;
use App\Easyjet\OtpBundle\Entity\OtpRequest;
use App\Easyjet\OtpBundle\Entity\OtpImportRowComment;
use App\Easyjet\OtpBundle\Entity\OtpSectAdjClaimsRequest;
use App\Easyjet\OtpBundle\Form\OtpSectAdjEditForm;
use App\Easyjet\OtpBundle\Form\OtpImportCommentForm;
use App\Easyjet\OtpBundle\Form\OtpNewSectAdjForm;

class SectAdjClaimsRequestController extends AbstractController
{
    const SIDEBAR_ITEM = "OTP_REQUEST";
    const REMOVE_INTENTION = "REMOVE_EXPENSE";

    private function checkLock($sectAdj)
    {
        if ($sectAdj->getExportedAt() != null) {
            $this->get('session')->getFlashBag()->add(
                'warning',
                'This change has already been processed and sent to the payroll system. You can create a new request if you have any furthermore change to report.'
            );
        }
    }

    /**
     * @Route("/otp-sect-adj/new", name="otp_sect_adj_new")
     * @Security("is_granted('ROLE_CLAIMS_ADMIN') or is_granted('ROLE_CLAIMS_SIMPLE_USER')")
     */
    public function newAction(Request $request)
    {
        $em = $this->getDoctrine()->getManager();
        $myself = $em->getRepository("App\Easyjet\UmanBundle\Entity\Users")->find($this->getUser()->getId());
        try {
            $message = new OtpImportRowComment($myself, null, null, '');
            $form = $this->createForm(OtpNewSectAdjForm::class, $message);
            $form->handleRequest($request);

            if ($form->isSubmitted()) {
                if ($form->isValid()) {
                    $adjClaim = new OtpSectAdjClaimsRequest();
                    $adjClaim->addComment($message);
                    $em->persist($adjClaim);
                    $em->flush();

                    $request = new OtpRequest();
                    $request->setConcernedDate($message->getConcernedDate())
                        ->setConcernedUser($message->getPostedBy())
                        ->setSectorAdjustment($adjClaim);

                    $em->persist($request);
                    $em->flush();


                    $this->get('session')->getFlashBag()->add(
                        'success',
                        'Your request has been transmitted to the RH.'
                    );
                    return $this->redirect($this->generateUrl("otp_request_index"));
                }
            }
        } catch (\Exception $e) {
            $this->get('session')->getFlashBag()->add(
                'error',
                $e->getMessage()
            );
            return $this->redirect($this->generateUrl("otp_request_index"));
        }
        return $this->render('@EasyjetOtp/SectAdjClaimsRequest/new.html.twig', [
            "form" => $form->createView(),
            "selectedSidebar" => self::SIDEBAR_ITEM,
            "claimsListUrl" => $this->get('request_stack')->getSession()->get("OtpListUrl"),
        ]);
    }


    /**
     * @Route("/otp-sect-adj/edit/{sectAdj}", name="otp_sect_adj_edit")
     * @Security("is_granted('ROLE_CLAIMS_ADMIN') or is_granted('ROLE_CLAIMS_SIMPLE_USER')")
     */
    public function editAction(OtpSectAdjClaimsRequest $sectAdj, Request $request)
    {
        
        $em = $this->getDoctrine()->getManager();
        $this->checkLock($sectAdj);
        $myself =  $em->getRepository("App\Easyjet\UmanBundle\Entity\Users")->find($this->getUser()->getId());
        try {
            $row = $sectAdj->getRow();
            $sectAdjRequest = $sectAdj->getRequest();

            if ($row) {

                if (!$this->get('security.authorization_checker')->isGranted('ROLE_CLAIMS_ADMIN') && ($myself->getLogUser() != $row->getEmpno() || $row->getBatch()->getPublished() == false)) {
                    throw new \Exception("You don't have access to this resource");
                }
            } elseif ($sectAdjRequest) {
                if (!$this->get('security.authorization_checker')->isGranted('ROLE_CLAIMS_ADMIN') && ($myself->getLogUser() != $sectAdjRequest->getConcernedUser()->getLogUser())) {
                    throw new \Exception("You don't have access to this resource");
                }
            }

            if (!$this->get('security.authorization_checker')->isGranted('ROLE_CLAIMS_ADMIN') && !$row && !$sectAdjRequest) {
                throw new \Exception("You don't have access to this resource");
            }


            $multipleRequestsForDay = false;
            if ($sectAdj->getRequest() && $sectAdj->getRequest()->getConcernedDate()) {
                $sectAdjForDay = $em->getRepository("App\Easyjet\OtpBundle\Entity\OtpRequest")->findBy(array(
                    "concernedUser" => $sectAdj->getRequest()->getConcernedUser(),
                    "concernedDate" => $sectAdj->getRequest()->getConcernedDate(),
                    "type" => OtpRequest::STATUS_TYPE_SECTOR_ADJUSTMENT
                ));
                if (count($sectAdjForDay) > 1) {
                    $multipleRequestsForDay = true;
                }
            }


            $message = new OtpImportRowComment($myself, $row, $sectAdj, '');
            $formMessage = $this->createForm(OtpImportCommentForm::class, $message);
            $formMessage->handleRequest($request);
          
            $form = $this->createForm(OtpSectAdjEditForm::class, $sectAdj);
            $form->handleRequest($request);

            if ($formMessage->isSubmitted()) {
                if ($formMessage->isValid()) {
                    $em->persist($message);
                    $em->flush();

                    $this->get('session')->getFlashBag()->add(
                        'success',
                        'Your comment has been saved'
                    );

                    return $this->redirect($this->generateUrl("otp_sect_adj_edit", array('sectAdj' => $sectAdj->getId())));
                }
            }

            if ($form->isSubmitted()) {

                if (!$this->get('security.authorization_checker')->isGranted('ROLE_CLAIMS_ADMIN')) {
                    throw new \Exception("You don't have access to this form");
                }

                if ($form->isValid()) {
                    $sectAdj->setStatus($request->request->get('status'));
                    if ($sectAdj->getStatus() == "accepted") {
                        $sectAdj->setApprovedBy($myself);
                    } else {
                        $sectAdj->setApprovedBy(null);
                    }
                    if($row) {
                        $row->preUpdate();
                        $em->persist($row);
                    }
                   

                    if ($sectAdj->getRequest()) {
                        $request = $sectAdj->getRequest();
                        switch ($sectAdj->getStatus()) {
                            case OtpSectAdjClaimsRequest::STATUS_ACCEPTED:
                                $request->setStatus(OtpRequest::STATUS_STATUS_VALIDATED);
                                break;
                            case OtpSectAdjClaimsRequest::STATUS_PENDING:
                                $request->setStatus(OtpRequest::STATUS_STATUS_PENDING);
                                break;
                            case OtpSectAdjClaimsRequest::STATUS_REFUSED:
                                $request->setStatus(OtpRequest::STATUS_STATUS_REFUSED);
                                break;
                        }
                        $em->persist($request);
                    }

                    $em->flush();

                    $this->get('session')->getFlashBag()->add(
                        'success',
                        'The claim adjustment has been updated successfully'
                    );

                    if ($this->get('request_stack')->getSession()->get("OtpListUrl")) {
                        return $this->redirect($this->get('request_stack')->getSession()->get("OtpListUrl"));
                    } else {
                        return $this->redirect($this->generateUrl("otp_request_index"));
                    }
                }
            }
        } catch (\Exception $e) {
            $this->get('session')->getFlashBag()->add(
                'error',
                $e->getMessage()
            );
            return $this->redirect($this->generateUrl("otp_request_index"));
        }

 
      return $this->render('@EasyjetOtp/SectAdjClaimsRequest/edit.html.twig', [
            "form" => $form->createView(),
            "multipleRequestsForDay" => $multipleRequestsForDay,
            "form_message" => $formMessage->createView(),
            "row" => $row,
            "sectAdj" => $sectAdj,
            "selectedSidebar" => self::SIDEBAR_ITEM,
            "claimsListUrl" => $this->get('request_stack')->getSession()->get("OtpListUrl"),
    ]);
       
    }

 

    /**
     * Deletes a OtpSectAdjClaimsRequest entity.
     *
     * @Route("/otp-sect-adjs/delete/{sectAdj}", name="otp_sect_adj_delete")
     * @Security("is_granted('ROLE_CLAIMS_ADMIN') or is_granted('ROLE_CLAIMS_SIMPLE_USER')")
     */
    public function deleteAction(Request $request, OtpSectAdjClaimsRequest $sectAdj)
    {
        try {
         
            if (!$this->isCsrfTokenValid(self::REMOVE_INTENTION, $request->query->get('csrfToken'))) {
                throw new \Exception('Invalid csrf token. Please refresh the page and try again');
            }
           
            $em = $this->getDoctrine()->getManager();

            $myself = $em->getRepository("App\Easyjet\UmanBundle\Entity\Users")->find($this->getUser()->getId());
            $row = $sectAdj->getRow();

            if (!$this->get('security.authorization_checker')->isGranted('ROLE_CLAIMS_ADMIN') && ($myself->getLogUser() != $row->getEmpno() || $row->getBatch()->getPublished() == false)) {
               throw new \Exception("You don't have access to this resource");
            }

            if ($sectAdj->getStatus() != OtpSectAdjClaimsRequest::STATUS_PENDING) {
                throw new \Exception("This request is not cancelable anymore as it is no longer in pending");
            }

            $em->remove($sectAdj);
            $em->flush();
            $this->get('session')->getFlashBag()->add(
                'success',
                'The sector adjustment expense has been removed successfully'
            );
        } catch (\Exception $e) {
            $this->get('session')->getFlashBag()->add(
                'error',
                $e->getMessage()
            );
            return $this->redirect($this->generateUrl("otp_request_index"));
        }

        return $this->redirect($this->generateUrl('otp_request_index'));
    }
}
