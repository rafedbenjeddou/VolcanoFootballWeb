<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class KiosqueController extends AbstractController
{
    /**
     * @Route("/kiosque", name="kiosque")
     */
    public function index(): Response
    {
        return $this->render('kiosque/index.html.twig', [
            'controller_name' => 'KiosqueController',
        ]);
    }
}
