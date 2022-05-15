<?php

namespace App\Controller\reclamationApi;

use App\Entity\Reclamation;
use App\Entity\Utilisateur;
use App\Entity\TypeReclamation;
use App\Repository\ReclamationRepository;
use App\Repository\UtilisateurRepository;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class RecJSONController extends AbstractController
{
    /**
     * @Route("/recJson", name="app_rec_json")
     */
    public function index(): Response
    {
    }

    /**
     * @Route("/AfficheRecJson", name="AfficheRecJson")
     */
    public function AfficherRecJson(ReclamationRepository $repository, UtilisateurRepository $repoUti, NormalizerInterface $Normalizer): Response
    {
        $reclamation = $repoUti->FindGerant();
        $jsonContent= $Normalizer-> normalize($reclamation, 'json',['groups'=>'post:read']);
      //  return $this->render('reclamation/Affiche.html.twig', ['reclamation'=>$tr]);
      return new Response(json_encode($jsonContent));
    }

    /**
     * @Route("/AjouterRecJson", name="AjouterRecJson")
     * @Method("POST")
     */
    public function AjouterRecJson(Request $request, NormalizerInterface $Normalizer)
    { 
        $Rec= new Reclamation();
        $destinataire = $request->query->get("destinataire");
        $description = $request->query->get("description");
        $statutRec = $request->query->get("StatutReclamation");
        $date = new \DateTime('@'.strtotime('now'));
        $idUtili = $request->query->get("id");
        $Utilisateur =$this->getDoctrine()->getRepository(Utilisateur::class)->find($idUtili);
        $idTypeRec = $request->query->get("idTypeReclamation");
        $TypeRecc=$this->getDoctrine()->getRepository(TypeReclamation::class)->find($idTypeRec);
        $em = $this->getDoctrine()->getManager();
        $Rec->setDestinataire($destinataire);
        $Rec->setDescription($description);
        $Rec->setStatutReclamation($statutRec);
        $Rec->setDateReclamation($date);
        $Rec->setIdTypeReclamation($TypeRecc);
        $Rec->setid($Utilisateur);
            $em->persist($Rec);
            $em->flush();
            $jsonContent= $Normalizer-> normalize($Rec, 'json',['groups'=>'post:read']);
            return new Response(json_encode($jsonContent));

        }

    
      /**
     * @Route("/SupprimerRecJson/{numReclamation}")
     */
    public function SuppTypeJson(Request $request, NormalizerInterface $Normalizer, $numReclamation)
    {
        $repo=$this->getDoctrine()->getRepository(Reclamation::class);
        $reclamation=$repo->find($numReclamation);
        $em=$this->getDoctrine()->getManager();
        $em->remove($reclamation);
        $em->flush();
        $jsonContent= $Normalizer-> normalize($reclamation, 'json',['groups'=>'post:read']);
      //  return $this->redirectToRoute('AfficheTypeR');
      return new Response("Reclamation deleted successfully".json_encode($jsonContent));

    }

}
