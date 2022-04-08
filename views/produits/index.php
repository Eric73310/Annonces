<h1>Liste des annonces</h1>

<a href="/Annonces/formulaire/">Mettre une annonce</a>
<?php

//print_r($params);
foreach($params['produits'] as $produit):

?>
    <h2> Titre : <?= $produit->getTitre()  ?></h2>
    <p> Categorie :<?= $produit->getCategorie() ?></p>
    <p>Date :<?= $produit->getCreatedAt() ?></p>
    <p>Description : <?= $produit->getDescription() ?></p>
    <p>Prix : <?= $produit->getPrix() ?></p>
    <img src="public/pic/<?=$produit->getImage1() ?>" alt="" width="300px">

    
    
    

    <a href="/Annonces/produits/<?= $produit->id ?>">Voir le produit</a>
    
    <?php  endforeach?>
