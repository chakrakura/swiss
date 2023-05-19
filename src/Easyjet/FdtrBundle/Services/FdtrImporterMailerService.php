<?php

namespace App\Easyjet\FdtrBundle\Services;

use Symfony\Component\Mailer\MailerInterface;
use Symfony\Bridge\Twig\Mime\TemplatedEmail;
use App\Easyjet\FdtrBundle\Entity\FdtrLog;

/**
 * 
 */
class FdtrImporterMailerService
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

    public function __construct(MailerInterface $mailer,  \Doctrine\ORM\EntityManagerInterface $entityManager)
    {
        $this->mailer = $mailer;
        $this->em = $entityManager;
    }


    public function sendMailFor(FdtrLog $log)
    {
        $emails = $this->em->getRepository("App\Easyjet\FdtrBundle\Entity\FdtrParameters")->find("notifications")->getParameterValue();

        if ($emails) {

            switch ($log->getStatus()) {
                case FdtrLog::STATUS_NOTHING:
                    return;
                default:
                    $subject = "FDTR Import - " . $log->getStatus();
                    break;
            }

            $email = (new TemplatedEmail())
                ->subject($subject)
                ->to($emails)
                ->htmlTemplate('@EasyjetFdtr/Mails/importResult.html.twig')
                ->context(['log' => $log]);
            $this->mailer->send($email);
        }
    }
}
