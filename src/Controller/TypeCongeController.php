<?php

namespace App\Controller;

use App\Entity\Conge;
use App\Entity\TypeConge;
use App\Form\TypeCongeType;
use Symfony\Component\HttpFoundation\Request;
use MercurySeries\FlashyBundle\FlashyNotifier;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class TypeCongeController extends AbstractController
{
    /**
     * @Route("/type/conge", name="app_type_conge")
     */
    public function index(): Response
    {
        return $this->render('type_conge/index.html.twig', [
            'controller_name' => 'TypeCongeController',
        ]);
    }
     /**
     * @Route("/Ajouter/TypeConge", name="AjouterTypeConge" )
     * @param Request $request
     */
    public function AjouterTypeConge(Request $request,FlashyNotifier $flashy){
        $typeconge = new TypeConge();
        $form = $this->createForm(TypeCongeType::class,$typeconge);
        $form->handleRequest($request);
        if ($form->isSubmitted()&& $form->isValid()) {
            $em=$this->getDoctrine()->getManager();
            $em->persist($typeconge);
            $em->flush();
            $flashy->success('Type de Congé Ajouté!', 'http://your-awesome-link.com');
            return $this->redirectToRoute("AfficherTypeConge");
        }
        else
        return    $this->render("type_conge/Ajouter.html.twig",['form'=>$form->createView()]);
    }
     /**
     * @Route("/Modifier/TypeConge/{id}", name="ModifierTypeConge" )
     */
    public function ModifierTypeConge(Request $request, $id,FlashyNotifier $flashy){
        $em=$this->getDoctrine()->getManager();
        $conge= $this->getDoctrine()->getRepository(Conge::class)->findAll();

        $res = $em->getRepository(TypeConge::class)->find($id);
        $form = $this->createForm(TypeCongeType::class, $res);

        $form->handleRequest($request);
        if($form->isSubmitted() && $form->isValid())
        {
            $em->flush();
            $flashy->success('Type de Congé Modifié!', 'http://your-awesome-link.com');
            return $this->redirectToRoute('AfficherTypeConge');
        }
        return $this->render('type_conge/Modifier.html.twig', [
            'form' => $form->createView()
        ]);
    }
    /**
     * @Route("/Afficher/TypeConge", name="AfficherTypeConge")
     */
    public function AfficherTypeConge(){
        $repo=$this->getDoctrine()->getRepository(TypeConge::class);
        $typeconge=$repo->findAll(); 
        return $this->render('type_conge/Affiche.html.twig',['typeconge'=>$typeconge]);
    }
    /**
     * @Route("/Supprimer/TypeConge/{id}", name="SupprimerTypeConge" )
     */
    public function SupprimerTypeConge(TypeConge $id,FlashyNotifier $flashy)
    {
        $em=$this->getDoctrine()->getManager();
        $em->remove($id);
        $em->flush();
        $flashy->success('Type de Congé Supprimé!', 'http://your-awesome-link.com');
        return $this->redirectToRoute("AfficherTypeConge");

    }

}
