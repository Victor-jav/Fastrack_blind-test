<?php

if (empty($_SESSION['id_user'])){
    header('Location: index.php');
    exit();
}

require('model\tchat.php');

$page_css = "\"./public/style_tchat.css\"";
$title = "Accueil";

ob_start();
//ici
$content = ob_get_clean();
require('.\view\tchat.php');
?>