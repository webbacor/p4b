<?php $title = 'Chapitres'; ?>
<?php ob_start(); ?>

<div id="container">
  <div>
    <?php
      $nbChaptersLoad = 0;
      foreach ($chapters as $chapter) {
        $dateFormat = new DateTime($chapter['date_chapter']);
        $dateFr = $dateFormat->format('d/m/Y à H:i:s');
        if ($nbChaptersLoad < $chaptersToLoad) {
          $nbChaptersLoad++;
          echo '<div class="chapters">';
        } else {
          echo '<div class="chapters chaptersHidden">';
        }
        echo '<img src="public/images/' . $chapter['img_chapter'] . '" alt="" width="100%" height="300px">';
        echo '<h3>' . $chapter['title'] . '</h3>';
         echo '<p>Écrit par ' . $chapter['author'] .  '</p>';
       // echo '<p>Écrit par ' . $chapter['author'] . ' le '. $dateFr . '</p>';
        echo "<p>" . substr($chapter['content'],0,255) . "...</p>";
        echo '<a href="chapter-' . $chapter['id'] . '"><button type="button" class="btn buttonNext">Lire la suite</button></a>';
        echo '</div>';
      }

    ?>
  </div>
  <div id="widget">
    <!--BOUTON RECHERCHER <div id="search">
      <input type="text" class="form-control" placeholder="Rechercher ...">
      <button id="buttonSearch" type="button" class="btn">
        <i class="fa fa-search" aria-hidden="true"></i>
      </button>
    </div>-->
    
    
    <div id="about">
      <img src="public/images/livre2.png" alt="livre">
      <h3 style="font-weight:bold"></h3>
     
    </div>
    <!--SUIVEZ MOI <div id="follow">
      <h3 style="font-weight:bold">SUIVEZ MOI</h3>
      <a href="#footer"><i class="fa fa-facebook-square fa-3x" aria-hidden="true"></i></a>
      <a href="#footer"><i class="fa fa-twitter-square fa-3x" aria-hidden="true"></i></a>
    </div>-->
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
