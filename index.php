<?php 
require_once 'php/bdd/connection.php';

$sql = "SELECT * FROM  produits";
$resultat = $db->query($sql);

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

<button><a href="php/addform.php">Ajouter</a></button>

<?php

while($rows = $resultat->fetch(PDO::FETCH_ASSOC)){

?>


 Titre : <?php echo $rows['titre']  ?><br>
 Categorie :<?php echo $rows['categorie'] ?><br>
 Date :<?php echo $rows['date'] ?><br>
 Description : <?php echo $rows['description'] ?><br>
 Prix : <?php echo $rows['prix'] ?><br><br>

 <form action="php/crud/delete.php?id=<?=$rows['id']?>" method="post">
     <input type="submit" name="delete" value="delete">
 </form>

 <form action="php/updateform.php?id=<?=$rows['id']?>" method="post">
     <input type="submit" name="update" value="update">
 </form>


 <?php } ?>




</body>

</html>