<?php

namespace App\Form;

use App\Entity\Users;
use App\EventSubscriber\ClientSubscriber;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Mailer\MailerInterface;
use Symfony\Component\Validator\Constraints\File;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\String\Slugger\SluggerInterface;

class UserType extends AbstractType
{
    private $mailer;
    private string $brochuresDirectory;
    private SluggerInterface $slugger;


    public function __construct(MailerInterface $mailer, string $brochuresDirectory, SluggerInterface $slugger)
    {
        $this->mailer = $mailer;
        $this->brochuresDirectory = $brochuresDirectory;
        $this->slugger = $slugger;
    }
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('prenom', TextType::class, [
                'attr' => [
                    'class' => 'mt-2 block w-1/4 px-4 py-2 border border-gray-300 rounded-md shadow-sm sm:text-sm',
                    'placeholder' => 'prenom',
                ],
                'label' => 'Prenom',
                'required' => false,
            ])
            ->add('nom', TextType::class, [
                'attr' => [
                    'class' => 'mt-2 block w-1/4 px-4 py-2 border border-gray-300 rounded-md shadow-sm sm:text-sm',
                    'placeholder' => 'nom',
                ],
                'label' => 'Nom',
                'required' => false,
            ])
            ->add('login', TextType::class, [
                'attr' => [
                    'class' => 'mt-2 block w-1/4 px-4 py-2 border border-gray-300 rounded-md shadow-sm sm:text-sm',
                    'placeholder' => 'ex : nom@example.com',
                ],
                'label' => 'Login',
                'required' => false,
            ])
            ->add('password', TextType::class, [
                'attr' => [
                    'class' => 'mt-2 block w-1/4 px-4 py-2 border border-gray-300 rounded-md shadow-sm sm:text-sm',
                    'placeholder' => 'password',
                ],
                'label' => 'password',
                'required' => false,
            ])
            ->add('save', SubmitType::class, [
                'attr' => [
                    'class' => 'mt-3 mb-3 px-8 py-2 text-sm font-medium text-gray-900 rounded-lg bg-white ',
                ]
            ])
            ->add('brochure', FileType::class, [
                'attr' => [
                    'class' => 'flex w-full rounded-md border border-blue-300 border-input bg-white text-sm text-gray-400 file:border-0 file:bg-blue-600 file:text-white file:text-sm file:font-medium',
                ],
                'label' => 'Brochure (image file)',
                'mapped' => false,
                'required' => false,
                'constraints' => [
                    new File([
                        'maxSize' => '1024k',
                        'mimeTypes' => [
                            'image/jpeg',
                            'image/jpg',
                            'image/png',
                            'image/gif',
                        ],
                        'mimeTypesMessage' => 'Please upload a valid image file (JPEG, PNG, or GIF)',
                    ])
                ],
            ]);
        $builder->addEventSubscriber(new ClientSubscriber($this->mailer, $this->brochuresDirectory, $this->slugger));
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Users::class,
        ]);
    }
}
