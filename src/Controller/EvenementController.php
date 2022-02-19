<?php

namespace App\Controller;

use App\Entity\Evenement;
use App\Form\EvenementType;
use App\Repository\EvenementRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class EvenementController extends AbstractController
{
    /**
     * @Route("/evenement", name="evenement")
     */
    public function index(): Response
    {
        return $this->render('evenement/index.html.twig', [
            'controller_name' => 'EvenementController',
        ]);
    }

    /**
     * @param EvenementRepository $repository
     * @return Response
     * @route("/AfficheEv", name="AfficheEvenement")
     */
    public function Affiche(EvenementRepository $repository){
        $evenement=$repository->findAll();
        return $this->render('evenement/Affiche.html.twig',
            ['evenement'=>$evenement]);
    }

    /**
     * @param EvenementRepository $repository
     * @return Response
     * @route("/AfficheUnEv", name="AfficheUnEvenement")
     */
    public function AfficheUnEvenement(EvenementRepository $repository){
        $evenement=$repository->findAll();
        return $this->render('evenement/AfficheUnEvent.html.twig',
            ['evenement'=>$evenement]);
    }

    /**
     * @route("/delete/{id}",name="deleteEvenement")
     */
    function Delete($id,EvenementRepository $repository){
        $evenement=$repository->find($id);
        $em=$this->getDoctrine()->getManager();
        $em->remove($evenement);
        $em->flush();
        return $this->redirectToRoute('AfficheEvenement');
    }

    /**
     * @param Request $request
     * @return Response
     * @route("evenement/ajouter")
     */
    function Ajouter(Request $request){
        $evenement = new Evenement();
        $form=$this->createForm(EvenementType::class,$evenement);
        $form->add('ajouter',SubmitType::class);
        $form->handleRequest($request);
        if($form->isSubmitted() && $form->isValid()){
            $em=$this->getDoctrine()->getManager();
            $em->persist($evenement);
            $em->flush();
            return  $this->redirectToRoute('AfficheEvenement');
        }
        return $this->render('evenement/Ajouter.html.twig',[
            'form'=>$form->createView()
        ]);
    }
    /**
     * @route ("evenement/update/{id}",name="modifierEvenement")
     */
    function Update(EvenementRepository  $repository,$id,Request $request){
        $evenement=$repository->find($id);
        $form=$this->createForm(EvenementType::class,$evenement);
        $form->add('Update',SubmitType::class);
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()){
            $em=$this->getDoctrine()->getManager();
            $em->flush();
            return $this->redirectToRoute("AfficheEvenement");
        }
        return $this->render('evenement/Update.html.twig',[
            'form'=>$form->createView()
        ]);
    }
}
