<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ProduitApiController extends AbstractController
{
    /**
     * @Route("/produit/api", name="produit_api")
     */
    public function index(): Response
    {
        return $this->render('produit_api/index.html.twig', [
            'controller_name' => 'ProduitApiController',
        ]);
    }
}
