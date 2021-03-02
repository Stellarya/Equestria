<?php

namespace App\Controller;

use App\Entity\Cheval;
use App\Form\ChevalType;
use App\Repository\ChevalRepository;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Config\Definition\Exception\Exception;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Validator\Constraints\Json;

/**
 * @Route("/cheval", name="cheval")
 */
class ChevalController extends AbstractController {
    /**
     * @Route("/", name="_index")
     */
    public function index (): Response {
        return $this->render('cheval/index.html.twig', [
            'title' => 'Chevaux',
            'navItemValue' => 'Chevaux'
        ]);
    }

    /**
     * @Route("/list", name="_list")
     * @param ChevalRepository $chevalRepository
     * @return Response
     */
    public function list (ChevalRepository $chevalRepository): Response {
        $toCheval = $chevalRepository->findAll();

        return $this->render('cheval/listeCheval.html.twig', [
            'title' => 'Liste de Chevaux',
            'chevaux' => $toCheval
        ]);
    }

    /**
     * @Route("/details/{id}", name="_details", requirements={"id"="\d+"})
     * @param int $id
     * @param ChevalRepository $chevalRepository
     * @return Response
     */
    public function details (int $id, ChevalRepository $chevalRepository): Response {
        $oCheval = $chevalRepository->find($id);
        $robe = $oCheval->getRobe()->getLibelle();
        $race = $oCheval->getRace()->getLibelle();

        return $this->render('cheval/details.html.twig', [
            'title' => $oCheval->getNom(),
            'cheval' => $oCheval,
            'robe' => $robe,
            'race' => $race
        ]);
    }

    /**
     * @Route("/add", name="_add")
     * Renvoie la modale et les variables nécessaires
     *
     * @param Request $request
     * @return Response
     */
    public function ajouter (Request $request): Response {

        $idEntity = $request->get('idEntity');

        $oCheval = new Cheval();

        $form = $this->createForm(ChevalType::class, $oCheval, array(
            'action' => $this->generateUrl('cheval_form_submit'
            )));

        return $this->render('cheval/ajouter.html.twig', [
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/form/submit", name="_form_submit")
     *
     * @param Request $request
     * @return RedirectResponse
     */
    public function submitFormCheval (Request $request) {
        $oCheval = new Cheval();

        $form = $this->createForm(ChevalType::class, $oCheval);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($oCheval);
            $entityManager->flush();

            $this->addFlash('success', "Idée ajoutée avec succès.");
            return $this->redirect(
                $this->generateUrl('cheval_index')
            );


        } else {
            $this->addFlash('danger', "Idée ne peux pas etre ajoutée.");
        }
    }

    /**
     * @Route("/{idCheval}/delete", name="_delete", requirements={"idCheval"="\d+"})
     *
     * @param $idCheval
     * @param ChevalRepository $chevalRepository
     * @return JsonResponse
     */
    public function deleteAction ($idCheval, ChevalRepository $chevalRepository): JsonResponse {
        $oCheval = $chevalRepository->find($idCheval);

        if ($oCheval) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($oCheval);
            $em->flush();

            return new JsonResponse([
                'successMessage' => 'Le cheval a bien été supprimée.'
            ]);

        } else {
            return new JsonResponse([
                'errorMessage' => 'Erreur ! Le cheval à supprimer n\'existe pas.'
            ]);
        }
    }

}
