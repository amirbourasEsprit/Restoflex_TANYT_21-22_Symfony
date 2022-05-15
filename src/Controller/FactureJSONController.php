<?php

namespace App\Controller;

use App\Entity\Facture;
use App\Entity\Restaurant;
use App\Entity\Fournisseur;
use App\Repository\FactureRepository;
use Symfony\Component\Serializer\Serializer;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Serializer\Normalizer\ObjectNormalizer;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class FactureJSONController extends AbstractController
{
    /**
     * @Route("/facture/j/s/o/n", name="app_facture_j_s_o_n")
     */
    public function index(): Response
    {
        return $this->render('facture_json/index.html.twig', [
            'controller_name' => 'FactureJSONController',
        ]);
    }


    /**
     * @Route ("/addFactJ", name="addFactJ")
     */
    public function ajouterFactureJ(Request $request): Response
    {
        $fact = new Facture();

        $date = new \DateTime('@'.strtotime('now'));
        $idFournisseur= $request->query->get("idFournisseur");
        $idRest= $request->query->get("idRest");
       
        $fact->setDateFacture($date);
        $fact->setTotal($request->get('total'));
        $fact->setStatut("non payée");
        $frs=$this->getDoctrine()->getRepository(Fournisseur::class)->find($idFournisseur);
        $fact->setIdFournisseur($frs);
        $rest=$this->getDoctrine()->getRepository(Restaurant::class)->find($idRest);
        $fact->setIdRest($rest);
   // return new Response($fact);
        
        try {
            $em=$this->getDoctrine()->getManager();
            $em->persist($fact);
            $em->flush();
            // $serializer = new Serializer([new ObjectNormalizer()]);
            // $json = $serializer->normalize($fact);
            return new JsonResponse("Fature ajoutée",200);
        } catch (\Exception $th) {
            return new Response("Exception".$th->getMessage());
        }
       
       
    }


    /**
     * @Route ("/updateFactJ/{numFacture}", name="updateFactJ")
     */
    public function modifierFactureJ($numFacture,Request $request,FactureRepository $repo): Response
    {
        $fact = $repo->find($numFacture);

        $fact->setStatut($request->get('statut'));
        
        // $em=$this->getDoctrine()->getManager();
        // $em->flush();

        // $serializer = new Serializer([new ObjectNormalizer()]);
        // $json = $serializer->normalize($fact);
        // return new JsonResponse("Facture modifiée aves succés!",$json);

        try {
            $em=$this->getDoctrine()->getManager();
            $em->flush();
            // $serializer = new Serializer([new ObjectNormalizer()]);
            // $json = $serializer->normalize($fact);
            return new JsonResponse("facture modif",200);
        } catch (\Exception $th) {
            return new Response("Exception".$th->getMessage());
        }
    }

    /**
     * @Route ("/deleteFactJ/{numFacture}", name="deleteFactJ")
     */
    public function supprimerFactureJ($numFacture, Request $request,FactureRepository $repo): Response
    {
        $fact = $repo->find($numFacture);
        $em=$this->getDoctrine()->getManager();
        if ($fact!= null){
        $em->remove($fact);
        $em->flush();

        $serializer = new Serializer([new ObjectNormalizer()]);
        $json = $serializer->normalize("Facture supprimée avec succés!");
        return new JsonResponse($json);
        }

        return new JsonResponse("Facture non valide");

    }

    /**
     * @Route ("/displayFactJson", name="displayFactJson")
     */
    public function afficherFactureJ(NormalizerInterface $norm)
    {
        $fact = $this->getDoctrine()->getManager()->getRepository(Facture::class)->findAll();
        // return new Response($fact->getIdRest());
        // $serializer = new Serializer([new ObjectNormalizer()]);
        // $formatted = $serializer->normalize($fact);
        // return new JsonResponse($formatted);

        $jsonContent= $norm->normalize($fact,'json',['groups'=>'facture']);
        return new Response(json_encode($jsonContent));

    }

   

}
