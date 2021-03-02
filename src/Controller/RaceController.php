<?php

namespace App\Controller;

use App\Entity\Race;
use App\Form\RaceType;
use App\Repository\RaceRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\HttpFoundation\Request;
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
    public function list(RaceRepository $raceRepository): Response
    {
        $toRace = $raceRepository->findAll();

        return $this->render('race/listeRace.html.twig', [
            'title' => 'Liste des Races',
            'races' => $toRace
        ]);
    }

    /**
     * @Route("/add", name="_add")
     * Renvoie la modale et les variables nécessaires
     *
     * @param Request $request
     * @return Response
     */
    public function ajouter(Request $request): Response
    {

        $idEntity = $request->get('idEntity');

        $oRace = new Race();

        $form = $this->createForm(RaceType::class, $oRace, array(
            'action' => $this->generateUrl('race_form_submit'
            )));

        return $this->render('race/ajouterRace.html.twig', [
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/form/submit", name="_form_submit")
     *
     * @param Request $request
     * @return RedirectResponse
     */
    public function submitFormRace(Request $request)
    {
        $oRace = new Race();

        $form = $this->createForm(RaceType::class, $oRace);
        $form->handleRequest($request);
        dump($form->isSubmitted());
        dump($form->isValid());
        dump($form->getExtraData());

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($oRace);
            $entityManager->flush();

            $this->addFlash('success', "Race ajoutée avec succès.");
            return $this->redirect(
                $this->generateUrl('admin_index') . '#listeRace');


        } else {
            $this->addFlash('danger', "Idée ne peux pas etre ajoutée.");
        }
    }
}
