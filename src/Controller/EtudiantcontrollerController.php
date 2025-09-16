<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

final class EtudiantcontrollerController extends AbstractController
{
    #[Route('/etudiantcontroller', name: 'app_etudiantcontroller')]
    public function index(): Response
    {
        return $this->render('etudiantcontroller/index.html.twig', [
            'controller_name' => 'EtudiantcontrollerController',
        ]);
    }

    #[Route('/listetudiant/{ch}', name: 'listetudiant')]
    public function listEtudiant(string $ch): Response{
        return new Response("Hello ".$ch);
    }

    #[Route('/showetudiant', name: 'showtudiant')]
    public function showEtudiant(){
        return $this->render("etudiantcontroller/show.html.twig");
    }

    #[Route('/gotoindex', name: 'gotoindex')]
    public function gotoindex(){
        return $this->redirectToRoute(route:'app_etudiantcontroller');
    }
}
