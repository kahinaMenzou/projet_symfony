<?php
namespace App\DataFixtures;
use App\Entity\Projet;
use App\Entity\Hobbies;

use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\Persistence\ObjectManager;

class AppFixtures extends Fixture
{
    public function load(ObjectManager $manager)
    {
    	for($i = 0; $i < 5; $i++){
    		$projet = new Projet();
    		$projet->setTitre('projet'.mt_rand(1,5));
$projet->setDescription('desc'.mt_rand(1,5));
$projet->setLien('lien');
$manager->persist($projet);

    	}

    	 for($i = 0; $i < 5; $i++){
    		$hobbies = new Hobbies();
			$hobbies->setNom('nom'.mt_rand(1,5));
			$hobbies->setDescription('description'.mt_rand(1,5));

    		$manager->persist($projet);
       

        $manager->flush();
    }
}
}
