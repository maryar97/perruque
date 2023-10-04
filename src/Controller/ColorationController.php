<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ColorationController extends AbstractController
{
    #[Route('/coloration', name: 'app_coloration')]
    public function index(): Response
    {
        return $this->render('coloration/index.html.twig', [
            'controller_name' => 'ColorationController',
        ]);
    }
}
