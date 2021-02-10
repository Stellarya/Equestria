<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class RobeController extends AbstractController
{
    /**
     * @Route("/robe", name="robe")
     */
    public function index(): Response
    {
        return $this->render('robe/index.html.twig', [
            'controller_name' => 'RobeController',
        ]);
    }
}
