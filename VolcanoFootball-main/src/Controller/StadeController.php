<?php

namespace App\Controller;

use App\Entity\Stade;
use App\Form\StadeType;
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
       
        $stade=$repo->findAll();
        return $this->render('stade/Affiche.html.twig',
        ['stade'=>$stade]);
    }
    /**
     * @Route("stade/AddStade", name="AddStade")
     */
    function Add(Request $request){
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
            return $this->redirectToRoute('AfficheStade');
        }
        return $this->render('stade/Add.html.twig',[
            'form'=>$form->createView()
        ]);
    
    }

     
    /**
 * @Route("stade/deleteStade/{id}",name="deleteStade")
 */
 function deleteS($id, StadeRepository $repo){
    $stade=$repo->find($id);
    $em=$this->getDoctrine()->getManager();
    $em->remove($stade);
    $em->flush();
    return $this->redirectToRoute('AfficheStade');
}
    /**
     * @Route("stade/UpdateStade/{id}",name="UpdateStade")
     */
    function Update(StadeRepository $repo, $id,Request $request){
        $stade=$repo->find($id);
        $form=$this->createForm(StadeType::class,$stade);
        $form->add('Update', SubmitType::class);
        $form->handleRequest($request);
        if($form->isSubmitted() && $form->isValid()){
            $em=$this->getDoctrine()->getManager();
            $em->flush();
            return $this->redirectToRoute('AfficheStade');
        }
        return $this->render('stade/Update.html.twig',[
            'f'=>$form->createView()]);
     
        }
        
    
     /**
     * @route("/AfficheUnStade", name="AfficheUnStade")
     */
    public function AfficheunStade(StadeRepository $repository){
        $stade=$repository->findAll();

        return $this->render('stade/AfficheUnStade.html.twig',
            ['stade'=>$stade]);
    }
}
