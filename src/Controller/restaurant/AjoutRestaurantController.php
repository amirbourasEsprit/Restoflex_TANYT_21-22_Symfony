<?php

namespace App\Controller\restaurant;
use App\Controller\restaurant\SubmitType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use App\Entity\Restaurant;
use App\Form\RestaurantType;
use Symfony\Component\Routing\Annotation\Route;

class AjoutRestaurantController extends AbstractController
{
    /**
     * @Route("/restaurant", name="app_restaurant")
     */
    public function index(): Response
    {  

    } 
    /**
     * @Route("/ajout/restaurant", name="app_ajout_restaurant")
     */
    public function ajouter(Request $request): Response

    {  
        $restaurant=new Restaurant();
        $form = $this->createForm(RestaurantType::class, $restaurant);
        $form->handleRequest($request);
        
        if ($form->isSubmitted() && $form->isValid()) 
        {
        dump('hello');
        $em=$this->getDoctrine()->getManager();
        $em->persist($restaurant);
        $em->flush();
        return $this->redirectToRoute('app_test');
        }
        return $this->render('restaurant/index.html.twig', [
            'form' => $form->createView(),
        ]);
       
    } 
}
