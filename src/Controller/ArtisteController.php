<?php

namespace App\Controller;

use App\Entity\Artiste;
use App\Form\ArtisteType;
use App\Repository\ArtisteRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ArtisteController extends AbstractController
{
    /**
     * @Route("/artiste", name="artiste")
     */
    public function index(): Response
    {
        return $this->render('artiste/index.html.twig', [
            'controller_name' => 'ArtisteController',
        ]);
    }

    /**
     * @route("/AfficherArtistes", name="AfficherArtistes")
     */
    public function AfficherArtistes(ArtisteRepository $repository){

        if($this->getUser()->isAdmin())
        {
            $artistes=$repository->findAll();
            return $this->render('artiste/afficher.html.twig',
                ['artistes'=>$artistes ]);
        }

        return $this->redirectToRoute('app_login');

    }

    /**
     * @route("/SupprimerArtiste/{id}",name="SupprimerArtiste")
     */
    function SupprimerArtiste($id, ArtisteRepository $repository){

        if($this->getUser()->isAdmin())
        {
            $artiste=$repository->find($id);
            $em=$this->getDoctrine()->getManager();
            $em->remove($artiste);
            $em->flush();
            return $this->redirectToRoute('AfficherArtistes');
        }

        return $this->redirectToRoute('app_login');

    }

    /**
     * @route("/AjouterArtiste", name="AjouterArtiste")
     */
    function AjouterArtiste(Request $request){

        if($this->getUser()->isAdmin())
        {
            $artiste = new Artiste();
            $form=$this->createForm(ArtisteType::class,$artiste);
            $form->add('Ajouter', SubmitType::class);
            $form->handleRequest($request);
            if($form->isSubmitted() && $form->isValid()){

                $em=$this->getDoctrine()->getManager();
                $em->persist($artiste);
                $em->flush();
                return  $this->redirectToRoute('AfficherArtistes');
            }
            return $this->render('artiste/ajouter.html.twig',[
                'form'=>$form->createView()
            ]);
        }

        return $this->redirectToRoute('app_login');


    }

    /**
     * @route ("ModifierArtiste/{id}",name="ModifierArtiste")
     */
    function ModifierArtiste(ArtisteRepository  $repository, $id, Request $request){

        if($this->getUser()->isAdmin())
        {
            $artiste=$repository->find($id);
            $form=$this->createForm(ArtisteType::class, $artiste);
            $form->add('Modifier',SubmitType::class);
            $form->handleRequest($request);
            if ($form->isSubmitted() && $form->isValid()){
                $em=$this->getDoctrine()->getManager();
                $em->flush();
                return $this->redirectToRoute("AfficherArtistes");
            }
            return $this->render('artiste/modifier.html.twig',[
                'form'=>$form->createView()
            ]);
        }

        return $this->redirectToRoute('app_login');


    }


    /**
     * @route("/StatistiquesArtistes", name="StatistiquesArtistes")
     */
    public function StatistiquesArtistes(ArtisteRepository $repository){

        if($this->getUser()->isAdmin())
        {
            $artistes=$repository->findAll();
            return $this->render('artiste/statistiques.html.twig',
                ['artistes'=>$artistes ]);
        }

        return $this->redirectToRoute('app_login');

    }






}
