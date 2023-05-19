<?php

namespace App\Easyjet\EleaveBundle\Services;

use Symfony\Component\Mailer\MailerInterface;
use Symfony\Bridge\Twig\Mime\TemplatedEmail;


/**
 * 
 */
class RequestMailerService
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

    public function sendRefusedMail($wishResult)
    {
        $wishResult = $wishResult[0];
        $choice1Start = ($wishResult['choice1Start']->format('d/m/Y') == '30/11/-0001') ? null :  $wishResult['choice1Start']->format('d/m/Y');
        $choice1End = ($wishResult['choice1End']->format('d/m/Y') == '30/11/-0001') ? null :  $wishResult['choice1End']->format('d/m/Y');

        $choice2Start = ($wishResult['choice2Start']->format('d/m/Y') == '30/11/-0001') ? null :  $wishResult['choice2Start']->format('d/m/Y');
        $choice2End = ($wishResult['choice2End']->format('d/m/Y') == '30/11/-0001') ? null :  $wishResult['choice2End']->format('d/m/Y');

        $choice3Start = ($wishResult['choice3Start']->format('d/m/Y') == '30/11/-0001') ? null :  $wishResult['choice3Start']->format('d/m/Y');
        $choice3End = ($wishResult['choice3End']->format('d/m/Y') == '30/11/-0001') ? null :  $wishResult['choice3End']->format('d/m/Y');

        $choice1 = $choice1Start . '-' . $choice1End;
        $choice2 = $choice2Start . '-' . $choice2End;
        $choice3 = $choice3Start . '-' . $choice3End;

        $wishResult['choice1'] = $choice1;
        $wishResult['choice2'] = $choice2;
        $wishResult['choice3'] = $choice3;

        $email = (new TemplatedEmail())
            ->subject("Leave Request Refused")
            ->to($wishResult['emailUser'])
            ->htmlTemplate('@EasyjetEleave/EmailTemplates/Mails/refused.html.twig')
            ->context(['wishResult' => $wishResult]);

        $this->mailer->send($email);
    }


    public function sendAcceptMail($wishResult)
    {
        $wishResult = $wishResult[0];
        $choice1Accepted = ($wishResult['choice1Accepted']->format('d/m/Y') == '30/11/-0001') ? null :  $wishResult['choice1Accepted']->format('d/m/Y');
        $choice2Accepted = ($wishResult['choice2Accepted']->format('d/m/Y') == '30/11/-0001') ? null :  $wishResult['choice2Accepted']->format('d/m/Y');
        $choice3Accepted = ($wishResult['choice3Accepted']->format('d/m/Y') == '30/11/-0001') ? null :  $wishResult['choice3Accepted']->format('d/m/Y');

        $choice1Start = ($wishResult['choice1Start']->format('d/m/Y') == '30/11/-0001') ? null :  $wishResult['choice1Start']->format('d/m/Y');
        $choice1End = ($wishResult['choice1End']->format('d/m/Y') == '30/11/-0001') ? null :  $wishResult['choice1End']->format('d/m/Y');

        $choice2Start = ($wishResult['choice2Start']->format('d/m/Y') == '30/11/-0001') ? null :  $wishResult['choice2Start']->format('d/m/Y');
        $choice2End = ($wishResult['choice2End']->format('d/m/Y') == '30/11/-0001') ? null :  $wishResult['choice2End']->format('d/m/Y');

        $choice3Start = ($wishResult['choice3Start']->format('d/m/Y') == '30/11/-0001') ? null :  $wishResult['choice3Start']->format('d/m/Y');
        $choice3End = ($wishResult['choice3End']->format('d/m/Y') == '30/11/-0001') ? null :  $wishResult['choice3End']->format('d/m/Y');

        $acceptedChoice = array();
        $acceptedPeriod = array();
        if ($choice1Accepted) {
            array_push($acceptedChoice, $choice1Accepted);
            array_push($acceptedPeriod, $choice1Start . '-' . $choice1End);
        }
        if ($choice2Accepted) {
            array_push($acceptedChoice, $choice2Accepted);
            array_push($acceptedPeriod, $choice2Start . '-' . $choice2End);
        }
        if ($choice3Accepted) {
            array_push($acceptedChoice, $choice3Accepted);
            array_push($acceptedPeriod, $choice3Start . '-' . $choice3End);
        }

        $wishResult['acceptedChoice'] = implode(',', $acceptedChoice);
        $wishResult['acceptedPeriod'] = implode(',', $acceptedPeriod);

        $choice1 = $choice1Start . '-' . $choice1End;
        $choice2 = $choice2Start . '-' . $choice2End;
        $choice3 = $choice3Start . '-' . $choice3End;

        $wishResult['choice1'] = $choice1;
        $wishResult['choice2'] = $choice2;
        $wishResult['choice3'] = $choice3;

        $email = (new TemplatedEmail())
            ->subject("Leave Request Accepted")
            ->to($wishResult['emailUser'])
            ->htmlTemplate('@EasyjetEleave/EmailTemplates/Mails/accepted.html.twig')
            ->context(['wishResult' => $wishResult]);
        $this->mailer->send($email);
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
