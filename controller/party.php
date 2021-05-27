<?php
if(empty($_SESSION['id_user'])){

    $page_css = "\"./public/style_party.css\"";
    $title = "Party";
    ob_start();
//ici
$content = ob_get_clean();
require('./view/party.php');

}