<h1>Modifier votre annonce</h1>
<h2><?= $params['produit']->getId() ?></h2> 
<form action="/Annonces/modifier/edit/ <?= $params['produit']->getId() ?>" method="POST" enctype="multipart/form-data">
    <div>
        <label for="titre">Titre : </label>
        <input type="text" id="titre" name="titre" value="<?= $params['produit']->getTitre() ?>">
    </div>

    <div>
        <label for="description">Description : </label>
        <textarea name="description" id="description" cols="30" rows="10"  <?= $params['produit']->getDescription() ?>><?= $params['produit']->getDescription() ?></textarea>
    </div>

    <div>
        <label for="prix">Prix : </label>
        <input type="number" id="prix" name="prix" value="<?= $params['produit']->getPrix() ?>">
    </div>

    <div>
            <label for="image">Image</label>
            <input type="file" accept = "image/jpg,image/jpeg,image/gif,image/png" name="image[]" id="img"  multiple ><img src= "public/pic/<?=$params['produit']->getImage1() ?>">
    </div>

    <label for="Categorie">Categorie:</label>
    <select name="categorie" id="categorie">
        <option hidden>Liste des catégories</option>
        <option value="automobile"<?= ($params['produit']->getCategorie() == 'automobile') ? 'selected=selected' : '' ?>>Auto</option>
        <option value="immobilier"<?= ($params['produit']->getCategorie() == 'immobilier') ? 'selected=selected' : '' ?>>Immobilier</option>
        <option value="jardin" <?= ($params['produit']->getCategorie() == 'jardin') ? 'selected=selected' : '' ?>>Jardin</option>
        <option value="vetements" <?= ($params['produit']->getCategorie() == 'vetements') ? 'selected=selected' : '' ?>>Vetements</option>
        <option value="multimedia" <?= ($params['produit']->getCategorie() == 'multimedia') ? 'selected=selected' : '' ?>>Multimedia</option>
        <option value="emploi" <?= ($params['produit']->getCategorie() == 'emploi') ? 'selected=selected' : '' ?>>Emploi</option>
    </select><br>

        <input type="submit">
</form>
<a href="/Annonces/">Retour</a>