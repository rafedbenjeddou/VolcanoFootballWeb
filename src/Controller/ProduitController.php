<?php

namespace App\Controller;

use App\Entity\Produit;
use App\Form\ProduitType;
use App\Form\ProduitEditType;
use App\Repository\ProduitRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\File\UploadedFile;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Session\SessionInterface;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\HttpFoundation\File\File;
use Dompdf\Dompdf;
use Dompdf\Options;


class ProduitController extends AbstractController
{

    /**
     * @param ProduitRepository $repository
     * @return Response
     * @route("/AfficherProduit", name="AfficherProduit")
     */
    public function AfficherProduit(ProduitRepository $repository){

        if($this->getUser()->isAdmin())
        {
            $produit=$repository->findAll();
            return $this->render('produit/afficher.html.twig',
                ['produit'=>$produit, 'user' => $this->getUser()->getUsername() ]);
        }

        return $this->redirectToRoute('app_login');

    }

    /**
     * @route("/SupprimerProduit/{id}",name="SupprimerProduit")
     */
    function SupprimerProduit($id, ProduitRepository $repository){

        if($this->getUser()->isAdmin())
        {
            $produit=$repository->find($id);
            $em=$this->getDoctrine()->getManager();
            $em->remove($produit);
            $em->flush();
            return $this->redirectToRoute('AfficherProduit');
        }

        return $this->redirectToRoute('app_login');


    }

    /**
     * @param Request $request
     * @return Response
     * @route("/AjouterProduit", name="AjouterProduit")
     */
    function AjouterProduit(Request $request){

        if($this->getUser()->isAdmin())
        {
            $produit = new Produit();
            $form=$this->createForm(ProduitType::class,$produit);
            $form->add('Ajouter', SubmitType::class);
            $form->handleRequest($request);
            if($form->isSubmitted() && $form->isValid()){
                $file = $produit->getPhoto();
                $uploads_directory = $this->getParameter('upload_directory');
                $fileName = md5(uniqid()).'.'.$file->guessExtension();
                $file->move(
                    $uploads_directory,
                    $fileName
                );

                $produit->setPhoto($fileName);
                $em=$this->getDoctrine()->getManager();

                $em->persist($produit);
                $em->flush();
                return  $this->redirectToRoute('AfficherProduit');
            }
            return $this->render('produit/ajouter.html.twig',[
                'form'=>$form->createView(), 'user' => $this->getUser()->getUsername()
            ]);
        }

        return $this->redirectToRoute('app_login');


    }

    /**
     * @route ("ModifierProduit/{id}",name="ModifierProduit")
     */
    function ModifierProduit(ProduitRepository  $repository, $id, Request $request){


        if($this->getUser()->isAdmin())
        {
            $produit=$repository->find($id);
            $form=$this->createForm(ProduitEditType::class, $produit);
            $form->add('Modifier',SubmitType::class);
            $form->handleRequest($request);
            if ($form->isSubmitted() && $form->isValid()){

                $file = $form['photo']->getData();

                if($file)
                {
                    $uploads_directory = $this->getParameter('upload_directory');
                    $fileName = md5(uniqid()).'.'.$file->guessExtension();
                    $file->move(
                        $uploads_directory,
                        $fileName
                    );

                    $produit->setPhoto($fileName);
                }
                else
                {
                    $produit->setPhoto($produit->getPhoto());
                }
                $em=$this->getDoctrine()->getManager();
                $em->flush();
                return $this->redirectToRoute("AfficherProduit");
            }
            return $this->render('produit/modifier.html.twig',[
                'form'=>$form->createView(), 'user' => $this->getUser()->getUsername()
            ]);
        }

        return $this->redirectToRoute('app_login');


    }

    /**
     * @param ProduitRepository $repository
     * @return Response
     * @route("/StatistiquesProduits", name="StatistiquesProduits")
     */
    public function StatistiquesProduits(ProduitRepository $repository){

        if($this->getUser()->isAdmin())
        {
            $produit=$repository->findAll();
            return $this->render('produit/statistiques.html.twig',
                ['produit'=>$produit, 'user' => $this->getUser()->getUsername() ]);
        }

        return $this->redirectToRoute('app_login');

    }

    /**
     * @Route("/DownloadProduitsData", name="DownloadProduitsData")
     */
    public function DownloadProduitsData(ProduitRepository $repository)
    {
        $produits=$repository->findAll();

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
        $html = $this->renderView('produit/download.html.twig',
            ['produits'=>$produits ]);


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




    //---------------------------------------------------------------------------------------------------------

    /**
     * @param ProduitRepository $repository
     * @return Response
     * @route("/AfficherProduitsFront", name="AfficherProduitsFront")
     */
    public function AfficherProduitsFront(ProduitRepository $repository, SessionInterface $session){
        $produit=$repository->findAll();
        $panier = $session->get('panier', []);
        return $this->render('produit/afficherFront.html.twig',
            ['produit'=>$produit, 'panier'=>$panier]  );
    }

    /**
     * @route("AfficherProduitsCouleur/{couleur}", name="AfficherProduitsCouleur")
     */
    public function AfficherProduitsCouleur(ProduitRepository $repository, $couleur, SessionInterface $session){
        $produit=$repository->findBy(["couleur" => $couleur]);
        $panier = $session->get('panier', []);
        return $this->render('produit/afficherFront.html.twig', [
            'produit'=>$produit, 'panier'=>$panier
        ]);
    }

    /**
     * @route("AfficherProduitsTaille/{taille}", name="AfficherProduitsTaille")
     */
    public function AfficherProduitsTaille(ProduitRepository $repository, $taille, SessionInterface $session){
        $produit=$repository->findBy(["taille" => $taille]);
        $panier = $session->get('panier', []);
        return $this->render('produit/afficherFront.html.twig', [
            'produit'=>$produit, 'panier'=>$panier
        ]);
    }


    /**
     * @route("AfficherProduitsTrierPrixASC", name="AfficherProduitsTrierPrixASC")
     */
    public function AfficherProduitsTrierPrixASC(ProduitRepository $repository, SessionInterface $session){
        $produit=$repository->OrderByPrixASC();
        $panier = $session->get('panier', []);
        return $this->render('produit/afficherFront.html.twig', [
            'produit'=>$produit, 'panier'=>$panier
        ]);
    }

    /**
     * @route("AfficherProduitsTrierPrixDESC", name="AfficherProduitsTrierPrixDESC")
     */
    public function AfficherProduitsTrierPrixDESC(ProduitRepository $repository, SessionInterface $session){
        $produit=$repository->OrderByPrixDESC();
        $panier = $session->get('panier', []);
        return $this->render('produit/afficherFront.html.twig', [
            'produit'=>$produit, 'panier'=>$panier
        ]);
    }

    /**
     * @route("AfficherProduitsTrierNbrEtoilesASC", name="AfficherProduitsTrierNbrEtoilesASC")
     */
    public function AfficherProduitsTrierNbrEtoilesASC(ProduitRepository $repository, SessionInterface $session){
        $produit=$repository->OrderByNbrEtoilesASC();
        $panier = $session->get('panier', []);
        return $this->render('produit/afficherFront.html.twig', [
            'produit'=>$produit, 'panier'=>$panier
        ]);
    }

    /**
     * @route("AfficherProduitsTrierNbrEtoilesDESC", name="AfficherProduitsTrierNbrEtoilesDESC")
     */
    public function AfficherProduitsTrierNbrEtoilesDESC(ProduitRepository $repository, SessionInterface $session){
        $produit=$repository->OrderByNbrEtoilesDESC();
        $panier = $session->get('panier', []);
        return $this->render('produit/afficherFront.html.twig', [
            'produit'=>$produit, 'panier'=>$panier
        ]);
    }


}
