<?php

namespace App\Controller;

use App\Entity\Matche;
use App\Form\MatcheType;
use App\Repository\MatcheRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class MatcheController extends AbstractController
{
    /**
     * @Route("/matche", name="matche")
     */
    public function index(): Response
    {
        return $this->render('matche/index.html.twig', [
            'controller_name' => 'MatcheController',
        ]);
    }

/**
 * @param MatcheRepository $repository
 * @return Response
 * @route("/AfficheM", name="AfficheMatche")
 */
public function Affiche(MatcheRepository $repository){
    $matche=$repository->findAll();
    return $this->render('matche/Affiche.html.twig',
        ['matche'=>$matche]);
}

/**
 * @route("/deleteMatche/{id}",name="deleteMatche")
 */
function Delete_matche($id,MatcheRepository $repository){
    $matche=$repository->find($id);
    $em=$this->getDoctrine()->getManager();
    $em->remove($matche);
    $em->flush();
    return $this->redirectToRoute('AfficheMatche');
}

/**
 * @param Request $request
 * @return Response
 * @route("matche/ajouter")
 */
function Ajouter_matche(Request $request){
    $matche = new Matche();
    $form=$this->createForm(MatcheType::class,$matche);
    $form->add('ajouter',SubmitType::class);
    $form->handleRequest($request);
    if($form->isSubmitted() && $form->isValid()){
        $em=$this->getDoctrine()->getManager();
        $em->persist($matche);
        $em->flush();
        return  $this->redirectToRoute('AfficheMatche');
    }
    return $this->render('matche/Ajouter.html.twig',[
        'form'=>$form->createView()
    ]);
}
/**
 * @route ("updatematch/{id}",name="modifier")
 */
function Update(MatcheRepository  $repository,$id,Request $request){
    $matche=$repository->find($id);
    $form=$this->createForm(MatcheType::class,$matche);
    $form->add('Update',SubmitType::class);
    $form->handleRequest($request);
    if ($form->isSubmitted() && $form->isValid()){
        $em=$this->getDoctrine()->getManager();
        $em->flush();
        return $this->redirectToRoute("AfficheMatche");
    }
    return $this->render('matche/Update.html.twig',[
        'form'=>$form->createView()
    ]);
}
}

