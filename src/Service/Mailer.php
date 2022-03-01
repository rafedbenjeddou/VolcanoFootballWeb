<?php

namespace App\Service;

use Symfony\Bridge\Twig\Mime\TemplatedEmail;
use Symfony\Component\Mailer\MailerInterface;
use Symfony\Component\Mime\Address;

class Mailer {
    /**
     * @var MailerInterface
     */
    private $mailer;

    public function __construct(MailerInterface $mailer)
    {
        $this->mailer = $mailer;
    }

    public function sendEmailHebergement($email)
    {
        $email = (new TemplatedEmail())
            ->from('volcanofootball.services@gmail.com')
            ->to($email)
            ->subject('Confrimation du Reservation des hebergement')

            // path of the Twig template to render
            ->htmlTemplate('emails/email.html.twig')


        ;

        $this->mailer->send($email);
    }
}