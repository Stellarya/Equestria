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
        ]);
    }

    /**
     * @Route("/list", name="_list")
     * @param ChevalRepository $chevalRepository
     * @return Response
     */
    public function list (ChevalRepository $chevalRepository, DataTableFactory $dataTableFactory, Request $request): Response {
        $toCheval = $chevalRepository->findAll();

        foreach ($toCheval as $oCheval) {
            $isPureRace = ($oCheval->getIsPureRace()) ? 'fas fa-check' : 'fas fa-times';
            $robe = $oCheval->getRobe()->getLibelle();
            $race = $oCheval->getRace()->getLibelle();
            if ($oCheval->getSexe()->getId() == 1) {
                $sexe = 'fas fa-mars';
            } else if ($oCheval->getSexe()->getId() == 2) {
                $sexe = 'fas fa-genderless';
            } else {
                $sexe = 'fas fa-venus';
            }
        }

        return $this->render('cheval/listeCheval.html.twig', [
            'title' => 'Liste de Chevaux',
            'chevaux' => $toCheval,
            'isPureRace' => $isPureRace,
            'robe' => $robe,
            'race' => $race,
            'sexe' => $sexe
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
     * @Route("/modale", name="_modale")
     */
    public function ajouter (Request $request, ChevalRepository $chevalRepository): Response {
        $idEntity = $request->get('idEntity');

        $oIdee = new Cheval();

        $form = $this->createForm(ChevalType::class, $oIdee, array(
            'action' => $this->generateUrl('cheval_form_submit'
            )));

        return $this->render('cheval/_form.html.twig', [
            'formIdee' => $form->createView(),
        ]);
    }

    /**
     * @Route("/form/submit", name="_form_submit")
     * Soumet le formulaire s'il est valide
     * @param Request $request
     * @param ChevalRepository $chevalRepository
     * @return RedirectResponse
     */
    public function submitFormIdee (Request $request, ChevalRepository $chevalRepository): RedirectResponse {

        $oCheval = new Cheval();

        $form = $this->createForm(ChevalType::class, $oCheval);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {

            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($oCheval);
            $entityManager->flush();

            $this->addFlash('success', "Cheval ajoutée avec succès.");
            return $this->redirect(
                $this->generateUrl('cheval_details', array('id' => $oCheval->getId()))
            );


        } else {
            $this->addFlash('danger', "le cheval ne peux pas etre ajoutée.");
        }
    }

}
