<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class Pack3BundlePlusClosureController extends AbstractController
{
    #[Route('/pack3/bundle/plus/closure', name: 'app_pack3_bundle_plus_closure')]
    public function index(): Response
    {
        return $this->render('pack3_bundle_plus_closure/index.html.twig', [
            'controller_name' => 'Pack3BundlePlusClosureController',
        ]);
    }
}
