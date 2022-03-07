<?php

namespace App\Controller;
use App\Entity\Reservation;

use DateTime;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Entity\Hebergement;
use App\Entity\User;


class ApiController extends AbstractController
{
    /**
     * @Route("/api", name="api")
     */
    public function index(): Response
    {
        return $this->render('api/index.html.twig', [
            'controller_name' => 'ApiController',
        ]);
    }
/**
     * @Route("/api/{id}/edit", name="api_event_edit", methods={"PUT"})
     */
    public function majEvent(?Reservation $reservation, Request $request)
    {
        // On récupère les données
        $donnees = json_decode($request->getContent());

        if(
            isset($donnees->hebergement->getNomH) && !empty($donnees->hebergement->nomH) &&
            isset($donnees->dateDebut) && !empty($donnees->dateDebut) &&
            isset($donnees->user->nom) && !empty($donnees->user->nom) 

        ){
            // Les données sont complètes
            // On initialise un code
            $code = 200;

            // On vérifie si l'id existe
            if(!$reservation){
                // On instancie un rendez-vous
                $reservation = new Reservation;

                // On change le code
                $code = 201;
            }

            // On hydrate l'objet avec les données
            $reservation->setHebergement()->setNomH($donnees->hebergement->nomH);
            $reservation->setUser()->setNom($donnees->user->nom);
            $reservation->setDateDebut(new DateTime($donnees->dateDebut));
            $reservation->setDateFin(new DateTime($donnees->dateFin));


            $em = $this->getDoctrine()->getManager();
            $em->persist($reservation);
            $em->flush();

            // On retourne le code
            return new Response('Ok', $code);
        }else{
            // Les données sont incomplètes
            return new Response('Données incomplètes', 404);
        }


        return $this->render('api/index.html.twig', [
            'controller_name' => 'ApiController',
        ]);
    }
}
