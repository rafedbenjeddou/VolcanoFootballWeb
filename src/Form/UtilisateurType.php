<?php

namespace App\Form;

use App\Entity\Utilisateur;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;

class UtilisateurType extends AbstractType
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
                'choices'  => [
                    'Homme' => 'homme',
                    'Femme' => 'femme'

                ],

                'label'=>"Role",

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
            ->add('password',TextType::class,[
                'label'=>"Password",
                'attr'=>[
                    'placeholder'=>"Password",
                ]
            ])
            ->add('numTel',TextType::class,[
                'label'=>"Numéro de Téléphone",
                'attr'=>[
                    'placeholder'=>"Numéro de Téléphone",
                ]
            ])
            ->add('role',ChoiceType::class,[
                'choices'  => [
                    'Utilisateur' => 'utilisateur',
                    'Administrateur' => 'administrateur'

                ],

                'label'=>"Role",

                'expanded' => false,
                'multiple' => false

            ])

        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Utilisateur::class,
        ]);
    }
}
