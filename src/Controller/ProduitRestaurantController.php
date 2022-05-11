<?php

namespace App\Controller;

use App\Services\GetUser;
use App\Entity\Restaurant;
use App\Entity\ProduitRestaurant;
use App\Form\ProduitRestaurantType;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

/**
 * @Route("/produit/restaurant")
 */
class ProduitRestaurantController extends AbstractController
{
    /**
     * @Route("/", name="app_produit_restaurant_index", methods={"GET"})
     */
    public function index(EntityManagerInterface $entityManager): Response
    {
        $produitRestaurants = $entityManager
            ->getRepository(ProduitRestaurant::class)
            ->findAll();

        return $this->render('produit_restaurant/index.html.twig', [
            'produit_restaurants' => $produitRestaurants,
        ]);
    }

    /**
     * @Route("/new", name="app_produit_restaurant_new", methods={"GET", "POST"})
     */
    public function new(Request $request, EntityManagerInterface $entityManager, GetUser $getUser): Response
    {
        $produitRestaurant = new ProduitRestaurant();
        $form = $this->createForm(ProduitRestaurantType::class, $produitRestaurant);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $idrest=$getUser->Get_User()->getIdRest();
            $currentrest= $this->getDoctrine()->getManager()->getRepository(Restaurant::class)->find($idrest);
            $produitRestaurant->setIdRest($currentrest);
            $produitRestaurant->setCateg("Viande");
            $entityManager->persist($produitRestaurant);
            $entityManager->flush();

            return $this->redirectToRoute('app_produit_restaurant_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('produit_restaurant/new.html.twig', [
            'produit_restaurant' => $produitRestaurant,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{idPdtrest}", name="app_produit_restaurant_show", methods={"GET"})
     */
    public function show(ProduitRestaurant $produitRestaurant): Response
    {
        return $this->render('produit_restaurant/show.html.twig', [
            'produit_restaurant' => $produitRestaurant,
        ]);
    }

    /**
     * @Route("/{idPdtrest}/edit", name="app_produit_restaurant_edit", methods={"GET", "POST"})
     */
    public function edit(Request $request, ProduitRestaurant $produitRestaurant, EntityManagerInterface $entityManager): Response
    {
        $form = $this->createForm(ProduitRestaurantType::class, $produitRestaurant);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->flush();

            return $this->redirectToRoute('app_produit_restaurant_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('produit_restaurant/edit.html.twig', [
            'produit_restaurant' => $produitRestaurant,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{idPdtrest}", name="app_produit_restaurant_delete", methods={"POST"})
     */
    public function delete(Request $request, ProduitRestaurant $produitRestaurant, EntityManagerInterface $entityManager): Response
    {
        if ($this->isCsrfTokenValid('delete'.$produitRestaurant->getIdPdtrest(), $request->request->get('_token'))) {
            $entityManager->remove($produitRestaurant);
            $entityManager->flush();
        }

        return $this->redirectToRoute('app_produit_restaurant_index', [], Response::HTTP_SEE_OTHER);
    }
}
