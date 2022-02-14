<?php

namespace App\Controller;

use App\Entity\Utilisateur;
use App\Form\UtilisateurType;
use App\Repository\UtilisateurRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class UtilisateurController extends AbstractController
{
    /**
     * @Route("/utilisateur", name="utilisateur")
     */
    public function index(): Response
    {
        return $this->render('utilisateur/index.html.twig', [
            'controller_name' => 'UtilisateurController',
        ]);
    }

    /**
     * @param UtilisateurRepository $repository
     * @return Response
     * @route("/AfficherUtilisateur", name="AfficherUtilisateur")
     */
    public function Affiche(UtilisateurRepository $repository){
        $utilisateur=$repository->findAll();
        return $this->render('utilisateur/afficher.html.twig',
            ['utilisateur'=>$utilisateur]);
    }

    /**
     * @route("/SupprimerUtilisateur/{id}",name="SupprimerUtilisateur")
     */
    function SupprimerUtilisateur($id,UtilisateurRepository $repository){
        $utilisateur=$repository->find($id);
        $em=$this->getDoctrine()->getManager();
        $em->remove($utilisateur);
        $em->flush();
        return $this->redirectToRoute('AfficherUtilisateur');
    }

    /**
     * @param Request $request
     * @return Response
     * @route("/AjouterUtilisateur", name="AjouterUtilisateur")
     */
    function AjouterUtilisateur(Request $request){

        $utilisateur = new Utilisateur();
        $form=$this->createForm(UtilisateurType::class,$utilisateur);
        $form->add('Ajouter',SubmitType::class);
        $form->handleRequest($request);
        if($form->isSubmitted() && $form->isValid()){
            $em=$this->getDoctrine()->getManager();
            $em->persist($utilisateur);
            $em->flush();
            return  $this->redirectToRoute('AfficherUtilisateur');
        }
        return $this->render('utilisateur/ajouter.html.twig',[
            'form'=>$form->createView()
        ]);
    }

    /**
     * @route ("ModifierUtilisateur/{id}",name="ModifierUtilisateur")
     */
    function ModifierUtilisateur(UtilisateurRepository  $repository, $id, Request $request){

        $utilisateur=$repository->find($id);
        $form=$this->createForm(UtilisateurType::class, $utilisateur);
        $form->add('Modifier',SubmitType::class);
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()){
            $em=$this->getDoctrine()->getManager();
            $em->flush();
            return $this->redirectToRoute("AfficherUtilisateur");
        }
        return $this->render('utilisateur/modifier.html.twig',[
            'form'=>$form->createView()
        ]);
    }




}
