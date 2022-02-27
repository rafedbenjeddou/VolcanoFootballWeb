<?php

namespace App\Controller;

use App\Entity\Billet;
use App\Form\BilletType;
use App\Service\Mailer;
use App\Repository\BilletRepository;
use App\Repository\MatcheRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class BilletController extends AbstractController
{
    /**
     * @Route("/billet", name="billet")
     */
    public function index(): Response
    {
        return $this->render('billet/index.html.twig', [
            'controller_name' => 'BilletController',
        ]);
    }
    /**
     * @param BilletRepository $repository
     * @return Response
     * @route("/AfficheB", name="AfficheBillet")
     */
    public function Affiche(BilletRepository $repository){
        $billet=$repository->findAll();
        return $this->render('billet/Affiche.html.twig',
            ['billet'=>$billet]);
    }
    /**
     * @param BilletRepository $repository
     * @return Response
     * @route("/AfficheUnB", name="AfficheUnBillet")
     */
    public function Afficheunbillet(BilletRepository $repository){
        $billet=$repository->findAll();
        return $this->render('billet/AfficherUnBillet.html.twig',
            ['billet'=>$billet]
        );

    }
    /**
     * @route("/delete/{id}",name="supprimerbillet")
     */
    function Delete_billet($id,BilletRepository $repository){
        $billet=$repository->find($id);
        $em=$this->getDoctrine()->getManager();
        $em->remove($billet);
        $em->flush();
        $this->addFlash(
            'info',
            'Deleted Successfully'
        );
        return $this->redirectToRoute('AfficheBillet');
    }

    /**
     * @param Request $request
     * @return Response
     * @route("billet/ajouter")
     */
    function Ajouter_billet(Request $request){
        $billet = new Billet();
        $form=$this->createForm(BilletType::class,$billet);
        $form->add('ajouter',SubmitType::class);
        $form->handleRequest($request);
        if($form->isSubmitted() && $form->isValid()){
            $em=$this->getDoctrine()->getManager();
            $em->persist($billet);
            $em->flush();
            $this->addFlash(
                'info',
                'Added Successfully'
            );
            return  $this->redirectToRoute('AfficheBillet');
        }
        return $this->render('billet/Ajouter.html.twig',[
            'form'=>$form->createView()
        ]);
    }
    /**
    * @route("/update/{id}",name="modifierbillet")
    */
    function Update(BilletRepository  $repository,$id,Request $request){
        $billet=$repository->find($id);
        $form=$this->createForm(BilletType::class,$billet);
        $form->add('Update',SubmitType::class);
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()){
            $em=$this->getDoctrine()->getManager();
            $em->flush();
            $this->addFlash(
                'info',
                'Updated Successfully'
            );
            return $this->redirectToRoute("AfficheBillet");
        }
        return $this->render('billet/Update.html.twig',[
            'form'=>$form->createView()
        ]);
    }

    /**
     * @route("/ReserverTicket", name="ReserverTicket")
     */
    function ReserverTicket(Mailer $mailer){

        $mailer->sendEmailTicket("yosra.mekaoui@esprit.tn");
        $this->addFlash("success", "Réservation effectuée avec succès! Merci de consulter votre mail");
        return  $this->redirectToRoute('AfficheUnMatche');
    }
}

