<?php

namespace App\Controller;
use App\Entity\Agence;

use App\Repository\AgenceRepository;
use Symfony\Component\Serializer\SerializerInterface; 
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;
use Symfony\Component\HttpFoundation\Request;
use Doctrine\ORM\EntityManagerInterface;


class ApiAgenceController extends AbstractController
{
    /**
     * @Route("/api/afficheA", name="api_afficheA", methods={"GET"})
     */
    public function AfficheApi(AgenceRepository $repo,NormalizerInterface $Normalizer) {
        $agence=$repo->findAll();

        $jsonContent=$Normalizer->normalize($agence,'json',['groups'=>'post:read']);
       

        return new Response(json_encode($jsonContent));

    }
     /**
     * @Route("/api/addA", name="api_addA", methods={"POST"})
     */
    public function AjoutApi(Request $request, SerializerInterface $serialzer, EntityManagerInterface $em) {
    

        $jsonRecu = $request->getContent();

        $post = $serialzer->deserialize($jsonRecu, Agence::class, 'json' );

        $em->persist($post);
        $em->flush();

        return $this->json($post,201,[],['groups'=>'post:read']); 
         

    }  
}
