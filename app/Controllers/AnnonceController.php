<?php

namespace App\Controllers;

class AnnonceController extends Controller {

    public function index()
    {
        return $this->view('produits.index');
    }

    public function show(int $id)
    {
        return $this->view('produits.show', compact('id'));
    }
}




?>