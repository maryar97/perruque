<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class PerruqueCourteController extends AbstractController
{
    #[Route('/perruque/courte', name: 'app_perruque_courte')]
    public function index(): Response
    {
        return $this->render('perruque_courte/index.html.twig', [
            'controller_name' => 'PerruqueCourteController',
        ]);
    }
}
