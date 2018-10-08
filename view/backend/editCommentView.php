
<?php $title = 'Éditer un commentaire'; ?>
<?php ob_start(); ?>

<div id="editChapter">
	  <h2 style="text-align:center;">Édition d'un commentaire</h2><br />

	  <form action="index.php?action=rewriteComment&amp;id=<?= $_GET['id'] ?>" method="post" enctype="multipart/form-data"><br /><br />
	    <textarea id="tiny_mce" name="message" style="width:100%; height:100px;" ><?= $comment['message']; ?></textarea><br /><br />
	    
		<?php
			$varTexteArea= ($comment);
		?>

	    <br /><br />
	    <input type="submit" class="btn btn-default" value="Enregistrer le commentaire">
	  </form>
</div>

<?php
$content = ob_get_clean();
require('templateAdmin.php');
?>
