<?php
echo "Debug : modele/lire_musique.php | Lecture du fichier : OK";
try
{
    $bdd = new PDO('mysql:host=localhost;dbname=fastrack;charset=utf8', 'root', '');
}
catch(Exception $e)
{
    die('Erreur : ' . $e->getMessage());
}

$link = $bdd;
$sql = "SELECT musique FROM musique;";
$rs = fbsql_query($sql, $link);
$row_data = fbsql_fetch_row($rs);
fbsql_free_result($rs);
$connection = $bdd;
$rs = fbsql_query($sql, $link);
fbsql_set_lob_mode($rs, FBSQL_LOB_HANDLE);
$row_data = fbsql_fetch_row($rs);
$blob_data = fbsql_read_blob($row_data[0]);
fbsql_free_result($rs);

?>