<?php

namespace App\Easyjet\FdtrBundle\Services;

use Symfony\Component\Mailer\MailerInterface;
use Symfony\Bridge\Twig\Mime\TemplatedEmail;
use Symfony\Component\DependencyInjection\ParameterBag\ParameterBagInterface;

/**
 * 
 */
class FdtrReminderMailerService
{
    /**
     * Mailer Interface
     * @var MailerInterface $mailer Entity manager
     */
    private $mailer;

    /**
     *
     * @var \Doctrine\ORM\EntityManagerInterface Entity manager
     */
    private $em;
    /**
     *
     * @var \Symfony\Component\DependencyInjection\ParameterBag\ParameterBagInterface
     */
    private $params;

    public function __construct(MailerInterface $mailer,  \Doctrine\ORM\EntityManagerInterface $entityManager, ParameterBagInterface $params)
    {
        $this->mailer = $mailer;
        $this->em = $entityManager;
        $this->params = $params;
    }

    public function sendMailFor($listOfMonthlyReports)
    {
        $ccEmail = $this->em->getRepository("App\Easyjet\FdtrBundle\Entity\FdtrParameters")->find("notifications")->getParameterValue();
        $email = (new TemplatedEmail())
            ->subject("Reminder to provide easyJet with your external duties")
            ->htmlTemplate('@EasyjetFdtr/Mails/externalDtimeReminder.html.twig');
        foreach ($listOfMonthlyReports as $currentMonthlyReport) {
            echo "Send message to " . $currentMonthlyReport->getFdtrUser() . "\n";
            $email->to($currentMonthlyReport->getFdtrUser()->getEmailUser())
                ->cc($ccEmail)
                ->context(array('monthlyReport' => $currentMonthlyReport->getFdtrUser()->getPrenomUser() . ' ' . $currentMonthlyReport->getFdtrUser()->getNomUser(), 'swissinsideUrl' =>  $this->params->get("fdtr.swissinside_url")));
            $this->mailer->send($email);
        }
    }
}
