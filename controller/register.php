<?php

if (!empty($_SESSION['id_user'])){
    header('Location: index.php?action=accueil');
    exit();
}
else {

    require('model\register.php');

    $page_css = "\"./public/style_login.css\"";
    $title = "FASTRACK REGISTER";

    require('view\register.php');
}
?>