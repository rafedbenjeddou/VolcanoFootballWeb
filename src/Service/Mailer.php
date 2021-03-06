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

    public function sendEmail($email, $token)
    {
        $email = (new TemplatedEmail())
            ->from('volcanofootball.services@gmail.com')
            ->to($email)
            ->subject('Confrimation du compte Volcano Football')

            // path of the Twig template to render
            ->htmlTemplate('email/inscription.html.twig')

            // pass variables (name => value) to the template
            ->context([
                'token' => $token,
            ])
        ;

        $this->mailer->send($email);
    }
    public function sendEmailHebergement($email)
    {
        $email = (new TemplatedEmail())
            ->from('volcanofootball.services@gmail.com')
            ->to($email)
            ->subject('Confrimation du Reservation des hebergement')

            // path of the Twig template to render
            ->htmlTemplate('email/emailH.html.twig')


        ;

        $this->mailer->send($email);
    }

    public function sendEmailTicket($email)
    {
        $email = (new TemplatedEmail())
            ->from('volcanofootball.services@gmail.com')
            ->to($email)
            ->subject('Confrimation du Reservation de billet')

            // path of the Twig template to render
            ->htmlTemplate('email/Reservation.html.twig')


        ;

        $this->mailer->send($email);
    }

}
