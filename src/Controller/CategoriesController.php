<?php

namespace App\Controller;

use App\Entity\Categorie;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

#[Route('/categories', name: 'categories_')]
class CategoriesController extends AbstractController
{
    #[Route('/{sousrubriqueart}', name: 'list')]
    public function list (Categorie $categorie): Response
    {
        $produit = $categorie->getProduit();
        return $this->render('categories/list.html.twig', compact('categorie, produits'));
    }
}
