

<h2>Titre : <?= $params['produit']->titre ?></h2>
<p>Categorie : <?= $params['produit']->categorie ?></p>
<p>Date : <?= $params['produit']->getCreatedAt() ?></p>
<p>Description : <?= $params['produit']->description ?></p>
<p>Prix : <?= $params['produit']->prix ?></p>
<p>Id : <?= $params['produit']->id ?></p>
<a href="/Annonces/">Retour</a>