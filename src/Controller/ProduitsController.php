<?php

namespace App\Controller;

use App\Entity\Produit;
use App\Entity\Produits;
use App\Repository\ProduitRepository;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

#[Route('/produits', name: 'app_produits')]

class ProduitsController extends AbstractController
{
    #[Route('/', name: 'index')]
    public function index(ProduitRepository $produitRepository, ): Response
    {
        $produit=$produitRepository->findAll();
        return $this->render('produits/index.html.twig',[
            'produits' => $produit
        ]);

    }

}
