<?php

namespace App\Controller;

use App\Entity\Stade;
use App\Entity\Kiosque;
use App\Form\KiosqueEditType;
use App\Form\KiosqueType;
use App\Repository\KiosqueRepository;
use App\Repository\StadeRepository;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Homesoft\Bundle\MonitorBundle\Entity\NonPersistent\Path;
use Symfony\Component\HttpFoundation\File\File;

class KiosqueController extends AbstractController
{
    /**
     * @Route("/kiosque", name="kiosque")
     */
    public function index(): Response
    {
        return $this->render('kiosque/index.html.twig', [
            'controller_name' => 'KiosqueController',
        ]);
    }
    /**
     * @Route("/AfficheKiosque", name="AfficheKiosque")
     */
    public function Affiche(KiosqueRepository $repo) {

        $kiosque=$repo->findAll();
        return $this->render('kiosque/Affiche.html.twig',
            ['kiosque'=>$kiosque]);
    }
    /**
     * @param Request $request
     * @Route("kiosque/AddKiosque", name="AddKiosque")
     */
    function Add(Request $request){
        $kiosque=new Kiosque();
        $form=$this->createForm(KiosqueType::class,$kiosque);
        $form->add('ajouter',SubmitType::class);

        $form->handleRequest($request);
        if($form->isSubmitted() && $form->isValid()){
            $file = $kiosque->getPhoto();
            $uploads_directory = $this->getParameter('upload_directory');
            $fileName = md5(uniqid()).'.'.$file->guessExtension();
            $file->move(
                $uploads_directory,
                $fileName
            );

            $kiosque->setPhoto($fileName);
            $em=$this->getDoctrine()->getManager();
            $em->persist($kiosque);
            $em->flush();
            $this->get('session')->getFlashBag()->add(
                'Message',
                'Kiosque Ajouteé'
            );

            return $this->redirectToRoute('AfficheKiosque');
        }
        return $this->render('kiosque/Add.html.twig',[
            'form'=>$form->createView()]);
    }



    /**
     * @Route("kiosque/deleteKiosque/{id}",name="deleteKiosque")
     */
    function deleteS($id, KiosqueRepository $repo){
        $kiosque=$repo->find($id);
        $em=$this->getDoctrine()->getManager();
        $em->remove($kiosque);
        $em->flush();
        $this->get('session')->getFlashBag()->add(
            'Alerte',
            'Kiosque Supprimée !'
        );
        return $this->redirectToRoute('AfficheKiosque');
    }
    /**
     * @Route("kiosque/UpdateKiosque/{id}",name="UpdateKiosque")
     */
    function Update(KiosqueRepository $repo, $id,Request $request){
        $kiosque=$repo->find($id);
        $form=$this->createForm(KiosqueEditType::class,$kiosque);
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

                $kiosque->setPhoto($fileName);
            }
            else
            {
                $kiosque->setPhoto($kiosque->getPhoto());
            }
            $em=$this->getDoctrine()->getManager();
            $em->flush();
            $this->get('session')->getFlashBag()->add(
                'Message',
                'Kiosque Supprimée !'
            );
            return $this->redirectToRoute('AfficheKiosque');
        }
        return $this->render('kiosque/Update.html.twig',[
            'f'=>$form->createView()]);

    }
    /**
     * @route("/frontkiosque/{id}", name="frontkiosque")
     */
    public function afficher (kiosqueRepository $repository,$id){


        $kiosque=$repository->findOneBy(['stade' => $id]);
        $stade=$this->getDoctrine()->getRepository(Stade::class)->find($id);

        return $this->render('kiosque/AfficheUnKiosque.html.twig',
            [   'stade'=>$stade,
                'id'=>$id,
                'kiosques'=>$kiosque,
            ]);
    }
}
