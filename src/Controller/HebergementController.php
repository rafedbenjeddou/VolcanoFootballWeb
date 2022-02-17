<?php

namespace App\Controller;

use App\Entity\Hebergement;
use App\Entity\Reservation;
use App\Entity\Agence;
use App\Form\ReservationfrontType;
use App\Form\HebergementType;
use App\Repository\HebergementRepository;
use App\Repository\ReservationRepository;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;

class HebergementController extends AbstractController
{
    /**
     * @Route("/hebergement", name="hebergement")
     */
    public function index(): Response
    {
        return $this->render('hebergement/index.html.twig', [
            'controller_name' => 'HebergementController',
        ]);
    }
        /**
     * @Route("/AfficheH", name="AfficheH")
     */
    public function Affiche(HebergementRepository $repo) {
       
        $hebergement=$repo->findAll();
        return $this->render('hebergement/Affiche.html.twig',
        ['hebergement'=>$hebergement]);
    }
           /**
     * @Route("/AfficheHF/{id}", name="AfficheHF")
     */
    public function AfficheHF(HebergementRepository $repo, $id) {
       
        $hebergement=$repo->find($id);
        return $this->render('hebergement/AfficheHF.html.twig',
        ['hebergement'=>$hebergement]);
    }
        /**
     * @param Request $request
     * @Route("/AddH",name="AddH")
     */
    function Add(Request $request){
        $hebergement=new Hebergement();
        $form=$this->createForm(HebergementType::class,$hebergement);
        $form->handleRequest($request);
        if($form->isSubmitted() && $form->isValid()){

            $file =$hebergement->getPhotoH();
            $uploads_directory = $this->getParameter('upload_directory');
            $fileName = md5(uniqid()).'.'.$file->guessExtension();
            $file->move(
                $uploads_directory,
                $fileName
            );
            $hebergement->setPhotoH($fileName);
            $em=$this->getDoctrine()->getManager();

            $em->persist($hebergement);
            $em->flush();
            return $this->redirectToRoute('AfficheH');
        }
        return $this->render('hebergement/Add.html.twig',[
            'form'=>$form->createView()
        ]);
    
    }
    /**
 * @Route("/deleteH/{id}",name="deleteH")
 */
 function deleteS($id, HebergementRepository $repo){
    $hebergement=$repo->find($id);
    $em=$this->getDoctrine()->getManager();
    $em->remove($hebergement);
    $em->flush();
    return $this->redirectToRoute('AfficheH');

}
    /**
     * @Route("/UpdateH/{id}", name="UpdateH")
     */
    function Update(HebergementRepository $repo, $id,Request $request){
        $hebergement=$repo->find($id);
        $form=$this->createForm(HebergementType::class,$hebergement);
        $form->add('Update', SubmitType::class);
        $form->handleRequest($request);
        if($form->isSubmitted() && $form->isValid()){
            $em=$this->getDoctrine()->getManager();
            $em->flush();
            return $this->redirectToRoute('AfficheH');
        }
        return $this->render('hebergement/Update.html.twig',[
            'f'=>$form->createView()
        ]);
        }
                    /**
     * @Route("/SearchNSC", name="SearchNSC")
     */
    function SearchNSC(HebergementRepository $repo, Request $request){
        $nsc=$request->get('SearchNSC');
        $hebergement=$repo->SearchNSC($nsc);
        return $this->render('hebergement/Affiche.html.twig',
        ['hebergement'=>$hebergement]);
        
    }

  /**
     * @Route("/AddByHebergement/{id}", name="AddByHebergement" )
     */
    
    function AddReservationByHebergement(HebergementRepository $repoH, ReservationRepository $repoR, $id,Request $request){
        $hebergement=$repoH->find($id);
        $reservation=new Reservation();

      
        $form=$this->createForm(ReservationfrontType::class,$reservation);

        $form->handleRequest($request);

        if($form->isSubmitted() && $form->isValid()){
            $em=$this->getDoctrine()->getManager();
            $reservation->setHebergement($hebergement);
            $em->persist($reservation);
            $em->flush();
            return $this->redirectToRoute('AfficheR');
        }
        return $this->render('hebergement/AddRF.html.twig',[
            'form1'=>$form->createView()
        ]);
        
    }  
 
}
