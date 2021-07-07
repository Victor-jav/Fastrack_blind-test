<?php require("header_membre.php"); ?>

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

    <br><br><br><br><br><br>
    
        <form action="./index.php" method="POST">
            <div class="topnav1">

                <form id="fastrack" action="./index.php" method='GET'>
                    <input type="hidden" name="action" value="fastrack" />
                </form>

                <form id="afficher_lobby" action="./index.php" method='GET'>
                    <input type="hidden" name="action" value="afficher_lobby" />
                </form>
                <a href='#' onclick='document.getElementById("afficher_lobby").submit()'>afficher le lobby</a>
            </div>
        </form>

        <div class= "password_lobby">
        <?php
            require_once('.\model\creer_lobby.php');
            echo "Mot de Passe de votre Partie: <strong>$mdp</strong> ";
            ?>
            <br>
            <?Php
            echo "Note : Vous pouvez le partagez à vos amis pour qu'ils puissent rejoindre."
        ?>
        </div>

    </body>
</html>

<?php require("footer.php"); ?>