<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href=<?= $page_css ?> rel="stylesheet">
    <title><?= $title ?></title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
</head>
<header>
    <table>
        <tr>
            <form action="./index.php" method="POST">
                <div class="topnav">

                    <p style="float:left"><img src="./public/fastrack_logo_petit.png" height="80px" /></p>
                    <p>FASTRACK</p>

                    <!-- j'ai trouvé cette strat sur un forum c'est vraiment trop bien, en gros c'est le bouton
                c'est un href qui appelle un input invisible donc comme un input submit-->
                    <form id="fastrack" action="./index.php" method='GET'>
                        <input type="hidden" name="action" value="fastrack" />
                    </form>

                    <form id="sign_out" action="./index.php" method='GET'>
                        <input type="hidden" name="action" value="sign_out" />
                    </form>
                    <a href='#' onclick='document.getElementById("sign_out").submit()'>Sign Out</a>

                    <form id="info" action="./index.php" method='GET'>
                        <input type="hidden" name="action" value="info" />
                    </form>
                    <a href='#' class="active"><?php echo 'Compte : ' . $_SESSION['identifiant']; ?></a>
                </div>
            </form>
        </tr>
        <tr>
            <?= $content ?>
        </tr>
    </table>
</header>

<body>

    <p>FASTRACK GAME</p>

    <form action="./index.php" method="POST">
        <div class="topnav2">

            <form id="fastrack" action="./index.php" method='GET'>
                <input type="hidden" name="action" value="fastrack" />
            </form>

            <form id="create_lobby" action="./index.php" method='GET'>
                <input type="hidden" name="action" value="create_lobby" />
            </form>
            <a href='#' onclick='document.getElementById("create_lobby").submit()'>Créer une Partie</a>
        </div>
    </form>

    <br><br>

    <form action="./index.php" method="POST">
        <div class="topnav3">

            <form id="fastrack" action="./index.php" method='GET'>
                <input type="hidden" name="action" value="fastrack" />
            </form>

            <form id="join_lobby" action="./index.php" method='GET'>
                <input type="hidden" name="action" value="join_lobby" />
            </form>
            <a href='#' onclick='document.getElementById("join_lobby").submit()'>Rejoindre une Partie</a>
        </div>
    </form>


        <form action="./index.php" method="GET">
            <p>
                <label for="message">Message</label> : <input type="text" name="message" id="message" />

                <input type="submit" id="submit" value="Envoyer" name ='action'>
            </p>
        </form>

        <!-- affiche les messages en tant réel -->

        <section id="messages"></section>

        <script>
            setInterval('load_messages()', 500);
            function load_messages() {
                $('#messages').load('./model/tchat_affichage.php')
            }
        </script>

</body>

</html>