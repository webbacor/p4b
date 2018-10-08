<?php $_SESSION['idChapter'] = $_POST['editChapter']; ?>
<?php $title = 'Éditer un chapitre'; ?>
<?php ob_start(); ?>

<div id="editChapter">
  <h2 style="text-align:center;">Édition d'un chapitre</h2><br />
    <form  action="index.php?action=rewriteChapter" method="post" name="formulaire" id="formulaire"enctype="multipart/form-data">
    	<input type="text" class="form-control" name="title" value="<?= $chapter['title']; ?>" required /><br /><br />
    	<textarea id="tiny_mce"  name="content" rows="50"><?= $chapter['content']; ?></textarea><br /><br />
    	<input type="submit" class="btn btn-default" value="Enregistrer le chapitre">
    	<a href="index.php?action=indexAdmin"><button type="button" class="btn btn-default">Annuler</button></a>
  	</form>
</div>

<?php
$content = ob_get_clean();
require('templateAdmin.php');
?>
