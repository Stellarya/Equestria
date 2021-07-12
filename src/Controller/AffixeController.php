<?php

namespace App\Controller;

use App\Entity\Affixe;
use App\Form\AffixeType;
use App\Repository\AffixeRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;


/**
 * @Route("/affixe", name="affixe")
 * Class AffixeController
 * @package App\Controller
 */
class AffixeController extends AbstractController
{
    /**
     * @Route("/", name="_index")
     */
    public function index(): Response
    {
        return $this->render('affixe/index.html.twig', [
            'title' => 'Administration',
            'navItemValue' => 'Administration'
        ]);
    }

    /**
     * @Route("/list", name="_list")
     * @param AffixeRepository $affixeRepository
     * @return Response
     */
    public function list(AffixeRepository $affixeRepository): Response
    {
        $toAffixe = $affixeRepository->findAll();

        return $this->render('affixe/listeAffixe.html.twig', [
            'title' => 'Liste des Affixes',
            'affixes' => $toAffixe
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

        $oAffixe = new Affixe();

        $form = $this->createForm(AffixeType::class, $oAffixe, array(
            'action' => $this->generateUrl('affixe_form_submit'
            )));

        return $this->render('affixe/ajouterAffixe.html.twig', [
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
        $oRace = new Affixe();

        $form = $this->createForm(AffixeType::class, $oRace);
        $form->handleRequest($request);
        dump($form->isSubmitted());
        dump($form->isValid());
        dump($form->getExtraData());

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($oRace);
            $entityManager->flush();

            $this->addFlash('success', "Affixe a été ajoutée avec succès.");
            return $this->redirect(
                $this->generateUrl('admin_index') . '#listeAffixe');


        } else {
            $this->addFlash('danger', "Affixe ne peux pas etre ajoutée.");
        }
    }
}
