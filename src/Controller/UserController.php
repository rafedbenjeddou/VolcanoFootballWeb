<?php

namespace App\Controller;

use App\Entity\User;
use App\Form\UserType;
use App\Repository\UserRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;

class UserController extends AbstractController
{
    /**
     * @Route("/user", name="user")
     */
    public function index(): Response
    {
        return $this->render('user/index.html.twig', [
            'controller_name' => 'UserController',
        ]);
    }

    /**
     * @param UserRepository $repository
     * @return Response
     * @route("/AfficherUsers", name="AfficherUsers")
     */
    public function AfficherUsers(UserRepository $repository){
        $user=$repository->findAll();
        return $this->render('user/afficher.html.twig',
            ['users'=>$user]);
    }

    /**
     * @route("/SupprimerUser/{id}",name="SupprimerUser")
     */
    function SupprimerUser($id,UserRepository $repository){
        $user=$repository->find($id);
        $em=$this->getDoctrine()->getManager();
        $em->remove($user);
        $em->flush();
        return $this->redirectToRoute('AfficherUsers');
    }


    /**
     * @param Request $request
     * @return Response
     * @route("/AjouterUser", name="AjouterUser")
     */
    function AjouterUser(Request $request, UserPasswordEncoderInterface $encoder){

        $user = new User();
        $form=$this->createForm(UserType::class,$user);
        $form->add('Ajouter',SubmitType::class);
        $form->handleRequest($request);
        if($form->isSubmitted() && $form->isValid()){
            $hash = $encoder->encodePassword($user, $user->getPassword());
            $user->setPassword($hash);
            $em=$this->getDoctrine()->getManager();
            $em->persist($user);
            $em->flush();
            return  $this->redirectToRoute('AfficherUsers');
        }
        return $this->render('user/ajouter.html.twig',[
            'form'=>$form->createView()
        ]);
    }

    /**
     * @route ("ModifierUser/{id}",name="ModifierUser")
     */
    function ModifierUser(UserRepository  $repository, $id, Request $request, UserPasswordEncoderInterface $encoder){

        $user=$repository->find($id);
        $form=$this->createForm(UserType::class, $user);
        $form->add('Modifier',SubmitType::class);
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()){
            $hash = $encoder->encodePassword($user, $user->getPassword());
            $user->setPassword($hash);
            $em=$this->getDoctrine()->getManager();
            $em->flush();
            return $this->redirectToRoute("AfficherUsers");
        }
        return $this->render('user/modifier.html.twig',[
            'form'=>$form->createView()
        ]);
    }




}
