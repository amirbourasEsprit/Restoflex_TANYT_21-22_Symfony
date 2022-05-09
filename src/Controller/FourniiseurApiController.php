<?php

namespace App\Controller;

use App\Entity\Fournisseur;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Serializer\Normalizer\ObjectNormalizer;
use Symfony\Component\Serializer\Serializer;

class FourniiseurApiController extends AbstractController
{
    /**
     * @Route("/fourniiseur/api", name="app_fourniiseur_api")
     */
    public function index(): Response
    {
        return $this->render('fourniiseur_api/index.html.twig', [
            'controller_name' => 'FourniiseurApiController',
        ]);
    }
    /**
     * @Route("/fournisseurdisplay",name="displayFr")
     */
    public function displayFpurnisseur(){
        $fournisseur=$this->getDoctrine()->getManager()->getRepository(Fournisseur::class)->findAll();
        $serializer= new Serializer([new ObjectNormalizer()]);
        $formatted =$serializer->normalize($fournisseur);
        return new JsonResponse($formatted);
    }
    /******************Ajouter Fournisseur*****************************************/
    /**
     * @Route("/addFRS", name="addfrs")
     * @Method ("POST")
     */

    public function ajouterFournisseurAction(Request $request)
    {
        $fournisseur = new Fournisseur();
        $nomFournisseur=$request->get("nomFournisseur");
        $matriculeFiscale=$request->get("matriculeFiscale");
        $domaineFournisseur=$request->get("domaineFournisseur");
        $numTelFournisseur=$request->get("numTelFournisseur");
        $emailFournisseur=$request->get("emailFournisseur");
        $adresseFournisseur=$request->get("adresseFournisseur");
        $em = $this->getDoctrine()->getManager();


        $fournisseur->setNomFournisseur($nomFournisseur);
        $fournisseur->setMatriculeFiscale($matriculeFiscale);
        $fournisseur->setDomaineFournisseur($domaineFournisseur);
        $fournisseur->setNumTelFournisseur($numTelFournisseur);
        $fournisseur->setEmailFournisseur($emailFournisseur);
        $fournisseur->setAdresseFournisseur($adresseFournisseur);

       // $reclamation->setEtat(0);

        $em->persist($fournisseur);
        $em->flush();
        $serializer = new Serializer([new ObjectNormalizer()]);
        $formatted = $serializer->normalize($fournisseur);
        return new JsonResponse($formatted);

    }
  /*TESTER AJOUT
  addFRS?nomFournisseur="malek"&matriculeFiscale="idk"&domaineFournisseur="aa"&numTelFournisseur="bb"&emailFournisseur="a.c@gmail.com"&adresseFournisseur="cc"
*/

    /******************Supprimer Fournisseur*****************************************/

    /**
     * @Route("/deleteFRS", name="deletefrs")
     * @Method("DELETE")
     */

    public function deleteFournisseurAction(Request $request) {
        $idFournisseur = $request->get("idFournisseur");

        $em = $this->getDoctrine()->getManager();
        $fournisseur = $em->getRepository(Fournisseur::class)->find($idFournisseur);
        if($fournisseur!=null ) {
            $em->remove($fournisseur);
            $em->flush();

            $serialize = new Serializer([new ObjectNormalizer()]);
            $formatted = $serialize->normalize("Fournisseur a ete supprimee avec success.");
            return new JsonResponse($formatted);

        }
        return new JsonResponse("id Fournisseur invalide.");


    }

    /*tester delete
    deleteFRS?idFournisseur=
     * */

    /******************Modifier Fournisseur*****************************************/
    /**
     * @Route("/updateFRS", name="updatefrs")
     * @Method("PUT")
     */
    public function modifierFournisseur(Request $request) {
        $em = $this->getDoctrine()->getManager();
        $fournisseur= $this->getDoctrine()->getManager()
            ->getRepository(Fournisseur::class)
            ->find($request->get("idFournisseur"));

        $fournisseur->setNomFournisseur($request->get("nomFournisseur"));
        $fournisseur->setMatriculeFiscale($request->get("matriculeFiscale"));
        $fournisseur->setDomaineFournisseur($request->get("domaineFournisseur"));
        $fournisseur->setNumTelFournisseur($request->get("numTelFournisseur"));
        $fournisseur->setEmailFournisseur($request->get("emailFournisseur"));
        $fournisseur->setAdresseFournisseur($request->get("adresseFournisseur"));

        $em->persist($fournisseur);
        $em->flush();
        $serializer = new Serializer([new ObjectNormalizer()]);
        $formatted = $serializer->normalize($fournisseur);
        return new JsonResponse("Fournisseur a ete modifie avec success.");

    }
    /*tester Update
    updateFRS?idFournisseur= &nomFournisseur="ahmed"&matriculeFiscale="idk"&domaineFournisseur="aa"&numTelFournisseur="bb"&emailFournisseur="a.c@gmail.com"&adresseFournisseur="cc"
     */
}
