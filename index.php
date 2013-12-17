<?php

require('includes/co.inc.php');

?>

<?php
	include('includes/header.inc.php');

?>


        
          <div class="span8">
          	<!-- notifications -->
          	
          	<!-- contenu -->
          <?php
		  
           $sql="SELECT * FROM articles WHERE articles.statut =1 ORDER BY DATE DESC LIMIT 2";
		   $exe = mysql_query($sql);
		   while ( $ligne = mysql_fetch_array($exe) ){
		   echo "<h2>$ligne[titre]</h2> ";
		   echo "$ligne[corps] ";
		   echo "<p><em>Publie le: $ligne[date]</em><li><a href=\"mod.php?id=$ligne[id]\">Modifier article</a></li> </p>";
		   echo "<img src=\"img/$ligne[id].jpg\" alt=\"image\"/>";
		   
		   }
		   
			
		?>
          
<?php

include ('includes/footer.inc.php');

?>         
