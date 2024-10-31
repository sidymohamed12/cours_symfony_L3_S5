<?php

namespace App\EventSubscriber;

use App\Entity\Users;
use Doctrine\ORM\EntityManagerInterface;
use Psr\Log\LoggerInterface;
use Symfony\Component\EventDispatcher\EventSubscriberInterface;
use Symfony\Component\Form\Event\PostSubmitEvent;
use Symfony\Component\Form\FormEvent;
use Symfony\Component\Form\FormEvents;
use Symfony\Component\Mailer\MailerInterface;
use Symfony\Component\Mime\Email;
use Symfony\Component\Routing\Generator\UrlGeneratorInterface;

class ClientSubscriber implements EventSubscriberInterface
{

    private MailerInterface $mailer;

    public function __construct(MailerInterface $mailer)
    {
        $this->mailer = $mailer;
    }

    public function onUserPostSubmit(FormEvent $event): void
    {
        $user = $event->getData();
        $form = $event->getForm();

        if ($user instanceof Users && $form->isValid()) {

            $email = (new Email())
                ->from('mohamedsaizonou@gmail.com')
                ->to($user->getLogin())
                ->subject('Nouvel utilisateur créé')
                ->text('Un nouvel utilisateur a été créé : ' . $user->getPrenom() . ' ' . $user->getNom());

            try {
                $this->mailer->send($email);
            } catch (\Exception $e) {
                dump('Erreur lors de l\'envoi de l\'e-mail : ' . $e->getMessage());
            }
        }
    }

    public static function getSubscribedEvents(): array
    {
        return [
            FormEvents::POST_SUBMIT => 'onUserPostSubmit',
        ];
    }
}