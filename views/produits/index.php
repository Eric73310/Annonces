

<h1>Liste des annonces</h1>
<?php
//print_r($params);

for ($i=0; $i <count($params['produits']); $i++) { 
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
        <?php } ?>
        
        
    

