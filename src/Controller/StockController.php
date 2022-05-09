<?php

namespace App\Controller;

use App\Entity\Fournisseur;
use App\Entity\Stock;
use App\Form\StockType;
use App\Repository\StockRepository;
use CMEN\GoogleChartsBundle\GoogleCharts\Charts\PieChart;
use MercurySeries\FlashyBundle\FlashyNotifier;
use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class StockController extends AbstractController
{
    /**
     * @Route("/stock", name="app_stock")
     */
    public function index(): Response
    {
        return $this->render('stock/index.html.twig', [
            'controller_name' => 'StockController',
        ]);
    }
    /**
     * @Route("/afficherStock", name="AStock")
     */
    public function afficher()
    {
        $rep = $this->getDoctrine()->getRepository(Stock::class);
        $stock = $rep->findAll();


        $totalStock=0;

        foreach($stock as $s){

            $totalStock=$totalStock+$s->getQuantite()*$s->getPrixUnitaire();}
            return $this->render('stock/stock.html.twig',
                ['list' => $stock,'totalStock'=>$totalStock]
            );
    }
    /**
     * @Route("/SupprimerStock/{idStock}", name="Sstock" )
     */
    public function Supprimer($idStock, StockRepository $rep, FlashyNotifier $flashy)
    {
        $stock = $rep->find($idStock);
        $em = $this->getDoctrine()->getManager();
        $em->remove($stock);
        $this->addFlash('success', 'Stock supprime ! ');
        $flashy->success('Stock deleted!', 'http://your-awesome-link.com');
        $em->flush();
        return $this->redirectToRoute('AStock');
    }

    /**
     * @Route("/ajstock", name="Ajstock")
     */
    public function Add(Request $request, FlashyNotifier $flashy)
    {
        $stock = new Stock();
        $form = $this->createForm(StockType::class , $stock);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($stock);
            $em->flush();
            $this->addFlash('success', 'Stock ajoute ! ');
            $flashy->success('Stock created!', 'http://your-awesome-link.com');
            return $this->redirectToRoute('AStock');

        }
        return $this->render('ajout_stock/Ajouter.html.twig',
            ['form' => $form->createView()]);

    }


    /**
     * @Route("/ModifierStock/{idStock}", name="Ustock")
     */
    public function UpdateS(StockRepository $rep, $idStock, Request $request , FlashyNotifier $flashy)
    {
        $stock = $rep->find($idStock);
        $form = $this->createForm(StockType::class , $stock);
        //$form->add('Update', SubmitType::class);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->flush();
            $this->addFlash('success', 'Stock modifie ! ');
            $flashy->success('Stock Updated!', 'http://your-awesome-link.com');
            return $this->redirectToRoute('AStock');
        }

        return $this->render('stock/Ustock.html.twig', [
            'form' => $form->createView()
            /*  'idStock' => $idStock,*/

        ]);
    }

    public function getData()
    {
        /**
         * @var $Stock st[]
         */
        $list = [];
        // $reclam = $this->entityManager->getRepository(Reclamation::class)->findAll();
        $stock = $this->getDoctrine()->getRepository(Stock::class)->findAll();

        foreach ($stock as $s) {
            $list[] = [
                $s->getNomStock(),
                $s->getPrixUnitaire(),
                $s->getQuantite(),
            ];
        }
        return $list;
    }

    /**
     * @Route("/excel/export",  name="export")
     */
    public function export()
    {
        $spreadsheet = new Spreadsheet();

        $sheet = $spreadsheet->getActiveSheet();

        $sheet->setTitle('Stock List');

        $sheet->getCell('A1')->setValue('nomStock');
        $sheet->getCell('B1')->setValue('prixUnitaire');
        $sheet->getCell('C1')->setValue('quantite');


        // Increase row cursor after header write
        $sheet->fromArray($this->getData(), null, 'A2', true);
        $writer = new Xlsx($spreadsheet);
        // $writer->save('ss.xlsx');
        $writer->save('Stock' . date('m-d-Y_his') . '.xlsx');
        return $this->redirectToRoute('AStock');
    }

    /**
     * @Route("/s/stock_stat", name="stock_stat")
     */
    public function Stock_stat(): Response
    {
        $pieChart = new PieChart();
        $em = $this->getDoctrine();

        $data = array();
        $stat = ['Les stocks', '%'];
        array_push($data, $stat);

        $e1 = $em->getRepository(Stock::class)->findBy(array('nomStock' => "Escalope"));
        $total = count($e1);
        $stat = ["Escalope", $total];
        array_push($data, $stat);
        $stat = array();
        $e2 = $em->getRepository(Stock::class)->findBy(array('nomStock' => "Chawarma"));
        $total = count($e2);
        $stat = ["Chawarma", $total];
        array_push($data, $stat);
        $stat = array();
        $e3 = $em->getRepository(Stock::class)->findBy(array('nomStock' => "Orange"));
        $total = count($e3);
        $stat = ["Orange", $total];
        array_push($data, $stat);
        $stat = array();
        $e4 = $em->getRepository(Stock::class)->findBy(array('nomStock' => "patate"));
        $total = count($e4);
        $stat = ["patate", $total];
        array_push($data, $stat);

        $pieChart->getData()->setArrayToDataTable(
            $data
        );

        $pieChart->getOptions()->setTitle('Les stocks');
        $pieChart->getOptions()->setHeight(500);
        $pieChart->getOptions()->setWidth(900);
        $pieChart->getOptions()->getTitleTextStyle()->setBold(true);
        $pieChart->getOptions()->getTitleTextStyle()->setColor('#009900');
        $pieChart->getOptions()->getTitleTextStyle()->setItalic(true);
        $pieChart->getOptions()->getTitleTextStyle()->setFontName('Arial');
        $pieChart->getOptions()->getTitleTextStyle()->setFontSize(20);

        return $this->render('/stock/stat.html.twig', [
            'piechart' => $pieChart
        ]);

    }

    /**
     * @return Response
     * @Route("/ShowS/{idStock}", name="show")
     */
    public function showOne($idStock ){
        $repo = $this->getDoctrine()->getRepository(Stock::class);
        $stock = $repo->find($idStock);
        return $this->render(
            'stock/detail.html.twig',
            ['d' => $stock]
        );


    }


    }
