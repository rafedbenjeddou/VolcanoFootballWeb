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
use App\Repository\ReservationRepository;


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
    public function majEvent(?Reservation $reservation, Request $request, ReservationRepository $repo)
    {
        // On récupère les données
        // $donnees = json_decode($request->getContent());
        // echo($request);

        $donnees = json_decode($request->getContent());
        if(
            isset($donnees->title) && !empty($donnees->title) &&
            isset($donnees->start) && !empty($donnees->start) &&
            isset($donnees->description) && !empty($donnees->description) 

        )
        {
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

            $reservation=$repo->find($donnees->id);

            // On hydrate l'objet avec les données
            $reservation->setHebergement($reservation->getHebergement());
            $reservation->setUser($reservation->getUser());
            $reservation->setDateDebut(new DateTime($donnees->start));
            $reservation->setDateFin(new DateTime($donnees->end));
          

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
            'donnees'=>$donnees
        ]);
    }
}
