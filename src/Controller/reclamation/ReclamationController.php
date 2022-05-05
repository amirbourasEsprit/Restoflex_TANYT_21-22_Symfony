<?php

namespace App\Controller\reclamation;
use App\Form\ReclamationType1;
use App\Services\GetUser;
use App\Entity\Reclamation;
use App\Form\ReclamationType;
use App\Repository\ReclamationRepository;
use App\Repository\UtilisateurRepository;
use CMEN\GoogleChartsBundle\GoogleCharts\Charts\PieChart;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class ReclamationController extends AbstractController
{
    /**
     * @Route("/reclamation", name="reclamation")
     */
    public function index(): Response
    {
    }

    /**
     * @Route("/AfficherReclamation/reclamation", name="AfficheR")
     */
    public function AfficherReclamation(ReclamationRepository $repository, UtilisateurRepository $repoUti): Response
    {
        //$repo=$this->getDoctrine()->getRepository(Reclamation::class);
        $reclamation = $repoUti->FindGerant();
        $tr=[];
        $i=0;
        foreach($reclamation as $t)
        {
            if($t instanceof Reclamation)
            $tr[$i] = $t;
            $i+=1;
        }
        return $this->render('reclamation/Affiche.html.twig', ['reclamation'=>$tr]);
    }
    /**
     * @Route("/{id}/AfficherReclamationRecu", name="ReclamationRecu")
     */
    public function AfficherReclamationRecu(ReclamationRepository $repository, UtilisateurRepository $repoUti,$id): Response
    {
        //$repo=$this->getDoctrine()->getRepository(Reclamation::class);

        $reclamation=$this->getDoctrine()->getRepository(Reclamation::Class)->ReclamationRecu($id);

        return $this->render('reclamation/Afficherecu.html.twig', ['reclamation'=>$reclamation]);
    }
    /**
     * @Route("/{id}/Editstatus", name="EditStatus")
     */
    public function EditStatut(ReclamationRepository $repository, UtilisateurRepository $repoUti,$id): Response
    {
        //$repo=$this->getDoctrine()->getRepository(Reclamation::class);
        $this->getDoctrine()->getRepository(Reclamation::class)->modifier_statut($id);
        $reclamation = $repoUti->FindGerant();
        $tr=[];
        $i=0;
        foreach($reclamation as $t)
        {
            if($t instanceof Reclamation)
                $tr[$i] = $t;
            $i+=1;
        }
        return $this->render('reclamation/Affiche.html.twig', ['reclamation'=>$tr]);
    }

    /**
     * @Route("/supp/{numReclamation}", name="r")
     */
    public function SupprimerRec($numReclamation ): Response
    
    {
        $repo=$this->getDoctrine()->getRepository(Reclamation::class);
        $reclamation=$repo->find($numReclamation);
        $em=$this->getDoctrine()->getManager();
        $em->remove($reclamation);
        $em->flush();
        return $this->redirectToRoute('AfficheR');
    }
      /**
     * @Route("/ajouter/reclamationCL", name="AjoutreclamationGCL")
     */
    public function AjouterRECclient(Request $request, GetUser $getUser): Response
    { 
        $reclamation = new Reclamation();
        $form = $this->createForm(ReclamationType::class, $reclamation);
        $form->handleRequest($request);
        if ($form-> isSubmitted() && $form-> isValid()){
            $reclamation->setStatutReclamation("en cours");
           $user=$getUser->GetUser();
            $reclamation->setid($user); 
            $em= $this->getDoctrine()->getManager();
            $em->persist($reclamation);
            $em->flush();
            return $this->redirectToRoute('AfficheR');
        }

        return $this->render('reclamation/AjoutRGerant.html.twig',['form'=>$form->createView()]);

   }
    /**
     * @Route("/ajouter/reclamationFO", name="AjoutreclamationGFO")
     */
    public function AjouterRECfournisseur(Request $request, GetUser $getUser): Response
    {
        $reclamation = new Reclamation();
        $form = $this->createForm(ReclamationType1::class, $reclamation);
        $form->handleRequest($request);
        if ($form-> isSubmitted() && $form-> isValid()){
            $reclamation->setStatutReclamation("en cours");
            $user=$getUser->GetUser();
            $reclamation->setid($user);
            $em= $this->getDoctrine()->getManager();
            $em->persist($reclamation);
            $em->flush();
            return $this->redirectToRoute('AfficheR');
        }

        return $this->render('reclamation/AjoutRGerant.html.twig',['form'=>$form->createView()]);

    }
   /**
     * @Route("show/{numReclamation}", name="show_rec", methods={"GET"})
     */
    public function show(Request $request,$numReclamation): Response
    {
        $reclamation = $this->getDoctrine()->getRepository(Reclamation::class)->find($numReclamation);
        return $this->render('reclamation/show.html.twig', [
            'reclamation' => $reclamation,
        ]);
    }
    /**
     * @Route("/stat/t/t", name="stat", methods={"GET"})
     */
    public function chartAction()
    {
        $t = $this->getDoctrine()->getRepository(Reclamation::class)->traite();
        $nt = $this->getDoctrine()->getRepository(Reclamation::class)->ntraite();

        $pieChart = new PieChart();
        $pieChart->getOptions()->setTitle("Statistiques sur les Reclamations selon statut ");
        $pieChart->getData()->setArrayToDataTable(
            [
                ['status', '4'],
                ['traitée',  (int)$t],
                ['non traitée', (int)$nt]

            ]
        );
        $pieChart->getOptions()->setPieSliceText('label');
        $pieChart->getOptions()->setHeight(500);
        $pieChart->getOptions()->setWidth(900);
        $pieChart->getOptions()->getLegend()->setPosition('none');
        return $this->render('reclamation/stat.html.twig', [
            'piechart' => $pieChart
        ]);
    }
}