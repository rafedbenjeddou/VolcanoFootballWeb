<?php

namespace App\Form;

use App\Entity\Evenement;
use App\Entity\Stade;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class EvenementType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder

            ->add('nom',TextType::class,[
                'label'=>"Nom",
                'attr'=>[
                    'placeholder'=>"Nom",
                ]
            ])

            ->add('date',DateType::class, [
                'label'=>'Date',
                'attr'=>[
                    'placeholder'=>'Date',
                ]
            ])

            ->add('stade', EntityType::class,[

                'class'=> Stade::class,
                'choice_label'=>'nom',
                'multiple'=>false,
                'label'=>'Stade'
            ])

        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Evenement::class,
        ]);
    }
}
