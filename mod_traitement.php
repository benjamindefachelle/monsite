<?php
////////////////////inclue le fichier de connexion///////////////////
require('includes/co.inc.php');
////////////////////fin del'inclusion////////////////////////////////

////////////////////Declaration de variable pour la requette sql//////
$titre=$_POST["titre"];
$corps=$_POST["corps"];

////////////////////Fin de declaration/////////////////////////////////	

////////////////////Requette SQL insertion dans la base////////////////

$req="UPDATE articles SET titre ='".$_POST["titre"]."' ,corps = '".$_POST["corps"]."' WHERE articles.id =".$_POST["id"].";";
print_r($req);
mysql_query($req);
if (!empty($_POST['datafile'])){
			$serveur_image = $_FILES['datafile']['error'];
			
		}
		
		else{
			$serveur_image ="";
		}
		
		$id=mysql_insert_id();
		move_uploaded_file($_FILES['datafile']['tmp_name'], dirname(__FILE__) ."../img/$id.jpg");
header("location:index.php");
?>