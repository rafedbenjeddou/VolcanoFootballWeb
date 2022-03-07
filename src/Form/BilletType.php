<?php

namespace App\Form;
use App\Entity\Billet;
use App\Entity\Matche;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\OptionsResolver\OptionsResolver;

class BilletType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('prix')
            ->add('categorie',ChoiceType::class,[
                'choices'=> array(
                    'Cat1'=>'Cat1',
                    'Cat2'=>'Cat2',
                    'Cat3'=>'Cat3',
                    'Cat4'=>'Cat4',
                ),
            ])

            ->add('matche' , EntityType::class, [
                'class'=>Matche::class,
                'choice_label'=>'NomMatche'
            ])

        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            // Configure your form options here
            'data_class' => Billet::class,

        ]);
    }
}
