<?php
// Connexion à la base de données
try
{
    $bdd = new PDO('mysql:host=localhost;dbname=fastrack;charset=utf8', 'root', '');
}
catch(Exception $e)
{
    die('Erreur : ' . $e->getMessage());
}

if(!empty($_GET['message'])) 
{
    $user = $_SESSION['id_user'];
    $message = $_GET['message'];

    $add_message = $bdd->prepare("INSERT INTO chat (id_chat, id_user, message) VALUES (NULL, ?, ?)");
    $add_message->execute(array($user, $message));
}
?>