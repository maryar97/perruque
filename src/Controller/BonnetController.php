<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class BonnetController extends AbstractController
{
    #[Route('/bonnet', name: 'app_bonnet')]
    public function index(): Response
    {
        return $this->render('bonnet/index.html.twig', [
            'controller_name' => 'BonnetController',
        ]);
    }
}
