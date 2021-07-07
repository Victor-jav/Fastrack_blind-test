<?php require("header_membre.php"); ?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href=<?= $page_css ?> rel="stylesheet">
    <title><?= $title ?></title>
</head>

<p></p>
    <body>
    <div id="all">
        <div id="container">

        <form action="" method="GET">
            
        <label><b>Mot de passe de la Partie</b></label>
            <hr>
            <input type="password" placeholder="Entrer le mot de passe de la partie" name="mdp" required>

            <button type="submit" id="submit" value="afficher_lobby" name='action'>Rejoindre la partie</button>
            
        </form>
        </div>
    </div>

    </body>
</html>

<?php require("footer.php"); ?>