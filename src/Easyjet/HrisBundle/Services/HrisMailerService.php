<?php

namespace App\Easyjet\HrisBundle\Services;

use Symfony\Component\Mailer\MailerInterface;
use Symfony\Bridge\Twig\Mime\TemplatedEmail;
use Symfony\Component\Mime\Address;

/**
 * 
 */
class HrisMailerService
{

    /**
     * Mailer Interface
     * @var MailerInterface $mailerInterface Entity manager
     */
    private $mailer;

    public function __construct(MailerInterface $mailer)
    {

        $this->mailer = $mailer;
    }

    public function sendMail($loggerEntity, $emailsToNotify)
    {
        $recipients = array_map(function ($user) {
            return new Address($user);
        }, $emailsToNotify);

        $email = (new TemplatedEmail())
            ->subject("Import users from WD to swissinside - " . $loggerEntity->getStatus())
            ->bcc(...$recipients)
            ->htmlTemplate('@EasyjetHris/Mail/sendImportUserReport.html.twig')
            ->context(['content' => $loggerEntity->getHtmlReport()]);
        $this->mailer->send($email);
    }

    public function sendMoversMail($moverArray, $emailsToNotify)
    {
        $recipients = array_map(function ($user) {
            return new Address($user);
        }, $emailsToNotify);

        $email = (new TemplatedEmail())
            ->subject("Remove Swiss users from specific AD Security Groups")
            ->bcc(...$recipients)
            ->htmlTemplate('@EasyjetHris/Mail/deactivateMover.html.twig')
            ->context(['content' => $moverArray]);
        $this->mailer->send($email);
    }
}
