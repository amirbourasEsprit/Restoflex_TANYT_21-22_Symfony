<?php

namespace App\Controller\typeReclamation;
use App\Entity\TypeReclamation;
use App\Form\TypeReclamationType;
use App\Repository\TypeReclamationRepository;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class TypeRecController extends AbstractController
{/**
     * @Route("/typeReclamation", name="typeReclamation")
     */
    public function index(): Response
    {
    }

    /**
     * @Route("/AfficherTypeRec/type_rec", name="AfficheTypeR")
     */
    public function AfficherTypeRec(): Response
    {
        $repo=$this->getDoctrine()->getRepository(TypeReclamation::class);
        $TypeReclamation = $repo->findAll();
        return $this->render('type_rec/AfficheType.html.twig', ['TypeReclamation'=>$TypeReclamation]);
    }

 
      /**
     * @Route("/SupprimerTypeRec/{idTypeReclamation}", name="s")
     */
    public function SupprimerTypeRec($idTypeReclamation ): Response
    {
        $repo=$this->getDoctrine()->getRepository(TypeReclamation::class);
        $typereclamation=$repo->find($idTypeReclamation);
        $em=$this->getDoctrine()->getManager();
        $em->remove($typereclamation);
        $em->flush();
        return $this->redirectToRoute('AfficheTypeR');
    }

     /**
     * @Route("/AjoutTypeRec/type_rec", name="AjoutTypeRec")
     */
    public function AjouterTypeRec(Request $request): Response
    {
        $TypeRec= new TypeReclamation();
        $form = $this->createForm(TypeReclamationType::class, $TypeRec);
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) { 
            $em=$this->getDoctrine()->getManager();
            $em->persist($TypeRec);
            $em->flush();
            return $this->redirectToRoute('AfficheTypeR');   
        }
        return $this->render('type_rec/AjoutTypeRec.html.twig',['form' => $form->createView()]);
    
    }

     
}






