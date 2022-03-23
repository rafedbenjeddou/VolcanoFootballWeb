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

class UserType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder


            ->add("username",TextType::class,[
                "label"=>"Nom d'Utilisateur",
                'attr'=>[
                    'placeholder'=>"Nom d'Utilisateur",
                ]
            ])

            ->add('nom',TextType::class,[
                'label'=>"Nom",
                'attr'=>[
                    'placeholder'=>"Nom",
                ]
            ])
            ->add('prenom',TextType::class,[
                'label'=>"Prenom",
                'attr'=>[
                    'placeholder'=>"Prenom",
                ]
            ])

            ->add('email',TextType::class,[
                'label'=>"Email",
                'attr'=>[
                    'placeholder'=>"Email",
                ]
            ])
            ->add('password',PasswordType::class,[
                'label'=>"Mot de passe",
                'attr'=>[
                    'placeholder'=>"Mot de passe",
                ]
            ])
            ->add('confirmePassword',PasswordType::class,[
                'label'=>"Confirmer Mot de passe",
                'attr'=>[
                    'placeholder'=>"Confirmer Mot de passe",
                ]
            ])

            ->add('roles',ChoiceType::class,[
                'choices'  => [
                    'Utilisateur' => 'ROLE_USER',
                    'Administrateur' => 'ROLE_ADMIN'

                ],

                'label'=>"Role",

                'expanded' => true,
                'multiple' => true

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