<?php

namespace App\Controller;

use App\Entity\Restaurant;
use App\Form\RestaurantType;
use App\Repository\RestaurantRepository;
use App\Controller\restaurant\SubmitType;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class RestaurantController extends AbstractController
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
    public function ajouterRestaurant(Request $request): Response

    {  
        $restaurant=new Restaurant();
        $form = $this->createForm(RestaurantType::class, $restaurant);
        $form->handleRequest($request);
        
        if ($form->isSubmitted() && $form->isValid()) 
        {
        $em=$this->getDoctrine()->getManager();
        $em->persist($restaurant);
        $em->flush();
        return $this->redirectToRoute('displayRest');
        }
        return $this->render('restaurant/index.html.twig', [
            'form' => $form->createView(),
        ]);
       
    }
    
     /**
     * @Route ("/modifRest/{idRest}", name="modifRest")
     */
    public function modifierRestaurant($idRest,Request $request,RestaurantRepository $repo): Response
    {
        $rest = $repo->find($idRest);
        $form = $this->createForm(RestaurantType::class , $rest);
        $form->handleRequest($request);
        
        if ($form->isSubmitted() && $form->isValid()) 
        {
        $em=$this->getDoctrine()->getManager();
        $em->flush();
        return $this->redirectToRoute('displayRest');
        }
        return $this->render('restaurant/modifier_rest.html.twig', [
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route ("/suppRest/{idRest}", name="suppRest")
     */
    public function supprimerRestaurant($idRest,RestaurantRepository $repo): Response
    {
        $rest = $repo->find($idRest);
        $em=$this->getDoctrine()->getManager();
        $em->remove($rest);
        $em->flush();
        return $this->redirectToRoute('displayRest');

    }

    /**
     * @Route ("/displayRest", name="displayRest")
     */
    public function afficherRestaurant(RestaurantRepository $repo): Response
    {
    $rest = $repo->findAll();
    return $this->render('restaurant/afficher_rest.html.twig',['restaurants'=>$rest ]);
    }

}
