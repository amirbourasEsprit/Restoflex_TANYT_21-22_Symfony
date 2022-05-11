<?php

namespace App\Controller\api;


use App\Entity\Conge;
use DateTimeInterface;
use App\Entity\TypeConge;
use App\Entity\Utilisateur;
use Symfony\Component\Serializer\Serializer;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\JsonResponse;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Symfony\Component\Serializer\Normalizer\ObjectNormalizer;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class CongeApiController extends AbstractController
{
    /**
     * @Route("/conge/api", name="app_conge_api")
     */
    public function index(): Response
    {
        return $this->render('conge_api/index.html.twig', [
            'controller_name' => 'CongeApiController',
        ]);
    }
    /**
     * @Route("/congedisplay",name="displayCong")
     */
    public function displayConge(){
        $conge=$this->getDoctrine()->getManager()->getRepository(Conge::class)->findAll();
        $serializer= new Serializer([new ObjectNormalizer()]);
        $formatted =$serializer->normalize($conge);
        return new JsonResponse($formatted);
    }
    /******************Ajouter Congé*****************************************/
    /**
     * @Route("/addConge", name="addConge")
     * @Method ("POST")
     */

    public function ajouterCongeAction(Request $request)
    {
        $conge = new Conge();
        $dateDeb=$request->get("dateDeb");
        $dateFin=$request->get("dateFin");
        $idUtilisateur=$request->get("idUtilisateur");
        $idTypeConge=$request->get("idTypeConge");
        $em = $this->getDoctrine()->getManager();

        $id=$this->getDoctrine()->getRepository(Utilisateur::class)->find($idUtilisateur);
        $conge->setIdUtilisateur($id);

        $conge->setDateDeb(new \DateTime($dateDeb));
        $conge->setDateFin(new \DateTime($dateFin));
       // $conge->setIdUtilisateur($idUtilisateur);
        $idUser=$this->getDoctrine()->getRepository(Utilisateur::class)->find($idUtilisateur);
        $conge->setIdUtilisateur($idUser);
        //$conge->setIdTypeConge($idTypeConge);
        $idType=$this->getDoctrine()->getRepository(TypeConge::class)->find($idTypeConge);
        $conge->setIdTypeConge($idType);

        $em->persist($conge);
        $em->flush();
        $serializer = new Serializer([new ObjectNormalizer()]);
        $formatted = $serializer->normalize($conge);
        return new JsonResponse($formatted);

    }
  /*TEST AJOUT
  addConge?dateDeb=2022-05-12&dateFin=2022-05-15&idUtilisateur=26&idTypeConge=2
*/

    /******************Supprimer Congé*****************************************/

    /**
     * @Route("/deleteConge", name="deleteConge")
     * @Method("DELETE")
     */

    public function deleteCongeAction(Request $request) {
        $idConge = $request->get("idConge");

        $em = $this->getDoctrine()->getManager();
        $conge = $em->getRepository(Conge::class)->find($idConge);
        if($conge!=null ) {
            $em->remove($conge);
            $em->flush();

            $serialize = new Serializer([new ObjectNormalizer()]);
            $formatted = $serialize->normalize("Le conge a ete supprime avec success.");
            return new JsonResponse($formatted);

        }
        return new JsonResponse("id Conge invalide.");


    }

    /*tester delete
    deleteConge?idConge=46
     * */

    /******************Modifier Conge*****************************************/
    /**
     * @Route("/updateConge", name="updateConge")
     * @Method("PUT")
     */
    public function modifierConge(Request $request) {
        $em = $this->getDoctrine()->getManager();
        $conge= $this->getDoctrine()->getManager()
            ->getRepository(Conge::class)
            ->find($request->get("idConge"));

       // $conge->setDateDeb($request->get("dateDeb"));
        $conge->setDateDeb(new \DateTime($request->get("dateDeb")));
       // $conge->setDateFin($request->get("dateFin"));
        $conge->setDateFin(new \DateTime($request->get("dateFin")));
        //$conge->setIdTypeConge($request->get("idTypeConge"));
        $idTypeConge=$request->get("idTypeConge");
        $idType=$this->getDoctrine()->getRepository(TypeConge::class)->find($idTypeConge);
        $conge->setIdTypeConge($idType);
    

        $em->persist($conge);
        $em->flush();
        $serializer = new Serializer([new ObjectNormalizer()]);
        $formatted = $serializer->normalize($conge);
        return new JsonResponse("Conge a ete modifie avec success.");

    }
    /*tester Update
    updateConge?idConge=14 &dateDeb=12-05-2022&dateFin=15-05-2022&idTypeConge=2
     */
}
