<?php

class Update{
    private $id;
    private $titre;
    private $description;
    private $prix;
    private $categorie;

    function __construct($id, $titre, $description, $prix, $categorie){
        $this->id = $id;
        $this->titre = $titre;
        $this->description = $description;
        $this->prix = $prix;
        $this->categorie = $categorie;
            }

    public function insert_data(){
        include_once ('../bdd/connection.php');

        $sql = "UPDATE produits SET titre= :titre, description= :description, prix= :prix ,categorie = :categorie WHERE id = :id";
        $doular = $db->prepare($sql);
        $doular->bindValue(':id',$this->id);
        $doular->bindValue(':titre',$this->titre);
        $doular->bindValue(':description',$this->description);
        $doular->bindValue(':prix',$this->prix);
        $doular->bindValue(':categorie',$this->categorie);
        $doular->execute();
        header("Location: http://localhost/Annonces/ ");

    }
}

if(isset($_POST['update'])){
    $doular = new Update($_GET['id'], $_POST['titre'],$_POST['description'], $_POST['prix'], $_POST['categorie']);
    $doular->insert_data();
}



?>