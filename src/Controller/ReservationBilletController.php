<?php

namespace App\Controller;

use App\Entity\ReservationBillet;
use App\Repository\ReservationBilletRepository;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ReservationBilletController extends AbstractController
{
    /**
     * @Route("/reservation/billet", name="reservation_billet")
     */
    public function index(): Response
    {
        return $this->render('reservation_billet/index.html.twig', [
            'controller_name' => 'ReservationBilletController',
        ]);
    }
    /**
     * @Route("/AfficheR", name="AfficheR")
     */
    public function Affiche(ReservationBilletRepository  $Reservation ) {

        $reservation_billet=$Reservation ->findAll();
        return $this->render('reservation_Billet/Affiche.html.twig',
            ['reservation_billet'=>$reservation_billet]);
    }

}
