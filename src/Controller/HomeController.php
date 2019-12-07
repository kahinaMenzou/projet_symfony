<?php

namespace App\Controller;
use App\Entity\Projet;
use App\Entity\Hobbies;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class HomeController extends AbstractController
{
    /**
     * @Route("/home", name="home")
     */
    public function index()
    {
        $repository = $this-> getDoctrine()->getRepository(Projet::class);
        $projet = $repository->findAll();
          
        $repository = $this-> getDoctrine()->getRepository(Hobbies::class);
        $hobbies = $repository->findAll();
        return $this->render('home/index.html.twig', [
          'projet' => $projet,
          'hobbies' =>$hobbies
        
        ]);
    }
      /**
     * @Route("/home/page", name="home_page")
     */
    public function page()
    {
        $repository = $this-> getDoctrine()->getRepository(Projet::class);
        $projet = $repository->findAll();
        return $this->render('home/page.html.twig', [

          'projet' =>$projet 
        ]);
    }
     /**
     * @Route("/home/page2", name="home_page2")
     */
    public function page2()
    {
        $repository = $this-> getDoctrine()->getRepository(Hobbies::class);
        $hobbies = $repository->findAll();
        return $this->render('home/page2.html.twig', [

          'hobbies' =>$hobbies 
        ]);
    }
}
