<?php

namespace App\Controller;

use App\Entity\Matche;
use App\Entity\Reclamation;
use App\Form\MatcheType;
use App\Repository\BilletRepository;
use App\Repository\MatcheRepository;
use App\Repository\StadeRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use CMEN\GoogleChartsBundle\GoogleCharts\Charts\PieChart;
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

    if($this->getUser()->isAdmin())
    {
        $matche=$repository->findAll(); //retourner toutes les objets
        return $this->render('matche/Affiche.html.twig',
            ['matche'=>$matche]);
    }

    return $this->redirectToRoute('app_login');


}
    /**
     * @param MatcheRepository $repository
     * @return Response
     * @route("/AfficheUnM", name="AfficheUnMatche")
     */
    public function Afficheunmatche(MatcheRepository $repository,Request $request){

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
    {

        if($this->getUser()->isAdmin())
        {
            // Configure Dompdf according to your needs
            $pdfOptions = new Options();
            $pdfOptions->set('defaultFont', 'Arial');

            // Instantiate Dompdf with our options
            $dompdf = new Dompdf($pdfOptions);
            $matche = $repository->findAll(); //retourner toutes les objets


            // Retrieve the HTML generated in our twig file
            $html = $this->renderView('matche/ListeM.html.twig',
                ['matche' => $matche]);

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
     * @route("matche/ajouter", name="ajouterMatch")
     */
    function Ajouter_matche(Request $request){

        if($this->getUser()->isAdmin())
        {
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
                    //image hatitha houni

                    $uploadedFile = ($form['imageFile']->getData());


                    if ($uploadedFile) {
                        $destination = $this->getParameter('kernel.project_dir') . '/public/upload';
                        $originalFilename = pathinfo($uploadedFile->getClientOriginalName(), PATHINFO_FILENAME);
                        $newFilename = $originalFilename. '-' . uniqid() . '.' . $uploadedFile->guessExtension();
                        $uploadedFile->move(
                            $destination,
                            $newFilename
                        );
                        $matche->setImage1($newFilename);


                    }
                    $uploadedFile = ($form['imageFile2']->getData());


                    if ($uploadedFile) {
                        $destination = $this->getParameter('kernel.project_dir') . '/public/upload';
                        $originalFilename = pathinfo($uploadedFile->getClientOriginalName(), PATHINFO_FILENAME);
                        $newFilename = $originalFilename. '-' . uniqid() . '.' . $uploadedFile->guessExtension();
                        $uploadedFile->move(
                            $destination,
                            $newFilename
                        );

                        $matche->setImage2($newFilename);

                    }


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

        return $this->redirectToRoute('app_login');


    }
    /**
     * @route ("updatematch/{id}",name="modifierMatche")
     */
    function Update(MatcheRepository  $repository,$id,Request $request){

        if($this->getUser()->isAdmin())
        {
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
                    //image hatitha houni

                    $uploadedFile = ($form['imageFile']->getData());


                    if ($uploadedFile) {
                        $destination = $this->getParameter('kernel.project_dir') . '/public/upload';
                        $originalFilename = pathinfo($uploadedFile->getClientOriginalName(), PATHINFO_FILENAME);
                        $newFilename = $originalFilename. '-' . uniqid() . '.' . $uploadedFile->guessExtension();
                        $uploadedFile->move(
                            $destination,
                            $newFilename
                        );
                        $matche->setImage1($newFilename);


                    }
                    $uploadedFile = ($form['imageFile2']->getData());


                    if ($uploadedFile) {
                        $destination = $this->getParameter('kernel.project_dir') . '/public/upload';
                        $originalFilename = pathinfo($uploadedFile->getClientOriginalName(), PATHINFO_FILENAME);
                        $newFilename = $originalFilename. '-' . uniqid() . '.' . $uploadedFile->guessExtension();
                        $uploadedFile->move(
                            $destination,
                            $newFilename
                        );

                        $matche->setImage2($newFilename);

                    }
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

        return $this->redirectToRoute('app_login');


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


    /**
     * @Route("/AffMatcheAjax", name="AffMatchAjax", methods={"POST"})
     */
    public function AffAjaxMatch(Request $request)
    {
        $em = $this->getDoctrine()->getManager();


        $entities =  $em->getRepository(Matche::class)->findAll();

        if(!$entities) {
            $result['entities']['error'] = "Aucun matche trouvée";
        } else {
            $result['entities'] = $this->getRealEntities($entities);
        }

        return new Response(json_encode($result));
    }

    /**
     * @Route("/RechercheMatche", name="rechMatch", methods={"POST"})
     */
    public function RechercheAjaxMatch(Request $request)
    {
        $em = $this->getDoctrine()->getManager();

        $requestString = $request->get('q');

        $entities =  $em->getRepository(Matche::class)->Recherche($requestString);

        if(!$entities) {
            $result['entities']['error'] = "Aucun matche trouvée";
        } else {
            $result['entities'] = $this->getRealEntities($entities);
        }

        return new Response(json_encode($result));
    }

    /**
     * @Route("/RechercheMatcheDate", name="rechMatchDate", methods={"POST"})
     */
    public function RechercheAjaxMatchDate(Request $request)
    {
        $em = $this->getDoctrine()->getManager();

        $requestString = $request->get('q');

        $entities =  $em->getRepository(Matche::class)->RechercheDate($requestString);

        if(!$entities) {
            $result['entities']['error'] = "Aucun matche trouvée";
        } else {
            $result['entities'] = $this->getRealEntities($entities);
        }

        return new Response(json_encode($result));
    }

    public function getRealEntities($matches){

        foreach ($matches as $m){

            $realEntities[$m->getId()] = [$m->getNomMatche(),$m->getDate()->format('d'),$m->getDate()->format('m'),$m->getDate()->format('y'),$m->getTime()->format('h'),$m->getNomArbitre(),$m->getStade()->getNom(),$m->getImage1(),$m->getImage2(),];
        }

        return $realEntities;
    }
    /**
     * @Route("/stat", name="/stat")
     */
    public function indexAction(){
        $repository = $this->getDoctrine()->getRepository(Matche::class);
        $matche = $repository->findAll();
        $em = $this->getDoctrine()->getManager();

        $Marcbatta=0;
        $MikaelLesage=0;
        $FrançoisLetexier=0;
        $EducationCityStadium=0;




        foreach ($matche as $matche)
        {
            if (  $matche->getNomArbitre()=="Marc batta")  :

                $Marcbatta+=1;
            elseif ($matche->getNomArbitre()=="Mikael Lesage"):

                $MikaelLesage+=1;
            elseif ($matche->getNomArbitre()=="François Letexier"):
                $FrançoisLetexier +=1;


            endif;

        }
        $pieChart = new PieChart();
        $pieChart->getData()->setArrayToDataTable(
            [['stade', 'nombres'],
                ['Marc batta',     $Marcbatta],
                ['Mikael Lesage', $MikaelLesage],
                ['François Letexier',   $FrançoisLetexier]

            ]
        );
        $pieChart->getOptions()->setTitle('Statistique Matche Arbitre:');
        $pieChart->getOptions()->setHeight(500);
        $pieChart->getOptions()->setWidth(900);
        $pieChart->getOptions()->getTitleTextStyle()->setBold(true);
        $pieChart->getOptions()->getTitleTextStyle()->setColor('#009900');
        $pieChart->getOptions()->getTitleTextStyle()->setItalic(true);
        $pieChart->getOptions()->getTitleTextStyle()->setFontName('Arial');
        $pieChart->getOptions()->getTitleTextStyle()->setFontSize(20);

        return $this->render('matche/Stat.html.twig', array('piechart' => $pieChart));
    }

}

