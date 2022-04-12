
<h2>Titre : <?= $params['produit']->getTitre() ?></h2>
<p>Categorie : <?= $params['produit']->getCategorie() ?></p>
<p>Date : <?= $params['produit']->getCreatedAt() ?></p>
<p>Description : <?= $params['produit']->getDescription() ?></p>
<p>Prix : <?= $params['produit']->getPrix() ?></p>
<img src="../public/pic/<?=$params['produit']->getImage1() ?>" alt="" width="300px">
<img src="../public/pic/<?=$params['produit']->getImage2() ?>" alt="" width="300px">
<img src="../public/pic/<?=$params['produit']->getImage3() ?>" alt="" width="300px">
<img src="../public/pic/<?=$params['produit']->getImage4() ?>" alt="" width="300px">
<img src="../public/pic/<?=$params['produit']->getImage5() ?>" alt="" width="300px">

<a href="/Annonces/"><button class="seebtn">Retour</button></a>
<a href="/Annonces/"><button class="seebtn">Modifier</button></a>
<a href="/Annonces/"><button class="seebtn">Supprimer</button></a>