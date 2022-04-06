<h1>Liste des annonces</h1>

<a href="/Annonces/formulaire/">Mettre une annonce</a>
<?php

//var_dump($params);
foreach($params['produits'] as $produit):

?>
    <h2> Titre : <?= $produit->titre  ?></h2>
    <p> Categorie :<?= $produit->categorie ?></p>
    <p>Date :<?= $produit->getCreatedAt() ?></p>
    <p>Description : <?= $produit->description ?></p>
    <p>Prix : <?= $produit->prix ?></p>
    <p>Id : <?= $produit->id ?></p>

    <a href="/Annonces/produits/<?= $produit->id ?>">Voir le produit</a>
    
    <?php  endforeach?>
