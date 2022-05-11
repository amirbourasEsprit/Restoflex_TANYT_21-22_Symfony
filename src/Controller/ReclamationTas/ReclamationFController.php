<?php

namespace App\Controller\ReclamationTas;

use App\Entity\Reclamation;
use App\Entity\Utilisateur;
use App\Form\ReclamationType2;
use App\Repository\ReclamationRepository;
use App\Repository\UtilisateurRepository;
use App\Services\GetUser;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ReclamationFController extends AbstractController
{
    /**
     * @Route("/reclamation/f", name="app_reclamation_f")
     */
    public function index(): Response
    {
        return $this->render('reclamation_f/index.html.twig', [
            'controller_name' => 'ReclamationFController',
        ]);
    }
    /**
     * @Route("/ajouter/reclamationFG", name="AjoutreclamationFOG")
     */
    public function AjouterRecG(Request $request, GetUser $getUser,\Swift_Mailer $mailer): Response
    {
        $reclamation = new Reclamation();
        $form = $this->createForm(ReclamationType2::class, $reclamation);
        $form->handleRequest($request);
        if ($form-> isSubmitted() && $form-> isValid()){
            $reclamation->setStatutReclamation("En cours");
            $user=$getUser->GetUser();
            $reclamation->setid($user);
            $em= $this->getDoctrine()->getManager();
            $name="tanyt";
            $data = $form->get('destinataire')->getData();
            $user=$this->getDoctrine()->getRepository(Utilisateur::Class)->get_email($data);

            $message = (new \Swift_Message('Resto Flex'))
                ->setFrom('tanyttanyt9@gmail.com')
                ->setTo($user->getEmail())
                ->setBody(
                    $this->renderView(
                    // templates/emails/registration.html.twig
                        'reclamation/email.html.twig',
                        ['name' => $name]
                    ),
                    'text/html'
                )

                // you can remove the following code if you don't define a text version for your emails

            ;

            $mailer->send($message);
            $em->persist($reclamation);
            $em->flush();
            return $this->redirectToRoute('AfficheRF');
        }

        return $this->render('reclamation/AjoutRFournisseur.html.twig',['form'=>$form->createView()]);

    }
    /**
     * @Route("/AfficherReclamationF/reclamation", name="AfficheRF")
     */
    public function AfficherReclamation(ReclamationRepository $repository, UtilisateurRepository $repoUti): Response
    {
        //$repo=$this->getDoctrine()->getRepository(Reclamation::class);
        $reclamation = $repoUti->FindFournisseur();
        $tr=[];
        $i=0;
        foreach($reclamation as $t)
        {
            if($t instanceof Reclamation)
                $tr[$i] = $t;
            $i+=1;
        }
        return $this->render('reclamation/AfficheF.html.twig', ['reclamation'=>$tr]);
    }
    /**
     * @Route("/{id}/AfficherReclamationRecuF", name="ReclamationRecuF")
     */
    public function AfficherReclamationRecu(ReclamationRepository $repository, UtilisateurRepository $repoUti,$id): Response
    {
        //$repo=$this->getDoctrine()->getRepository(Reclamation::class);

        $reclamation=$this->getDoctrine()->getRepository(Reclamation::Class)->ReclamationRecu($id);

        return $this->render('reclamation/AfficherecuF.html.twig', ['reclamation'=>$reclamation]);
    }
    /**
     * @Route("/suppF/{numReclamation}", name="rf")
     */
    public function SupprimerRec($numReclamation ): Response

    {
        $repo=$this->getDoctrine()->getRepository(Reclamation::class);
        $reclamation=$repo->find($numReclamation);
        $em=$this->getDoctrine()->getManager();
        $em->remove($reclamation);
        $em->flush();
        return $this->redirectToRoute('AfficheRF');
    }
}
