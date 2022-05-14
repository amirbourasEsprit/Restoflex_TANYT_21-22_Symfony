<?php

namespace App\Controller;

use App\Entity\Fournisseur;
use App\Repository\FournisseurRepository;
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
     * @Method ("GET")
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
     * @Route("/update/{id}", name="updatefrs")
     * @Method("GET")
     */
    public function modifierFournisseur(Request $request,$id,FournisseurRepository $repository) {
        $data =$repository->find($id);
        $em = $this->getDoctrine()->getManager();
        /*$fournisseur= $this->getDoctrine()->getManager()
            ->getRepository(Fournisseur::class)
            ->find($request->get("idFournisseur"));*/

        $data->setNomFournisseur($request->get("nomFournisseur"));
        $data->setMatriculeFiscale($request->get("matriculeFiscale"));
        $data->setDomaineFournisseur($request->get("domaineFournisseur"));
        $data->setNumTelFournisseur($request->get("numTelFournisseur"));
        $data->setEmailFournisseur($request->get("emailFournisseur"));
        $data->setAdresseFournisseur($request->get("adresseFournisseur"));

        $em->persist($data);
        $em->flush();
        $serializer = new Serializer([new ObjectNormalizer()]);
        $formatted = $serializer->normalize($data);
        return new JsonResponse("Fournisseur a ete modifie avec success.");

    }
    /*tester Update
    updateFRS?idFournisseur= &nomFournisseur="ahmed"&matriculeFiscale="idk"&domaineFournisseur="aa"&numTelFournisseur="bb"&emailFournisseur="a.c@gmail.com"&adresseFournisseur="cc"
     */


    /**
     * @Route("/delete/{id}", name="event_supp", requirements={"idFournisseur"="\d+"})
     */
    public function deleteAction(Fournisseur $idFournisseur)
    {
        $em=$this->getDoctrine()->getManager();

        $em->remove($idFournisseur);
        $em->flush();
        return new JsonResponse(['msg' => 'fournisseur supprimer'],200);
    }
}
