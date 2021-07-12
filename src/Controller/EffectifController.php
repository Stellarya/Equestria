<?php

namespace App\Controller;

use App\Entity\Personne;
use App\Form\PersonneType;
use App\Repository\PersonneRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\HttpFoundation\Request;
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
     * @param PersonneRepository $personneRepository
     * @return Response
     */
    public function index(PersonneRepository $personneRepository): Response {
        $toPersonne = $personneRepository->findAll();

        return $this->render('effectif/index.html.twig', [
            'title' => 'Effectifs',
            'navItemValue' => 'Effectifs',
            'personnes' => $toPersonne
        ]);
    }

    /**
     * @Route("/list", name="_list")
     * @param PersonneRepository $personneRepository
     * @return Response
     */
    public function list(PersonneRepository $personneRepository): Response {
        $toPersonne = $personneRepository->findAll();

        return $this->render('effectif/index.html.twig', [
            'navItemValue' => 'Effectifs',
            'title' => 'Liste de Personne',
            'personnes' => $toPersonne
        ]);
    }

    /**
     * @Route("/add", name="_add")
     * Renvoie la modale et les variables nécessaires
     *
     * @return Response
     */
    public function ajouter(): Response {

        $oPersonne = new Personne();

        $form = $this->createForm(PersonneType::class, $oPersonne, array(
            'action' => $this->generateUrl('effectifs_form_submit'
            )));

        return $this->render('effectif/ajouter.html.twig', [
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/form/submit", name="_form_submit")
     *
     * @param Request $request
     * @return RedirectResponse
     */
    public function submitFormCheval(Request $request) {
        $oPersonne = new Personne();

        $form = $this->createForm(PersonneType::class, $oPersonne);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {

            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($oPersonne);
            $entityManager->flush();

            $this->addFlash('success', "Personne ajoutée avec succès.");
            return $this->redirect(
                $this->generateUrl('effectifs_index')
            );


        } else {
            $this->addFlash('danger', "Personne ne peux pas etre ajoutée.");
        }
    }
}
