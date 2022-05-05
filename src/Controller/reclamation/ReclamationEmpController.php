<?php

namespace App\Controller\reclamation;

use App\Entity\Reclamation;
use App\Entity\Utilisateur;
use App\Form\ReclamationType;
use App\Form\ReclamationType2;
use App\Repository\ReclamationRepository;
use App\Repository\UtilisateurRepository;
use App\Services\GetUser;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ReclamationEmpController extends AbstractController
{
    /**
     * @Route("/reclamation/emp", name="app_reclamation_emp")
     */
    public function index(): Response
    {
        return $this->render('reclamation_emp/index.html.twig', [
            'controller_name' => 'ReclamationEmpController',
        ]);
    }
    /**
     * @Route("/ajouter/reclamationCG", name="AjoutreclamationCLG")
     */
    public function AjouterRecG(Request $request, GetUser $getUser,\Swift_Mailer $mailer): Response
    {
        $reclamation = new Reclamation();
        $form = $this->createForm(ReclamationType2::class, $reclamation);
        $form->handleRequest($request);
        if ($form-> isSubmitted() && $form-> isValid()){
            $reclamation->setStatutReclamation("en cours");
            $user=$getUser->GetUser();
            $reclamation->setid($user);
            $em= $this->getDoctrine()->getManager();
            $em->persist($reclamation);
            $em->flush();
            $name="tanyt";
            $data = $form->get('destinataire')->getData();
            $email=$this->getDoctrine()->getRepository(Utilisateur::Class)->get_email($data);

            $message = (new \Swift_Message('Resto Flex'))
                ->setFrom('tanyttanyt9@gmail.com')
                ->setTo($email->getEmail())
                ->setBody(
                    $this->renderView(
                        'reclamation/email.html.twig',
                        ['name' => $name]
                    ),
                    'text/html'
                )
            ;

            $mailer->send($message);
            return $this->redirectToRoute('AfficheRC');
        }

        return $this->render('reclamation/AjoutREmploye.html.twig',['form'=>$form->createView()]);

    }
    /**
     * @Route("/AfficherReclamationC/reclamation", name="AfficheRC")
     */
    public function AfficherReclamation(ReclamationRepository $repository, UtilisateurRepository $repoUti): Response
    {
        //$repo=$this->getDoctrine()->getRepository(Reclamation::class);
        $reclamation = $repoUti->FindEmploye();
        $tr=[];
        $i=0;
        foreach($reclamation as $t)
        {
            if($t instanceof Reclamation)
                $tr[$i] = $t;
            $i+=1;
        }
        return $this->render('reclamation/AfficheC.html.twig', ['reclamation'=>$tr]);
    }
    /**
     * @Route("/{id}/AfficherReclamationRecuC", name="ReclamationRecuC")
     */
    public function AfficherReclamationRecu(ReclamationRepository $repository, UtilisateurRepository $repoUti,$id): Response
    {
        //$repo=$this->getDoctrine()->getRepository(Reclamation::class);

        $reclamation=$this->getDoctrine()->getRepository(Reclamation::Class)->ReclamationRecu($id);

        return $this->render('reclamation/AfficherecuC.html.twig', ['reclamation'=>$reclamation]);
    }
    /**
     * @Route("/suppc/{numReclamation}", name="rc")
     */
    public function SupprimerRec($numReclamation ): Response

    {
        $repo=$this->getDoctrine()->getRepository(Reclamation::class);
        $reclamation=$repo->find($numReclamation);
        $em=$this->getDoctrine()->getManager();
        $em->remove($reclamation);
        $em->flush();
        return $this->redirectToRoute('AfficheRC');
    }
}
