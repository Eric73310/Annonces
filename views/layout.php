<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=DM+Sans&display=swap" rel="stylesheet">
    <link rel="icon" type="images/png" sizes="16x16" href="public\assets\logo">
    <meta charset="utf-8" />
    <title>Corner Shop</title>
    <link rel="stylesheet" href="<?= SCRIPTS . 'css' . DIRECTORY_SEPARATOR . 'style.css' ?>">
</head>

<body>
    <header>
        <div class="logo">
            <img src="public\assets\logo" alt="">
        </div>
        <div class="accroche">
            <h1>Achetez simplement <br>
                de particulier à particulier !</h1>
        </div>
    </header>
    <div class="toolbar">
        <div class="search">
            <select name="categorie" id="categorie">
                <option hidden>Choisisez une rubrique</option>
                <option value="automobile">Auto</option>
                <option value="immobilier">Immobilier</option>
                <option value="jardin">Jardin</option>
                <option value="vetements">Vetements</option>
                <option value="multimedia">Multimedia</option>
                <option value="emploi">Emploi</option>
            </select>
        </div>
        <div class="ajout">
            <a href="/Annonces/formulaire/"><button name="button">Créez une nouvelle annonce</button></a>
            
        </div>

    </div>



    <?= $content ?>


</body>

</html>