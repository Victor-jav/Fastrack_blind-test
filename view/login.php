<?php require 'header.php'?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href=<?= $page_css ?> rel="stylesheet">
    <title><?= $title ?></title>
</head>

<body>
<div id="all">
    <div id="container">
        <!-- zone de connexion -->
        
        <form action="" method="POST">
            <h1>LOGIN</h1>
            
            <label><b>Nom d'utilisateur</b></label>
            <hr>
            <input type="text" placeholder="Entrer le nom d'utilisateur" name="identifiant">

            <label><b>Mot de passe</b></label>
            <hr>
            <input type="password" placeholder="Entrer le mot de passe" name="mdp">

            <input type="submit" id='submit_login' value='LOGIN' name='action' >
            
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
</body>
</html>

<?php require 'footer.php'?> 