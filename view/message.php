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
    <section class="main_section">
        <div class="section_contact">

            <h1>Contact</h1>

                <div class="contact_scroll">
                <?php
                require('model\user_affichage.php');
                ?>
                </div>

                <?php
                if(isset($erreur))
                {
                    echo '<div class = "erreur">' . $erreur . '</div>';
                }
                ?>
                
        </div>

    </section>
    
</body>

<?php require 'footer.php'?> 