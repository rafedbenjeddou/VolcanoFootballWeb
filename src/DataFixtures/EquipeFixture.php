<?php

namespace App\DataFixtures;

use App\Entity\Equipe;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Doctrine\Persistence\ObjectManager;
use Faker\Factory;

class EquipeFixture extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        $faker= Factory::create('fr_FR');
        for($i=0; $i<30;$i++){
            $equipe= new Equipe();
            $equipe->setNomEquipe($faker->company);
            $equipe->setDateCreation(new \DateTime('2017-01-01'));
            $equipe->setNomEntreneur($faker->name);
            $equipe->setDrapeauEquipe($faker->image('public/uploads/images',400,300, null, false));
            $manager->persist($equipe);
        }
        // $product = new Product();
        // $manager->persist($product);

        $manager->flush();
    }
}
