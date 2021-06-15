<?php
// Connexion à MySQL
$connection= mysqli_connect("localhost", "root", "", "fastrack");

if (!$connection){ // Contrôler la connexion
    $MessageConnexion = die ("connexion impossible");
}
else{
  $recherche = SELECT   
}