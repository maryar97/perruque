<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class CarréPlongeantController extends AbstractController
{
    #[Route('/carr/plongeant', name: 'app_carr_plongeant')]
    public function index(): Response
    {
        return $this->render('carréplongeant/index.html.twig', [
            'controller_name' => 'CarréPlongeantController',
        ]);
    }
}
