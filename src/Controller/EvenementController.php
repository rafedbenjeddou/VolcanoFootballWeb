<?php

namespace App\Controller;

use App\Entity\Evenement;
use App\Form\EvenementType;
use App\Repository\ArtisteRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Repository\EvenementRepository;
use Symfony\Component\HttpFoundation\File\File;
use Dompdf\Dompdf;
use Dompdf\Options;


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
     * @route("/AfficherEvenements", name="AfficherEvenements")
     */
    public function AfficherEvenements(EvenementRepository $repository){

        if($this->getUser()->isAdmin())
        {
            $evenements=$repository->findAll();
            return $this->render('evenement/afficher.html.twig',
                ['evenements'=>$evenements ]);
        }

        return $this->redirectToRoute('app_login');
    }

    /**
     * @route("/SupprimerEvenement/{id}",name="SupprimerEvenement")
     */
    function SupprimerEvenement($id, EvenementRepository $repository){

        if($this->getUser()->isAdmin())
        {
            $evenement=$repository->find($id);
            $em=$this->getDoctrine()->getManager();
            $em->remove($evenement);
            $em->flush();
            return $this->redirectToRoute('AfficherEvenements');
        }

        return $this->redirectToRoute('app_login');

    }

    /**
     * @route("/AjouterEvenement", name="AjouterEvenement")
     */
    function AjouterEvenement(Request $request){

        if($this->getUser()->isAdmin())
        {
            $evenement = new Evenement();
            $form=$this->createForm(EvenementType::class,$evenement);
            $form->add('Ajouter', SubmitType::class);
            $form->handleRequest($request);
            if($form->isSubmitted() && $form->isValid()){

                $em=$this->getDoctrine()->getManager();

                $em->persist($evenement);
                $em->flush();
                return  $this->redirectToRoute('AfficherEvenements');
            }
            return $this->render('evenement/ajouter.html.twig',[
                'form'=>$form->createView()
            ]);
        }

        return $this->redirectToRoute('app_login');


    }

    /**
     * @route ("ModifierEvenement/{id}",name="ModifierEvenement")
     */
    function ModifierEvenement(EvenementRepository  $repository, $id, Request $request){

        if($this->getUser()->isAdmin())
        {
            $evenement=$repository->find($id);
            $form=$this->createForm(EvenementType::class, $evenement);
            $form->add('Modifier',SubmitType::class);
            $form->handleRequest($request);
            if ($form->isSubmitted() && $form->isValid()){
                $em=$this->getDoctrine()->getManager();
                $em->flush();
                return $this->redirectToRoute("AfficherEvenements");
            }
            return $this->render('evenement/modifier.html.twig',[
                'form'=>$form->createView()
            ]);
        }

        return $this->redirectToRoute('app_login');


    }

    /**
     * @Route("/DownloadEvenementsData", name="DownloadEvenementsData")
     */
    public function DownloadEvenementsData(EvenementRepository $repository)
    {
        $evenements=$repository->findAll();

        // On définit les options du PDF
        $pdfOptions = new Options();
        // Police par défaut
        $pdfOptions->set('defaultFont', 'Arial');
        $pdfOptions->setIsRemoteEnabled(true);

        // On instancie Dompdf
        $dompdf = new Dompdf($pdfOptions);
        $context = stream_context_create([
            'ssl' => [
                'verify_peer' => FALSE,
                'verify_peer_name' => FALSE,
                'allow_self_signed' => TRUE
            ]
        ]);
        $dompdf->setHttpContext($context);

        // On génère le html
        $html = $this->renderView('evenement/download.html.twig',
            ['evenements'=>$evenements ]);


        $dompdf->loadHtml($html);
        $dompdf->setPaper('A4', 'portrait');
        $dompdf->render();

        // On génère un nom de fichier
        $fichier = 'Tableau des Produits.pdf';

        // On envoie le PDF au navigateur
        $dompdf->stream($fichier, [
            'Attachment' => true
        ]);

        return new Response();
    }

    /**
     * @Route("/AfficherEvenementsFront", name="AfficherEvenementsFront")
     */
    public function AfficherEvenementsFront(EvenementRepository $repository){

        $evenements=$repository->findAll();
        return $this->render('evenement/AfficherFront.html.twig',
            ['evenements'=>$evenements ]);

    }



}
