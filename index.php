<?php require_once 'php\bdd\connection.php';

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
    <form action="php/crud/add.php" method="post">
        <div>
            <label for="titre">Titre : </label>
            <input type="text" id="titre" name="titre">
        </div>
        <div>
            <label for="description">Description : </label>
            <textarea name="description" id="description" cols="30" rows="10"></textarea>
        </div>
        <div>
            <label for="prix">Prix : </label>
            <input type="number" id="prix" name="prix">
        </div>

        <label for="Categorie">Categorie:</label>

        <select name="categorie" id="categorie">
            <option hidden>--Please choose an option--</option>
            <option value="automobile">Auto</option>
            <option value="immobilier">Immobilier</option>
            <option value="jardin">Jardin</option>
            <option value="vetements">Vetements</option>
            <option value="multimedie">Multimedia</option>
            <option value="emploi">Emploi</option>
        </select>


        <div id="submit">
            <input type="submit" name="create" value="Envoyer">
        </div>
    </form>


    </form>

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

 <?php } ?>




</body>

</html>