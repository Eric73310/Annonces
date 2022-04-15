

<!-- <h1>Liste des annonces</h1> -->
<?php
//echo "<pre>",print_r($params),"</pre>";
//$afficher='oui';
@$envoyer=$_GET["envoyer"];
if ($envoyer==true) {?>
    <div id="resultat"></div>
    <h1 id="nbr"><?=count($params['produits'])."".(count($params['produits'])>1?" annonces trouvées":" annonce trouvée") ?></h1>
    <?php for ($i=0; $i <count($params['produits']); $i++) { 
        // echo "<pre>",print_r($params['produits']),"</pre>";
    ?>
        <div class="annonce_container">
            <h2 class="categorie_annonce"><?= $params['produits'][$i]['categorie']?></h2>
            <div class="contenu">
                <div class="infos">
                    <h3 class="paddington"><?= $params['produits'][$i]['titre']  ?></h3>
                    <p class="paddington">Date :<?= $params['produits'][$i]['date'] ?></p>
                    <p class="paddington">Description : <?= $params['produits'][$i]['description'] ?></p>
                    <p class="paddington">Prix : <?= $params['produits'][$i]['prix']?>€</p>
                </div>
                <div class="photo">
                    <img src="public/pic/<?= $params['produits'][$i]['image1'] ?>" alt="" width="300px">
                </div>
            </div>
            <a class="voir" href="/Annonces/produits/<?= $params['produits'][$i]['id'] ?>"><button class="seebtn">Voir le produit</button></a>
        </div>
        <br>


        <?php }} else{ ?>
            <h1>Liste des annonces</h1>
        <?php

//print_r($params);
foreach ($params['annonces'] as $produit) :

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
<?php }?>
        
        
    

