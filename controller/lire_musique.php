<?php
    
    if (empty($_SESSION['id_user'])){
        header('Location: index.php');
        exit();
    }

    $page_css = "\"./public/style_party.css\"";
    $title = "Party";
    require('./view/lire_musique.php');

    require('./model/lire_musique.php');




?> 