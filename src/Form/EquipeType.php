<?php

namespace App\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class EquipeType extends AbstractType
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
            ->add('drapeau_equipe',FileType::class, [
                'label'=>'Darapeau Equipe',
                'attr'=>[
                    'placeholder'=>'Drapeau Equipe',
                    'class'=>'drapeau'
                ],
                'mapped'=>false
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
