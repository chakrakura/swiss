<?php

namespace App\Easyjet\OtpBundle\Services;
use Symfony\Component\Mailer\MailerInterface;
use Symfony\Component\Mime\Email;


/**
 * FixRequestAssignation
 */
class FixRequestAssignation
{
    /**
     *
     * @var \Doctrine\ORM\EntityManagerInterface Entity manager
     */
    private $entityManager;

    /**
     * Mailer Interface
     * @var MailerInterface $mailer Entity manager
    */
    private $mailer;

    public function __construct(MailerInterface $mailer, \Doctrine\ORM\EntityManagerInterface $entityManager)
    {
        $this->mailer = $mailer;
        $this->entityManager = $entityManager;
    }

    public function fix()
    {
        $unassignedSectAdjs = $this->entityManager->getRepository("App\Easyjet\OtpBundle\Entity\OtpSectAdjClaimsRequest")->findBy(array("row" => null));
        foreach ($unassignedSectAdjs as $sectAdj) {
         
            $foundRow = $this->entityManager->getRepository("App\Easyjet\OtpBundle\Entity\OtpImportRow")->findForMonth(
                $sectAdj->getRequest()->getConcernedDate(),
                $sectAdj->getRequest()->getConcernedUser()->getLogUser()
            );
            if ($foundRow) {
                $sectAdj->setRow($foundRow);
                $this->entityManager->persist($sectAdj);
            }
        }
        $this->entityManager->flush();

        $unasignedDisruptions = $this->entityManager->getRepository("App\Easyjet\OtpBundle\Entity\OtpDisruption")->findBy(array("row" => null));
        foreach ($unasignedDisruptions as $disruption) {
            if (!$disruption->getRequest()) {
                $email = (new Email())
                        ->subject("Issue with a disruption which has no request associated")
                        ->to("giloux@gmail.com")
                        ->text((string) $disruption->getId());
                $this->mailer->send($email);
                continue;
            }
            $foundRow = $this->entityManager->getRepository("App\Easyjet\OtpBundle\Entity\OtpImportRow")->findForMonth(
                $disruption->getRequest()->getConcernedDate(),
                $disruption->getRequest()->getConcernedUser()->getLogUser()
            );
            if ($foundRow) {
                $disruption->setRow($foundRow);
                $this->entityManager->persist($disruption);
            }
        }
        $this->entityManager->flush();
    }
}
