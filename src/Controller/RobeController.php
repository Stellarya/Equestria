<?php

namespace App\Controller;

use App\Entity\Robe;
use App\Form\ChevalType;
use App\Form\RobeType;
use App\Repository\RobeRepository;
use Exception;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\HttpFoundation\Request;
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
    public function list(RobeRepository $robeRepository): Response
    {
        $toRobe = $robeRepository->findAll();

        return $this->render('robe/listeRobe.html.twig', [
            'title' => 'Liste des Robes',
            'robes' => $toRobe
        ]);
    }

    /**
     * @Route("/add", name="_add")
     * Renvoie la modale et les variables nécessaires
     *
     * @return Response
     */
    public function ajouter(): Response
    {

        $oRobe = new Robe();

        $form = $this->createForm(RobeType::class, $oRobe, array(
            'action' => $this->generateUrl('robe_form_submit'
            )));

        return $this->render('robe/ajouterRobe.html.twig', [
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/form/submit", name="_form_submit")
     *
     * @param Request $request
     * @return RedirectResponse
     * @throws Exception
     */
    public function submitFormRobe(Request $request)
    {
        $oRobe = new Robe();

        $form = $this->createForm(RobeType::class, $oRobe);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($oRobe);
            $entityManager->flush();

            $this->addFlash('success', "Robe ajoutée avec succès.");
            return $this->redirectToRoute('admin_index');


        } else {
            throw new Exception('Erreur ! Formulaire invalide.');
        }
    }
}
