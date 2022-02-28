<?php

namespace App\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class StadeTypeEditType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('Nom')
            ->add('Adresse')
            ->add('Capacite')
            ->add('date_ouverture',DateType::class, [
                'label'=>'Date Ouverture',
                'attr'=>[
                    'placeholder'=>'Date Ouverture',
                    'class'=>'date'
                ]
            ])
            ->add('photo',FileType::class, [
                'mapped'=>false,
                'label'=>'Photo',
                'attr'=>[
                    'placeholder'=>'Photo',
                ]

            ]);
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            // Configure your form options here
        ]);
    }
}
