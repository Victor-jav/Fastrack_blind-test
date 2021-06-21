<?php
// Connexion à la base de données
try
{
    $bdd = new PDO('mysql:host=localhost;dbname=fastrack;charset=utf8', 'root', '');
        
        $user_id = $_SESSION['id_user'];
        
        $req = $bdd->prepare("DELETE FROM chat WHERE id_user = :user_id");
        $req->bindParam(':user_id', $user_id, PDO::PARAM_INT);
        $req->execute();

        
        $req = $bdd->prepare("DELETE FROM user WHERE id_user = :user_id");
        $req->bindParam(':user_id', $user_id, PDO::PARAM_INT);
        $req->execute();
        session_destroy();
        $delete_account = "Votre compte a été supprimé avec succès !";

}
catch(Exception $e)
{
    die('Erreur : ' . $e->getMessage());
}