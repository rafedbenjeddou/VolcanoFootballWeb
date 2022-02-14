<?php

namespace App\Controller;

use App\Entity\Equipe;
use App\Form\EquipeType;
use App\Repository\EquipeRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class EquipeController extends AbstractController
{
    /**
     * @Route("/equipe", name="equipe")
     */
    public function index(): Response
    {
        return $this->render('equipe/index.html.twig', [
            'controller_name' => 'EquipeController',
        ]);
    }

    /**
     * @param EquipeRepository $repository
     * @return Response
     * @route("/AfficheE", name="AfficheEquipe")
     */
    public function Affiche(EquipeRepository $repository){
        $equipe=$repository->findAll();
        return $this->render('equipe/Affiche.html.twig',
            ['equipe'=>$equipe]);
    }
    /**
     * @param EquipeRepository $repository
     * @return Response
     * @route("/AfficheUneE", name="AfficheUneEquipe")
     */
    public function Afficheuneequipe(EquipeRepository $repository){
        $equipe=$repository->findAll();
        return $this->render('equipe/Afficheruneequipe.html.twig',
            ['equipe'=>$equipe]);
    }

    /**
     * @route("/delete/{id}",name="supprimerequipe")
     */
    function Delete_joueur($id,EquipeRepository $repository){
        $equipe=$repository->find($id);
        $em=$this->getDoctrine()->getManager();
        $em->remove($equipe);
        $em->flush();
        return $this->redirectToRoute('AfficheEquipe');
    }

    /**
     * @param Request $request
     * @return Response
     * @route("equipe/ajouter", name="AjouterEquipe")
     */
    function Ajouter_equipe(Request $request){
        $equipe = new Equipe();
        $form=$this->createForm(EquipeType::class,$equipe);
        $form->add('ajouter',SubmitType::class);
        $form->handleRequest($request);
        if($form->isSubmitted() && $form->isValid()){
            $file =$equipe->getDrapeauEquipe();
            $uploads_directory = $this->getParameter('upload_directory');
            $fileName = md5(uniqid()).'.'.$file->guessExtension();
            $file->move(
                $uploads_directory,
                $fileName
            );
            $equipe->setDrapeauEquipe($fileName);
            $em=$this->getDoctrine()->getManager();
            $em->persist($equipe);
            $em->flush();
            return  $this->redirectToRoute('AfficheEquipe');
        }
        return $this->render('equipe/Ajouter.html.twig',[
            'form'=>$form->createView()
        ]);
    }
    /**
     * @route ("equipe/update/{id}",name="modifierequipe")
     */
    function Update(EquipeRepository  $repository,$id,Request $request){
        $equipe=$repository->find($id);
        $form=$this->createForm(EquipeType::class,$equipe);
        $form->add('Update',SubmitType::class);
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()){
            $em=$this->getDoctrine()->getManager();
            $em->flush();
            return $this->redirectToRoute("AfficheEquipe");
        }
        return $this->render('equipe/Update.html.twig',[
            'form'=>$form->createView()
        ]);
    }
}
