<?php

if (empty($_SESSION['id_user'])){
    header('Location: index.php');
    exit();
}

$page_css = "\"./public/style_accueil.css\"";
$title = "Accueil";

require('.\view\Accueil.php');

?>