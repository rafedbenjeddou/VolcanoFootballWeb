<?php

namespace App\Controller;

use App\Entity\Matche;
use App\Form\MatcheType;
use App\Repository\BilletRepository;
use App\Repository\MatcheRepository;
use App\Repository\StadeRepository;
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
     * @param MatcheRepository $repository
     * @return Response
     * @route("/AfficheUnM", name="AfficheUnMatche")
     */
    public function Afficheunmatche(MatcheRepository $repository){
        $matche=$repository->findAll();
        return $this->render('matche/AfficherUnMatch.html.twig',
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
    $this->addFlash(
        'info',
        'Deleted Successfully'
    );
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
        $this->addFlash(
            'info',
            'Added Successfully'
        );
        return  $this->redirectToRoute('AfficheMatche');
    }
    return $this->render('matche/Ajouter.html.twig',[
        'form'=>$form->createView()
    ]);
}
/**
 * @route ("updatematch/{id}",name="modifierMatche")
 */
function Update(MatcheRepository  $repository,$id,Request $request){
    $matche=$repository->find($id);
    $form=$this->createForm(MatcheType::class,$matche);
    $form->add('Update',SubmitType::class);
    $form->handleRequest($request);
    if ($form->isSubmitted() && $form->isValid()){
        $em=$this->getDoctrine()->getManager();
        $em->flush();
        $this->addFlash(
            'info',
            'Updated Successfully'
        );
        return $this->redirectToRoute("AfficheMatche");
    }
    return $this->render('matche/Update.html.twig',[
        'form'=>$form->createView()
    ]);
}
    /**
     * @Route("/ListByMatche/{id}", name="ListByMatche", methods={"GET"})
     */
    function ListHebergementByAgence(MatcheRepository $repoM, BilletRepository $repoB, $id){
        $matche=$repoM->find($id);
        $billet=$repoB->ListBilletByMatche($matche->getId());
        return $this->render("matche/Show.html.twig", [
            'a'=>$matche, 'billet'=>$billet
        ]);

    }
}

