<?php

namespace App\Easyjet\FdtrBundle\Services;

use Symfony\Component\Mailer\MailerInterface;
use Symfony\Bridge\Twig\Mime\TemplatedEmail;

/**
 * 
 */
class FdtrDtimeUserBlockMailerService
{
    /**
     * Mailer Interface
     * @var MailerInterface $mailerInterface Entity manager
     */
    private $mailer;

    /**
     *
     * @var \Doctrine\ORM\EntityManagerInterface Entity manager
     */
    private $em;

    public function __construct(\Symfony\Component\Mailer\MailerInterface $mailer,  \Doctrine\ORM\EntityManagerInterface $entityManager)
    {
        $this->mailer = $mailer;
        $this->em = $entityManager;
    }

    public function sendMailFor($listOfMonthlyReports)
    {

        $ccEmail = $this->em->getRepository("App\Easyjet\FdtrBundle\Entity\FdtrParameters")->find("notifications")->getParameterValue();
        echo "Number of users to be locked - " . sizeof($listOfMonthlyReports) . "\n";

        $email = (new TemplatedEmail())
            ->subject("Locked out by easyJet for your external duties")
            ->htmlTemplate('@EasyjetFdtr/Mails/externalDtimeUserLock.html.twig');

        foreach ($listOfMonthlyReports as $currentMonthlyReport) {
            echo "Locked User " . $currentMonthlyReport->getFdtrUser() . "\n";
            $idUser = $currentMonthlyReport->getFdtrUser()->getIdUser();
            $userData = $this->em->getRepository('App\Easyjet\UmanBundle\Entity\Users')->find($idUser);
            $userData->setDtimeUserBlock(1);
            $this->em->persist($userData);
            $this->em->flush();

            echo "Send message to " . $currentMonthlyReport->getFdtrUser() . "\n";
            $email->to($currentMonthlyReport->getFdtrUser()->getEmailUser())
                ->cc($ccEmail)
                ->context(['monthlyReport' => $currentMonthlyReport->getFdtrUser()->getPrenomUser() . ' ' . $currentMonthlyReport->getFdtrUser()->getNomUser()]);
            $this->mailer->send($email);
        }
    }
}
