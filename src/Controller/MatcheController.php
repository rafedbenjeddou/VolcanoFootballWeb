<?php

namespace App\Controller;

use App\Entity\Matche;
use App\Form\MatcheType;
use App\Repository\BilletRepository;
use App\Repository\MatcheRepository;
use App\Repository\StadeRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Dompdf\Dompdf;
use Dompdf\Options;

class MatcheController extends AbstractController
{
    /**
     * @Route("/matche", name="matche")
     */
    public function index(): Response
    {
        return $this->render('matche/index.html.twig', [
            'controller_name' => 'MatcheController',
        ]);
    }
//Route d'annotation
//Response correspond a la reponse retournée par le controleur
// render methode de retourner une interface
/**
 * @param MatcheRepository $repository
 * @return Response
 * @route("/AfficheM", name="AfficheMatche")
 */
public function Affiche(MatcheRepository $repository){
    $matche=$repository->findAll(); //retourner toutes les objets
    return $this->render('matche/Affiche.html.twig',
        ['matche'=>$matche]);
}
    /**
     * @param MatcheRepository $repository
     * @return Response
     * @route("/AfficheUnM", name="AfficheUnMatche")
     */
    public function Afficheunmatche(MatcheRepository $repository){
        $matche=$repository->findAll();
        return $this->render('matche/AfficherUnMatch.html.twig',
            ['matche'=>$matche]);
    }
    /**
     * @param MatcheRepository $repository
     * @return Response
     * @route("/ListeM", name="ListeM", methods={"GET"})
     */
    public function ListeM(MatcheRepository $repository): Response
    {    // Configure Dompdf according to your needs
        $pdfOptions = new Options();
        $pdfOptions->set('defaultFont', 'Arial');

        // Instantiate Dompdf with our options
        $dompdf = new Dompdf($pdfOptions);
        $matche=$repository->findAll(); //retourner toutes les objets


        // Retrieve the HTML generated in our twig file
        $html = $this->renderView('matche/ListeM.html.twig',
            ['matche'=>$matche]);

        // Load HTML to Dompdf
        $dompdf->loadHtml($html);

        // (Optional) Setup the paper size and orientation 'portrait' or 'portrait'
        $dompdf->setPaper('A4', 'portrait');

        // Render the HTML as PDF
        $dompdf->render();

        // Output the generated PDF to Browser (inline view)
        $dompdf->stream("mypdf.pdf", [
            "Attachment" => false
        ]);



    }
//repository- l'entité
//Manger- base
/**
 * @route("/deleteMatche/{id}",name="deleteMatche")
 */
function Delete_matche($id,MatcheRepository $repository){
    $matche=$repository->find($id);
    $em=$this->getDoctrine()->getManager();
    $em->remove($matche);
    $em->flush(); //
    $this->addFlash(
        'info',
        'Deleted Successfully'
    );
    return $this->redirectToRoute('AfficheMatche');
}

/**
 * @param Request $request
 * @return Response
 * @route("matche/ajouter")
 */
function Ajouter_matche(Request $request){
    $matche = new Matche();
    $form=$this->createForm(MatcheType::class,$matche);
    $form->add('ajouter',SubmitType::class);
    $form->handleRequest($request);
    if($form->isSubmitted() && $form->isValid()){
        $date= new \DateTime('now');
        $datematch=$matche->getDate();
        $nbJours =$datematch->diff($date)->days;
        if($nbJours >= 1 && $datematch > $date) {

            $em = $this->getDoctrine()->getManager();
            $em->persist($matche);
            $em->flush();
            $this->addFlash(
                'info',
                'Added Successfully'
            );
            return $this->redirectToRoute('AfficheMatche');
        }
        $erreur="Changer la date ";
        return $this->render('matche/AjouterErreur.html.twig',[
            'form'=>$form->createView(),
            'error'=>$erreur,
            'nbjours'=>$nbJours,
            'date'=>$date,
            'datematch'=>$datematch,
        ]);

    }
    return $this->render('matche/Ajouter.html.twig',[
        'form'=>$form->createView()
    ]);
}
/**
 * @route ("updatematch/{id}",name="modifierMatche")
 */
function Update(MatcheRepository  $repository,$id,Request $request){
    $matche=$repository->find($id);
    $form=$this->createForm(MatcheType::class,$matche);
    $form->add('Update',SubmitType::class);
    $form->handleRequest($request);                                                                                            //pour envoyer la requete
    if ($form->isSubmitted() && $form->isValid()){
        //si la requete tsabet
        $date= new \DateTime('now');
        $datematch=$matche->getDate();
        $nbJours =$datematch->diff($date)->days;
        if($nbJours >= 1 && $datematch > $date) {
        $em=$this->getDoctrine()->getManager();
        $em->flush();
        $this->addFlash(
            'info',
            'Updated Successfully'
        );
        return $this->redirectToRoute("AfficheMatche");
    }
        $erreur="Changer la date ";
        return $this->render('matche/UpdateErreur.html.twig',[
            'form'=>$form->createView(),
            'error'=>$erreur,
            'nbjours'=>$nbJours,
            'date'=>$date,
            'datematch'=>$datematch,
        ]);

    }
    return $this->render('matche/Update.html.twig',[
        'form'=>$form->createView()    //pour afficher les champs de la forme type
    ]);
}
    /**
     * @Route("/ListByMatche/{id}", name="ListByMatche", methods={"GET"})
     */
    function ListBilletByMatche(MatcheRepository $repoM, BilletRepository $repoB, $id){
        $matche=$repoM->find($id);
        $billet=$repoB->ListBilletByMatche($matche->getId());
        return $this->render("matche/Show.html.twig", [
            'a'=>$matche, 'billet'=>$billet
        ]);

    }
}

