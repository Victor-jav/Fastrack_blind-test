<?php
if(empty($_SESSION['id_user'])){

    $page_css = "\"./public/style_party.css\"";
    $title = "Party";
    ob_start();

$content = ob_get_clean();
require('./view/afficher_lobby.php');

}