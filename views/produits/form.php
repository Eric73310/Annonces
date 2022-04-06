
<form action="" method="post">
    <div>
        <label for="titre">Titre : </label>
        <input type="text" id="titre" name="titre">
    </div>
    <div>
        <label for="description">Description : </label>
        <textarea name="description" id="description" cols="30" rows="10"></textarea>
    </div>
    <div>
        <label for="prix">Prix : </label>
        <input type="number" id="prix" name="prix">
    </div>

    <label for="Categorie">Categorie:</label>
    <select name="categorie" id="categorie">
        <option hidden>--Please choose an option--</option>
        <option value="automobile">Auto</option>
        <option value="immobilier">Immobilier</option>
        <option value="jardin">Jardin</option>
        <option value="vetements">Vetements</option>
        <option value="multimedia">Multimedia</option>
        <option value="emploi">Emploi</option>
    </select>

    <div id="submit">
        <input type="submit" name="create" value="Envoyer">
    </div>
</form>