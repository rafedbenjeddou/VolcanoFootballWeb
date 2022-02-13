<?php

namespace App\Form;

use App\Entity\Produit;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\FileType;


class ProduitType extends AbstractType
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
            ->add('type',TextType::class,[
                'label'=>"Type",
                'attr'=>[
                    'placeholder'=>"Type",
                ]
            ])
            ->add('taille',TextType::class,[
                'label'=>"Taille",
                'attr'=>[
                    'placeholder'=>"Taille",
                ]
            ])
            ->add('couleur',TextType::class,[
                'label'=>"Couleur",
                'attr'=>[
                    'placeholder'=>"Couleur",
                ]
            ])
            ->add('nbrEtoiles',ChoiceType::class,[
                'choices'  => [
                    '1' => 1,
                    '2' => 2,
                    '3' => 3,
                    '4' => 4,
                    '5' => 5
                ],

                'label'=>"Nombre d'Etoiles",

                'expanded' => false,
                'multiple' => false

            ])
            ->add('prix',TextType::class,[
                'label'=>"Prix",
                'attr'=>[
                    'placeholder'=>"Prix",
                ]
            ])

            ->add('description',TextType::class,[
                'label'=>"Description",
                'attr'=>[
                    'placeholder'=>"Prix",
                ]
            ])

            ->add('photo',FileType::class, [
                'label'=>'photo',
                'attr'=>[
                    'placeholder'=>'photo',
                    'class'=>'photo'
                ],

            ])

        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Produit::class,
        ]);
    }
}
