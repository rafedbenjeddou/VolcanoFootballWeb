<?php

namespace App\Form;

use App\Entity\Commande;
use App\Entity\Produit;
use App\Entity\User;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class CommandeType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('user', EntityType::class,[

                'class'=> User::class,
                'choice_label'=>'username',
                'multiple'=>false,
                'label'=>'User'

            ])

            ->add('produit', EntityType::class,[

                'class'=> Produit::class,
                'choice_label'=>'nom',
                'multiple'=>false,
                'label'=>'Produit'
            ])

            ->add('quantite',TextType::class,[
                'label'=>"Quantité",
                'attr'=>[
                    'placeholder'=>"Quantité",
                ]
            ])

            ->add('adresse',TextType::class,[
                'label'=>"Adresse",
                'attr'=>[
                    'placeholder'=>"Adresse",
                ]
            ])



        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Commande::class,
        ]);
    }
}
