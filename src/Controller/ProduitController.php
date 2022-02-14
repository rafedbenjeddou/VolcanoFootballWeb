<?php

namespace App\Controller;

use App\Entity\Produit;
use App\Form\ProduitType;
use App\Form\ProduitType2;
use App\Repository\ProduitRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\HttpFoundation\File\File;


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
            $uploads_directory = $this->getParameter('upload_directory');
            $fileName = md5(uniqid()).'.'.$file->guessExtension();
            $file->move(
                $uploads_directory,
                $fileName
            );

            $produit->setPhoto($fileName);
            $em=$this->getDoctrine()->getManager();

            $em->persist($produit);
            $em->flush();
            return  $this->redirectToRoute('AfficherProduit');
        }
        return $this->render('produit/ajouter.html.twig',[
            'form'=>$form->createView()
        ]);
    }

    /**
     * @route ("ModifierProduit/{id}",name="ModifierProduit")
     */
    function ModifierProduit(ProduitRepository  $repository, $id, Request $request){

        $produit=$repository->find($id);
        $form=$this->createForm(ProduitType2::class, $produit);
        $form->add('Modifier',SubmitType::class);
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()){
            $em=$this->getDoctrine()->getManager();
            $em->flush();
            return $this->redirectToRoute("AfficherProduit");
        }
        return $this->render('produit/modifier.html.twig',[
            'form'=>$form->createView()
        ]);
    }


}
