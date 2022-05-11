<?php

namespace App\Controller\utilisateur;

use App\Entity\Utilisateur;
use App\Form\EditEmployeeType;
use App\Repository\UtilisateurRepository;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class EmployeController extends AbstractController
{
    /**
     * @Route("/employe", name="app_employe")
     */
    public function index(): Response
    {
        return $this->render('employe/index.html.twig', [
            'controller_name' => 'EmployeController',
        ]);
    }


    /**
     * @return Response
     * @Route("/employes",name="listEmployes")
     */


    public function afficher()
    {

        // $User = $this->getDoctrine()->getRepository(Utilisateur::class)->findBy(
        //     ['id_role' => 2]);
            $users = $this->getDoctrine()->getRepository(Utilisateur::class)->findAll();
         
        return $this->render("employe/index.html.twig",[
            'employes' => $users

            ]);
    }   
    /**
    * @Route("/update/{id}", name="update")
    */
    public function update(UtilisateurRepository $repository, $id, Request $request)
    {
        $User = $repository->find($id);
        $form = $this->createForm(EditEmployeeType::class, $User);
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) 
        {
        $em=$this->getDoctrine()->getManager();
        $em->flush();
        return $this->redirectToRoute('listEmployes');
        }
        return $this->render('employe/updateEmployee.html.twig', [
        'form' => $form -> createView(),
        'employe' => $User]
        );

    }


    /**
    * @Route("/verifier/{id}", name="verifier")
    */
    public function verifier(UtilisateurRepository $repository, $id, Request $request)
    {   
        $User = $repository->find($id);
        
        $em=$this->getDoctrine()->getManager();
        if($User->getStatusCompte()=="verifier")
        {
        $User->setStatusCompte('non_verifier');
        $em->flush();

        return $this->redirectToRoute('update',['id'=>$id]);
    }
        if($User->getStatusCompte()=="non_verifier")
        {
        $User->setStatusCompte('verifier');
        $em->flush();

        return $this->redirectToRoute('update',['id'=>$id]);
    }
    return false;


        ;

    }
    /**
    * @Route("/supprimeremp/{id}", name="supprimer_utilisateur_employee")
    */
    public function supprimer(UtilisateurRepository $repository, $id)
    {   
        $User = $repository->find($id);
        $em=$this->getDoctrine()->getManager();
        $em->remove($User);
        $em->flush();
        return $this->redirectToRoute("listEmployes");

    }






}
