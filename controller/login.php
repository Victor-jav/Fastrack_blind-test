<?php

    require_once('./model/login.php');

    if (isset($_POST['mdp']) && $_POST['identifiant'])
    {
        if (user_check($_POST['mdp'] ,$_POST['identifiant']))
        {
            //echo 'connecté';

            $client = user_info($_POST['identifiant']);

            foreach(array('id_user','nom', 'prenom', 'identifiant', 'mail') as $key )
            {
                $_SESSION[$key] = $client[$key];
            }
            
            header('Location: index.php?action=accueil');
            exit();
        }
        else 
            $erreur = "Le nom d'utilisateur ou le Mot de Pass est Incorrect";
        }

    if(isset($_POST['action']))
    {
        if(empty($_POST['identifiant']) AND empty($_POST['mdp']))
        {
                
            $erreur2 = "Veuillez remplir tous les champs !";
        }
    }

    $page_css = "\"./public/style_login.css\"";
    $title = "FASTRACK LOGIN";
    
    require_once('./view/login.php');
?> 
