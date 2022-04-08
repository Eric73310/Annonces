

<h2>Titre : <?= $params['produit']->getTitre() ?></h2>
<p>Categorie : <?= $params['produit']->getCategorie() ?></p>
<p>Date : <?= $params['produit']->getCreatedAt() ?></p>
<p>Description : <?= $params['produit']->getDescription() ?></p>
<p>Prix : <?= $params['produit']->getPrix() ?></p>
<p>Id : <?= $params['produit']->id ?></p>
<a href="/Annonces/">Retour</a>