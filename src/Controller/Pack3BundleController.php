<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class Pack3BundleController extends AbstractController
{
    #[Route('/pack3/bundle', name: 'app_pack3_bundle')]
    public function index(): Response
    {
        return $this->render('pack3_bundle/index.html.twig', [
            'controller_name' => 'Pack3BundleController',
        ]);
    }
}
