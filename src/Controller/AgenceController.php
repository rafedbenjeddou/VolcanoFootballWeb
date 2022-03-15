<?php

namespace App\Controller;

use App\Entity\Agence;
use App\Repository\AgenceRepository;
use App\Repository\HebergementRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use App\Form\AgenceType;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;

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
     * @Route("/AfficheAF", name="AfficheAgenceAF")
     */
    public function AfficheAF(AgenceRepository $repo) {
        $agence=$repo->findAll();
        return $this->render('agence/AfficheAF.html.twig',
        ['agence'=>$agence]);
    }
        /**
     * @Route("/AfficheA", name="AfficheAgence")
     */
    public function Affiche(AgenceRepository $repo) {

        if($this->getUser()->isAdmin())
        {
            $agence=$repo->findAll();
            return $this->render('agence/Affiche.html.twig',
                ['agence'=>$agence]);
        }

        return $this->redirectToRoute('app_login');


    }
    /**
     * @param Request $request
     * @Route("/AddA", name="AddA")
     */
    function Add(Request $request){

        if($this->getUser()->isAdmin())
        {
            $agence=new Agence();
            $form=$this->createForm(AgenceType::class,$agence);
            $form->add('Ajouter', SubmitType::class);

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

        return $this->redirectToRoute('app_login');

    }

     /**
     * @Route("/sup/{id}",name="deleteAgence")
     */
    function delete($id, AgenceRepository $repo){

        if($this->getUser()->isAdmin())
        {
            $agence=$repo->find($id);
            $em=$this->getDoctrine()->getManager();
            $em->remove($agence);
            $em->flush();
            return $this->redirectToRoute('AfficheAgence');
        }

        return $this->redirectToRoute('app_login');



   } 
    /**
     * @Route("/UpdateA/{id}", name="Update")
     */
    function Update(AgenceRepository $repo, $id,Request $request){

        if($this->getUser()->isAdmin())
        {
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

        return $this->redirectToRoute('app_login');



        }
        
     /**
     * @Route("/ListByAgence/{id}", name="ListByAgence", methods={"GET"})
     */
   function ListHebergementByAgence(AgenceRepository $repoA, HebergementRepository $repoH, $id){
    $agence=$repoA->find($id);
    $hebergement=$repoH->ListHebergementByAgence($agence->getId());
    return $this->render("agence/Show.html.twig", [
        'a'=>$agence, 'hebergement'=>$hebergement
    ]);
    
}


   /**
     * @Route("/All", name="AfficheAgenceApi")
     */
    public function AfficheApi(AgenceRepository $repo,NormalizerInterface $Normalizer) {
        $agence=$repo->findAll();

        $jsonContent=$Normalizer->normalize($agence,'json',['groups'=>'post:read']);
       

        return new Response(json_encode($jsonContent));

    }




}