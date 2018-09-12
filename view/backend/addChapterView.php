<?php $title = 'Créer un chapitre'; ?>
<?php ob_start(); ?>

<div id="createChapter">
	  <h2 style="text-align:center;">Création d'un chapitre</h2>
	 <form  action="" method="post" name="formulaire" id="formulaire"enctype="multipart/form-data">
	    <input type="text" class="form-control" name="title" placeholder="Titre du chapitre" required />

	    <br /><br />
	    <textarea class="tinymce" id="texte" name="content" rows="50"></textarea>
	   
	    <br /><br />
	  
	    <br /><br />
	    <input type="submit" class="btn btn-default" value="Créer le chapitre">
	  </form>
</div>

<?php
$content = ob_get_clean();
require('templateAdmin.php');
?>
