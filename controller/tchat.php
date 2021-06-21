<?php

if (empty($_SESSION['id_user'])){
    header('Location: index.php');
    exit();
}

require('model\tchat.php');

$page_css = "\"./public/style_tchat.css\"";
$title = "Accueil";

require('.\view\tchat.php');
?>