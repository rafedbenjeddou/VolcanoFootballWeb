<?php

namespace App\Form;

use App\Entity\Category;
use Symfony\Component\Form\Extension\Core\Type\DateTimeType;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use App\Entity\Reservation;
use App\Entity\Hebergement;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\ChoiceList\ChoiceList;


class ReservationfrontType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder

        ->add('dateDebut',DateTimeType::class, [
            'date_widget' => 'single_text',
            'label'=>'CheckIn',
            'attr'=>[
                'placeholder'=>'dateDebut',
                'class'=>'date'
                ]  
            ])
            ->add('dateFin',DateTimeType::class, [
                'date_widget' => 'single_text',

                'label'=>'CheckOut',
                'attr'=>[
                    'placeholder'=>'dateFin',
                    'class'=>'date'
                    ]  
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