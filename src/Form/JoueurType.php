<?php

namespace App\Form;

use App\Entity\Joueur;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;


class JoueurType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('nom_joueur',TextType::class,[
                'label'=>'Nom Joueur',
                'attr'=>[
                    'placeholder'=>'Nom du joueur',
                    'class'=>'Lastname'
                ]
            ])
            ->add('prenom_joueur',TextType::class, [
                    'label'=>'Prénom Joueur',
                    'attr'=>[
                        'placeholder'=>'Prénom du joueur',
                        'class'=>'Firstname'
                    ]
                ])
            ->add('age',TextType::class, [
                    'label'=>'Age Joueur',
                    'attr'=>[
                        'placeholder'=>'Age du joueur',
                        'class'=>'age'
                    ]
                ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Joueur::class,
        ]);
    }
}
