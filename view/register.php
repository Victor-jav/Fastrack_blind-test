<?php
require('view\header.php');
?>
<div id="all">
    <div id="container">
            <!-- zone de d'enregistrement -->
            
        <form action="./index.php" method="GET">
            <h1>Register</h1>
            
            <label><b>Nom d'utilisateur</b></label>
            <input type="text" placeholder="Entrer le nom d'utilisateur" name="username" required>
            <label><b>Mot de passe</b></label>
            <input type="password" placeholder="Entrer le mot de passe" name="password" required>
            <label><b>Mail</b></label>
            <input type="text" placeholder="Entrer votre email" name="email" required>
            <input type="submit" id='submit' value='INSCRIPTION' name ='action'>
        </form>

        <form action="./index.php" method="GET">
		    <input id='submit' type="submit" value="RETOUR A LA PAGE DE CONNEXION" name="action">
		</form>
    </div>
</div>
<?php
require('view\footer.php');
?>