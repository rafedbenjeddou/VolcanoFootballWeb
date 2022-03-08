<?php

namespace App\Form;

use App\Entity\Artiste;
use App\Entity\Evenement;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class ArtisteType extends AbstractType
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
            ->add('age',TextType::class,[
                'label'=>"Age",
                'attr'=>[
                    'placeholder'=>"Age",
                ]
            ])
            ->add('type',ChoiceType::class,[
                'choices'  => [
                    'Musicien' => 'Musicien',
                    'Chanteur' => 'Chanteur',
                    'Danseur' => 'Danseur'

                ],

                'label'=>"Type",

                'expanded' => false,
                'multiple' => false

            ])
            ->add('evenement', EntityType::class,[
                'class'=> Evenement::class,
                'choice_label'=>'nom',
                'multiple'=>false,
                'label'=>'Evenement'
            ])
        ;

    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Artiste::class,
        ]);
    }
}
