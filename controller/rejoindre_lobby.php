<?php

if (empty($_SESSION['id_user'])){
    header('Location: index.php');
    exit();
}

require('model\rejoindre_lobby.php');

$page_css = "\"./public/style_rejoindre_lobby.css\"";
$title = "Accueil";

ob_start();
//ici
$content = ob_get_clean();
require('.\view\rejoindre_lobby.php');
?>