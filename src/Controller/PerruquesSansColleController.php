<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class PerruquesSansColleController extends AbstractController
{
    #[Route('/perruques/sans/colle', name: 'app_perruques_sans_colle')]
    public function index(): Response
    {
        return $this->render('perruques_sans_colle/index.html.twig', [
            'controller_name' => 'PerruquesSansColleController',
        ]);
    }
}
