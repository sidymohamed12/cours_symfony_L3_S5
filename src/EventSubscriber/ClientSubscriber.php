<?php

namespace App\EventSubscriber;

use App\Entity\Users;
use Symfony\Component\EventDispatcher\EventSubscriberInterface;
use Symfony\Component\Form\FormEvent;
use Symfony\Component\Form\FormEvents;
use Symfony\Component\HttpFoundation\File\Exception\FileException;
use Symfony\Component\Mailer\MailerInterface;
use Symfony\Component\Mime\Email;
use Symfony\Component\String\Slugger\SluggerInterface;

class ClientSubscriber implements EventSubscriberInterface
{

    private MailerInterface $mailer;
    private string $brochuresDirectory;
    private SluggerInterface $slugger;

    public function __construct(MailerInterface $mailer, string $brochuresDirectory, SluggerInterface $slugger)
    {
        $this->mailer = $mailer;
        $this->brochuresDirectory = $brochuresDirectory;
        $this->slugger = $slugger;
    }


    public function onUserPostSubmit(FormEvent $event): void
    {
        $user = $event->getData();
        $form = $event->getForm();

        if ($user instanceof Users && $form->isValid()) {

            /** @var UploadedFile $brochureFile */
            $brochureFile = $form->get('brochure')->getData();

            if ($brochureFile) {
                $originalFilename = pathinfo($brochureFile->getClientOriginalName(), PATHINFO_FILENAME);
                $safeFilename = $this->slugger->slug($originalFilename);
                $newFilename = $safeFilename . '-' . uniqid() . '.' . $brochureFile->guessExtension();

                // Déplacer le fichier vers le répertoire des brochures
                try {
                    $brochureFile->move($this->brochuresDirectory, $newFilename);
                } catch (FileException $e) {
                    dump('Erreur lors du déplacement du fichier : ' . $e->getMessage());
                }
            }

            $emailLogin = $user->getLogin();
            if (!filter_var($emailLogin, FILTER_VALIDATE_EMAIL)) {
                dump('Adresse e-mail non valide ou manquante : ' . $emailLogin);
                return;
            }
            $email = (new Email())
                ->from('mohamedsaizonou@gmail.com')
                ->to($user->getLogin())
                ->subject('Nouvel utilisateur créé')
                ->text('Un nouvel utilisateur a été créé : ' . $user->getPrenom() . ' ' . $user->getNom());

            dump($this->mailer);
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
