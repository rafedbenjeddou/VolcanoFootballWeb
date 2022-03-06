<?php

namespace App\Controller;

use App\Entity\ContactJoueur;
use App\Entity\Joueur;
use App\Form\ContactJoueurType;
use App\Form\JoueurEditType;
use App\Form\JoueurType;
use App\Repository\EquipeRepository;
use App\Repository\JoueurRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Request;


class JoueurController extends AbstractController
{
    /**
     * @Route("/joueur", name="joueur")
     */
    public function index(): Response
    {
        return $this->render('joueur/index.html.twig', [
            'controller_name' => 'JoueurController',
        ]);
    }

    /**
     * @param JoueurRepository $repository
     * @return Response
     * @route("/AfficheJ", name="AfficheJoueur")
     */
    public function Affiche(JoueurRepository $repository){
        if($this->getUser()->isAdmin())
        {
            $joueur=$repository->findAll();
            return $this->render('joueur/Affiche.html.twig',
                ['joueur'=>$joueur]);
        }

        return $this->redirectToRoute('app_login');

    }
    /**
     * @param JoueurRepository $repository
     * @return Response
     * @route("/AfficheUnJ", name="AfficheUnJoueur")
     */
    public function Afficheunjoueur(JoueurRepository $repository){
        $joueur=$repository->findAll();
        return $this->render('joueur/Afficherunjoueur.html.twig',
            ['joueur'=>$joueur]);
    }


    /**
     * @route("/delete/{id}",name="delete")
     */
    function Delete_joueur($id,JoueurRepository $repository){
        if($this->getUser()->isAdmin())
        {
            $joueur=$repository->find($id);
            $em=$this->getDoctrine()->getManager();
            $em->remove($joueur);
            $em->flush();
            $this->addFlash(
                'info',
                'Deleted Successfully'
            );
            return $this->redirectToRoute('AfficheJoueur');
        }

        return $this->redirectToRoute('app_login');

    }

    /**
     * @param Request $request
     * @return Response
     * @route("joueur/ajouter",name="AjouterJoueur")
     */
    function Ajouter_joueur(Request $request){
        if($this->getUser()->isAdmin())
        {
            $joueur = new Joueur();
            $form=$this->createForm(JoueurType::class,$joueur);
            $form->add('ajouter',SubmitType::class);
            $form->handleRequest($request);
            if($form->isSubmitted() && $form->isValid()){
                $file =$joueur->getPhoto();
                $uploads_directory = $this->getParameter('upload_directory');
                $fileName = md5(uniqid()).'.'.$file->guessExtension();
                $file->move(
                    $uploads_directory,
                    $fileName
                );
                $joueur->setPhoto($fileName);
                $em=$this->getDoctrine()->getManager();
                $em->persist($joueur);
                $em->flush();
                $this->addFlash(
                    'info',
                    'Added Successfully'
                );
                return  $this->redirectToRoute('AfficheJoueur');
            }
            return $this->render('joueur/Ajouter.html.twig',[
                'form'=>$form->createView()
            ]);
        }

        return $this->redirectToRoute('app_login');

    }
    /**
     * @route ("joueur/update/{id}",name="update")
     */
    function Update(JoueurRepository  $repository,$id,Request $request){
        if($this->getUser()->isAdmin())
        {
            $joueur=$repository->find($id);
            $form=$this->createForm(JoueurEditType::class,$joueur);
            $form->add('Update',SubmitType::class);
            $form->handleRequest($request);
            if ($form->isSubmitted() && $form->isValid()){
                $file = $form['photo']->getData();

                if($file)
                {
                    $uploads_directory = $this->getParameter('upload_directory');
                    $fileName = md5(uniqid()).'.'.$file->guessExtension();
                    $file->move(
                        $uploads_directory,
                        $fileName
                    );

                    $joueur->setPhoto($fileName);
                }
                else {
                    $joueur->setPhoto($joueur.getPhoto());
                }
                $em=$this->getDoctrine()->getManager();
                $em->flush();
                $this->addFlash(
                    'info',
                    'Updated Successfully'
                );
                return $this->redirectToRoute("AfficheJoueur");
            }
            return $this->render('joueur/Update.html.twig',[
                'form'=>$form->createView()
            ]);
        }

        return $this->redirectToRoute('app_login');

    }


}
