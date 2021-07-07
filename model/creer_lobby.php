<?php

function passgen1($nbChar) {
    $chaine ="mnoTUzS5678kVvwxy9WXYZRNCDEFrslq41GtuaHIJKpOPQA23LcdefghiBMbj0";
    srand((double)microtime()*1000000);
    $pass = '';
    for($i=0; $i<$nbChar; $i++){
        $pass .= $chaine[rand()%strlen($chaine)];
        }
    return $pass;
    }

    function passgen2($nbChar)
    {
    return substr(str_shuffle('abcdefghijklmnopqrstuvwxyzABCEFGHIJKLMNOPQRSTUVWXYZ0123456789'),1, $nbChar);
    }

    $mdp = passgen2(6);


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

