<?php

namespace App\Controller;
use App\Entity\Fournisseur;
use App\Repository\FournisseurRepository;
use Symfony\Component\HttpFoundation\File\Exception\FileException;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use App\Form\FournisseurType;
use MercurySeries\FlashyBundle\FlashyNotifier;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;

class FournisseurController extends AbstractController
{
    /**
     * @Route("/AfficheFournisseur", name="Afournisseur")
     */

    public function Affiche()
    {
        $repo = $this->getDoctrine()->getRepository(Fournisseur::class);
        $fournisseur = $repo->findAll();
        return $this->render(
            'fournisseur/fournisseur.html.twig',
        ['list' => $fournisseur]
        );
    }

    /**
     * @Route("/SupprimerFounriseur/{idFournisseur}", name="Sfournisseur")
     */
    public function Supprimer(FournisseurRepository $rep, $idFournisseur, FlashyNotifier $flashy): Response
    {
        $fournisseur = $rep->find($idFournisseur);
        $em = $this->getDoctrine()->getManager();
        $em->remove($fournisseur);
        $this->addFlash('success', 'fournisseur supprime ! ');
        $flashy->success('fournisseur deleted!', 'http://your-awesome-link.com');

        $em->flush();
        return $this->redirectToRoute('Afournisseur');
    }



    /**
     * @Route("/AjouterFournisseur", name="Ajfournisseur")
     */

    public function FunctionName(Request $request, FlashyNotifier $flashy): Response
    { //logo=brochurefilename
        $fournisseur = new Fournisseur();
        $form = $this->createForm(FournisseurType::class , $fournisseur);
        //  $form->add('Ajouter Fournisseur', SubmitType::class);
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            $file=$fournisseur->getLogo();
            $filename= md5(uniqid()).'.'.$file->guessExtension();
            try {
                $file->move(
                    $this->getParameter('images_directory'),
                    $filename
                );
            }catch (FileException $e){}
            $em = $this->getDoctrine()->getManager();
            $fournisseur->setLogo($filename);
            $em->persist($fournisseur);
            $this->addFlash('success', 'fournisseur ajoute ! ');
            $flashy->success('Fournisseur Updated', 'http://your-awesome-link.com');

            $em->flush();
            return $this->redirectToRoute('Afournisseur');
        }
        return $this->render('ajout_fournisseur/AjFournisseur.html.twig', [
            'form' => $form->createView()
        ]);
    }

    /**
     * @Route("/ModifierFournisseur/{idFournisseur}", name="Ufournisseur")
     */
    public function Update(FournisseurRepository $rep, $idFournisseur, Request $request, FlashyNotifier $flashy)
    {
        $fournisseur = $rep->find($idFournisseur);
        $form = $this->createForm(FournisseurType::class , $fournisseur);
        //$form->add('Update', SubmitType::class);
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $this->addFlash('success', 'Fournisseur modifie ! ');
            $flashy->success('Fournisseur Updated!', 'http://your-awesome-link.com');

            $em->flush();
            return $this->redirectToRoute('Afournisseur');
        }
        return $this->render('fournisseur/UFournisseur.html.twig', [
            'form' => $form->createView()
        ]);
    }
    /**
     * @return Response
     * @Route("/ShowOne/{idFournisseur}", name="showf")
     */
    public function showOne($idFournisseur ){
        $repo = $this->getDoctrine()->getRepository(Fournisseur::class);
        $fournisseur = $repo->find($idFournisseur);
        return $this->render(
            'fournisseur/detailf.html.twig',
            ['f' =>   $fournisseur]
        );
    }

/**
 * @Route("Fournisseur/TriA" , name="tri")
 */
    public  function OrderByNomA(FournisseurRepository $rep ){
        $fournisseur=$rep->OrderByNom();

        return $this->render(
            'fournisseur/fournisseur.html.twig',
            ['list' => $fournisseur]
        );
    }
}

