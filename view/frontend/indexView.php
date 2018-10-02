<?php $title = 'Jean Forteroche - Alaska'; ?>
<?php ob_start(); ?>
<!-- pour faire un header(); en plein milieu de ta page qui contient du html-->

<div id="Forteroche">
<div id="avatar-Forteroche"></div>
  <div id="presentation">
  <p id="description"><span>Mon Roman en ligne</span><br/><br/>

             Bienvenue sur le site de mon roman en ligne,c'est un nouveau concept que je mets en pratique, je posterai à intervales réguliers les épisodes de mon nouveau roman intitulé "Billet simple pour l'Alaska".<br/><br/>

             J'espère que ce concept et son contenu vous plaîront, n'hésitez pas à me laisser vos avis et réactions en commentaires.
             <br/><br/>Bonne lecture et merci de l'interêt porté à mon roman.<br/></p>
            <br/>
  </div>

</div>

<h2 id="lastChapters">Derniers chapitres</h2>

<div id="lastPosts">
    <?php
      foreach ($lastChapters as $chapter) {
        $dateFormat = new DateTime($chapter['date_chapter']);
        $dateFr = $dateFormat->format('d/m/Y ');
        echo '<div class="postHome">';
        echo "<h3>" . $chapter['title'] . "</h3>";
        echo '<p>  le '. $dateFr . '</p>';
        echo "<p>" . substr($chapter['content'],0,255) . "...</p>";
        echo '<a href="index.php?action=chapter'.'&id=' . $chapter['id'] . '"<button type="button" class="btn buttonNext">Lire la suite</button></a>';
        echo '</div>';
      }
    ?>

</div>

<?php $content = ob_get_clean(); ?>
<?php require('template.php'); ?>
