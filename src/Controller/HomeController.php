<?php

namespace App\Controller;

use App\Repository\ProduitRepository;
use App\Entity\Produit;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;


class HomeController extends AbstractController
{
    /**
     * @Route("/home", name="home")
     */
    public function index(ProduitRepository $repository  )
    {
        $produits=$repository->findAll();
        //
        //
        //
        //
        //
        return $this->render('home/index.html.twig', [
            'produits' => $produits,
            //
            //
            //
            //
            //
            //

        ]);
    }
}
