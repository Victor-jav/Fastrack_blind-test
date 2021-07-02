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
        <form action="./index.php" method="POST">
            <div class="topnav5">

                <form id="fastrack" action="./index.php" method='GET'>
                    <input type="hidden" name="action" value="fastrack" />
                </form>

                <form id="lire_musique" action="./index.php" method='GET'>
                    <input type="hidden" name="action" value="lire_musique" />
                </form>
                <a href='#' onclick='document.getElementById("lire_musique").submit()'>commencer à jouer</a>
            </div>
        </form>
        </body>
</html>