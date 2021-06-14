<?php

if(isset($_POST['action']))
{
    if(!empty($_POST['prenom']) AND !empty($_POST['nom']) AND !empty($_POST['identifiant']) AND !empty($_POST['mdp']) AND !empty($_POST['mail']))
    {
        require('model\register.php');
        $succes = "Votre compte a été créé avec succès !";
        //pour rediriger automatiquement
        //header('Refresh: 3; URL=index.php');
    }
    else 
    {
        $erreur = "Veuillez remplir tous les champs !";
    }
}


    $page_css = "\"./public/style_login.css\"";
    $title = "register";

    $content = "";
    require('view\register.php');
?>