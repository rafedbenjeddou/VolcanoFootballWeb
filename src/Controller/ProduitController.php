<?php

namespace App\Controller;

use App\Repository\ProduitRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ProduitController extends AbstractController
{
    /**
     * @Route("/produit", name="produit")
     */
    public function index(): Response
    {
        return $this->render('produit/index.html.twig', [
            'controller_name' => 'ProduitController',
        ]);
    }

    /**
     * @param ProduitRepository $repository
     * @return Response
     * @route("/AfficherProduit", name="AfficherProduit")
     */
    public function Affiche(ProduitRepository $repository){
        $produit=$repository->findAll();
        return $this->render('produit/afficher.html.twig',
            ['produit'=>$produit]);
    }

}
