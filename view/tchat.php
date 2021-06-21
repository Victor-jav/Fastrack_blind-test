<?php include 'header_membre.php'?>

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

<body>

    <div class="container">
        <div class = "tchat_title">
        <h1>T-Chat Global</h1>
        </div>

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
<br><br>
</html>

<?php require 'footer.php'?> 