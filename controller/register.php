<?php

if(!empty($_GET['password']) AND !empty($_GET['username'])){
    require('model\register.php');
    bdd("INSERT INTO `user` (`id_user`, `nom`, `mdp`, `mail`) VALUES (NULL, '".$_GET['username']."', '".sha1($_GET['password'])."', '".$_GET['email']."'");
    setcookie('account_created', True, time()+20);
    header('Location: index.php');
    exit();
}
else{
    require('model\register.php');
    $page_css = "\"./public/style_login.css\"";
    $title = "register";
    ob_start();
    $content = ob_get_clean();
    require('view\register.php');
}

?>