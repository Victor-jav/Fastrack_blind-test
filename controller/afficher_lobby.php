<?php

if (empty($_SESSION['id_user'])){
    header('Location: index.php');
    exit();
}

require('model\afficher_lobby.php');

$page_css = "\"./public/style_afficher_lobby.css\"";
$title = "Accueil";

require('.\view\afficher_lobby.php');
?>