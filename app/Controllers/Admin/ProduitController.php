<?php

namespace App\Controllers\Admin;

use App\Controllers\Controller;
use App\Models\Produit;

class ProduitController extends Controller{
    
    // Fonction pour renvoyer le formulaire
    public function create()
    {
    $produits = (new Produit($this->getConnection()))->all();
    return $this->view('produits.form', compact('produits'));
    }

    // Fonction pour traiter les données envoyées en Post
    public function createProduit()
    {
        $produit = new Produit($this->getConnection());
        $result = $produit->create($_POST);
        //var_dump($result);die();
        if ($result) {
            return header('Location: /Annonces/');
    }
}
}




?>