<?php

namespace App\Controller;

use App\Entity\User;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;
use Symfony\Component\Serializer\Normalizer\ObjectNormalizer;
use Symfony\Component\Serializer\Serializer;
use App\Repository\UserRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizableInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;
use Symfony\Component\Serializer\SerializerInterface;



class UserApiController extends AbstractController
{
    /**
     * @Route("SignUpMobile", name="SignUpMobile")
     */
    public function SignUpMobile(Request  $request, UserPasswordEncoderInterface $encoder)
    {

        $username = $request->query->get("username");
        $password = $request->query->get("password");
        $nom = $request->query->get("nom");
        $prenom = $request->query->get("prenom");
        $email = $request->query->get("email");
        $roles = $request->query->get("roles");

        if(!filter_var($email, FILTER_VALIDATE_EMAIL))
        {
            return new Response("Ce e-mail n'est pas valide");
        }

        $user = new User();
        $user->setUsername($username);

        $hash = $encoder->encodePassword($user, $user->getPassword());
        $user->setPassword($hash);

        $user->setNom($nom);
        $user->setPrenom($prenom);
        $user->setEmail($email);
        $user->setEnabled(true);
        $user->setRoles(array($roles));

        try {
            $em = $this->getDoctrine()->getManager();
            $em->persist($user);
            $em->flush();

            return new JsonResponse("Compte Cree!", 200);
        }
        catch (\Exception $ex)
        {
            return new Response("Execption: ".$ex->getMessage());
        }

        //http://127.0.0.1:8000/SignUpMobile?username=mobile&password=mobile&nom=mobile&prenom=mobile&email=ds@dssd.ca&roles=ROLE_ADMIN

    }


    /**
     * @Route("SignInMobile", name="SignInMobile")
     */
    public function SignInMobile(Request  $request)
    {
        $username = $request->query->get("username");
        $password = $request->query->get("password");

        $em = $this->getDoctrine()->getManager();
        $user = $em->getRepository(User::class)->findOneBy(['username'=>$username]);

        if($user)
        {
            if(password_verify($password,$user->getPassword()))
            {
                /*
                $serializer = new Serializer([new ObjectNormalizer()]);
                $formatted = $serializer->normalize($user);
                return new JsonResponse($formatted);
                */

                return $this->json($user,200,[],['groups'=>'post:read']);

            }
            else
            {
                return new Response("Mot de passe introuvable!");
            }
        }
        else
        {
            return new Response("User introuvable!");
        }

        //http://127.0.0.1:8000/SignInMobile?username=mobile&password=mobile


    }

    /**
     * @Route("ModifierUserMobile", name="ModifierUserMobile")
     */
    public function ModifierUserMobile(Request  $request, UserPasswordEncoderInterface $encoder)
    {

        $id = $request->query->get("id");
        $username = $request->query->get("username");
        $password = $request->query->get("password");
        $nom = $request->query->get("nom");
        $prenom = $request->query->get("prenom");
        $email = $request->query->get("email");
        $roles = $request->query->get("roles");

        $em = $this->getDoctrine()->getManager();
        $user = $em->getRepository(User::class)->find($id);

        if(!filter_var($email, FILTER_VALIDATE_EMAIL))
        {
            return new Response("Ce e-mail n'est pas valide");
        }

        $user->setUsername($username);

        $hash = $encoder->encodePassword($user, $user->getPassword());
        $user->setPassword($hash);

        $user->setNom($nom);
        $user->setPrenom($prenom);
        $user->setEmail($email);
        $user->setEnabled(true);
        $user->setRoles(array($roles));

        try {
            $em = $this->getDoctrine()->getManager();
            $em->persist($user);
            $em->flush();

            return new JsonResponse("Compte Modifiee!", 200);
        }
        catch (\Exception $ex)
        {
            return new Response("Execption: ".$ex->getMessage());
        }


    }



}
