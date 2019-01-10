<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Routing\Annotation\Route;
use App\Entity\Groupe;


class HomeController extends Controller
{
    /**
     * @Route("/home", name="home")
     */
    public function home()
    {
        $groups =$this->getDoctrine() //Je crée un variable qui récupere les donners dans la BDD afin de les afficher
        ->getRepository(Groupe::class) //Récupère "l'entité" (class) Groupe
        ->findAll();

         //}

         return $this->render('home/index.html.twig', [
            'controller_name' => 'Kikipaye',
            'groups' => $groups
         ]);
    }

    /**
     * @Route("/admin/{id}", name="admin")
     */
    public function admin($id)
    {
      $group =$this->getDoctrine()->getRepository(Groupe::class)->find($id);
      return $this->render('home/admin.html.twig', [
            'group' => $group,

        ]);
    }

    /**
     * @Route("/recap", name="recap")
     */
    public function recap()
    {
        return $this->render('home/recap.html.twig', [
            'controller_name' => 'HomeController',
        ]);
    }
}
