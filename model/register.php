<?php

// Connexion à MySQL
$connection= mysqli_connect("localhost", "root", "", "fastrack");

if (!$connection){ // Contrôler la connexion
    $MessageConnexion = die ("connection impossible");
}

else {
if(isset($_POST['prenom']) && $_POST['nom'] && $_POST['identifiant'] && $_POST['mdp'] && $_POST['mail']) {

        $prenom = htmlspecialchars($_POST['prenom']);
        $nom = htmlspecialchars($_POST['nom']);
        $identifiant = htmlspecialchars($_POST['identifiant']);
        $mdp = htmlspecialchars(sha1($_POST['mdp']));
        $mail = htmlspecialchars($_POST['mail']);

        $Ajouter="INSERT INTO user (id_user, prenom, nom, identifiant, mdp, mail) VALUES (NULL, '$prenom', '$nom', '$identifiant', '$mdp', '$mail')";
   
   // Exécution de la requête
   mysqli_query($connection, $Ajouter) or die('Erreur SQL !'.$Ajouter.'<br>'.mysqli_error($connection));

    }
}

?>