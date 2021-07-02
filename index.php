<?php
session_start();

	try 
	{
		if (!isset($_GET['action']))
		{
			include('./controller/login.php');
		}
		else 
		{
			switch ($_GET["action"]) {

				case  'LOGIN':
					include("./controller/login.php");
					break;
				case  'REGISTER':
					include("./controller/register.php");
					break;
				case  'accueil':
					include("./controller/accueil.php");
					break;
				case  'info':
					include("./controller/info_profil.php");
					break;
				case  'private_message':
					include("./controller/message.php");
					break;
				case  'creer_lobby':
					include("./controller/creer_lobby.php");
					break;
				case  'rejoindre_lobby':
					include("./controller/rejoindre_lobby.php");
					break;
				case  'afficher_lobby':
					include("./controller/afficher_lobby.php");
				case 'play':
					include("./controller/lire_musique.php");
				case 'start':
					include("./controller/party.php");	
					break;
				case  'tchat':
					include("./controller/tchat.php");
					break;
				case  'submit_global':
					include("./controller/tchat.php");
					break;
				case  'submit_private':
					include("./controller/message.php");
					break;
				case 'sign_out':
					include("./controller/sign_out.php");
					break;
				default :
					include("./controller/login.php");
			}
		}
	}
	catch(Exception $e)
	{
		echo 'Erreur : '. $e->getMessage();
	}
?>