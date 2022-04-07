<?php

class Delete{

private $id;

public function __construct($id){
    $this->id = $id;
}

public function delete(){
    include_once ('../bdd/connection.php');
    $sql = "DELETE FROM produits WHERE id=?";
    $doular = $db->prepare($sql);
    //$doular->bindValue('id',$this->id);
    $doular->execute([$this->id]);
    header("Location: http://localhost/Annonces/ ");

   
    
}
}

if(isset($_POST['delete'])){
$dl = new Delete($_GET['id']);
$dl->delete();

}

?>
