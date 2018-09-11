<?php $title = $chapter['title']; ?>
<?php ob_start(); ?>

<?php

  $dateFormat = new DateTime($chapter['date_chapter']);
  $dateFr = $dateFormat->format('d/m/Y');
  echo '<div id="chapter_container">';
  echo '<h2>' . $chapter['title'] . '</h2>';
  echo '<p id="p_italic"><i>Écrit le '. $dateFr . '</i></p>'; 
  echo "<p>     " . nl2br($chapter['content']) . "</p>";
  echo '</div>';
?>

<div id="comment_container">
  <h2>Commentaires (<?= $count ?>)</h2>
  <form action="chapter-<?= $_GET['id']; ?>#comment_container" method="post">
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

  <?php
    echo '<br />';
    if (isset($_POST['name']) AND isset($_POST['message'])) {
      if (substr($_POST['name'],0,1) !== ' ' AND substr($_POST['message'],0,1) !== ' ' AND substr(nl2br($_POST['message']),0,6) !== '<br />') {
        $_SESSION['addComment'] = 1;
        header('Location: chapter-'. $_GET['id'] . '#comment_container');
      } else {
        echo '<div class="alert alert-danger alert-dismissable">
                <a href="index.php" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                <strong>Attention !</strong> Votre commentaire ou pseudo ne doit pas commencer par un espace ou un retour à la ligne.
              </div>';
      }
    }
    if (isset($_SESSION['addComment'])) {
      echo '<div class="alert alert-success alert-dismissable">
              <a href="index.php" class="close" data-dismiss="alert" aria-label="close">&times;</a>
              <strong>Merci !</strong> Votre commentaire a été ajouté.
            </div>';
    }
    if (isset($_POST['report'])) {
      $_SESSION['report'] = 1;
      header('Location: chapter-'. $_GET['id'] . '#comment_container');
    }
    if (isset($_SESSION['report'])) {
      echo '<div class="alert alert-success alert-dismissable">
              <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
              <strong>Merci !</strong> Le commentaire a été signalé.
            </div>';
    }

    foreach ($comments as $comment) {
      $dateFormat = new DateTime($comment['date_comment']);
      $dateFr = $dateFormat->format('d/m/Y ');
      echo '<div class="comments">';
      echo '<p><strong>' . htmlspecialchars($comment['name']) . '</strong> a écrit : <i class="date-comment">Le ' . $dateFr  . '</i></p>';
      echo '<br />';
      echo '<p>' . htmlspecialchars($comment['message']) . '</p>';
      echo '<form style="text-align:right" action="chapter-' . $_GET['id'] . '#comment_container" method="post">';
      echo '<button name="report" value=' . $comment['id'] . ' class="btn btn-danger">Signaler</button>';
      echo '</form>';
      echo '</div>';
    }
   ?>
</div>


<?php
  $content = ob_get_clean();
  require('template.php');
?>
