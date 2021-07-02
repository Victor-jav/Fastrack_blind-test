<?php

if (empty($_SESSION['id_user'])){
    header('Location: index.php');
    exit();
}

require('model\message.php');

$page_css = "\"./public/style_tchat_prive.css\"";
$title = "T-Chat Privé";


//tester si un utilisateur existe ou non, s'il existe ne rien faire sinon afficher un message d'erreur.
if(isset($_GET['id']) AND !empty($_GET['id']))
{
    $getid = $_GET['id'];
    $getuser = $bdd->prepare('SELECT * FROM user WHERE id_user = ?');
    $getuser->execute(array($getid));

    if($getuser->rowCount() > 0)
    {
    //ne rien faire
    }
    else
    {
        $erreur = "Aucun utilisateur trouvé";;
    }
}

require('view\message.php');

//afficher le tchat si l'utilisateur existe sinon le cacher.

if(isset($_GET['id']) AND !empty($_GET['id']))
{
    $getid = $_GET['id'];
    $getuser = $bdd->prepare('SELECT * FROM user WHERE id_user = ?');
    $getuser->execute(array($getid));

    if($getuser->rowCount() > 0)
    {
        if(!empty($_GET['id'])) 
        {
            ?>
            <div class="section_tchat">
            <?php
            require('view\message_affichage.php');
            ?>
            </div>
            <?php
        }
    }
}


?>