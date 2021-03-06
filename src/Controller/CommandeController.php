<?php

namespace App\Controller;

use App\Entity\Commande;
use App\Form\CommandeFrontType;
use App\Form\CommandeType;
use App\Repository\CommandeRepository;
use App\Repository\ProduitRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Session\SessionInterface;
use Symfony\Component\Routing\Annotation\Route;

class CommandeController extends AbstractController
{
    /**
     * @Route("/commande", name="commande")
     */
    public function index(): Response
    {
        return $this->render('commande/index.html.twig', [
            'controller_name' => 'CommandeController',
        ]);
    }

    /**
     * @param CommandeRepository $repository
     * @return Response
     * @route("/AfficherCommandes", name="AfficherCommandes")
     */
    public function AfficherCommandes(CommandeRepository $repository){

        if($this->getUser()->isAdmin())
        {
            $commandes=$repository->findAll();
            return $this->render('commande/afficher.html.twig',
                ['commandes'=>$commandes, 'user' => $this->getUser()->getUsername() ]);
        }

        return $this->redirectToRoute('app_login');

    }

    /**
     * @route("/SupprimerCommande/{id}",name="SupprimerCommande")
     */
    function SupprimerCommande($id, CommandeRepository $repository){

        if($this->getUser()->isAdmin())
        {
            $commandes=$repository->find($id);
            $em=$this->getDoctrine()->getManager();
            $em->remove($commandes);
            $em->flush();
            return $this->redirectToRoute('AfficherCommandes');
        }

        return $this->redirectToRoute('app_login');


    }

    /**
     * @param Request $request
     * @return Response
     * @route("/AjouterCommande", name="AjouterCommande")
     */
    function AjouterCommande(Request $request){

        if($this->getUser()->isAdmin())
        {
            $commande = new Commande();
            $form=$this->createForm(CommandeType::class,$commande);
            $form->add('Ajouter', SubmitType::class);
            $form->handleRequest($request);
            if($form->isSubmitted() && $form->isValid()){
                $em=$this->getDoctrine()->getManager();
                $em->persist($commande);
                $em->flush();
                return  $this->redirectToRoute('AfficherCommandes');
            }
            return $this->render('commande/ajouter.html.twig',[
                'form'=>$form->createView(), 'user' => $this->getUser()->getUsername()
            ]);
        }

        return $this->redirectToRoute('app_login');


    }

    /**
     * @route ("ModifierCommande/{id}",name="ModifierCommande")
     */
    function ModifierCommande(CommandeRepository  $repository, $id, Request $request){

        if($this->getUser()->isAdmin())
        {
            $commande=$repository->find($id);
            $form=$this->createForm(CommandeType::class, $commande);
            $form->add('Modifier',SubmitType::class);
            $form->handleRequest($request);
            if ($form->isSubmitted() && $form->isValid()){
                $em=$this->getDoctrine()->getManager();
                $em->flush();
                return $this->redirectToRoute("AfficherCommandes");
            }
            return $this->render('commande/modifier.html.twig',[
                'form'=>$form->createView(), 'user' => $this->getUser()->getUsername()
            ]);
        }

        return $this->redirectToRoute('app_login');


    }

    //---------------------------------------------------------------------------------------------------------


    /**
     * @param $id
     * @param SessionInterface $session
     * @return Response
     * @route("/AjouterAuPanier/{id}", name="AjouterAuPanier")
     */
    public function AjouterAuPanier($id, SessionInterface $session)
    {

        $panier = $session->get('panier', []);

        if (!empty($panier[$id])) {
            $panier[$id]++;
        } else {
            $panier[$id] = 1;
        }

        $session->set('panier', $panier);

        //dd($session->get('panier'));

        return $this->redirectToRoute('AfficherProduitsFront');


    }

    /**
     * @Route("/EnrichirPanier", name="EnrichirPanier")
     */
    public function EnrechirPanier(ProduitRepository $produit, SessionInterface $session)
    {
        $panier = $session->get('panier', []);

        $panierEnrichie = $session->get('panierEnrichie', []);

        foreach ($panier as $id => $quantite) {
            $panierEnrichie[] = [
                'produit' => $produit->find($id),
                'quantite' => $quantite
            ];
        }

        $session->set('panierEnrichieFinal', $panierEnrichie);

        $coutTotal = 0;
        foreach ($panierEnrichie as $pro) {
            $total = $pro['produit']->getPrix() * $pro['quantite'];
            $coutTotal += $total;
        }

        //dd($session->get('panierEnrichie'));

        return $this->render('commande/panier.html.twig', [
            'panier' => $panierEnrichie, 'coutTotal' => $coutTotal
        ]);



    }

    /**
     * @return Response
     * @route("/AjouterCommandeFront", name="AjouterCommandeFront")
     */
    public function AjouterCommandeFront(Request $request, SessionInterface $session)
    {
        $panierEnrichieFinal = $session->get('panierEnrichieFinal', []);
        $commande = new Commande();
        $form=$this->createForm(CommandeFrontType::class,$commande);
        $form->add("Commander",SubmitType::class, [
            'attr'=>[
                'class'=>'btn btn-red'
            ]
        ]);

        $form->handleRequest($request);

        if($form->isSubmitted() && $form->isValid()){

            foreach ($panierEnrichieFinal as $panier) {
                $commande->setUser($this->getUser());
                $commande->setProduit($panier['produit']);
                $commande->setQuantite($panier['quantite']);
                $em = $this->getDoctrine()->getManager();
                $em->merge($commande);
                $em->flush();
            }

            $session->set('panierEnrichie', []);
            $session->set('panier', []);
            //dd($panierEnrichie);

            return $this->redirectToRoute('AfficherProduitsFront');

        }

        return $this->render('commande/adresseCommande.html.twig',[
            'form'=>$form->createView()
        ]);


    }

    /**
     * @return Response
     * @route("/SupprimerDuPanier/{id}", name="SupprimerDuPanier")
     */
    public function SupprimerDuPanier($id, SessionInterface $session)
    {

        $panier = $session->get('panier', []);

        //dd($panierEnrichie);

        if(!empty($panier[$id]))
        {
            unset($panier[$id]);
        }

        $session->set('panier', $panier);

        return $this->redirectToRoute('EnrichirPanier');

    }


}


