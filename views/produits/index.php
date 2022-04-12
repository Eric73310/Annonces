
<h1>Liste des annonces</h1>
<?php

//print_r($params);
foreach ($params['produits'] as $produit) :

?>
    <div class="annonce_container">
        <h2 class="categorie_annonce"><?= $produit->getCategorie() ?></h2>
        <div class="contenu">
            <div class="infos">
                <h3 class="paddington"><?= $produit->getTitre()  ?></h3>
                <p class="paddington">Date :<?= $produit->getCreatedAt() ?></p>
                <p class="paddington">Description : <?= $produit->getDescription() ?></p>
                <p class="paddington">Prix : <?= $produit->getPrix() ?>€</p>
            </div>
            <div class="photo">
                <img src="public/pic/<?= $produit->getImage1() ?>" alt="" width="300px">
            </div>
        </div>





        <a class="voir" href="/Annonces/produits/<?= $produit->id ?>"><button class="seebtn">Voir le produit</button></a>
    </div>
    <br>
<?php endforeach ?>