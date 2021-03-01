<?php

namespace App\Controller;

use App\Repository\RaceRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/race", name="race")
 * Class RaceController
 * @package App\Controller
 */
class RaceController extends AbstractController
{
    /**
     * @Route("/", name="_index")
     */
    public function index(): Response
    {
        return $this->render('race/index.html.twig', [
            'title' => 'Administration',
            'navItemValue' => 'Administration'
        ]);
    }

    /**
     * @Route("/list", name="_list")
     * @param RaceRepository $raceRepository
     * @return Response
     */
    public function list (RaceRepository $raceRepository): Response {
        $toRace = $raceRepository->findAll();

        return $this->render('race/listeRace.html.twig', [
            'title' => 'Liste des Races',
            'races' => $toRace
        ]);
    }
}
