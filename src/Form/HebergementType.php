<?php

namespace App\Form;

use App\Entity\Category;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use App\Entity\Agence;
use App\Entity\Hebergement;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class HebergementType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
        ->add('photoH',FileType::class, [
            'label'=>'photoH',
            'attr'=>[
                'placeholder'=>'photoH',
                'class'=>'photoH' ]
            ])
            ->add('nom')
            ->add('type', ChoiceType::class, [
                'choices' => [
                    'Type' => [
                        'apartments & villas' => 'apartments & villas',
                        'hotels' => 'hotels',
                        'cruise ship hotels' => 'cruise ship hotels'],
                        ]
                    ])
                
            ->add('adresse')
            ->add('agence' , EntityType::class, [
                'class'=>Agence::class,
                'choice_label'=>'nom'
            ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Hebergement::class,
        ]);
    }
}
