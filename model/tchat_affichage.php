<?php
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
$reponse = $bdd->query('SELECT * FROM chat JOIN user ON user.id_user = chat.id_user ORDER BY id_chat DESC LIMIT 0, 10');


// Affichage de chaque message (toutes les données sont protégées par htmlspecialchars)
while ($donnees = $reponse->fetch())
{
	echo '<p><strong>' . htmlspecialchars($donnees['identifiant']) . '<br>' . htmlspecialchars($donnees['message']) . '</p>';
}

$reponse->closeCursor();

?>