<?php $_SESSION['idComment'] = $_POST['editComment']; ?>
<?php $title = 'Éditer un commentaire'; ?>
<?php ob_start(); ?>

<div id="editChapter">
	  <h2 style="text-align:center;">Édition d'un commentaire</h2>
	  <br />

	  <form action="index.php?action=editComment" method="post" enctype="multipart/form-data">
	    <br /><br />
	    <textarea name="message" style="width:100%; height:100px;" ><?= $comment['message']; ?></textarea>
	    <br /><br />

	   
				

				<?php
				$varTexteArea= str_replace('<br />', '<br/>', nl2br($comment));
				?>

	    <br /><br />
	    <input type="submit" class="btn btn-default" value="Éditer le commentaire">
	  </form>
</div>

<?php
$content = ob_get_clean();
require('templateAdmin.php');
?>
