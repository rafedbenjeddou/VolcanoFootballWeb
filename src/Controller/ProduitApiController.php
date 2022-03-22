<?php

namespace App\Controller;

use App\Entity\Produit;
use App\Repository\ProduitRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Validator\Constraints\Json;

class ProduitApiController extends AbstractController
{

    /**
     * @Route("/AfficherProduitsMobile", name="AfficherProduitsMobile")
     */
    public function AfficherProduitsMobile(ProduitRepository $repository)
    {
        return $this->json($repository->findAll(),200,[],['groups'=>'post:read']);
    }

    /**
     * @Route("/DetailProduitMobile", name="DetailProduitMobile")
     */
    public function DetailProduitMobile(Request $request) {
        $id = $request->get("id");
        $em = $this->getDoctrine()->getManager();
        $produit = $em->getRepository(Produit::class)->find($id);
        if($produit!=null ) {

            return $this->json($produit,200,[],['groups'=>'post:read']);

        }
        return new JsonResponse("ID Produit Invalide.");


    }





}
