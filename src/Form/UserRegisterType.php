<?php

namespace App\Form;

use App\Entity\User;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\CountryType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;


class UserRegisterType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder


            ->add("username",TextType::class,[
                "label"=>" ",
                'attr'=>[
                    'placeholder'=>"Nom d'Utilisateur",
                ]
            ])

            ->add('nom',TextType::class,[
                'label'=>" ",
                'attr'=>[
                    'placeholder'=>"Nom",
                ]
            ])
            ->add('prenom',TextType::class,[
                'label'=>" ",
                'attr'=>[
                    'placeholder'=>"Prenom",
                ]
            ])

            ->add('email',TextType::class,[
                'label'=>" ",
                'attr'=>[
                    'placeholder'=>"Email",
                ]
            ])
            ->add('password',PasswordType::class,[
                'label'=>" ",
                'attr'=>[
                    'placeholder'=>"Mot de passe",
                ]
            ])
            ->add('confirmePassword',PasswordType::class,[
                'label'=>" ",
                'attr'=>[
                    'placeholder'=>"Confirmer Mot de passe",
                ]
            ])

        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => User::class,
        ]);
    }
}

