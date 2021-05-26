<?php
// Connexion à MySQL
$connection= mysqli_connect("localhost", "root", "", "fastrack");

if (!$connection){ // Contrôler la connexion
    $MessageConnexion = die ("connection impossible");
}

else {
if(!empty($_GET['message'])) {

        $message = ($_GET['message']);
        // $message = htmlspecialchars($_GET['message']);
        $user = $_SESSION['id_user'];

        $Ajouter="INSERT INTO chat (id_chat, id_user, message) VALUES (NULL, '$user', '$message')";
   
   // Exécution de la requête
   mysqli_query($connection, $Ajouter) or die('Erreur SQL !'.$Ajouter.'<br>'.mysqli_error($connection));

    }
}
?>

<?php
mysqli_close($connection);
?>