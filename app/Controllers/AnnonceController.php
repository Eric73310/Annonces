<?php

namespace App\Controllers;

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

    
}




?>