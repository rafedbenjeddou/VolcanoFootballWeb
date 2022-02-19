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

class StadeType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
        ->add('nom',TextType::class,[
            'label'=>'Nom ',
            'attr'=>[
                'placeholder'=>'Nom du Stade',
                'class'=>'nom'
            ]
        ])
        ->add('Adresse')
        ->add('Capacite')
        ->add('date_ouverture',DateType::class, [
            'label'=>'Date Ouverture',
            'attr'=>[
                'placeholder'=>'Date Ouverture',
                'class'=>'date'
            ]
        ])
;
    }
                        
                    
                
            
            
        
   

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Stade::class,
        ]);
    }
}
