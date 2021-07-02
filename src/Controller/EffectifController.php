<?php

namespace App\Controller;

use App\Repository\PersonneRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/effectifs", name="effectifs")
 * Class EffectifController
 * @package App\Controller
 */
class EffectifController extends AbstractController
{

    /**
     * @Route("/", name="_index")
     */
    public function index(): Response {
        return $this->render('effectif/index.html.twig', [
            'title' => 'Effectifs',
            'navItemValue' => 'Effectifs'
        ]);
    }

    /**
     * @Route("/list", name="_list")
     * @param PersonneRepository $personneRepository
     * @return Response
     */
    public function list(PersonneRepository $personneRepository): Response {
        $toPersonne = $personneRepository->findAll();

        return $this->render('cheval/listeCheval.html.twig', [
            'title' => 'Liste de Personne',
            'chevaux' => $toPersonne
        ]);
    }
}