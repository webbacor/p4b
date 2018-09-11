<?php $_SESSION['idChapter'] = $_POST['editChapter']; ?>
<?php $title = 'Éditer un chapitre'; ?>
<?php ob_start(); ?>

<div id="editChapter">
  <h2 style="text-align:center;">Édition d'un chapitre</h2>
  <br />

  <form action="index.php?action=editChapter" method="post" enctype="multipart/form-data">
    <input type="text" class="form-control" name="title" value="<?= $chapter['title']; ?>" required />
    <br /><br />
    <!--<textarea class="tinymce" name="content" rows="50"><?= $chapter['content']; ?></textarea>-->
      <textarea class="tinymce" id="texte" name="content" rows="50"><?= $chapter['content']; ?></textarea>-->
    <br /><br />
    <!--<label for="img">Image du chapitre : </label> <input type="file" class="btn btn-default" name="img_chapter"/>-->
    <br /><br />
    <input type="submit" class="btn btn-default" value="Éditer le chapitre">
  </form>
</div>

<?php
$content = ob_get_clean();
require('templateAdmin.php');
?>
