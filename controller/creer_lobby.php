<?php

if (empty($_SESSION['id_user'])){
    header('Location: index.php');
    exit();
}

require('model\creer_lobby.php');

$page_css = "\"./public/style_creer_lobby.css\"";
$title = "Accueil";

ob_start();
//ici
$content = ob_get_clean();
require('.\view\creer_lobby.php');
?>
<?php

function Genere_mdp($taille)
{
    // Initialisation des caractères utilisables dans un tableau
    $characters = array("a", "b", "c", "d", "e", "f", "g", "h", "i", "j", "k", "l", "m", "n", "o", "p", "q", "r", "s", "t", "u", "v", "w", "x", "y", "z");

    for($i=1;$i<$taille;$i++)
    {
        $taille .= strtoupper($characters[array_rand($characters)]);
    }
		
    return $taille;
}

$mdp = Genere_mdp(6);

echo $mdp;

?>