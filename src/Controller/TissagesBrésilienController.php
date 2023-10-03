<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class TissagesBrésilienController extends AbstractController
{
    #[Route('/tissages/br/silien', name: 'app_tissages_br_silien')]
    public function index(): Response
    {
        return $this->render('tissages_brésilien/index.html.twig', [
            'controller_name' => 'TissagesBrésilienController',
        ]);
    }
}
