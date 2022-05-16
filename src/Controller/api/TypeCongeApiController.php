<?php

namespace App\Controller\api;


use App\Entity\TypeConge;
use Symfony\Component\Serializer\Serializer;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\JsonResponse;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Symfony\Component\Serializer\Normalizer\ObjectNormalizer;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class TypeCongeApiController extends AbstractController
{
    /**
     * @Route("/typeconge/api", name="app_typeconge_api")
     */
    public function index(): Response
    {
        return $this->render('typeconge_api/index.html.twig', [
            'controller_name' => 'TypeCongeApiController',
        ]);
    }
    /**
     * @Route("/typecongedisplay",name="displayTypeConge")
     */
    public function displayConge(){
        $typeConge=$this->getDoctrine()->getManager()->getRepository(TypeConge::class)->findAll();
        $serializer= new Serializer([new ObjectNormalizer()]);
        $formatted =$serializer->normalize($typeConge);
        return new JsonResponse($formatted);
    }
    /******************Ajouter Type Congé*****************************************/
    /**
     * @Route("/addTypeConge", name="addTypeConge")
     * @Method ("POST")
     */

    public function ajouterTypeCongeAction(Request $request)
    {
        $typeConge = new TypeConge();
        $nomTypeConge=$request->get("nomTypeConge");
        $em = $this->getDoctrine()->getManager();


        $typeConge->setNomTypeConge($nomTypeConge);
        $em->persist($typeConge);
        $em->flush();
        $serializer = new Serializer([new ObjectNormalizer()]);
        $formatted = $serializer->normalize($typeConge);
        return new JsonResponse($formatted);

    }
  /*TEST AJOUT
  addTypeConge?nomTypeConge="test"
*/

    /******************Supprimer Type Congé*****************************************/

    /**
     * @Route("/deleteTypeConge", name="deleteTypeConge")
     * @Method("DELETE")
     */

    public function deleteTypeCongeAction(Request $request) {
        $idTypeConge = $request->get("idTypeConge");

        $em = $this->getDoctrine()->getManager();
        $TypeConge = $em->getRepository(TypeConge::class)->find($idTypeConge);
        if($TypeConge!=null ) {
            $em->remove($TypeConge);
            $em->flush();

            $serialize = new Serializer([new ObjectNormalizer()]);
            $formatted = $serialize->normalize("Type conge a ete supprime avec success.");
            return new JsonResponse($formatted);

        }
        return new JsonResponse("id Type Conge invalide.");


    }

    /*tester delete
    deleteTypeConge?idTypeConge=2
     * */

    /******************Modifier Type Conge*****************************************/
    /**
     * @Route("/updateTypeConge", name="updateTypeConge")
     * @Method("PUT")
     */
    public function modifierTypeConge(Request $request) {
        $em = $this->getDoctrine()->getManager();
        $TypeConge= $this->getDoctrine()->getManager()
            ->getRepository(TypeConge::class)
            ->find($request->get("idTypeConge"));

        $TypeConge->setNomTypeConge($request->get("nomTypeConge"));
       
    

        $em->persist($TypeConge);
        $em->flush();
        $serializer = new Serializer([new ObjectNormalizer()]);
        $formatted = $serializer->normalize($ypeConge);
        return new JsonResponse("Type Conge a ete modifie avec success.");

    }
    /*tester Update
    updateTypeConge?idTypeConge=2
     */
}
