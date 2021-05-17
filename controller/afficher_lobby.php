<?php

$page_css = "\"./public/style_accueil.css\"";
$title = "jeu";
ob_start();
//ici
$content = ob_get_clean();
require('./view/afficher_lobby.php');

?>