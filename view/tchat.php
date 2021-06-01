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

    <div class="container">
        <h1>T-Chat Global</h1>

        <!-- affiche les messages en tant réel -->

        <div id='base-container'>
            <section id="messages"></section>


            <script>
                //Function qui va scroll vers le bas automatiquement sur les messages récent.
                //Si l'utilisateur utilise la scroll bar la function est annulé pour qu'il puisse lire les vieux messages



                //fuction qui vas afficher les messages toutes les 100ms

                setInterval('load_messages()', 100);

                var scrolled = false;

                function load_messages() {
                    $('#messages').load('./model/tchat_affichage.php')

                    if (!scrolled) {
                        document.getElementById('base-container').scrollTop = document.getElementById('base-container').scrollHeight;
                        scrolled = false;
                    }
                }
                $("#base-container").on('scroll', function () {
                    scrolled = true;
                });

            </script>
            

        </div>


        <div class="message_box">
            <form action="./index.php" method="GET">

                <textarea placeholder="Ecrivez un Message..." rows="5" name="message" id="message"></textarea>

                <input type="submit" id="submit" value="Envoyer" name='action'>

            </form>
        </div>
    </div>

</body>

</html>