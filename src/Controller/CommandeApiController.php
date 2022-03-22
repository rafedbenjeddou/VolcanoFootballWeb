<?php

namespace App\Controller;

use App\Entity\Commande;
use App\Entity\Produit;
use App\Entity\User;
use App\Repository\CommandeRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Validator\Constraints\Json;

class CommandeApiController extends AbstractController
{
    /**
     * @Route("/AfficherCommandesMobile", name="AfficherCommandesMobile")
     */
    public function AfficherCommandesMobile(Request $request)
    {
        $idUser = $request->get("user");
        $em = $this->getDoctrine()->getManager();
        $commandes = $em->getRepository(Commande::class)->findBy(["user" => $em->getRepository(User::class)->find($idUser)]);

        return $this->json($commandes,200,[],['groups'=>'post:read']);

        //http://127.0.0.1:8000/AfficherCommandesMobile?user=9

    }

    /**
     * @Route("/SupprimerCommandeMobile", name="SupprimerCommandeMobile")
     */
    public function SupprimerCommandeMobile(Request $request) {
        $id = $request->get("id");
        $em = $this->getDoctrine()->getManager();
        $commande = $em->getRepository(Commande::class)->find($id);
        if($commande!=null ) {
            $em->remove($commande);
            $em->flush();

            return new JsonResponse("Commande Supprime!", 200);
        }
        return new JsonResponse("ID Commande Invalide.");


    }

    /**
     * @Route("/AjouterCommandeMobile", name="AjouterCommandeMobile")
     */
    public function AjouterCommandeMobile(Request $request)
    {
        $commande = new Commande();

        $idUser = $request->get("user");
        $idProduit = $request->get("produit");

        $commande->setUser($this->getDoctrine()->getManager()->getRepository(User::class)->find($idUser));
        $commande->setProduit($this->getDoctrine()->getManager()->getRepository(Produit::class)->find($idProduit));
        $commande->setQuantite($request->get("quantite"));
        $commande->setAdresse($request->get("adresse"));

        try {
            $em = $this->getDoctrine()->getManager();
            $em->persist($commande);
            $em->flush();

            return new JsonResponse("Commande Ajoute!", 200);
        }
        catch (\Exception $ex)
        {
            return new Response("Execption: ".$ex->getMessage());
        }

        //http://127.0.0.1:8000/AjouterCommandeMobile?user=9&produit=6&quantite=5&adresse=bouzid


    }

    /**
     * @Route("/ModifierCommandeMobile", name="ModifierCommandeMobile")
     */
    public function ModifierCommandeMobile(Request $request)
    {
        $em = $this->getDoctrine()->getManager();
        $commande = $this->getDoctrine()->getManager()
            ->getRepository(Commande::class)
            ->find($request->get("id"));

        $idUser = $request->get("user");
        $idProduit = $request->get("produit");

        $commande->setUser($this->getDoctrine()->getManager()->getRepository(User::class)->find($idUser));
        $commande->setProduit($this->getDoctrine()->getManager()->getRepository(Produit::class)->find($idProduit));
        $commande->setQuantite($request->get("quantite"));
        $commande->setAdresse($request->get("adresse"));

        try {
            $em->persist($commande);
            $em->flush();

            return new JsonResponse("Commande Modifie!", 200);
        }
        catch (\Exception $ex)
        {
            return new Response("Execption: ".$ex->getMessage());
        }

        //http://127.0.0.1:8000/ModifierCommandeMobile?id=8&user=9&produit=6&quantite=10&adresse=ariana

    }

    /**
     * @Route("/DetailCommandeMobile", name="DetailCommandeMobile")
     */
    public function DetailCommandeMobile(Request $request) {
        $id = $request->get("id");
        $em = $this->getDoctrine()->getManager();
        $commande = $em->getRepository(Commande::class)->find($id);
        if($commande!=null ) {

            return $this->json($commande,200,[],['groups'=>'post:read']);

        }
        return new JsonResponse("ID Commande Invalide.");


    }




}
