<?php
require('view\header.php');
?>
<div id="all">
    <div id="container">
            <!-- zone d'enregistrement -->
            
        <form action="" method="POST">
            <h1>REGISTER</h1>
            
            <label><b>Nom d'utilisateur</b></label>
            <input type="text" placeholder="Entrer le nom d'utilisateur" name="identifiant">
            <label><b>Mot de passe</b></label>
            <input type="password" placeholder="Entrer le mot de passe" name="mdp">
            <label><b>Prénom</b></label>
            <input type="text" placeholder="Entrer votre prénom" name="prenom">
            <label><b>Nom</b></label>
            <input type="text" placeholder="Entrer votre nom" name="nom">
            <label><b>Mail</b></label>
            <input type="email" placeholder="Entrer votre email" name="mail">
            <input type="submit" id='submit' value='REGISTER' name ='action'>
        </form>

        <form action="./index.php" method="GET">
            <input type="submit" id='submit' value='LOGIN' name='action' >
        </form>

            <!-- erreur -->
        <?php
        if(isset($erreur))
        {
            echo '<div class = "erreur">' . $erreur . '</div>';
        }
        if(isset($erreur2))
        {
            echo '<div class = "erreur">' . $erreur2 . '</div>';
        }
        if(isset($succes))
        {
            echo '<div class = "succes">' . $succes . '</div>';
        }
        ?>

    </div>
</div>
<?php
require('view\footer.php');
?>