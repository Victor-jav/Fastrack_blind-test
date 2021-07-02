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

$user_from = $_SESSION['id_user'];
$user_to = $_GET['id'];

$getMessage = $bdd->prepare('SELECT * FROM private_chat WHERE id_from = ? AND id_to = ? OR id_from = ? AND id_to = ?');
$getMessage->execute(array($user_from, $user_to, $user_to, $user_from));

while($message = $getMessage->fetch())
{
    if($message['id_from'] == $user_from) 
    {
        echo '<div class="my-text-div ">' . '<div class="my-text-container ">' . '<div class="my-text taille">' . '<p>' . '<div style = "font-size:15px; font-weight:bold;">' . '</div>' . htmlspecialchars($message['message']) . '</p>' . '</div>' . '</div>' . '</div>';
    }
    elseif($message['id_from'] == $user_to)
    {
        echo '<div class="friend-text-div ">' . '<div class="friend-text-container">' . '<div class="friend-text taille">' . '<p>' . '<div style = "font-size:15px; font-weight:bold;">' . '</div>' . htmlspecialchars($message['message']) . '</p>' . '</div>' . '</div>' . '</div>';
    }
}


?>