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

if(isset($_POST['action']))
{
    if(!empty($_POST['prenom']) AND !empty($_POST['nom']) AND !empty($_POST['identifiant']) AND !empty($_POST['mdp']) AND !empty($_POST['mail']))
    {
        $prenom = htmlspecialchars($_POST['prenom']);
        $nom = htmlspecialchars($_POST['nom']);
        $identifiant = htmlspecialchars($_POST['identifiant']);
        $mdp = sha1($_POST['mdp']);
        $mail = htmlspecialchars($_POST['mail']);

        //condition si l'utilisateur existe deja il n'est pas ajouté à la bdd ( j'ai pas réussis à le faire ne function)
        $user_check = $bdd->prepare("SELECT id_user FROM user WHERE identifiant = ?");
        $user_check->execute([$identifiant]);
    
        $exist = $user_check->rowCount();
    
        if($exist == 0) 
        {
        $add_account = $bdd->prepare("INSERT INTO user (id_user, prenom, nom, identifiant, mdp, mail) VALUES (NULL, ?, ?, ?, ?, ?)");
        $add_account->execute(array($prenom, $nom, $identifiant, $mdp, $mail));
        $succes = "Votre compte a été créé avec succès !";

        //pour rediriger automatiquement
        //header('Refresh: 3; URL=index.php');
        }
        else 
        {
            $erreur2 = "Le nom d'utilisateur existe déjà !";
        }
    }
    else 
    {
        $erreur = "Veuillez remplir tous les champs !";
    }
}


?>