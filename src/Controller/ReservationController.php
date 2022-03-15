<?php

namespace App\Controller;

use App\Entity\Reservation;
use App\Repository\ReservationRepository;
use Symfony\Component\HttpFoundation\Request;
use App\Form\ReservationType;
use App\Form\ReservationUpType;

use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use App\Service\Mailer;

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

        if($this->getUser()->isAdmin())
        {
            $reservation=$repo->findAll();
            return $this->render('reservation/Affiche.html.twig',
                ['reservation'=>$reservation]);
        }

        return $this->redirectToRoute('app_login');

    }

       
    /**
     * @param Request $request
     * @Route("/AddR",name="AddR")
     */
    function Add(Request $request){

        if($this->getUser()->isAdmin())
        {
            $reservation=new Reservation();
            $form=$this->createForm(ReservationType::class,$reservation);
            $form->add('Ajouter', SubmitType::class);

            $form->handleRequest($request);
            if($form->isSubmitted() && $form->isValid()){
                $date= new \DateTime('now');
                $dateDebut=$reservation->getDateDebut();
                $dateFin=$reservation->getDateFin();

                $nbJoursD =$dateDebut->diff($date)->days;
                $nbJoursF =$dateFin->diff($date)->days;
                if($nbJoursF >= 1 && $nbJoursD >= 1 && $dateDebut > $date && $dateFin > $date &&  $dateFin > $dateDebut) {

                    $em=$this->getDoctrine()->getManager();
                    $em->persist($reservation);
                    $em->flush();
                    return $this->redirectToRoute('AfficheR');
                }
                $erreur="Changer la date ";
                return $this->render('reservation/Erreur.html.twig',[
                    'form'=>$form->createView(),
                    'error'=>$erreur,
                    'nbjoursD'=>$nbJoursD,
                    'nbjoursF'=>$nbJoursF,
                    'date'=>$date,
                    'dateDebut'=>$dateDebut,
                    'dateFin'=>$dateFin,

                ]);

            }
            return $this->render('reservation/Add.html.twig',[
                'form'=>$form->createView()
            ]);
        }

        return $this->redirectToRoute('app_login');


    }
    

        /**
     * @Route("/UpdateR/{id}", name="UpdateR")
     */
    function Update(ReservationRepository $repo, $id,Request $request){

        if($this->getUser()->isAdmin())
        {
            $reservation=$repo->find($id);
            $form=$this->createForm(ReservationType::class,$reservation);
            $form->add('Modifier', SubmitType::class);
            $form->handleRequest($request);
            if($form->isSubmitted() && $form->isValid()){
                $date= new \DateTime('now');
                $dateDebut=$reservation->getDateDebut();
                $dateFin=$reservation->getDateFin();

                $nbJoursD =$dateDebut->diff($date)->days;
                $nbJoursF =$dateFin->diff($date)->days;
                if($nbJoursF >= 1 && $nbJoursF >= 1 && $dateDebut > $date && $dateFin > $date &&  $dateFin > $dateDebut) {
                    $em=$this->getDoctrine()->getManager();
                    $em->flush();
                    return $this->redirectToRoute('AfficheR');
                }
                $erreur="Changer la date ";
                return $this->render('reservation/Erreur.html.twig',[
                    'form'=>$form->createView(),
                    'error'=>$erreur,
                    'nbjoursD'=>$nbJoursD,
                    'nbjoursF'=>$nbJoursF,
                    'date'=>$date,
                    'dateDebut'=>$dateDebut,
                    'dateFin'=>$dateFin,

                ]);

            }
            return $this->render('reservation/Update.html.twig',[
                'f'=>$form->createView()
            ]);
        }

        return $this->redirectToRoute('app_login');

     }

         /**
          * @Route("/deleteR/{id}",name="deleteR")
        */
 function delete($id, ReservationRepository $repo){

     if($this->getUser()->isAdmin())
     {
         $reservation=$repo->find($id);
         $em=$this->getDoctrine()->getManager();
         $em->remove($reservation);
         $em->flush();
         return $this->redirectToRoute('AfficheR');
     }

     return $this->redirectToRoute('app_login');

        }
        
     /**
 * @Route("/deleteRF/{id}",name="deleteRF")
 */
 function deleteRF($id, ReservationRepository $repo){
    $reservation=$repo->find($id);
    $em=$this->getDoctrine()->getManager();
    $em->remove($reservation);
    $em->flush();
    return $this->redirectToRoute('AfficheRF');
        }
         /**
     * @Route("/UpdateRF/{id}", name="UpdateRF")
     */
    function UpdateRF(ReservationRepository $repo, $id,Request $request){
        $reservation=$repo->find($id);
        $form=$this->createForm(ReservationUpType::class,$reservation);
        $form->add('Modifier', SubmitType::class);
        $form->handleRequest($request);
        if($form->isSubmitted() && $form->isValid()){
            $em=$this->getDoctrine()->getManager();
            $reservation->setUser($this->getUser());
            $em->flush();
            return $this->redirectToRoute('AfficheRF');
        }
        
        return $this->render('reservation/UpdateRF.html.twig',[
            'f'=>$form->createView()
        ]);
        }  
        /**
     * @Route("/AfficheRF/{id}", name="AfficheRI")
     */
     
    public function AfficheRFById(ReservationRepository $repo,$id) {
        $reservation=$repo->find($id);
        return $this->render('reservation/Voucher.html.twig',
        ['reservation'=>$reservation]);
    }
    /**
     * @route("/sendEmailHebergement", name="sendEmailHebergement")
     */
    function sendEmailHebergement(Mailer $mailer){

        $mailer->sendEmailHebergement($this->getUser()->getEmail());
        return  $this->redirectToRoute('AfficheRF');
    }
}



