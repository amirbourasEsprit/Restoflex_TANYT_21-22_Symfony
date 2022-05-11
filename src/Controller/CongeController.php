<?php

namespace App\Controller;

use Swift;
use App\Entity\Conge;
use App\Form\CongeType;
use App\Repository\CongeRepository;
use Symfony\Component\HttpFoundation\Request;
use MercurySeries\FlashyBundle\FlashyNotifier;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Notifications\CongeAccepterNotifications;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class CongeController extends AbstractController
{
    /**
     * @Route("/conge", name="app_conge")
     */
    public function index(): Response
    {
        return $this->render('conge/index.html.twig', [
            'controller_name' => 'CongeController',
        ]);
    }
     /**
     * @Route("/Ajouter/Conge", name="AjouterConge" )
     * @param Request $request
     */
    public function AjouterConge(Request $request,FlashyNotifier $flashy){
        $conge = new Conge();
        $form = $this->createForm(CongeType::class,$conge);
        $form->handleRequest($request);
        if ($form->isSubmitted()&& $form->isValid()) {
            $em=$this->getDoctrine()->getManager();
            $em->persist($conge);
            $em->flush();
            $flashy->success('Congé Ajouté!', 'http://your-awesome-link.com');
            return $this->redirectToRoute("AfficherConge");
        }
        else
        return    $this->render("conge/Ajouter.html.twig",['form'=>$form->createView()]);
    }
     /**
     * @Route("/Modifier/Conge/{id}", name="ModifierConge" )
     */
    public function ModifierConge(Request $request, $id,FlashyNotifier $flashy){
        $em=$this->getDoctrine()->getManager();
        $conge= $this->getDoctrine()->getRepository(Conge::class)->findAll();

        $res = $em->getRepository(Conge::class)->find($id);
        $form = $this->createForm(CongeType::class, $res);

        $form->handleRequest($request);
        if($form->isSubmitted() && $form->isValid())
        {
            $em->flush();
            $flashy->success('Congé Modifié!', 'http://your-awesome-link.com');
            return $this->redirectToRoute('AfficherConge');
        }
        return $this->render('conge/Modifier.html.twig', [
            'form' => $form->createView()
        ]);
    }
    /**
     * @Route("/Afficher/Conge", name="AfficherConge")
     */
    public function AfficherConge(){
        $repo=$this->getDoctrine()->getRepository(Conge::class);
        $conge=$repo->findAll(); 
        return $this->render('conge/Affiche.html.twig',['conge'=>$conge]);
    }
    /**
     * @Route("/Supprimer/Conge/{id}", name="SupprimerConge" )
     */
    public function SupprimerConge(Conge $id,FlashyNotifier $flashy)
    {
        $em=$this->getDoctrine()->getManager();
        $em->remove($id);
        $em->flush();
        $flashy->error('Congé Supprimé!', 'http://your-awesome-link.com');
        return $this->redirectToRoute("AfficherConge");

    }
      /**
     * @Route("/Accepter/Conge/{id}", name="AccepterConge" )
     */
    public function AccepterConge(CongeRepository $repository, $id, Request $request,FlashyNotifier $flashy,\Swift_Mailer $mailer ):Response
    {
        $conge=$repository->find($id);
        $em=$this->getDoctrine()->getManager();
        $this->solde($repository,$id);
        $conge->setEtat("approuvé");
        $em->flush();
        $flashy->success('Congé Accepté !', 'http://your-awesome-link.com');

            //$message = (new \Swift_Message('Resto Flex'))
          //  ->setFrom('resto.flex2022@gmail.com')
            //->setTo($email->getEmail())
           // ->setTo('yosr.belaam@esprit.tn')
           // ->setBody(
             //   $this->renderView('emails/CongeAccepte.html.twig',['id' => $id] ),'text/html');
               // $mailer->send($message);
            return $this->redirectToRoute('AfficheAdmin');
    }
      /**
     * @Route("/Refuserr/Conge/{id}", name="RefuserConge" )
     */
    public function RefuserConge(CongeRepository $repository, $id, Request $request,FlashyNotifier $flashy)
    {
        $conge=$repository->find($id);
        $em=$this->getDoctrine()->getManager();
        $conge->setEtat("refusé");
        $em->flush();
        $flashy->success('Congé Refusé !', 'http://your-awesome-link.com');
       return $this->redirectToRoute('AfficheAdmin');
    }
    public function solde (CongeRepository $repository, $id)
    {
        $conge=$repository->find($id);
        $em=$this->getDoctrine()->getManager();
        $duree=date_diff($conge->getDateFin(),$conge->getDateDeb());
        $duree=$duree->format('%d');
       // $solde=$conge->getSoldeConge();
        $solde=$conge->getSoldeRestant();
        $newsolde=$solde-$duree;
       // $conge->setSoldeConge($newsolde);
        $conge->setSoldeRestant($newsolde);
        $em->flush();
    }
    /**
     * @Route("/AfficherAdmin/Conge", name="AfficheAdmin")
     */
    public function AfficherAdminConge(){
        $repo=$this->getDoctrine()->getRepository(Conge::class);
        $conge=$repo->findAll(); 
        return $this->render('conge/AfficheAdmin.html.twig',['conge'=>$conge]);

    }
    
  

}
