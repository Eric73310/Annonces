<h1>Coucou</h1>
<?php

var_dump($params);
foreach($params['produits'] as $produit):

?>
    <h2> Titre : <?= $produit->titre  ?></h2>
    <p> Categorie :<?= $produit->categorie ?></p>
    <p>Date :<?= $produit->date ?></p>
    <p>Description : <?= $produit->description ?></p>
    <p>Prix : <?= $produit->prix ?></p>

    <!-- <form action="php/crud/delete.php?id=<?= $produit->id ?>" method="post">
        <input type="submit" name="delete" value="delete">
    </form> -->
    
    <?php  endforeach?>
  