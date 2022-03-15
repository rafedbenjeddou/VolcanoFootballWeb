<?php

namespace App\Form;

use App\Entity\Category;
use Symfony\Component\Form\Extension\Core\Type\DateTimeType;
use Symfony\Component\Form\Extension\Core\Type\ColorType;

use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use App\Entity\Reservation;
use App\Entity\Hebergement;
use App\Entity\User;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class ReservationType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder

        ->add('dateDebut',DateTimeType::class, [
            'date_widget' => 'single_text',

            'label'=>'dateDebut',
            'attr'=>[
                'placeholder'=>'dateDebut',
                'class'=>'date'
                ]  
            ])
            ->add('dateFin',DateTimeType::class, [
                'date_widget' => 'single_text',

                'label'=>'dateFin',
                'attr'=>[
                    'placeholder'=>'dateFin',
                    'class'=>'date'
                    ]  
                    ])
            ->add('hebergement' , EntityType::class, [
                'class'=>Hebergement::class,
                'choice_label'=>'nomH'
            ])
            ->add('user' , EntityType::class, [
                'class'=>User::class,
                'choice_label'=>'nom'
            ])
          

        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Reservation::class,
        ]);
    }
}