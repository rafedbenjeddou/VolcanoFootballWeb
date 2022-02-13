<?php

namespace App\Controller;

use App\Entity\Produit;
use App\Form\ProduitType;
use App\Repository\ProduitRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;


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
    public function AfficherProduit(ProduitRepository $repository){
        $produit=$repository->findAll();
        return $this->render('produit/afficher.html.twig',
            ['produit'=>$produit]);
    }

    /**
     * @route("/SupprimerProduit/{id}",name="SupprimerProduit")
     */
    function SupprimerProduit($id, ProduitRepository $repository){
        $produit=$repository->find($id);
        $em=$this->getDoctrine()->getManager();
        $em->remove($produit);
        $em->flush();
        return $this->redirectToRoute('AfficherProduit');
    }

    /**
     * @param Request $request
     * @return Response
     * @route("/AjouterProduit", name="AjouterProduit")
     */
    function AjouterProduit(Request $request){

        $produit = new Produit();
        $form=$this->createForm(ProduitType::class,$produit);
        $form->add('Ajouter', SubmitType::class);
        $form->handleRequest($request);
        if($form->isSubmitted() && $form->isValid()){
            $file = $produit->getPhoto();
            $fileName = md5(uniqid()).'.'.$file->guessExtension();
            $em=$this->getDoctrine()->getManager();
            $produit->setPhoto($fileName);
            $em->persist($produit);
            $em->flush();
            return  $this->redirectToRoute('AfficherProduit');
        }
        return $this->render('produit/ajouter.html.twig',[
            'form'=>$form->createView()
        ]);
    }

}
