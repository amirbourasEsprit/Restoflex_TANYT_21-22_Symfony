<?php

namespace App\Controller\reclamation;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ReclamationFController extends AbstractController
{
    /**
     * @Route("/reclamation/f", name="app_reclamation_f")
     */
    public function index(): Response
    {
        return $this->render('reclamation_f/index.html.twig', [
            'controller_name' => 'ReclamationFController',
        ]);
    }
}
