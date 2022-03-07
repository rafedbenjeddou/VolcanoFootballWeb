<?php

namespace App\Controller;

use App\Repository\ReservationRepository;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class MainController extends AbstractController
{
    /**
     * @Route("/calendar", name="calendar")
     */
    public function index(ReservationRepository $calendar): Response
    {
        $events = $calendar->findAll();

        $rdvs = [];

        foreach($events as $event){
            $rdvs[] = [
                'id' => $event->getId(),
                'title' => $event->getHebergement()->getNomH(),
                'start' => $event->getdateDebut()->format('Y-m-d H:i:s'),
                'end' => $event->getdateFin()->format('Y-m-d H:i:s'),
                'description' => $event->getUser()->getNom(),

            ];
        }

        $data = json_encode($rdvs);

        return $this->render('main/index.html.twig', compact('data'));
    }
}
