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
        <div class="topnav2">

            <form id="fastrack" action="./index.php" method='GET'>
                <input type="hidden" name="action" value="fastrack" />
            </form>

            <form id="creer_lobby" action="./index.php" method='GET'>
                <input type="hidden" name="action" value="creer_lobby" />
            </form>
            <a href='#' onclick='document.getElementById("creer_lobby").submit()'>Créer une Partie</a>
        </div>
    </form>

    <br><br>

    <form action="./index.php" method="POST">
        <div class="topnav3">

            <form id="fastrack" action="./index.php" method='GET'>
                <input type="hidden" name="action" value="fastrack" />
            </form>

            <form id="rejoindre_lobby" action="./index.php" method='GET'>
                <input type="hidden" name="action" value="rejoindre_lobby" />
            </form>
            <a href='#' onclick='document.getElementById("rejoindre_lobby").submit()'>Rejoindre une Partie</a>
        </div>
    </form>

    <br><br>

    <form action="./index.php" method="POST">
        <div class="topnav4">

            <form id="fastrack" action="./index.php" method='GET'>
                <input type="hidden" name="action" value="fastrack" />
            </form>

            <form id="tchat" action="./index.php" method='GET'>
                <input type="hidden" name="action" value="tchat" />
            </form>
            <a href='#' onclick='document.getElementById("tchat").submit()'>T-Chat Global</a>
        </div>
    </form>

</body>

</html>

<?php require("footer.php"); ?>
