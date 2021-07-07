<?php
require('model\rejoindre_lobby.php');

if (empty($_SESSION['id_user'])){
    header('Location: index.php');
    exit();
}

$page_css = "\"./public/style_rejoindre_lobby.css\"";
$title = "Rejoindre Lobby";

require('.\view\rejoindre_lobby.php');


?>