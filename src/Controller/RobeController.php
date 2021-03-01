<?php

namespace App\Controller;

use App\Repository\RobeRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/robe", name="robe")
 * Class RobeController
 * @package App\Controller
 */
class RobeController extends AbstractController
{
    /**
     * @Route("/", name="_index")
     */
    public function index(): Response
    {
        return $this->render('robe/index.html.twig', [
            'title' => 'Administration',
            'navItemValue' => 'Administration'
        ]);
    }

    /**
     * @Route("/list", name="_list")
     * @param RobeRepository $robeRepository
     * @return Response
     */
    public function list (RobeRepository $robeRepository): Response {
        $toRobe = $robeRepository->findAll();

        return $this->render('robe/listeRobe.html.twig', [
            'title' => 'Liste des Robes',
            'robes' => $toRobe
        ]);
    }
}
