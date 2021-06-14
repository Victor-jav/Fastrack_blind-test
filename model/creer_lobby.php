<?php

function Genere_mdp($taille)
{
    // Initialisation des caractères utilisables dans un tableau
    $characters = array(1 , 2 , 3 , 4 , 5 , 6 , 7 , 8 , 9 ,"a", "b", "c", "d", "e", "f", "g", "h", "i", "j", "k", "l", "m", "n", "o", "p", "q", "r", "s", "t", "u", "v", "w", "x", "y", "z");

    for($i=1;$i<$taille;$i++)
    {
        $taille .= strtoupper($characters[array_rand($characters)]);
    }
		
    return $taille;
}

$mdp = Genere_mdp(6);

// Connexion à MySQL
$connection= mysqli_connect("localhost", "root", "", "fastrack");

if (!$connection){ // Contrôler la connexion
    $MessageConnexion = die ("connection impossible");
}

else {
if(!empty($mdp)) {

    $Ajouter="INSERT INTO lobby (id_lobby, mdp_lobby, nbr_player_lobby) VALUES (NULL, '$mdp', NULL)";
   
   // Exécution de la requête
   mysqli_query($connection, $Ajouter) or die('Erreur SQL !'.$Ajouter.'<br>'.mysqli_error($connection));

    }
}
?>

<?php
mysqli_close($connection);
?>

