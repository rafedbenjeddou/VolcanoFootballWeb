<?php

namespace App\Form;

use App\Entity\Category;
use Symfony\Component\Form\Extension\Core\Type\DateType;
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

        ->add('dateDebut',DateType::class, [
            'label'=>'Check in',
            'attr'=>[
                'placeholder'=>'dateDebut',
                'class'=>'date'
                ]  
            ])
            ->add('dateFin',DateType::class, [
                'label'=>'Check out',
                'attr'=>[
                    'placeholder'=>'dateFin',
                    'class'=>'date'
                    ]  
                    ])


            ->add('idClient')
        ;
    }
   

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Reservation::class,
        ]);
    }
}