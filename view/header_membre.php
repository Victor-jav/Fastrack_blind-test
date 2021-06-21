<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href=./public/style_header_membre.css rel="stylesheet">
    <title><?= $title ?></title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.0-2/css/all.min.css" integrity="sha256-46r060N2LrChLLb5zowXQ72/iKKNiw/lAmygmHExk/o=" crossorigin="anonymous" />
</head>
<body>
        <nav>
            <div class="logo"><img src="./public/fastrack_logo_petit.png" height="62px"/></div>
            <div class="logo_title"><h1>FASTRACK</h1></div>
            <div class="openMenu"><i class="fa fa-bars"></i></div>
            <ul class="mainMenu">
                <li class="info"><a href="?action=accueil">Home</a></li>
                <li class="info"><a href="?action=info">Mon Compte</a></li>
                <li class="info"><a href="?action=message">Messages</a></li>
                <li class="sign_out"><a href="?action=sign_out">Se Déconnecter</a></li>
                <div class="closeMenu"><i class="fa fa-times"></i></div>
            </ul>
        </nav>


    <script src="./js/app.js"></script>
</body>