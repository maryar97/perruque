<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class PerruquesDeCouleursController extends AbstractController
{
    #[Route('/perruques/de/couleurs', name: 'app_perruques_de_couleurs')]
    public function index(): Response
    {
        return $this->render('perruques_de_couleurs/index.html.twig', [
            'controller_name' => 'PerruquesDeCouleursController',
        ]);
    }
}
