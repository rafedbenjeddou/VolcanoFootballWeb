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

            ->add('genre',ChoiceType::class,[
                'label'=>" ",
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
                'label'=>" ",
                'attr'=>[
                    'placeholder'=>"Age",
                ]
            ])
            ->add('pays',CountryType::class,[

                'attr'=>[
                    "style"=>"height: 60px",
                    "disabled"
                ],

                'preferred_choices' => array('TN'),
                'choice_translation_locale' => null,
                'expanded' => false,
                'multiple' => false

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

            ->add('numTel',TextType::class,[
                'label'=>" ",
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

