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

    public function edit(int $id)
    {
    $produit = (new Produit($this->getConnection()))->findById($id);
    return $this->view('produits.modif', compact('produit'));
    }

    public function update(int $id)
    {
        $countfiles = count($_FILES['image']['name']);
        for($i=0;$i<$countfiles;$i++){
            $filename = $_FILES['image']['name'][$i];
            $image[$i+1]=$filename;
            $path  =  getcwd() . DIRECTORY_SEPARATOR . 'pic' . DIRECTORY_SEPARATOR ; //getcwd() =>Retourne le dossier de travail courant
            move_uploaded_file($_FILES['image']['tmp_name'][$i], $path . $filename);
        }
    $produit = (new Produit($this->getConnection()));

    $change = $produit->setTitre($_POST['titre'])->setDescription($_POST['description'])->setPrix($_POST['prix'])->setCategorie($_POST['categorie'])->setImage1($_FILES['image']['name'][0])->setImage2($_FILES['image']['name'][1])->setImage3($_FILES['image']['name'][2])->setImage4($_FILES['image']['name'][3])->setImage5($_FILES['image']['name'][4]);

    //echo "<pre>",print_r($change),"</pre>"; die();

    $resultat = $produit->update($id, $change);
    //echo "<pre>",print_r($resultat),"</pre>";  die();
        if($resultat){
            return header("Location: /Annonces/produits/$id");
        }
    }
}




?>