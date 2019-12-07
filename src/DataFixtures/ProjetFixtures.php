<?php

namespace App\DataFixtures;
use App\Entity\Projet;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\Persistence\ObjectManager;

class ProjetFixtures extends Fixture
{
    public function load(ObjectManager $manager)
    {
      
      for($i = 0; $i < 5; $i++){


    		$projet = new Projet();
    		$projet->setTitre('projet'.mt_rand(1,10));
$projet->setDescription('desc'.mt_rand(1,10));
$projet->setLien('lien');
$manager->persist($projet);

    	}

        $manager->flush();
    }
}
