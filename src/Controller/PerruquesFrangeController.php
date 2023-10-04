<?php

namespace App\Controller;

use App\Repository\CategorieRepository;
use App\Repository\ProduitRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\BrowserKit\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class PerruquesFrangeController extends AbstractController
{
    #[Route('/perruques/frange', name: 'app_perruques_frange')]
    public function index(ProduitRepository $produitRepository, CategorieRepository $categorieRepository): Response
    {
        $perruques_frange=$produitRepository->findAll(['categorie'=>8]);
        return $this->render('perruques_frange/index.html.twig', [
            'controller_name' => 'PerruquesFrangeController',
            
        ]);
    }
}
