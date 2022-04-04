<?php

class Create{
    private $titre;
    private $description;
    private $prix;
    private $categorie;

    function __construct($titre, $description, $prix, $categorie){
        $this->titre = $titre;
        $this->description = $description;
        $this->prix = $prix;
        $this->categorie = $categorie;
            }

    public function insert_data(){
        include_once ('../bdd/connection.php');

        $sql = "INSERT INTO `produits`(`titre`, `description`, `prix`, `categorie`, `image_id`) VALUES (:titre,:description,:prix,:categorie,'0')";
        $doular = $db->prepare($sql);
        $doular->bindValue(':titre',$this->titre);
        $doular->bindValue(':description',$this->description);
        $doular->bindValue(':prix',$this->prix);
        $doular->bindValue(':categorie',$this->categorie);
     
        $doular->execute();
    }
}

if(isset($_POST['create'])){
    $doular = new Create($_POST['titre'],$_POST['description'], $_POST['prix'], $_POST['categorie']);
    $doular->insert_data();
}



?>