<?php

namespace App\Controller;

use App\Repository\CategorieRepository;
use App\Repository\ProduitRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class AccueilController extends AbstractController
{
    #[Route('/', name: 'app_accueil')]
    public function index( CategorieRepository $categorieRepository, ProduitRepository $produitRepository,Request $request): Response
    { 
        
                return $this->render('accueil/index.html.twig', [
            'categorie' => $categorieRepository->findAll(),
        ]);
    }
}


