<?php

use Router\Router;

require '../vendor/autoload.php';

$router = new Router( $_GET['url']);

// On appelle la fonction index et show dans le bloc BlogController
$router->get('/', 'App\Controllers\AnnonceController@index'); // Un chemin '/' et une action BlogController@index' (le controller @ la méthode)
$router->get('/produits/:id', 'App\Controllers\AnnonceController@show'); // Dans l'url on écrit produits/id

// Pour vérifier que nos routes fonctionnent
$router->run();

?>