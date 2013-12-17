<?php
require('includes/co.inc.php');
include('includes/header.inc.php');
echo '<div class="span8">';
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html>
<body>
						<form method="POST" action="co_traitement.php"enctype="multipart/form-data">
							<fieldset style="width:430px;">
								<legend><span style="text-decoration:underline;">Connexion </span></legend>
				
								<label for="text">Adresse Email :</label><br />
								<input type="text" name="email"  /><br />
				
								<label for="text"> Mot de passe :</label><br />
								<input type="password" name="mdp"  /><br />
							
							</fieldset>
							<center><input type="submit" value="Valider" name="poster"/>
					<input type="submit" value="Annuler" /></center></font>
					<br>
					</form>
<?php
include ('includes/footer.inc.php');
?>
</body>
</html> 
