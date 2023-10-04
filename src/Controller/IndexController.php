<?php

namespace App\Controller;

use App\Repository\CategorieRepository;
use App\Repository\ProduitRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class IndexController extends AbstractController
{
    #[Route('/', name: 'app_index')]
    public function index( CategorieRepository $categorieRepository,ProduitRepository $produitRepository): Response
    {
        $categorie=$categorieRepository->findAll();
        $produit=$produitRepository->findAll();
        return $this->render('index/index.html.twig', [
            'categories'=>$categorie,'produits'=>$produit
        ]);
    }
}
