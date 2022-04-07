<?php

class Update{

    private $tableauupdate=[];

    // private $id;
    // private $titre;
    // private $description;
    // private $prix;
    // private $categorie;

    function __construct($doular,$id){
        // $this->id = $id;
        // $this->titre = $titre;
        // $this->description = $description;
        // $this->prix = $prix;
        // $this->categorie = $categorie;
        //  
        array_push($this->tableauupdate, $doular['titre'],$doular['description'],$doular['prix'],$doular['categorie'],$id);   
    }
        

    public function insert_data(){
        include_once ('../bdd/connection.php');

        $sql = "UPDATE produits SET titre= ?, description= ?, prix= ? ,categorie = ? WHERE id = ?";
        $doular = $db->prepare($sql);
        // $doular->bindValue(':id',$this->id);
        // $doular->bindValue(':titre',$this->titre);
        // $doular->bindValue(':description',$this->description);
        // $doular->bindValue(':prix',$this->prix);
        // $doular->bindValue(':categorie',$this->categorie);
        $doular->execute($this->tableauupdate);
        header("Location: http://localhost/Annonces/ ");

    }
}

if(isset($_POST['update'])){
    $doular = new Update($_POST, $_GET['id']);
    $doular->insert_data();
}



?>