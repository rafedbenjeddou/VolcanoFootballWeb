<?php

namespace App\Controller;

use App\Entity\Agence;
use App\Repository\AgenceRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use App\Form\AgenceType;

class AgenceController extends AbstractController
{
    /**
     * @Route("/agence", name="agence")
     */
    public function index(): Response
    {
        return $this->render('agence/index.html.twig', [
            'controller_name' => 'AgenceController',
        ]);
    }
        /**
     * @Route("/AfficheA", name="AfficheAgence")
     */
    public function Affiche(AgenceRepository $repo) {
        $agence=$repo->findAll();
        return $this->render('agence/Affiche.html.twig',
        ['agence'=>$agence]);
    }
    /**
     * @param Request $request
     * @Route("agence/Add", name="AddA")
     */
    function Add(Request $request){
        $agence=new Agence();
        $form=$this->createForm(AgenceType::class,$agence);
        $form->handleRequest($request);
        if($form->isSubmitted() && $form->isValid()){
            $em=$this->getDoctrine()->getManager();
            $em->persist($agence);
            $em->flush();
            return $this->redirectToRoute('AfficheAgence');
        }
        return $this->render('agence/Add.html.twig',[
            'form'=>$form->createView()
        ]);
    
    }
     /**
     * @Route("/sup/{id}",name="deleteAgence")
     */
    function delete($id, AgenceRepository $repo){
        $agence=$repo->find($id);
        $em=$this->getDoctrine()->getManager();
        $em->remove($agence);
        $em->flush();
        return $this->redirectToRoute('AfficheAgence');

   } 
    /**
     * @Route("agence/UpdateA/{id}", name="Update")
     */
    function Update(AgenceRepository $repo, $id,Request $request){
        $agence=$repo->find($id);
        $form=$this->createForm(AgenceType::class,$agence);
        $form->add('Update', SubmitType::class);
        $form->handleRequest($request);
        if($form->isSubmitted() && $form->isValid()){
            $em=$this->getDoctrine()->getManager();
            $em->flush();
            return $this->redirectToRoute('AfficheAgence');
        }
        return $this->render('agence/Update.html.twig',[
            'f'=>$form->createView()
        ]);
        }
}
