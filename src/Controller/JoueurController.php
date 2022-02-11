<?php

namespace App\Controller;

use App\Entity\Joueur;
use App\Form\JoueurType;
use App\Repository\EquipeRepository;
use App\Repository\JoueurRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Request;


class JoueurController extends AbstractController
{
    /**
     * @Route("/joueur", name="joueur")
     */
    public function index(): Response
    {
        return $this->render('joueur/index.html.twig', [
            'controller_name' => 'JoueurController',
        ]);
    }

    /**
     * @param JoueurRepository $repository
     * @return Response
     * @route("/AfficheJ", name="AfficheJoueur")
     */
    public function Affiche(JoueurRepository $repository){
        $joueur=$repository->findAll();
        return $this->render('joueur/Affiche.html.twig',
            ['joueur'=>$joueur]);
    }
    /**
     * @param JoueurRepository $repository
     * @return Response
     * @route("/AfficheUnJ", name="AfficheUnJoueur")
     */
    public function Afficheunjoueur(JoueurRepository $repository){
        $joueur=$repository->findAll();
        return $this->render('joueur/Afficherunjoueur.html.twig',
            ['joueur'=>$joueur]);
    }


    /**
     * @route("/delete/{id}",name="delete")
     */
    function Delete_joueur($id,JoueurRepository $repository){
        $joueur=$repository->find($id);
        $em=$this->getDoctrine()->getManager();
        $em->remove($joueur);
        $em->flush();
        return $this->redirectToRoute('AfficheJoueur');
    }

    /**
     * @param Request $request
     * @return Response
     * @route("joueur/ajouter",name="AjouterJoueur")
     */
    function Ajouter_joueur(EquipeRepository $equipeRepository,Request $request){
        $joueur = new Joueur();
        $equipe=$equipeRepository->findAll();
        $form=$this->createForm(JoueurType::class,$joueur);
        $form->add('ajouter',SubmitType::class);
        $form->handleRequest($request);
        if($form->isSubmitted() && $form->isValid()){
            $em=$this->getDoctrine()->getManager();
            $em->persist($joueur);
            $em->flush();
            return  $this->redirectToRoute('AfficheJoueur');
        }
        return $this->render('joueur/Ajouter.html.twig',[
            'equipe'=>$equipe,
           'form'=>$form->createView()
        ]);
    }
    /**
     * @route ("joueur/update/{id}",name="update")
     */
    function Update(JoueurRepository  $repository,$id,Request $request){
        $joueur=$repository->find($id);
        $form=$this->createForm(JoueurType::class,$joueur);
        $form->add('Update',SubmitType::class);
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()){
            $em=$this->getDoctrine()->getManager();
            $em->flush();
            return $this->redirectToRoute("AfficheJoueur");
        }
        return $this->render('joueur/Update.html.twig',[
            'form'=>$form->createView()
        ]);
    }
}
