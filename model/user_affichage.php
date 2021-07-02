<?php
// Connexion à la base de données
try
{
    $bdd = new PDO('mysql:host=localhost;dbname=fastrack;charset=utf8', 'root', '');
}
catch(Exception $e)
{
    die('Erreur : ' . $e->getMessage());
}

$getuser = $bdd->query('SELECT * FROM user');

while($user = $getuser->fetch()){
    ?>
    <div class ="contact">
        <a href="index.php?action=private_message&id=<?php echo $user['id_user'];?>">
            <button>
                <div class="name">
                    <?php echo $user['identifiant']; ?>
                </div>
            </button>
        </a>
    </div>
    <?php
}

?>