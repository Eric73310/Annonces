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

        
        $countfiles = count($_FILES['image']['name']);
        for($i=0;$i<$countfiles;$i++){
            $filename = $_FILES['image']['name'][$i];
            $image[$i+1]=$filename;
            move_uploaded_file($_FILES['image']['tmp_name'][$i],'pic/'.$filename);
        }

        $sql = "INSERT INTO `produits`(`titre`, `description`, `prix`, `categorie`, `image1`) VALUES (:titre,:description,:prix,:categorie,:image1)";
        $doular = $db->prepare($sql);
        $doular->bindValue(':titre',$this->titre);
        $doular->bindValue(':description',$this->description);
        $doular->bindValue(':prix',$this->prix);
        $doular->bindValue(':categorie',$this->categorie);
        for ($i=1;$i<$countfiles+1;$i++){
            $doular->bindParam(':image'.$i,$image[$i]);
          }


        

     
        $doular->execute();
        header("Location: http://localhost/Annonces/ ");

    }

}

if(isset($_POST['create'])){
    $doular = new Create($_POST['titre'],$_POST['description'], $_POST['prix'], $_POST['categorie']);
    $doular->insert_data();
}

if(isset(($_POST['image'])))

?>