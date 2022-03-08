<?php

namespace App\Controller;

use App\Entity\Hebergement;
use App\Entity\Reservation;
use App\Entity\Agence;
use App\Entity\User;

use App\Form\ReservationfrontType;
use App\Form\HebergementType;
use App\Form\HebergementUpType;

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

        if($this->getUser()->isAdmin())
        {
            $hebergement=$repo->findAll();
            return $this->render('hebergement/Affiche.html.twig',
                ['hebergement'=>$hebergement]);
        }

        return $this->redirectToRoute('app_login');

    }

        /**
     * @param Request $request
     * @Route("/AddH",name="AddH")
     */
    function Add(Request $request){

        if($this->getUser()->isAdmin())
        {
            $hebergement=new Hebergement();
            $form=$this->createForm(HebergementType::class,$hebergement);
            $form->add('Ajouter', SubmitType::class);

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

        return $this->redirectToRoute('app_login');

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

        if($this->getUser()->isAdmin())
        {
            $hebergement=$repo->find($id);
            $form=$this->createForm(HebergementUpType::class,$hebergement);
            $form->add('Update', SubmitType::class);
            $form->handleRequest($request);
            if($form->isSubmitted() && $form->isValid()){
                $file = $form['photoH']->getData();

                if($file)
                {
                    $uploads_directory = $this->getParameter('upload_directory');
                    $fileName = md5(uniqid()).'.'.$file->guessExtension();
                    $file->move(
                        $uploads_directory,
                        $fileName
                    );

                    $hebergement->setPhotoH($fileName);
                }
                else
                {
                    $hebergement->setPhotoH($hebergement->getPhotoH());
                }
                $em=$this->getDoctrine()->getManager();
                $em->flush();
                return $this->redirectToRoute('AfficheH');
            }
            return $this->render('hebergement/Update.html.twig',[
                'f'=>$form->createView()
            ]);
        }

        return $this->redirectToRoute('app_login');


        }

  /**
     * @Route("/AddByHebergement/{id}", name="AddByHebergement" )
     */
    
    function AddReservationByHebergement(HebergementRepository $repoH, ReservationRepository $repoR, $id,Request $request){
        $hebergement=$repoH->find($id);
        $reservation=new Reservation();

      
        $form=$this->createForm(ReservationfrontType::class,$reservation);
        $form->add('Reserver', SubmitType::class);

        $form->handleRequest($request);

        if($form->isSubmitted() && $form->isValid()){
            $date= new \DateTime('now');
            $dateDebut=$reservation->getDateDebut();
            $dateFin=$reservation->getDateFin();

            $nbJoursD =$dateDebut->diff($date)->days;
            $nbJoursF =$dateFin->diff($date)->days;
            if($nbJoursF >= 1 && $nbJoursF >= 1 && $dateDebut > $date && $dateFin > $date &&  $dateFin > $dateDebut) {
            $em=$this->getDoctrine()->getManager();
            $reservation->setHebergement($hebergement);
            $reservation->setUser($this->getUser());

            $em->persist($reservation);
            $em->flush();
            return $this->redirectToRoute('sendEmailHebergement');
            }
                $erreur="Changer la date ";
                return $this->render('hebergement/ErreurF.html.twig',[
                    'form'=>$form->createView(),
                    'error'=>$erreur,
                    'nbjoursD'=>$nbJoursD,
                    'nbjoursF'=>$nbJoursF,
                    'date'=>$date,
                    'dateDebut'=>$dateDebut,
                    'dateFin'=>$dateFin,

                ]);
        }
        return $this->render('hebergement/AddRF.html.twig',[
            'form1'=>$form->createView()
        ]);
        
    }  
   
    
     /**
     * @Route("/AfficheRF", name="AfficheRF")
     */
     
    public function AfficheRF(ReservationRepository $repo) {
        $reservation=$repo->findBy(["user" => $this->getUser()]);
        return $this->render('hebergement/AfficheRF.html.twig',
        ['reservation'=>$reservation]);
    }
       
 
}
