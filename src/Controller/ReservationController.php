<?php

namespace App\Controller;

use App\Entity\Reservation;
use App\Repository\ReservationRepository;
use Symfony\Component\HttpFoundation\Request;
use App\Form\ReservationType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ReservationController extends AbstractController
{
    /**
     * @Route("/reservation", name="reservation")
     */
    public function index(): Response
    {
        return $this->render('reservation/index.html.twig', [
            'controller_name' => 'ReservationController',
        ]);
    }
            /**
     * @Route("/AfficheR", name="AfficheR")
     */
    public function Affiche(ReservationRepository $repo) {
       
        $reservation=$repo->findAll();
        return $this->render('reservation/Affiche.html.twig',
        ['reservation'=>$reservation]);
    }
    /**
     * @param Request $request
     * @Route("/AddR",name="AddR")
     */
    function Add(Request $request){
        $reservation=new Reservation();
        $form=$this->createForm(ReservationType::class,$reservation);
        $form->handleRequest($request);
        if($form->isSubmitted() && $form->isValid()){
            $em=$this->getDoctrine()->getManager();
            $em->persist($reservation);
            $em->flush();
            return $this->redirectToRoute('AfficheR');
        }
        return $this->render('reservation/Add.html.twig',[
            'form'=>$form->createView()
        ]);
    
    }
    /**
     * @param Request $request
     * @Route("/AddRF",name="AddRF")
     */
    /*
    function AddRF(Request $request){
        $reservation=new Reservation();
        $form=$this->createForm(ReservationType::class,$reservation);
        $form->handleRequest($request);
        if($form->isSubmitted() && $form->isValid()){
            $em=$this->getDoctrine()->getManager();
            $em->persist($reservation);
            $em->flush();
            return $this->redirectToRoute('AfficheR');
        }
        return $this->render('reservation/AddRF.html.twig',[
            'form'=>$form->createView()
        ]);
    
    }
    */
        /**
     * @Route("/UpdateR/{id}", name="UpdateR")
     */
    function Update(ReservationRepository $repo, $id,Request $request){
        $reservation=$repo->find($id);
        $form=$this->createForm(ReservationType::class,$reservation);
        $form->add('Update', SubmitType::class);
        $form->handleRequest($request);
        if($form->isSubmitted() && $form->isValid()){
            $em=$this->getDoctrine()->getManager();
            $em->flush();
            return $this->redirectToRoute('AfficheR');
        }
        return $this->render('reservation/Update.html.twig',[
            'f'=>$form->createView()
        ]);
        }
         /**
 * @Route("/deleteR/{id}",name="deleteR")
 */
 function delete($id, ReservationRepository $repo){
    $reservation=$repo->find($id);
    $em=$this->getDoctrine()->getManager();
    $em->remove($reservation);
    $em->flush();
    return $this->redirectToRoute('AfficheR');
        }

}



