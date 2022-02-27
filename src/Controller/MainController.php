<?php

namespace App\Controller;

use App\Repository\ReservationRepository;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class MainController extends AbstractController
{
    /**
     * @Route("/main", name="main")
     */
    public function index(ReservationRepository $calendar): Response
    {
        $events = $calendar->findAll();

        $rdvs = [];

        foreach($events as $event){
            $rdvs[] = [
                'id' => $event->getId(),
                'start' => $event->getdateDebut()->format('Y-m-d H:i:s'),
                'end' => $event->getdateFin()->format('Y-m-d H:i:s'),
                'nom' => $event->getUser(),
                'hebergement' => $event->getHebergement(),
            ];
        }

        $data = json_encode($rdvs);

        return $this->render('main/index.html.twig', compact('data'));
    }
}
