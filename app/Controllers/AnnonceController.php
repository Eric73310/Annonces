<?php

namespace App\Controllers;

use App\Models\Produit;
class AnnonceController extends Controller {

    public function index()
    {
        $produit = new Produit($this->getConnection());
        $produits = $produit->all();
        // echo "<pre>",print_r($produits),"</pre>";  die();
        return $this->view('produits.index', compact('produits'));

    }

    public function show(int $id)
    {
        $produit = new Produit($this->getConnection());
        $produit = $produit->findById($id);

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

    public function idpdf($params)
    {
        $produit = new Produit($params);
        $pdf = $produit->$params['id'];

        $mpdf = new \Mpdf\Mpdf([
            'mode' => 'utf-8',
            'format' => 'A4',
            'orientation' => 'P'
        ]);

        foreach($pdf as $valuepdf){
            $titre = $valuepdf->getTitle();
            $categorie = $valuepdf->getCategorie();
            $date = $valuepdf->getCreatedAt();
            $description = $valuepdf->getDescription();
            $prix = $valuepdf->getPrix();
            $image = $valuepdf->getImage1();
        }

        $html ="
            <!DOCTYPE html>
            <html lang='fr'>
            <style media='print'>
                section.annonce {
                    padding: 10px;
                    text-align: center;
                    font-family: 'DM Sans', sans-serif;
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
                <p>&copy; Copyright 2020 : The Good Corner</p>
                </div>
            </body>";

        $mpdf->SetHeader('|CornerShop, Achetez simplement de particulier à particulier ! |');
        $mpdf->WriteHTML($html);

        $mpdf->Output('CornerShop'. $titre. ' .pdf');
            }
}




?>