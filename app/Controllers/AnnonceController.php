<?php

namespace App\Controllers;

class AnnonceController{

    public function index()
    {
        echo 'Je suis la homepage';
    }

    public function show(int $id)
    {
        echo 'Je suis le produit n° ' . $id;
    }
}




?>