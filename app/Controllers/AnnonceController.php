<?php

namespace App\Controllers;
use \Mpdf\Mpdf;
use App\Models\Produit;
class AnnonceController extends Controller {

    public function index()
    {
        $produit = new Produit($this->getConnection());
        $produits = $produit->search();
        $annonces = $produit->all();
        //echo "<pre>",print_r($annonces),"</pre>";  die();
        return $this->view('produits.index', compact('produits', 'annonces'));

    }

    public function show(int $id)
    {
        $produit = new Produit($this->getConnection());
        $produit = $produit->findById($id);
        //echo "<pre>",print_r($produit),"</pre>"; die();
        return $this->view('produits.show', compact('produit'));
    }

    public function form()
    {
        return $this->view('produits.form');
    }

    public function modif()
    {
        return $this->view('produits.modif');
    }

    public function showPdf(int $id)
    {
        // global $router;
        $produit = new Produit($this->getConnection());
        var_dump($id);

        $pdf = $produit->findById($id);
        
        var_dump($pdf);



        $mpdf = new Mpdf([
            'mode' => 'utf-8',
            'format' => 'A4',
            'orientation' => 'P'
        ]);
        var_dump($pdf);
        echo"<br>";

        //  foreach($pdf as $valeur){
            echo "<pre>",print_r($pdf,1),"</pre>";
            $titre = $pdf->getTitre();
            $categorie = $pdf->getCategorie();
            $date = $pdf->getCreatedAt();
            $prix = $pdf->getPrix();
            $description = $pdf->getDescription();
            $image = $pdf->getImage1();
        //  }

        $html ="
            <!DOCTYPE html>
            <html lang='fr'>
            <style media='print'>
                section.annonce {
                    padding: 10px;
                    text-align: center;
                    font-family: 'Baskerville Old Face';
                    color: #1d2625;
                }
                
                section.annonce  div.container  ul {
                    list-style-type: none;
                }

                section.annonce  div.container  ul  li{
                    margin-top: 10px;
                }

                section.annonce h2{
                    margin-top: 20px;
                    text-align: center;
                }
            
                div.footer {
                    margin-top: 100px;
                    text-align: center;
                }
            </style>
            <body>
                <section class='annonce'>
                    <h1>$titre</h1>
                    <div class='container'>
                        <div class='img-container'><img src='$image'/></div>
                        <div class='preview'>
                            <ul>
                                <li>Date de création : <span>$date</span> </li>
                                <li>Catégorie : <span>$categorie</span> </li>
                                <li>Prix : <span>$prix €</span></li>
                            </ul>
                        </div>
                        <h2>Description</h2>
                        <p>$description</p>
                    </div>
                </section>
                <div class='footer'>
                <img class='logo' width='100px' src='./ressources/logo.png'/>
                <p>&copy; Copyright 2022 : Corner Shop</p>
                </div>
            </body>";

        // $mpdf->SetHeader('|TheGoodCorner - Site d\'annonces gratuite|');
        $mpdf->WriteHTML($html);

        $mpdf->Output($titre. ' .pdf','D');
            }
}




?>