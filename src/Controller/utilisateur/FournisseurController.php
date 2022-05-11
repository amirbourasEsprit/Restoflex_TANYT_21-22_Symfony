<?php

namespace App\Controller\utilisateur;

use App\Entity\Utilisateur;
use App\Repository\UtilisateurRepository;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class FournisseurController extends AbstractController
{
    /**
     * @Route("/fournisseur", name="app_fournisseur")
     */
    public function index(): Response
    {
        return $this->render('fournisseur/index.html.twig', [
            'controller_name' => 'FournisseurController',
        ]);
    }
    /**
     * @return Response
     * @Route("/fournisseurs",name="listFournisseursg")
     */


    public function afficher()
    {

            $User = $this->getDoctrine()->getRepository(Utilisateur::class)->findAll();

       
        return $this->render("fournisseur/index.html.twig",[
            'fournisseurs' => $User
        

            ]);
    }
     /**
    * @Route("/supprimerfour/{id}", name="supprimer_utilisateur_fournisseur")
    */
    public function supprimer(UtilisateurRepository $repository, $id)
    {   
        $User = $repository->find($id);
        $em=$this->getDoctrine()->getManager();
        $em->remove($User);
        $em->flush();
        return $this->redirectToRoute("listFournisseurs");

    }

}
