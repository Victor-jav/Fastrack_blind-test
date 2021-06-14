<?php

if (empty($_SESSION['id_user'])){
    header('Location: index.php');
    exit();
}

require('model\creer_lobby.php');

$page_css = "\"./public/style_creer_lobby.css\"";
$title = "Accueil";

ob_start();
//ici
$content = ob_get_clean();
require('.\view\creer_lobby.php');
?>