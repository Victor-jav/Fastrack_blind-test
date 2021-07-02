<html>
    <head>
        <meta charset="utf-8">
        <title>Rejoindre un lobby</title>
    </head>
    <body>
        <div>
            <label for="userPassword">Mot de passe :</label>
            <input id="userPassword" type="password" required>
        </div>

        <form action="./index.php" method="POST">
            <div class="topnav5">

                <form id="fastrack" action="./index.php" method='GET'>
                    <input type="hidden" name="action" value="fastrack" />
                </form>

                <form id="afficher_lobby" action="./index.php" method='GET'>
                    <input type="hidden" name="action" value="afficher_lobby" />
                </form>
                <a href='#' onclick='document.getElementById("afficher_lobby").submit()'>afficher le lobby</a>
            </div>
        </form>
    </body>
</html>