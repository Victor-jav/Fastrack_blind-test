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
				case  'INSCRIPTION':
					include("./controller/register.php");
					break;
				case  'accueil':
					include("./controller/accueil.php");
					break;
				case  'tchat':
					include("./controller/tchat.php");
					break;
				case  'Envoyer':
					include("./controller/tchat.php");
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