<?php

namespace App\Controller\adminRestoflex;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class AdminApplicationController extends AbstractController
{
    /**
     * @Route("/admin/application", name="app_admin_application")
     */
    public function index(): Response
    {
        return $this->render('admin_application/index.html.twig', [
            'controller_name' => 'AdminApplicationController',
        ]);
    }
}
