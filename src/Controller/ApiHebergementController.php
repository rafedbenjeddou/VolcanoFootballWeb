<?php

namespace App\Controller;
use App\Repository\HebergementRepository;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;
use App\Entity\Hebergement;

class ApiHebergementController extends AbstractController
{
    /**
     * @Route("/api/hebergement", name="api_hebergement", methods={"GET"})
     */
   
    public function AfficheApi(HebergementRepository $repo)
    {
        
        return $this->json($repo->findAll(),200,[],['groups'=>'post:read']);

     

    }

}
