<?php

namespace App\DataFixtures;

use App\Entity\Hobbies;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\Persistence\ObjectManager;

class HobbiesFixtures extends Fixture
{
    public function load(ObjectManager $manager)
    {
        for($i = 0; $i < 5; $i++){
    		$hobbies = new Hobbies();
            $hobbies->setNom('nom'.mt_rand(1,10));
            $hobbies->setDescription('description'.mt_rand(1,5));
            $manager->persist($hobbies);
        }


        $manager->flush();
    }
}
