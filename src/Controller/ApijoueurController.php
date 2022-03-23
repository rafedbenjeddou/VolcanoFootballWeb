<?php

namespace App\Controller;

use App\Entity\Equipe;
use App\Entity\Joueur;
use App\Repository\JoueurRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Serializer\SerializerInterface;

class ApijoueurController extends AbstractController
{
    /**
     * @Route("/api/joueurafficher", name="apijoueurafficher")
     */
    public function index(JoueurRepository $repository, SerializerInterface $serializer): JsonResponse
    {
        return $this->json($repository->findAll(),200,[],['groups'=>'equipe']);;
    }

    /*  /**
       * @route ("/api/joueurajouter", name="apijoueurajouter" , methods={"POST"} )
       */
    /* public function ajouter(Request $request, SerializerInterface $serializer,EntityManagerInterface $em){

        $content= $request->getContent();
        $joueur = $serializer->deserialize($content, Joueur::class, 'json');
        $em->persist($joueur);
        $em->flush();
        return $this->json($joueur,201,[],['groups'=>'equipe']);
    }
    /**
     * @Route("/api/joueursupprimer", name="apijoueursupprimer")
     */
    /* public function supprimer(Request $request) {
        $id = $request->get("id");
        $em = $this->getDoctrine()->getManager();
        $joueur = $em->getRepository(Joueur::class)->find($id);
        if($joueur!=null ) {
            $em->remove($joueur);
            $em->flush();

            return new JsonResponse("Joueur Supprime!", 200);
        }
        return new JsonResponse("ID Joueur Invalide.");


    }
    /**
     * @Route("/api/joueurmodifier", name="apijoueurmodifier")
     */
    /* public function Modifier(Request $request)
    {
        $em = $this->getDoctrine()->getManager();
        $joueur = $this->getDoctrine()->getManager()
            ->getRepository(Joueur::class)
            ->find($request->get("id"));

        $idjoueur = $request->get("joueur");
        $joueur->set($this->getDoctrine()->getManager()->getRepository(Joueur::class)->find($idjoueur));
        $joueur->setNomJoueur($request->get("nom_joueur"));
        $joueur->setPrenomJoueur($request->get("prenom_joueur"));
        $joueur->setAge($request->get("age_joueur"));
        $joueur->setPhoto($request->get("photo_joueur"));
        $joueur->setPosition($request->get("position_joueur"));
        $joueur->setDescription($request->get("description_joueur"));


        try {
            $em->persist($joueur);
            $em->flush();

            return new JsonResponse("Joueur Modifie!", 200);
        }
        catch (\Exception $ex)
        {
            return new Response("Execption: ".$ex->getMessage());
        }

    }
    */
}
