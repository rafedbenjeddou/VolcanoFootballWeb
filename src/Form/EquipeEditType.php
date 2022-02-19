<?php

namespace App\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class EquipeEditType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('nom_equipe',TextType::class,[
                'label'=>'Nom Equipe',
                'attr'=>[
                    'placeholder'=>'Nom du Equipe',
                    'class'=>'nom'
                ]
            ])
            ->add('date_creation',DateType::class, [
                'label'=>'Date Creation',
                'attr'=>[
                    'placeholder'=>'Date Creation',
                    'class'=>'date'
                ]
            ])
            ->add('nom_entreneur',TextType::class,[
                'label'=>'Nom Entreneur',
                'attr'=>[
                    'placeholder'=>'Nom du Entreneur',
                    'class'=>'entreneur'
                ]
            ])
            ->add('drapeau_equipe',FileType::class, [
                'mapped'=>false,
                'label'=>'Drapeau Equipe',
                'attr'=>[
                    'placeholder'=>'Drapeau Equipe',
                    'class'=>'drapeau'
                ],

            ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            // Configure your form options here
        ]);
    }
}
