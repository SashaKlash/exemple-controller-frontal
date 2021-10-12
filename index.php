<?php

/* 
Contrôleur frontal
*/

// chargment des dépendances
require_once "config.php";

// Routeur
if(isset($_GET['pg'])){
    // chargment de l'accueil
    include_once "import/homepage.php"
}else{
    // pas sur l'accueil
    switch($_GET['pg']){
        case "cv":
            // import de cv
            echo "cv";
            break;
        case "tuto":
            echo "tuto lulu";
            break;
    }
}