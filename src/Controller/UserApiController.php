<?php

namespace App\Controller;

use App\Entity\User;
use App\Repository\UserRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Serializer\Normalizer\NormalizableInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;
use Symfony\Component\Serializer\SerializerInterface;
use Symfony\Component\HttpFoundation\Request;

class UserApiController extends AbstractController
{
    /**
     * @Route("/api/AfficherUsers", name="api_user" , methods={"GET"})
     */
    public function index(UserRepository $repo): Response
    {

        return $this->json($repo->findAll(),200,[],['groups'=>'post:read']);

    }

    /**
     * @Route("/api/AjouterUser", name="api_user",methods={"POST"})
     */
    public function add(Request $request,SerializerInterface $serializer,EntityManagerInterface $em)
    {
        $content= $request->getContent();
        $user = $serializer->deserialize($content, User::class, 'json');

        $em->persist($user);
        $em->flush();
        return $this->json($user,201,[],['groups'=>'post:read']);
    }

    /**
     * @Route("/api/AfficherUser", name="api_users" , methods={"GET"})
     */
    public function Afficher(UserRepository $repo): Response
    {

        return $this->json($repo->findAll(),200,[],['groups'=>'post:read']);

    }



}
