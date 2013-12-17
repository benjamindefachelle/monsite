<?php

	$serveur="127.0.0.1";
	$bdd="site";
	$mdp="";
	$user="root";
	$co= mysql_connect($serveur,$user,$mdp) or die ("erreur".mysql_error());
	$data=mysql_select_db($bdd);

?>