<?php

namespace App\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;


class ProduitType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('nom',TextType::class,[
                'label'=>'Nom',
                'attr'=>[
                    'placeholder'=>'Nom',
                ]
            ])
            ->add('type',TextType::class,[
                'label'=>'Type',
                'attr'=>[
                    'placeholder'=>'Type',
                ]
            ])
            ->add('taille',ChoiceType::class,[
                'choices'  => [
                    'XS' => 'XS',
                    'S' => 'S',
                    'M' => 'M',
                    'L' => 'L',
                    'XL' => 'XL'
                ],

                'label'=>"Taille",

                'expanded' => false,
                'multiple' => false

            ])
            ->add('couleur',TextType::class,[
                'label'=>'Couleur',
                'attr'=>[
                    'placeholder'=>'Couleur',
                ]
            ])
            ->add('nbrEtoiles',ChoiceType::class,[
                'choices'  => [
                    '1' => 1,
                    '2' => 2,
                    '3' => 3,
                    '4' => 4,
                    '5' => 5
                ],

                'label'=>"Nombre d'Etoiles",

                'expanded' => false,
                'multiple' => false

            ])
            ->add('description',TextType::class,[
                'label'=>"Description",
                'attr'=>[
                    'placeholder'=>"Description",
                ]
            ])
            ->add('prix',TextType::class,[
                'label'=>"Prix",
                'attr'=>[
                    'placeholder'=>"Prix",
                ]
            ])
            ->add('photo',FileType::class, [

                'label'=>'Photo',
                'attr'=>[
                    'placeholder'=>'Photo',
                ]

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
