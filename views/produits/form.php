
<h1>Créez votre annonce</h1>
<div class="form_create">
<div class="formulaire">

<label for="Categorie">Categorie:</label><br>
    <select name="categorie" id="categorie">
        <option hidden>Liste des catégories</option>
        <option value="automobile">Auto</option>
        <option value="immobilier">Immobilier</option>
        <option value="jardin">Jardin</option>
        <option value="vetements">Vetements</option>
        <option value="multimedia">Multimedia</option>
        <option value="emploi">Emploi</option>
    </select><br>
    
<form action="/Annonces/formulaire" method="POST" enctype="multipart/form-data">
    <div>
    <br><label for="titre">Titre : </label><br>
        <input type="text" id="titre" name="titre">
    </div>
    <div>
    <br><label for="description">Description : </label><br>
        <textarea name="description" id="description" cols="30" rows="5"></textarea>
    </div>
    <div>
    <br><label for="prix">Prix : </label><br>
        <input type="number" id="prix" name="prix">
    </div>
    <div>
    <br><label for="image">Image</label><br>
            <input type="file" accept = "image/jpg,image/jpeg,image/gif,image/png" name="image[]" id="img" multiple required>
        </div>
        <br>

    <div id="submit">
        <input type="submit">
    </div>
    
</form>
</div>
</div>

<a href="/Annonces/"><button class="seebtn">Retour</button></a>