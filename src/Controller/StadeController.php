<?php

namespace App\Controller;

use App\Entity\Stade;
use App\Form\StadeType;
use App\Form\StadeTypeEditType;
use App\Repository\StadeRepository;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Homesoft\Bundle\MonitorBundle\Entity\NonPersistent\Path;
use Symfony\Component\HttpFoundation\File\File;
class StadeController extends AbstractController
{
    /**
     * @Route("/stade", name="stade")
     */
    public function index(): Response
    {
        return $this->render('stade/index.html.twig', [
            'controller_name' => 'StadeController',
        ]);
    }
    /**
     * @Route("/AfficheStade", name="AfficheStade")
     */
    public function Affiche(StadeRepository $repo) {

        if($this->getUser()->isAdmin())
        {
            $stade=$repo->findAll();
            return $this->render('stade/Affiche.html.twig',
                ['stade'=>$stade]);
        }

        return $this->redirectToRoute('app_login');

    }

    /**
     * @Route("stade/AddStade", name="AddStade")
     */
    function Add(Request $request){

        if($this->getUser()->isAdmin())
        {
            $stade=new Stade();
            $form=$this->createForm(StadeType::class,$stade);
            $form->add('ajouter',SubmitType::class);
            $form->handleRequest($request);
            if($form->isSubmitted() && $form->isValid()){
                $file = $stade->getPhoto();
                $uploads_directory = $this->getParameter('upload_directory');
                $fileName = md5(uniqid()).'.'.$file->guessExtension();
                $file->move(
                    $uploads_directory,
                    $fileName
                );

                $stade->setPhoto($fileName);
                $em=$this->getDoctrine()->getManager();
                $em->persist($stade);
                $em->flush();
                $this->get('session')->getFlashBag()->add(
                    'notice',
                    'Stade Ajouteé'
                );

                return $this->redirectToRoute('AfficheStade');
            }
            return $this->render('stade/Add.html.twig',[
                'form'=>$form->createView()
            ]);

        }

        return $this->redirectToRoute('app_login');



    }


    /**
     * @Route("stade/deleteStade/{id}",name="deleteStade")
     */
    function deleteS($id, StadeRepository $repo){

        if($this->getUser()->isAdmin())
        {
            $stade=$repo->find($id);
            $em=$this->getDoctrine()->getManager();
            $em->remove($stade);
            $this->get('session')->getFlashBag()->add(
                'Danger',
                'Stade Supprimeé !'
            );
            $em->flush();

            return $this->redirectToRoute('AfficheStade');

        }

        return $this->redirectToRoute('app_login');

    }
    /**
     * @Route("stade/UpdateStade/{id}",name="UpdateStade")
     */
    function Update(StadeRepository $repo, $id,Request $request){

        if($this->getUser()->isAdmin())
        {
            $stade=$repo->find($id);
            $form=$this->createForm(StadeTypeEditType::class,$stade);
            $form->add('Update', SubmitType::class);
            $form->handleRequest($request);
            if($form->isSubmitted() && $form->isValid()){
                $file = $form['photo']->getData();

                if($file)
                {
                    $uploads_directory = $this->getParameter('upload_directory');
                    $fileName = md5(uniqid()).'.'.$file->guessExtension();
                    $file->move(
                        $uploads_directory,
                        $fileName
                    );

                    $stade->setPhoto($fileName);
                }
                else
                {
                    $stade->setPhoto($stade->getPhoto());
                }
                $em=$this->getDoctrine()->getManager();
                $em->flush();
                return $this->redirectToRoute('AfficheStade');
            }
            return $this->render('stade/Update.html.twig',[
                'f'=>$form->createView()]);

        }

        return $this->redirectToRoute('app_login');



    }


    /**
     * @route("/AfficheUnStade", name="AfficheUnStade")
     */
    public function AfficheunStade(StadeRepository $repository){
        $stade=$repository->findAll();

        return $this->render('stade/AfficheUnStade.html.twig',
            ['stade'=>$stade]);
    }

    /**
     * @route("/MapStade", name="MapStade")
     */
    public function AfficheMapStade(){

        return $this->render('stade/AfficheMapStade.html.twig',
            []);
    }

}
