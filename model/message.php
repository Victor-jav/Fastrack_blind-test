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


if(!empty($_POST['message']))
{
    $user_from = $_SESSION['id_user'];
    $user_to = $_GET['id'];
    $message = htmlspecialchars($_POST['message']);
    

    $add_message = $bdd->prepare("INSERT INTO private_chat (id_private_chat, id_from, id_to, message) VALUES (NULL, ?, ?, ?)");
    $add_message->execute(array($user_from, $user_to, $message));
}
?>