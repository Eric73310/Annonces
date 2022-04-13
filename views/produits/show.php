<div class="show">
<div class="infos_show">
<h2>Titre : <?= $params['produit']->getTitre() ?></h2>
<p>Categorie : <?= $params['produit']->getCategorie() ?></p>
<p>Date : <?= $params['produit']->getCreatedAt() ?></p>
<p>Description : <?= $params['produit']->getDescription() ?></p>
<p>Prix : <?= $params['produit']->getPrix() ?></p>
</div>

<div class="caroussel_container">
    <input type="radio" name="position" checked />
    <input type="radio" name="position" />
    <input type="radio" name="position" />
    <input type="radio" name="position" />
    <input type="radio" name="position" />
    <main id="carousel">
        <div class="item"><img src="../public/pic/<?= $params['produit']->getImage1() ?>" alt="" width="350px"></div>
        <div class="item"><img src="../public/pic/<?= $params['produit']->getImage2() ?>" alt="" width="350px"></div>
        <div class="item"><img src="../public/pic/<?= $params['produit']->getImage3() ?>" alt="" width="350px"></div>
        <div class="item"><img src="../public/pic/<?= $params['produit']->getImage4() ?>" alt="" width="350px"></div>
        <div class="item"><img src="../public/pic/<?= $params['produit']->getImage5() ?>" alt="" width="350px"></div>
        <main>
</div>
</div>


<a href="/Annonces/"><button class="seebtn">Retour</button></a>
<a href="/Annonces/modifier/edit/<?= $params['produit']->id ?>"><button class="seebtn">Modifier</button></a>
<a href="/Annonces/"><button class="seebtn">Supprimer</button></a>

