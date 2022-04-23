<?php

namespace App\Controller\reclamation;
use App\Services\GetUser;
use App\Entity\Reclamation;
use App\Form\ReclamationType;
use App\Repository\ReclamationRepository;
use App\Repository\UtilisateurRepository;
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
     * @Route("/ajouter/reclamation", name="AjoutreclamationG")
     */
    public function Ajouter(Request $request, GetUser $getUser): Response
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
     * @Route("show/{numReclamation}", name="show_rec", methods={"GET"})
     */
    public function show(Request $request,$numReclamation): Response
    {
        $reclamation = $this->getDoctrine()->getRepository(Reclamation::class)->find($numReclamation);
        return $this->render('reclamation/show.html.twig', [
            'reclamation' => $reclamation,
        ]);
    }
 
}