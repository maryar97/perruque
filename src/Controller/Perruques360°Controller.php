<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class Perruques360°Controller extends AbstractController
{
    #[Route('/perruques360/', name: 'app_perruques360_')]
    public function index(): Response
    {
        return $this->render('perruques360°/index.html.twig', [
            'controller_name' => 'Perruques360°Controller',
        ]);
    }
}
