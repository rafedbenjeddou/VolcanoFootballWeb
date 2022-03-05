<?php

namespace App\Form;

use App\Entity\Matche;
use App\Entity\Stade;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class MatcheType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('NomMatche')
            ->add('NomArbitre')
            ->add('tour')
            ->add('date')
            ->add('time')
            ->add('stade' , EntityType::class, [
                'class'=>Stade::class,
                'choice_label'=>'nom'
            ])

            ->add('imageFile', FileType::class, [
                'mapped'=>false,
                'required'=>false,
            ])
            ->add('imageFile2', FileType::class, [
                'mapped'=>false,
                'required'=>false,
            ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Matche::class,
        ]);
    }
}
