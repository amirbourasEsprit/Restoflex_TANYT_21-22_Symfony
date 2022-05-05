<?php

namespace App\Controller;

use Dompdf\Dompdf;
use Dompdf\Options;
use Knp\Snappy\Pdf;
use App\Entity\Utilisateur;
use App\Entity\Facture;
use App\Form\FactureType;
use App\Services\GetUser;
use Knp\Bundle\SnappyBundle\Snappy;
use App\Repository\FactureRepository;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Knp\Bundle\SnappyBundle\DependencyInjection;
use Knp\Bundle\SnappyBundle\Snappy\Response\PdfResponse;
use CMEN\GoogleChartsBundle\GoogleCharts\Charts\PieChart;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;


class FactureController extends AbstractController
{
    /**
     * @Route("/facture", name="app_facture")
     */
    public function index(): Response
    {
        return $this->render('facture/index.html.twig', [
            'controller_name' => 'FactureController',
        ]);
    }


    /**
     * @Route ("/addFact", name="addFact")
     */
    public function ajouterFacture(Request $request): Response
    {
        $fact = new Facture();
        $form = $this->createForm(FactureType::class , $fact);
        $form->handleRequest($request);
        
        if ($form->isSubmitted() && $form->isValid()) 
        {
        $em=$this->getDoctrine()->getManager();
        $em->persist($fact);
        $em->flush();
        return $this->redirectToRoute('displayFact');
        }
        return $this->render('facture/ajouter_fact.html.twig', [
            'form' => $form->createView(),
        ]);
       
    }


    /**
     * @Route ("/updateFact/{numFacture}", name="updateFact")
     */
    public function modifierFacture($numFacture,Request $request,FactureRepository $repo): Response
    {
        $fact = $repo->find($numFacture);
        $form = $this->createForm(FactureType::class , $fact);
        
        $form->handleRequest($request);
        
        if ($form->isSubmitted()) 
        {
        $em=$this->getDoctrine()->getManager();
        $em->flush();
        return $this->redirectToRoute('displayFact');
        }
        return $this->render('facture/modifier_fact.html.twig', [
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route ("/deleteFact/{numFacture}", name="deleteFact")
     */
    public function supprimerFacture($numFacture, FactureRepository $repo): Response
    {
        $fact = $repo->find($numFacture);
        $em=$this->getDoctrine()->getManager();
        $em->remove($fact);
        $em->flush();
        return $this->redirectToRoute('displayFact');

    }

    /**
     * @Route ("/displayFact", name="displayFact")
     */
    public function afficherFacture(FactureRepository $repo): Response
    {
        $fact = $repo->findAll();
        return $this->render('facture/afficher_fact.html.twig',['factures'=>$fact ]);
    }

    /**
     * @Route ("/calcul/{$idCmd}", name="calcul")
     */
    public function calulT(FactureRepository $repo, $idCmd): Response
    {
        $fact = $repo->calculerTotalDQL($idCmd);
        return new Response("Le compte est Bon!!");
    }

    /**
     * @Route("/detailsFact/{numFacture}", name="detailsFact")
     */
    public function showDetailsFact($numFacture, FactureRepository $repo): Response
    {
        $fact = $repo->find($numFacture);
        return $this->render('facture/details_fact.html.twig',['facture'=>$fact ]);
    }

    /**
     * @Route("/PDFFact/{numFacture}", name="PDFFact")
     */
    public function showPDFFact($numFacture, FactureRepository $repo): Response
    {

        // Configure Dompdf according to your needs
        $pdfOptions = new Options();
        $pdfOptions->set('defaultFont', 'Arial');
        
        // Instantiate Dompdf with our options
        $dompdf = new Dompdf($pdfOptions);
        $fact = $repo->find($numFacture);
       
        //l'image est située au niveau du dossier public
        $png = file_get_contents("D:\Nesrine Apps\xxx\htdocs\Pidev_symfony_TANYT\public\back-office\img\logoResto.png");
        $pngbase64 = base64_encode($png);
        // Retrieve the HTML generated in our twig file
        $html = $this->renderView('facture/facturePDF.html.twig', [
            "img64"=>$pngbase64,'facture'=>$fact
        ]);

        // Load HTML to Dompdf
        $dompdf->loadHtml($html);
        
        // (Optional) Setup the paper size and orientation 'portrait' or 'portrait'
        $dompdf->setPaper('A4', 'portrait');

        // Render the HTML as PDF
        $dompdf->render();

        // Output the generated PDF to Browser (force download)
        $dompdf->stream("Facture.pdf", [
            "Attachment" => true
        ]);
    
        // $fact = $repo->find($numFacture);
        // return $this->render('facture/facturePDF.html.twig',['facture'=>$fact ]);
        
    }

    /**
     * @Route("/genPDFFact/{numFacture}", name="genPDFFact")
     */
    public function genererPDFFact($numFacture, FactureRepository $repo,  \Knp\Snappy\Pdf $snappy): Response
    {

        $snappy = $this->get("knp_snappy.pdf");
        $snappy->setOption("encoding","UTF-8");
       
        $fact = $repo->find($numFacture);
        $html = $this->renderView('facture/facturePDF.html.twig',['facture'=>$fact
        ]);

        $filename = "Facture";

        return new PdfResponse(
            $snappy->getOutputFromHtml($html),
            200,
            array('Content-Type' => 'application/pdf' ,
                  'Content-Disposition' => 'inline; filename="'.$filename.'.pdf"'
            )

        );
    }



    /**
     * @Route("/statFact", name="statFact")
     */
    public function statistiqueFact(FactureRepository $repo,  GetUser $user): Response
    {   
        //  $frs=$user->Get_User()->getIdFournisseur().getIdFournisseur();
        $frs=1;
        $fact = $repo->findBy(['idFournisseur'=>$frs]);
        $em=$this->getDoctrine()->getManager();
        
        $nbPayee=0;
        $nbNPayee=0;
       
        foreach ($fact as $fact)
        {
            if ($fact->getStatut()=="payée")  :

                $nbPayee +=1;
            else :
                $nbNPayee +=1;

            endif;
        }

        $pieChart = new PieChart();
        $pieChart->getData()->setArrayToDataTable(
            [['Type', 'nombres'],
                ['Payée',  $nbPayee],
                ['Non Payée',   $nbNPayee]
            ]
        );
        $pieChart->getOptions()->setColors(['#2B54CC', '#FF0000']);

        $pieChart->getOptions()->setHeight(500);
        $pieChart->getOptions()->setWidth(900);
        $pieChart->getOptions()->getTitleTextStyle()->setBold(true);
        $pieChart->getOptions()->getTitleTextStyle()->setColor('#009900');
        $pieChart->getOptions()->getTitleTextStyle()->setItalic(true);
        $pieChart->getOptions()->getTitleTextStyle()->setFontName('Arial');
        $pieChart->getOptions()->getTitleTextStyle()->setFontSize(20);

        return $this->render('facture/stat_fact.html.twig', array('piechart' => $pieChart));

    }

    /**
     * @Route("/Search", name="Search")
     */
    public function rechercheByDate(FactureRepository $repo, Request $request): Response
    {
       $data = $request->get('search');
    //    $time = strtotime($data);
    //    $newformat = date('Y-m-d H:i:s',$time);

       $fact = $repo->findBy(['statut'=>$data]);
       return $this->render('facture/afficher_fact.html.twig',['factures'=>$fact ]);
    }
    


}
