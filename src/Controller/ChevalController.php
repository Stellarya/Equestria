<?php

namespace App\Controller;

use App\Entity\Cheval;
use App\Form\ChevalType;
use App\Repository\ChevalRepository;
use App\Repository\RaceRepository;
use App\Repository\RobeRepository;
use Omines\DataTablesBundle\Adapter\ArrayAdapter;
use Omines\DataTablesBundle\Column\NumberColumn;
use Omines\DataTablesBundle\Column\TextColumn;
use Omines\DataTablesBundle\DataTableFactory;
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
     * Retourne le formulaire d'ajout d'un cheval
     *
     * @param Request $request
     * @param ChevalRepository $chevalRepository
     * @return Response
     */
    public function getModalAjoutCheval (Request $request, ChevalRepository $chevalRepository) {

        $oCheval = new Cheval();

        $formCheval = $this->createForm(ChevalType::class, $oCheval, array(
            'action' => $this->generateUrl('cheval_form_submit', array(
                'idCheval' => -1
            ))
        ));

        return $this->render('cheval/ajouter.html.twig', [
            'formCheval' => $formCheval->createView()
        ]);
    }

    /**
     * @Route("/modale", name="_modale")
     * Retourne le formulaire d'ajout d'un cheval
     *
     * @param Request $request
     * @param ChevalRepository $chevalRepository
     * @return Response
     */
    public function getModalCheval (Request $request, ChevalRepository $chevalRepository) {
        $idCheval = $request->get('idCheval');

        if ($idCheval == -1) {
            $oCheval = new Cheval();
        } else {
            $oCheval = $chevalRepository->find($idCheval);

            if (!$idCheval) {
                throw $this->createNotFoundException('Erreur ! Cheval introuvable');
            }
        }
        $formCheval = $this->createForm(ChevalType::class, $oCheval, array(
            'action' => $this->generateUrl('cheval_form_submit', array(
                'idCheval' => $idCheval
            ))
        ));

        return $this->render('cheval/ajouter.html.twig', [
            'formCheval' => $formCheval->createView()
        ]);
    }

//    /**
//     * @Route("/update", name="_update")
//     * Retourne le formulaire d'ajout d'un cheval
//     *
//     * @param Request $request
//     * @param ChevalRepository $chevalRepository
//     * @return Response
//     */
//    public function getModalModifCheval (Request $request, ChevalRepository $chevalRepository) {
//        $idCheval = $request->get('idCheval');
//
//        $formCheval = $this->createForm(ChevalType::class, $oCheval, array(
//            'action' => $this->generateUrl('cheval_form_submit', array(
//                'idCheval' => $idCheval
//            ))
//        ));
//
//        return $this->render('cheval/ajouter.html.twig', [
//            'formCheval' => $formCheval->createView()
//        ]);
//    }

    /**
     * @Route("/{idCheval}/form/submit", name="_form_submit", requirements={"idCheval"="-?\d+"})
     *
     * @param Request $request
     * @param $idCheval
     * @param ChevalRepository $chevalRepository
     * @return RedirectResponse
     */
    public function submitFormCheval (Request $request, $idCheval, ChevalRepository $chevalRepository) {
        if (-1 == $idCheval) {
            $oCheval = new Cheval();
        } else {
            $oCheval = $chevalRepository->find($idCheval);
        }

        if ($oCheval->getSexe()->getLibelle() == 'Hongre') {
            $oCheval->setIsReproducteur(false);
        }

        $formCheval = $this->createForm(ChevalType::class, $oCheval);
        $formCheval->handleRequest($request);

        if ($formCheval->isSubmitted() && $formCheval->isValid()) {

            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($oCheval);
            $entityManager->flush();

            return $this->redirect(
                $this->generateUrl('cheval_details', array('id' => $oCheval->getId()))
            );
        } else {
            throw new Exception("Formulaire invalide.");
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
