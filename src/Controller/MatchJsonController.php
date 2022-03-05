<?php

namespace App\Controller;

use Symfony\Component\Routing\Annotation\Route;

use App\Entity\MatchJson;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Serializer\Encoder\JsonEncoder;
use Symfony\Component\Serializer\Normalizer\NormalizableInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;
use Symfony\Component\Serializer\Annotation\Groups;
use Symfony\Component\Serializer\Normalizer\ObjectNormalizer;
use Symfony\Component\Serializer\Serializer;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Symfony\Component\Validator\Constraints\Json;


class MatchJsonController extends AbstractController
{
    /******************Ajouter Match*****************************************/
    /**
     * @Route("/addMatchJSON", name="addmatchJSON")
     */

    public function addMatchJSON(Request $request,NormalizerInterface $Normalizer)
    {
        $em = $this->getDoctrine()->getManager();
        $match = new MatchJson();
        $match->setNomMatche($request->get('NomMatche'));
        $match->setNomArbitre($request->get('NomArbitre'));
        $match->setStade($request->get('Stade'));
        $match->setTour($request->get('tour'));
        $em->persist($match);
        $em->flush();
        $jsonContent = $Normalizer->normalize($match,'json',['groups'=>'post:read']);
        return new Response(json_encode($jsonContent));;

    }
    /******************Modifier Match (5dmt el Prof)*****************************************/
    /**
     * @Route("/updateMatchJSON/{id}", name="updateMatchJSON")
     */

    public function updateMatchJSON(Request $request,NormalizerInterface $Normalizer,$id)
    {
        $em = $this->getDoctrine()->getManager();
        $match = $em->getRepository(MatchJson::class)->find($id);
        $match->setNomMatche($request->get('NomMatche'));
        $match->setNomArbitre($request->get('NomArbitre'));
        $match->setStade($request->get('Stade'));
        $match->setTour($request->get('tour'));
        $em->flush();
        $jsonContent = $Normalizer->normalize($match,'json',['groups'=>'post:read']);
        return new Response("Information updated successfully".json_encode($jsonContent));;

    }

    /******************Modifier Match (5dmty ena)*****************************************/
    /**
     * @Route("/updateMatch", name="update_match")
     * @Method("PUT")
     */
    public function modifierMatchAction(Request $request) {
        $em = $this->getDoctrine()->getManager();
        $match = $this->getDoctrine()->getManager()
            ->getRepository(MatchJson::class)
            ->find($request->get("id"));

        $match->setNomMatche($request->get("NomMatche"));
        $match->setNomArbitre($request->get("NomArbitre"));
        $match->setStade($request->get("Stade"));
        $match->setTour($request->get("tour"));

        $em->persist($match);
        $em->flush();
        $serializer = new Serializer([new ObjectNormalizer()]);
        $formatted = $serializer->normalize($match);
        return new JsonResponse("Match a ete modifiee avec success.");

    }

    /******************Ajouter Match*****************************************/
    /**
     * @Route("/addMatch", name="add_match")
     * @Method("POST")
     */

    public function ajouterMatch(Request $request)
    {
        $match = new MatchJson();
        $NomMatche = $request->query->get("NomMatche");
        $NomArbitre = $request->query->get("NomArbitre");
        $Stade = $request->query->get("Stade");
        $tour = $request->query->get("tour");
        $em = $this->getDoctrine()->getManager();


        $match->setNomMatche($NomMatche);
        $match->setNomArbitre($NomArbitre);
        $match->setStade($Stade);
        $match->setTour($tour);

        $em->persist($match);
        $em->flush();
        $serializer = new Serializer([new ObjectNormalizer()]);
        $formatted = $serializer->normalize($match);
        return new JsonResponse($formatted);

    }

    /******************Supprimer Reclamation*****************************************/

    /**
     * @Route("/deleteMatch", name="delete_match")
     * @Method("DELETE")
     */

    public function deleteMatch(Request $request) {
        $id = $request->get("id");

        $em = $this->getDoctrine()->getManager();
        $match = $em->getRepository(MatchJson::class)->find($id);
        if($match!=null ) {
            $em->remove($match);
            $em->flush();

            $serialize = new Serializer([new ObjectNormalizer()]);
            $formatted = $serialize->normalize("Match a ete supprimee avec success.");
            return new JsonResponse($formatted);

        }
        return new JsonResponse("id match invalide.");


    }



    /******************affichage Match*****************************************/


    /**
     * @Route("/displayMatch", name="display_match")
     */
    public function allMatch()
    {

        $match = $this->getDoctrine()->getManager()->getRepository(MatchJson::class)->findAll();
        $serializer = new Serializer([new ObjectNormalizer()]);
        $formatted = $serializer->normalize($match);

        return new JsonResponse($formatted);

    }



}
