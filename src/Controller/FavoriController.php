<?php

namespace App\Controller;

use App\Entity\Favori;
use App\Repository\FavoriRepository;
use App\Repository\ProduitRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class FavoriController extends AbstractController
{

    /**
     * @route("/ListeFavoris", name="ListeFavoris")
     */
    public function ListeFavoris(FavoriRepository $repository){

        $favoris=$repository->findBy(["user" => $this->getUser()]);

        return $this->render('favori/favoris.html.twig',[

                'favoris'=>$favoris

        ]);

    }

    /**
     * @route("/AjouterFavori/{id}", name="AjouterFavori")
     */
    public function AjouterFavori($id, ProduitRepository $produitRepository){

        $favori = new Favori();
        $produit=$produitRepository->find($id);
        $favori->setUser($this->getUser());
        $favori->setProduit($produit);
        $em=$this->getDoctrine()->getManager();
        $em->persist($favori);
        $em->flush();

        return $this->redirectToRoute('AfficherProduitsFront');

    }

    /**
     * @route("/SupprimerFavori/{id}",name="SupprimerFavori")
     */
    function SupprimerFavori($id, FavoriRepository $repository){

        $favori=$repository->find($id);
        $em=$this->getDoctrine()->getManager();
        $em->remove($favori);
        $em->flush();
        return $this->redirectToRoute('ListeFavoris');

    }



}
