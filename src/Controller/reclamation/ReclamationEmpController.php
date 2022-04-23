<?php

namespace App\Controller\reclamation;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ReclamationEmpController extends AbstractController
{
    /**
     * @Route("/reclamation/emp", name="app_reclamation_emp")
     */
    public function index(): Response
    {
        return $this->render('reclamation_emp/index.html.twig', [
            'controller_name' => 'ReclamationEmpController',
        ]);
    }
}
