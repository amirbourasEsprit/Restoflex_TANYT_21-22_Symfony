<?php

namespace App\Controller\utilisateur;

use App\Entity\Utilisateur;
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
            $User = $this->getDoctrine()->getRepository(Utilisateur::class)->findAll();

       
        return $this->render("employe/index.html.twig",[
            'employes' => $User
        

            ]);
    }





}
