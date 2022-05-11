<?php


namespace App\Notifications;

// On importe les classes nécessaires à l'envoi d'e-mail et à Twig
use Swift_Message;
use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\SyntaxError;
use Twig\Error\RuntimeError;
use Symfony\Component\Mime\Address;
use Symfony\Bridge\Twig\Mime\TemplatedEmail;
use Symfony\Component\Mailer\MailerInterface;

class CongeAccepterNotifications
{
    /**
     * Propriété contenant le module d'envoi de mail
     * 
     * @var \Swift_Mailer
     */
    private $mailer;

    /**
     * Propriété contenant l'environnement twig
     * 
     * @var Environment
     */
    private $renderer;

    /**
     * Constructeur de classe
     * @param Swift_Mailer $mailer
     * @param Environment $renderer
     */
    public function __construct(\Swift_Mailer $mailer, Environment $renderer)
    {
        $this->mailer = $mailer;
        $this->renderer = $renderer;
    }

    public function notify(MailerInterface $mailer)
    {
        $email = (new TemplatedEmail())
        ->from(new Address('yosr.belaam@esprit.tn', 'Restoflex'))
        //->to($user->getEmail())
        ->to('yosrbelaam1999@gmail.com')
        ->subject('Congé Accepté')
        ->htmlTemplate('emails/CongeAccepte.html.twig');
        $mailer->send($email);
        
    }
}