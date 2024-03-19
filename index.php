<?php

require_once 'src/header.php';
require_once 'src/functions.php';
$page = filter_input(INPUT_GET,'page',FILTER_SANITIZE_STRING);
require_once 'src/nav.php';
/*if ($page=='connexion') {
    require_once 'src/connexion.php';
} else if ($page=='recupConnexion') {
    require_once 'src/recupConnexion.php';
} else {
    echo '<h1> Accueil </h1>';
}*/

switch ($page) {
    case 'connexion':
        if (!file_exists('src/connexion.php')) {
            error();
        } else {
            require_once 'src/connexion.php';
        }
        break;
    case 'recupConnexion':
        if (!file_exists('src/recupConnexion.php')) {
            error();
        } else {
            require_once 'src/recupConnexion.php';
        }
        break;
    case 'ajoutProduit':
        if (!file_exists('src/ajoutProduit.php')) {
            error();
        } else {
            require_once 'src/ajoutProduit.php';
        }
        break;
    case 'recupProduit':
        if (!file_exists('src/recupProduit.php')) {
            error();
        } else {
            require_once 'src/recupProduit.php';
        }
        break;
    default:
        echo '<h1> Accueil </h1>';
        break;
}
require_once 'src/footer.php';
?>