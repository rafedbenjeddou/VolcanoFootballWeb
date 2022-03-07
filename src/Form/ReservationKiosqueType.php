<?php

namespace App\Form;

use App\Entity\ReservationKiosque;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class ReservationKiosqueType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('CardNumber',null , ['label' =>' ' ,'required' => true,])
            ->add('Name', null , ['label' =>' ' , 'required' => true])
            ->add('Cvv',null ,  ['label' =>' ' , 'required' => true])

        ;
    }
}
