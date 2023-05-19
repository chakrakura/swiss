<?php

namespace App\Easyjet\EwishBundle\Services;

use Symfony\Component\Mailer\MailerInterface;
use Symfony\Bridge\Twig\Mime\TemplatedEmail;

/**
 * 
 */
class EwishMailerService
{
    /**
     * Mailer Interface
     * @var MailerInterface $mailer Entity manager
     */
    private $mailer;

    public function __construct(MailerInterface $mailer)
    {

        $this->mailer = $mailer;
    }

    public function sendMail($subject, $to, $template, $params)
    {
        $email = (new TemplatedEmail())
            ->subject($subject)
            ->to($to)
            ->htmlTemplate($template)
            ->context($params);
        $this->mailer->send($email);
    }
}
