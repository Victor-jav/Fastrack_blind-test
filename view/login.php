  
<?php require 'header.php'?>
<div id="all">
    <div id="container">
        <!-- zone de connexion -->
        
        <form action="" method="POST">
            <h1>LOGIN</h1>
            
            <label><b>Nom d'utilisateur</b></label>
            <input type="text" placeholder="Entrer le nom d'utilisateur" name="identifiant">

            <label><b>Mot de passe</b></label>
            <input type="password" placeholder="Entrer le mot de passe" name="mdp">

            <input type="submit" id='submit' value='LOGIN' name='action' >
            
        </form>


        <form action="./index.php" method="GET">
            <input type="submit" id='submit' value='REGISTER' name='action' >
        </form>
        
        <?php
            if(isset($erreur))
            {
                echo '<div class = "erreur">' . $erreur . '</div>';
            }
            if(isset($erreur2))
            {
                echo '<div class = "erreur">' . $erreur2 . '</div>';
            }
        ?>
        

    </div>
</div>

<?php require 'footer.php'?> 