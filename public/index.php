<?php

use app\Autoloader;

require '../app/Autoloader.php';
Autoloader::register();

if(isset($_GET['p'])){
    //si on a un paremetre p dans l'url, on sauvegarde
    $p = $_GET['p'];
}else{
    //sinon on sauvegarde la page d'acceuil
    $p = 'home';
}

ob_start(); //tout ce qui est affiché, on le stock dans une variable qui est "content"

//ici est le routage des différentes pages
if($p === 'home'){
    require '../pages/home.php';
}
$content = ob_get_clean();

//charge le template des pages
require '../pages/templates/default.php';