<?php
////////////////////inclue le fichier de connexion///////////////////
require('includes/co.inc.php');
include('includes/header.inc.php');
echo '<div class="span8">';

////////////////////fin del'inclusion////////////////////////////////

////////////////////test des variable de l'inscription///////////////
if(isset($_POST["email"]) &&
	isset($_POST["mdp"]) 
	)
{
////////////////////Declaration de variable pour la requette sql//////
	$email=$_POST["email"];
	$mdp=$_POST["mdp"];
////////////////////Fin de declaration/////////////////////////////////	

////////////////////Requette SQL selection dans la base////////////////
	$erreurco="Votre Login ou votre mot de passe est incorrect";
	$co_bonne="Vous etes authentifié";
	$sql="SELECT mail , mdp FROM utilisateur WHERE mail = '$email' and mdp = '$mdp'";
	$execute = mysql_query($sql);
	//print_r ($sql);
	
	if ($exe = mysql_fetch_array($execute))
	{
	$sid=sha1($execute['email'].time());
	$update = "UPDATE utilisateur SET sid ='$sid' WHERE mail = '$email';";
    mysql_query($update);
	//print_r ($update);
	echo $co_bonne;
	setcookie('sid',$sid,time()+60*60);
	header('Refresh: 3; url=index.php');
	
	
	
	}
	
	else 
	{
		echo ($erreurco);
		header('Refresh: 3; url=co.php');
	}
	}
include ('includes/footer.inc.php');
//////////////////Fin de requette SQL////////////////////////////////

/////////////////////Fin du test//////////////////////////////////////
?>