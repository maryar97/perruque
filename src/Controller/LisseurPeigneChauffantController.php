<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class LisseurPeigneChauffantController extends AbstractController
{
    #[Route('/lisseur/peigne/chauffant', name: 'app_lisseur_peigne_chauffant')]
    public function index(): Response
    {
        return $this->render('lisseur_peigne_chauffant/index.html.twig', [
            'controller_name' => 'LisseurPeigneChauffantController',
        ]);
    }
}
