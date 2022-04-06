<?php

include_once('./bdd/connection.php');

$id = $_GET['id'];
$sql = "SELECT * FROM produits WHERE id = $id";
$result = $db->query($sql);

while($rows = $result->fetch(PDO::FETCH_ASSOC)){
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
<form action="crud/update.php?id=<?= $rows['id']?>" method="post">
        <div>
            <label for="titre">Titre : </label>
            <input type="text" id="titre" name="titre" value="<?= $rows['titre'] ?>"> 
        </div>
        <div>
            <label for="description">Description : </label>
            <textarea name="description" id="description" cols="30" rows="5" ><?= $rows['description'] ?></textarea>
        </div>
        <div>
            <label for="prix">Prix : </label>
            <input type="number" id="prix" name="prix" value="<?= $rows['prix'] ?>">
        </div>

        <label for="Categorie">Categorie:</label>

        <select name="categorie" id="categorie">
            <option hidden><?= $rows['categorie'] ?></option>
            <option value="automobile">Auto</option>
            <option value="immobilier">Immobilier</option>
            <option value="jardin">Jardin</option>
            <option value="vetements">Vetements</option>
            <option value="multimedia">Multimedia</option>
            <option value="emploi">Emploi</option>
        </select>


        <div id="submit">
            <input type="submit" name="update" value="Update">
        </div>
    </form>

    <?php
}
    ?>

</body>
</html>