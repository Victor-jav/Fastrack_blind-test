<?php
    
    if (empty($_SESSION['id_user'])){
        header('Location: index.php');
        exit();
    }

    

    


    $page_css = "\"./public/style_party.css\"";
    $title = "party";

    if(isset($_GET['lire_musique']))
    {  
        require('model\lire_musique.php');
    }
 
    require('view\lire_musique.php');


?> 