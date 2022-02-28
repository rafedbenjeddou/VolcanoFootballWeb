<?php

namespace App\Controller;

use App\Entity\Artiste;
use App\Form\ArtisteType;
use App\Repository\ArtisteRepository;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Homesoft\Bundle\MonitorBundle\Entity\NonPersistent\Path;
class ArtisteController extends AbstractController
{
    /**
     * @Route("/artiste", name="artiste")
     */
    public function index(): Response
    {
        return $this->render('artiste/index.html.twig', [
            'controller_name' => 'ArtisteController',
        ]);
    }
      /**
     * @Route("/AfficheArtiste", name="AfficheArtiste")
     */
    public function Affiche(ArtisteRepository $repo) {
       
        $artiste=$repo->findAll();
        return $this->render('artiste/Affiche.html.twig',
        ['artiste'=>$artiste]);
    }
    /**
     * @param Request $request
     * @Route("AddArtiste")
     */
    function Add(Request $request){
        $artiste=new artiste();
        $form=$this->createForm(ArtisteType::class,$artiste);
        $form->handleRequest($request);
        if($form->isSubmitted() && $form->isValid()){
            $em=$this->getDoctrine()->getManager();
            $em->persist($artiste);
            $em->flush();
            return $this->redirectToRoute('AfficheArtiste');
        }
        return $this->render('artiste/Add.html.twig',[
            'form'=>$form->createView()]);
        }


     
    /**
 * @Route("deleteArtiste/{id}",name="deleteArtiste")
 */
 function deleteS($id, ArtisteRepository $repo){
    $artiste=$repo->find($id);
    $em=$this->getDoctrine()->getManager();
    $em->remove($artiste);
    $em->flush();
    return $this->redirectToRoute('AfficheArtiste');
}
    /**
     * @Route("UpdateArtiste/{id}",name="UpdateArtiste")
     */
    function Update(ArtisteRepository $repo, $id,Request $request){
        $artiste=$repo->find($id);
        $form=$this->createForm(ArtisteType::class,$artiste);
        $form->add('Update', SubmitType::class);
        $form->handleRequest($request);
        if($form->isSubmitted() && $form->isValid()){
            $em=$this->getDoctrine()->getManager();
            $em->flush();
            return $this->redirectToRoute('AfficheArtiste');
        }
        return $this->render('affiche/Update.html.twig',[
            'f'=>$form->createView()]);
     
        }
}
