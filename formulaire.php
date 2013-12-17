<?php
require('includes/co.inc.php');
include('includes/header.inc.php');
//include ('includes/footer.inc.php');
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html>
<body>
						<form method="POST" action="traitement.php"enctype="multipart/form-data">
							<fieldset style="width:430px;">
								<legend><span style="text-decoration:underline;">Ajouter un article </span></legend>
				
								<label for="text">Titre :</label><br />
								<input type="text" name="titre"  /><br />
				
								<label for="text"> Texte :</label><br />
								<input type="text" name="texte"  /><br />
						
								<label for="checkbox"> Publication : </label>
								<input type="checkbox" name="option" value="1"> Oui<br>
								
								<br>
								
								<label for="text"> Fichier :</label><br />
								<input type="file" id="datafile" name="datafile" size="40">

							</fieldset>
							<center><input type="submit" value="Valider" name="poster"/>
					<input type="submit" value="Annuler" /></center></font>
					<br>
					</form>
</body>
</html> 
  

