<?php
session_start();
// Connexion à la base de données
try
{
	$bdd = new PDO('mysql:host=localhost;dbname=fastrack;charset=utf8', 'root', '');
}
catch(Exception $e)
{
        die('Erreur : '.$e->getMessage());
}
// Récupération des 10 derniers messages
$reponse = $bdd->query('SELECT * FROM chat JOIN user ON user.id_user = chat.id_user ORDER BY id_chat ASC LIMIT 0, 1000');


// Affichage de chaque message (toutes les données sont protégées par htmlspecialchars)
while ($donnees = $reponse->fetch()) {

if($donnees['id_user'] == $_SESSION['id_user'])
{
	echo '<div class="my-text-div ">' . '<div class="my-text-container ">' . '<div class="my-text taille">' . '<p>' . '<div style = "font-size:15px; font-weight:bold;">' . htmlspecialchars($donnees['identifiant']) . '</div>' . htmlspecialchars($donnees['message']) . '</p>' . '</div>' . '</div>' . '</div>' ;
}
else {
	echo '<div class="friend-text-div ">' . '<div class="friend-text-container">' . '<div class="friend-text taille">' . '<p>' . '<div style = "font-size:15px; font-weight:bold;">' . htmlspecialchars($donnees['identifiant']) . '</div>' . htmlspecialchars($donnees['message']) . '</p>' . '</div>' . '</div>' . '</div>';
}

}


$reponse->closeCursor();

?>