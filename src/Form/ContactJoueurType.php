<?php

namespace App\Form;

use App\Entity\ContactJoueur;
use Symfony\Component\Form\Button;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class ContactJoueurType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('nom', TextType::class, [
                'attr'=>[
                    'placeholder'=>'Votre Nom',
                ]
            ])
            ->add('prenom',TextType::class, [
                'attr'=>[
                    'placeholder'=>'Votre Prénom',
                ]
            ])
            ->add('email',TextType::class, [
                'attr'=>[
                    'placeholder'=>'Votre E-mail',
                ]
            ])
            ->add('message',TextareaType::class, [
                'attr'=>[
                    'placeholder'=>'Votre Message',
                ]
            ])
            ->add('objet',TextType::class, [
                'attr'=>[
                    'placeholder'=>'Votre Objet',
                ]
            ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => ContactJoueur::class,
        ]);
    }
}
