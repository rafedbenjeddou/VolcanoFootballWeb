<?php

namespace App\Controller;

use App\Entity\Equipe;
use App\Form\EquipeEditType;
use App\Form\EquipeType;
use App\Repository\EquipeRepository;
use App\Repository\JoueurRepository;
use Knp\Component\Pager\PaginatorInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Dompdf\Dompdf;
use Dompdf\Options;

class EquipeController extends AbstractController
{
    /**
     * @Route("/equipe", name="equipe")
     */
    public function index(): Response
    {
        return $this->render('equipe/index.html.twig', [
            'controller_name' => 'EquipeController',
        ]);
    }

    /**
     * @param EquipeRepository $repository
     * @return Response
     * @route("/AfficheE", name="AfficheEquipe")
     */
    public function Affiche(EquipeRepository $repository){
        if($this->getUser()->isAdmin())
        {
            $equipe=$repository->findAll();
            return $this->render('equipe/Affiche.html.twig',
                ['equipe'=>$equipe]);
        }

        return $this->redirectToRoute('app_login');

    }
    /**
     * @param EquipeRepository $repository
     * @return Response
     * @route("/AfficheUneE", name="AfficheUneEquipe")
     */
    public function Afficheuneequipe(EquipeRepository $repository,PaginatorInterface $paginator,Request $request){
        $equipe=$paginator->paginate(
            $repository->findAll(),
            $request->query->getInt('page',1),
            9
        );
        return $this->render('equipe/Afficheruneequipe.html.twig',
            ['equipe'=>$equipe]);
    }

    /**
     * @route("/delete/{id}",name="supprimerequipe")
     */
    function Delete_joueur($id,EquipeRepository $repository){
        if($this->getUser()->isAdmin())
        {
            $equipe=$repository->find($id);
            $em=$this->getDoctrine()->getManager();
            $em->remove($equipe);
            $em->flush();
            $this->addFlash(
                'info',
                'Deleted Successfully'
            );
            return $this->redirectToRoute('AfficheEquipe');
        }

        return $this->redirectToRoute('app_login');
    }

    /**
     * @param Request $request
     * @return Response
     * @route("equipe/ajouter", name="AjouterEquipe")
     */
    function Ajouter_equipe(Request $request){
        if($this->getUser()->isAdmin())
        {
            $equipe = new Equipe();
            $form=$this->createForm(EquipeType::class,$equipe);
            $form->add('ajouter',SubmitType::class);
            $form->handleRequest($request);
            if($form->isSubmitted() && $form->isValid()){
                $file =$equipe->getDrapeauEquipe();
                $uploads_directory = $this->getParameter('upload_directory');
                $fileName = md5(uniqid()).'.'.$file->guessExtension();
                $file->move(
                    $uploads_directory,
                    $fileName
                );
                $equipe->setDrapeauEquipe($fileName);
                $em=$this->getDoctrine()->getManager();
                $em->persist($equipe);
                $em->flush();
                $this->addFlash(
                    'info',
                    'Added Successfully'
                );
                return  $this->redirectToRoute('AfficheEquipe');
            }
            return $this->render('equipe/Ajouter.html.twig',[
                'form'=>$form->createView()
            ]);
        }
        return $this->redirectToRoute('app_login');

    }
    /**
     * @route ("equipe/update/{id}",name="modifierequipe")
     */
    function Update(EquipeRepository  $repository,$id,Request $request){
        if($this->getUser()->isAdmin())
        {
            $equipe=$repository->find($id);
            $form=$this->createForm(EquipeEditType::class,$equipe);
            $form->add('Update',SubmitType::class);
            $form->handleRequest($request);
            if ($form->isSubmitted() && $form->isValid()){
                $file = $form['drapeau_equipe']->getData();

                if($file)
                {
                    $uploads_directory = $this->getParameter('upload_directory');
                    $fileName = md5(uniqid()).'.'.$file->guessExtension();
                    $file->move(
                        $uploads_directory,
                        $fileName
                    );

                    $equipe->setDrapeauEquipe($fileName);
                }
                else {
                    $equipe->setDrapeauEquipe($equipe.getDrapeauEquipe());
                }
                $em=$this->getDoctrine()->getManager();
                $em->flush();
                $this->addFlash(
                    'info',
                    'Updated Successfully'
                );
                return $this->redirectToRoute("AfficheEquipe");
            }
            return $this->render('equipe/Update.html.twig',[
                'form'=>$form->createView()
            ]);
        }

        return $this->redirectToRoute('app_login');

    }
    /**
     * @Route("/ListByEquipe/{id}", name="ListByEquipe", methods={"GET"})
     */
    function ListJoueurByEquipe(JoueurRepository  $repoJ, EquipeRepository $repoE, $id){
        $equipe=$repoE->find($id);
        $joueur=$repoJ->ListJoueurByEquipe($equipe->getId());
        return $this->render("equipe/Show.html.twig", [
            'equipe'=>$equipe, 'joueur'=>$joueur
        ]);

    }
    /**
     * @param EquipeRepository $repository
     * @return Response
     * @route("/ImprimerE", name="ImprimerEquipe", methods={"GET"})
     */
    public function Imprimer(EquipeRepository $repository): Response
    {
        if($this->getUser()->isAdmin())
        {
            // Configure Dompdf according to your needs
            $pdfOptions = new Options();
            $pdfOptions->set('defaultFont', 'Arial');

            // Instantiate Dompdf with our options
            $dompdf = new Dompdf($pdfOptions);
            $equipe=$repository->findAll(); //retourner toutes les objets


            // Retrieve the HTML generated in our twig file
            $html = $this->renderView('equipe/ImprimerEquipe.html.twig',
                ['equipe'=>$equipe]);

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

        return $this->redirectToRoute('app_login');

    }
}
