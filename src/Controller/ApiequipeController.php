<?php

namespace App\Controller;

use App\Entity\Equipe;
use App\Repository\EquipeRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Serializer\SerializerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;

class ApiequipeController extends AbstractController
{
    /**
     * @Route("/api/equipeafficher", name="apiequipeafficher")
     */
    public function index(EquipeRepository $repository, SerializerInterface $serializer): JsonResponse
    {
        return $this->json($repository->findAll(),200,[],['groups'=>'equipe']);;
    }

    /*/**
     * @route ("/api/equipeajouter", name="apiequipeajouter" , methods={"POST"} )
     */
    /*public function ajouter(Request $request, SerializerInterface $serializer,EntityManagerInterface $em){

        $content= $request->getContent();
        $equipe = $serializer->deserialize($content, Equipe::class, 'json');
        $em->persist($equipe);
        $em->flush();
        return $this->json($equipe,201,[],['groups'=>'equipe']);
    }*/
}
