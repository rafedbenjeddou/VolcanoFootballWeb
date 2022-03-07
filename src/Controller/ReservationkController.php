<?php

namespace App\Controller;

use App\Entity\Kiosque;
use App\Entity\Facture;
use App\Entity\ReservationKiosque;
use App\Form\KiosqueEditType;
use App\Form\ReservationKiosqueType;
use App\Form\PaiementType;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Security\Core\Security;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Contracts\HttpClient\HttpClientInterface;

class ReservationkController extends AbstractController
{

    private $client;

    public function __construct(Security $security ,HttpClientInterface $client)
    {
        $this->security = $security;

        $this->client = $client;
    }
    /**
     * @Route("/reservation/{id}/{type}", name="reservationk")
     */
    public function index(Request $request , $id , $type )
    {
        $user = $this->security->getUser();
        $form = $this->createForm(ReservationKiosqueType::class);
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            $response = $this->client->request(
                'POST',
                'http://localhost:3000/verification/'.$user->getId()
            );

            return $this->redirectToRoute('pay' , array('id'=>$id ,'type'=>$type));

        }
        return $this->render('reservationk/index.html.twig', [
            'form' => $form->createView(),
        ]);

    }

    /**
     * @Route("/reservation/{id}", name="offre")
     */
    public function TypeReservation($id): Response
    {
        return $this->render('reservationk/offre.html.twig', [
            'id' => $id,
        ]);
    }
    /**
     * @Route("/pay/{id}/{type}", name="pay")
     */
    public function pay($id , $type , EntityManagerInterface $entityManager , Request $request ): Response
    {
        $user = $this->security->getUser();
        $kiosque=$this->getDoctrine()->getRepository(Kiosque::class)->find($id);
        $r=new ReservationKiosque();
        $f=new Facture();
        $form=$this->createForm(PaiementType::class);
        $form->handleRequest($request);
        if($form->isSubmitted() && $form->isValid()){
            if($request->request->get('paiement')['code']==$user->getCode())
            {
                $r->setKiosque($kiosque);
                $r->setType($type);
                $r->setUser($user);
                $r->setCreatedAt();
                $f->setType('Paiement Par Carte');
                $f->setCreatedAt();
                if ($type=='BASIC'){
                    $f->setPrix(50);
                }
                if ($type=='STANDARD'){
                    $f->setPrix(80);
                }
                if ($type=='VIP'){
                    $f->setPrix(200);
                }
                $em=$this->getDoctrine()->getManager();
                $em->persist($f);
                $em->flush();
                $r->setFacture($f);
                $em->persist($r);
                $em->flush();
                return $this->redirectToRoute('facture',array('id'=>$f->getId()));
            }


        }
        return $this->render('reservationk/pay.html.twig', [
            'form' => $form->createView(),
        ]);
    }
    /**
     * @Route("/mesreservation", name="mesreservation")
     */
    public function Reservation(): Response
    {
        $user = $this->security->getUser();
        $reservations=$this->getDoctrine()->getRepository(ReservationKiosque::class)->findBy(['user'=>$user]);
        return $this->render('reservationk/AfficheK.html.twig', [
            'reservations'=>$reservations
        ]);
    }
    /**
     * @Route("/facture/{id}", name="facture")
     */
    public function facture($id): Response
    {
        $facture=$this->getDoctrine()->getRepository(Facture::class)->find($id);
        return $this->render('reservationk/AfficheFacture.html.twig', [
            'facture'=>$facture
        ]);
    }

}
