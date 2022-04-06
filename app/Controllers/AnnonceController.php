<?php

namespace App\Controllers;

use App\Models\Produit;
class AnnonceController extends Controller {

    public function index()
    {
        // $db = new Database('annonces', 'localhost', 'root', '');
        // $req = $db->getPDO()->query("SELECT * FROM produits");
        // $produits = $req->fetchAll();
        $produit = new Produit($this->getConnection());
        $produits = $produit->all();
        // var_dump($produits);
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
}




?>