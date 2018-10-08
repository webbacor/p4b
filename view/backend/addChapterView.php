

<?php $title = 'Créer un chapitre'; ?>
<?php ob_start(); ?>
          
<div id="createChapter">
	  <h2 style="text-align:center;">Création d'un chapitre</h2>
	 <form  action="index.php?action=addChapter" method="post" name="formulaire" id="formulaire"enctype="multipart/form-data">
	    <input type="text" class="form-control" name="title" placeholder="Titre du chapitre" required />
	    <br /><br />
	    <textarea id="tiny_mce"  name="content" rows="50"></textarea><br /><br /> 
	    <br /><br />
	    <input type="submit" class="btn btn-default" value="Créer le chapitre">
	    <a href="index.php?action=indexAdmin"><button type="button" class="btn btn-default">Annuler</button></a>
	 </form>

<?php
	$content = ob_get_clean();
	require('templateAdmin.php');
?>

