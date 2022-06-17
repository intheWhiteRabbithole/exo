<?php

namespace App\DataFixtures;

use App\Entity\Dog;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
use Faker;

class AppFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {$faker = Faker\Factory::create();
        // $product = new Product();
        // $manager->persist($product);
        for($i = 0 ;$i < 20;$i++){
            $dog = new Dog();
            $dog ->setName('chien n°' . $i);
            $dog->setAge($faker->unique()->numberBetween(1,20));
            $dog->setPopularrity($faker->unique()->numberBetween(1,30));
            $dog->setRace('nom de la race');
            $dog->setHeight($faker->unique()->numberBetween(20,200));
            $manager->persist($dog);}
        $manager->flush();
    }
}
