<?php $title = 'Chapitres'; ?>
<?php ob_start(); ?>

<div id="container">
  <div>
    <?php
      $nbChaptersLoad = 0;
      foreach ($chapters as $chapter) {
        $dateFormat = new DateTime($chapter['date_chapter']);
        $dateFr = $dateFormat->format('d/m/Y');
        if ($nbChaptersLoad < $chaptersToLoad) {
          $nbChaptersLoad++;
          echo '<div class="chapters">';
        } else {
          echo '<div class="chapters chaptersHidden">';
        }
        echo '<h3>' . $chapter['title'] . '</h3>';
        echo '<p>Écrit le '. $dateFr . '</p>';
        echo "<p>" . substr($chapter['content'],0,255) . "...</p>";
        echo '<a href="chapter-' . $chapter['id'] . '"><button type="button" class="btn buttonNext">Lire la suite</button></a>';
        echo '</div>';
      }
    ?>
  </div>
   
</div>

    <?php
      if ($nbChaptersLoad < $countChapters) {
        echo '<div id="btnMoreChapters">';
        echo '<button type="button" id="more_chapters" class="btn">Voir plus de chapitres</button>';
        echo '</div>';
      }
    ?>


<?php $content = ob_get_clean(); ?>
<?php require('template.php'); ?>
