<?php



class Create{
    private $tableauinsert=[];

    function __construct($doular){
        // Exemple : $array[]=$value; Ajouter la value a la fin du tableau $array
        // $this->tableauinsert[] = $doular['titre'];
        // $this->tableauinsert[] = $doular['description'];
        // $this->tableauinsert[] = $doular['prix'];
        // $this->tableauinsert[] = $doular['categorie'];
        array_push($this->tableauinsert, $doular['titre'],$doular['description'],$doular['prix'],$doular['categorie']);
            }

    public function insert_data(){
        include_once ('../bdd/connection.php');

        
        $countfiles = count($_FILES['image']['name']);
        for($i=0;$i<$countfiles;$i++){
            $filename = $_FILES['image']['name'][$i];
            $image[$i+1]=$filename;
            move_uploaded_file($_FILES['image']['tmp_name'][$i],'pic/'.$filename);
        }
        array_push($this->tableauinsert, $image[1],$image[2],$image[3],$image[4],$image[5]);

        $sql = "INSERT INTO `produits`(`titre`, `description`, `prix`, `categorie`, `image1`, `image2`, `image3`, `image4`, `image5`) VALUES (?,?,?,?,?,?,?,?,?)";
        $doular = $db->prepare($sql);
        // $doular->bindValue(1,$this->titre);
        // $doular->bindValue(2,$this->description);
        // $doular->bindValue(3,$this->prix);
        // $doular->bindValue(4,$this->categorie);
        // for ($i=5;$i<$countfiles+5;$i++){
        //     $doular->bindParam($i,$image[$i-4]);
        //   }

        $doular->execute($this->tableauinsert);
        header("Location: http://localhost/Annonces/ ");

    }

}

if(isset($_POST['create'])){
    $doular = new Create($_POST);
    $doular->insert_data();
}

// if(isset(($_POST['image'])))
