<?php
require('includes/co.inc.php');
include('includes/header.inc.php');
//include ('includes/footer.inc.php');	
if ( $_GET['id'] )
	{
	
	$id = ($_GET['id']);
	
		// MODIFICATIONS
		$SQL = "SELECT * from articles WHERE articles.id=$id";
		//print_r($SQL);
		$requete = mysql_query($SQL);
		$data = mysql_fetch_array($requete);
		extract($data);
			
	}
	
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html>
<body>
				<form action="mod_traitement.php" method="POST"enctype="multipart/form-data">
				<div class="clearfix">
				<label for="titre">Titre</label>
				<div class="impact"><input type="text" name="titre" id="titre" value="<?= $data['titre'] ?>" /></div>
			</div>
			
			<div class="clearfix">
				<label for="text">Texte</label>
				<div class="impact"><textarea name="corps" id="corps"><?= $data['corps'] ?></textarea></div>
			</div>
			
			<div class="clearfix">
				<label for="checkbox">Publication</label>
				<div class="impact"><input type="checkbox" name="statut" id="statut" <?php if ($data['statut'] == 1) { ?> checked <?php } ?>></div>
			</div>
			
			<label for="text"> Fichier :</label><br />
			<input type="file" id="datafile" name="datafile" size="40">
								
				<input type="hidden" name="id" id="id" value="<?= $id ?>" >
				<br>

			<div class="form-action">
				<input type="submit" name="Modifier" value="Modifier"/>
			</div>
			</form>	

</body>
</html> 
  

