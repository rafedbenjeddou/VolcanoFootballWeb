<?php

namespace App\Controller;

use App\Repository\UtilisateurRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class UtilisateurController extends AbstractController
{
    /**
     * @Route("/utilisateur", name="utilisateur")
     */
    public function index(): Response
    {
        return $this->render('utilisateur/index.html.twig', [
            'controller_name' => 'UtilisateurController',
        ]);
    }

    /**
     * @param UtilisateurRepository $repository
     * @return Response
     * @route("/AfficherUtilisateur", name="AfficheUtilisateur")
     */
    public function Affiche(UtilisateurRepository $repository){
        $utilisateur=$repository->findAll();
        return $this->render('utilisateur/afficher.html.twig',
            ['utilisateur'=>$utilisateur]);
    }

}
