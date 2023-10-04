<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class Pack3BundleDégradéPlusClosureController extends AbstractController
{
    #[Route('/pack3/bundle/d/grad/plus/closure', name: 'app_pack3_bundle_d_grad_plus_closure')]
    public function index(): Response
    {
        return $this->render('pack3_bundle_dégradéplus_closure/index.html.twig', [
            'controller_name' => 'Pack3BundleDégradéPlusClosureController',
        ]);
    }
}
