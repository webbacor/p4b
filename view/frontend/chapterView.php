<?php $title = $chapter['title']; ?>
<?php ob_start(); ?>

<!-- Affiche les chapitres -->
<div id="chapter_container">
  <h2><?= $chapter['title']; ?></h2>'
      <p id="p_italic"><i>Écrit le <?= $chapter['date_chapter_fr']; ?></i></p>
      <p> <?= $chapter['content']; ?></p>
</div>

<!--affiche les commentaires -->
<div id="comment_container">
  <h2>Commentaires (<?= $count ?>)</h2>
    <form action="index.php?action=addComment&amp;id=<?= $_GET['id']; ?>" method="post">
        <div class="form-group">
           <label for="name">Nom :</label>
           <input type="text" name="name" class="form-control" required>
        </div>
        <div class="form-group">
           <label for="message">Votre message :</label>
           <textarea style="resize:none" name="message" class="form-control" rows="5" required></textarea>
        </div>
           <button type="submit" class="btn btn-default">Envoyer</button>
    </form>  
 
  <?php while($data = $comments->fetch()):?>
  
  <div class="comments">
        <p><strong><?= $data['name']; ?></strong> a écrit : <i class="date-comment">Le <?= $data['date_comment_fr']; ?></i></p>
        <p><?= $data['message']; ?></p>
        <?php if($data['reports'] === "1"):?>
        <p class="warning">Commentaire signalé en cours de modération</p>
        <?php else:?>
        <a href="index.php?action=reportComment&amp;id=<?= $data['id'] ?>&amp;idchapter=<?= $data['id_chapters'] ?>" class="btn btn-danger">Signaler</a>
        <?php endif ?>
  </div>
    
  <?php endwhile;?>

</div>

<?php
  $content = ob_get_clean();
  require('template.php');
?>
