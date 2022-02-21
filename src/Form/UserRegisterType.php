<?php

namespace App\Form;

use App\Entity\User;
use Symfony\Component\Form\AbstractType;
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

            ->add('genre',ChoiceType::class,[
                'label'=>"Genre",
                'choices'  => [
                    'Homme' => 'homme',
                    'Femme' => 'femme'

                ],

                'attr'=>[
                    "style"=>"height: 60px",
                    "disabled"
                ],

                'expanded' => false,
                'multiple' => false

            ])

            ->add('age',TextType::class,[
                'label'=>"Age",
                'attr'=>[
                    'placeholder'=>"Age",
                ]
            ])
            ->add('pays',TextType::class,[
                'label'=>"Pays",
                'attr'=>[
                    'placeholder'=>"Pays",
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

            ->add('numTel',TextType::class,[
                'label'=>"Numéro de Téléphone",
                'attr'=>[
                    'placeholder'=>"Numéro de Téléphone",
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

