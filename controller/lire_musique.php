<?php

function db_connect()
{
    try
    {
        $pdo = new PDO('mysql:host=localhost;dbname=mybdd','root','');
        $pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE,PDO::FETCH_ASSOC);
        //echo 'connextion réussie';
        return $pdo;
    }
    catch (PDOException $e)
    {
        echo "bug lors de la co ac la bdd";
    }
}

$son = fopen("")
if (!$son) {
    echo "<p>Impossible de lire la page.\n";
    exit;
  }
  while (!feof ($son)) {
      $line = fgets ($son, 1024);
      /* Cela ne fonctionne que si les balises Title sont correctement utilisées */
      if (preg_match ("@\<title\>(.*)\</title\>@i", $line, $out)) {
          $title = $out[1];
          break;
      }
  }
  fclose($son);