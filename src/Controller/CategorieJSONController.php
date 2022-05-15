<?php

namespace App\Controller;

use App\Entity\Categorie;
use App\Form\CategorieType;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Symfony\Component\Serializer\Normalizer\AbstractNormalizer;
use Symfony\Component\Serializer\SerializerInterface;
use Symfony\Component\Serializer\Serializer;
use Symfony\Component\Serializer\Normalizer\ObjectNormalizer;
use Symfony\Component\HttpFoundation\JsonResponse ;

use Symfony\Component\Serializer\Normalizer\NormalizerInterface;


class CategorieJSONController extends AbstractController
{
    /**
     * @Route("/categorie/j/s/o/n", name="app_categorie_j_s_o_n")
     */
    public function index(): Response
    {
        return $this->render('categorie_json/index.html.twig', [
            'controller_name' => 'CategorieJSONController',
        ]);
    }

     /**
     * @Route("/categ/add3", name="add_categ")
     * @Method("GET")
     */

    public function addclub(Request $request)
    {
        $Categorie = new Categorie();
        $nomCategorie = $request->query->get("nomCategorie");
        
        $em = $this->getDoctrine()->getManager();
        $Categorie->setNomCategorie($nomCategorie);
       

        $em->persist($Categorie);
        $em->flush();
        $serializer = new Serializer([new ObjectNormalizer()]);
        $formatted = $serializer->normalize($Categorie);
        return new JsonResponse($formatted);

    }

/**
* @Route("/club/updateclub/{idCategorie}", name="update_club")
* @Method("PUT")
*/
    public function modifierClubAction(Request $request) {
        $em = $this->getDoctrine()->getManager();
        $Categorie= $this->getDoctrine()->getManager()
            ->getRepository(Categorie::class)
         ->find($request->get("idCategorie"));
        $nomCategorie = $request->query->get("nomCategorie");
        

        $Categorie->setNomCategorie($nomCategorie);
        
        $em->persist($Categorie);
        $em->flush();
        $serializer = new Serializer([new ObjectNormalizer()]);
        $formatted = $serializer->normalize($Categorie);
        return new JsonResponse("categorie a ete modifiee avec success.");

    }
    /**
     * @Route("/categ/liste2",name="liste_categ")
     */


    public function getClub(NormalizerInterface $Normalizer )
    {
        //Nous utilisons la Repository pour récupérer les objets que nous avons dans la base de données
        $repository =$this->getDoctrine()->getRepository(Categorie::class);
        $Categorie=$repository->FindAll();
        //Nous utilisons la fonction normalize qui transforme en format JSON nos donnée qui sont
        //en tableau d'objet Students
        $jsonContent=$Normalizer->normalize($Categorie,'json',['groups'=>'post:read']);



        return new Response(json_encode($jsonContent));
        dump($jsonContent);
        die;}
    /**
     * @Route("/categ/deletecateg", name="delete_categ")
     * @Method("DELETE")
     */

    public function deleteClubAction(Request $request) {
        $id = $request->get("idCategorie");

        $em = $this->getDoctrine()->getManager();
        $Categorie = $em->getRepository(Categorie::class)->find($id);
        if($Categorie!=null ) {
            $em->remove($Categorie);
            $em->flush();

            $serialize = new Serializer([new ObjectNormalizer()]);
            $formatted = $serialize->normalize("Votre categorie a ete supprimee avec success.");
            return new JsonResponse($formatted);

        }
        return new JsonResponse("id categorie invalide.");


    }
}
