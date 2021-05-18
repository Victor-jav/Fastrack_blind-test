<?php
if (empty($_SESSION['id_user'])){
    header('Location: index.php');
    exit();
}

$page_css = "\"./public/style_accueil.css\"";
$title = "Accueil";

ob_start();
//ici
$content = ob_get_clean();
require('.\view\Accueil.php');

?>