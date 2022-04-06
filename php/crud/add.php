<?php

class Create{
    private $titre;
    private $description;
    private $prix;
    private $categorie;
    private $image;

    function __construct($titre, $description, $prix, $categorie, $image){
        $this->titre = $titre;
        $this->description = $description;
        $this->prix = $prix;
        $this->categorie = $categorie;
        $this->image = $image;
            }

    public function insert_data(){
        include_once ('../bdd/connection.php');

        $dataImage = [
    
            'img_link' => './photos/' . $_FILES['image']['name'], 
            'img_file' => $_FILES['photo']['tmp_name']
        ];
    
        // Save in Pic 
        move_uploaded_file($dataImage['img_file'], $dataImage['img_link']);
    

        $sql = "INSERT INTO `produits`(`titre`, `description`, `prix`, `categorie`, `image`) VALUES (:titre,:description,:prix,:categorie,:image)";
        $doular = $db->prepare($sql);
        $doular->bindValue(':titre',$this->titre);
        $doular->bindValue(':description',$this->description);
        $doular->bindValue(':prix',$this->prix);
        $doular->bindValue(':categorie',$this->categorie);
        $doular->bindValue(':image', $this->image);


        

     
        $doular->execute();
        header("Location: http://localhost/Annonces/ ");

    }

}

if(isset($_POST['create'])){
    $doular = new Create($_POST['titre'],$_POST['description'], $_POST['prix'], $_POST['categorie'], $_POST['image']);
    $doular->insert_data();
}

?>