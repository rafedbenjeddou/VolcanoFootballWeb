<?php

namespace App\Form;

use App\Entity\Category;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use App\Entity\Stade;
use App\Entity\Kiosque;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\TextType;


class KiosqueType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
        ->add('ID')
        ->add('IdStade')
        ->add('Nom')
        ->add('Stade' , EntityType::class, [
            'class'=>stade::class,
            'choice_label'=>'nom'
        ])
        ->add('type', ChoiceType::class, [
            'choices' => [
                'Type' => [
                    'Marocain' => 'Marocain',
                    'Tunisien' => 'Tunisien',
                    'Brezilien' => 'Brezelien'],
                    ]
                ])
    
                    
                
                
            
            
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Kiosque::class,
        ]);
    }
}
