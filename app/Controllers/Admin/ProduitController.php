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
        $countfiles = count($_FILES['image']['name']);
        for($i=0;$i<$countfiles;$i++){
            $filename = $_FILES['image']['name'][$i];
            $image[$i+1]=$filename;
            $path  =  getcwd() . DIRECTORY_SEPARATOR . 'pic' . DIRECTORY_SEPARATOR ; //getcwd() =>Retourne le dossier de travail courant
            move_uploaded_file($_FILES['image']['tmp_name'][$i], $path . $filename);
        }

        $produit = new Produit($this->getConnection());
        $newProduit = $produit->setTitre($_POST['titre'])->setDescription($_POST['description'])->setPrix($_POST['prix'])->setCategorie($_POST['categorie'])->setImage1($image[1])->setImage2($image[2])->setImage3($image[3])->setImage4($image[4])->setImage5($image[5]);

        $result = $produit->create($newProduit);
        //echo "<pre>",print_r($produit),"</pre>";  die();
        //var_dump($result);die();
        if ($result) {
            return header('Location: /Annonces/');
    }
}
}




?>