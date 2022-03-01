<?php

namespace App\Controller;

use App\Entity\ContactJoueur;
use App\Form\ContactJoueurType;
use App\Repository\JoueurRepository;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ContactJoueurController extends AbstractController
{
    /**
     * @Route("/contact/joueur", name="contact_joueur")
     */
    public function index(): Response
    {
        return $this->render('contact_joueur/index.html.twig', [
            'controller_name' => 'ContactJoueurController',
        ]);
    }
    /**
     * @route ("joueur/mail/{id}",name="mail")
     */
    public function show($id,JoueurRepository $repository, Request $request, \Swift_Mailer $mailer)
    {
        $joueur=$repository->find($id);
        $contact = new ContactJoueur();
        $form = $this->createForm(ContactJoueurType::class ,$contact);
        $form->handleRequest($request);
        if($form->isSubmitted() && $form->isValid()){
            $contact= $form->getData();

            $message =(new \Swift_Message('nouveau contact'))
                ->setFrom($contact->getEmail())
                ->setTo('votre@adresse.fr')
                ->setBody(
                    $this->renderView(
                        'contact_joueur/email.html.twig', compact('contact')
                    ),
                    'text/html'
                )
            ;
            $mailer->send($message);
            $this->addFlash('message','le message a bien été envoyé');
        }

        return $this->render('contact_joueur/contactjoueur.html.twig', [
            'joueur'=>$joueur,
            'form'=>$form->createView()
        ]);
    }

}
