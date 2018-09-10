<?php $title = 'Créer un chapitre'; ?>
<?php ob_start(); ?>

<div id="createChapter">
  <h2 style="text-align:center;">Création d'un chapitre</h2>
 
  
 <form name="formulaire" id="formulaire" action="" method="post" enctype="multipart/form-data">
    <input type="text" class="form-control" name="title" placeholder="Titre du chapitre" required />

    <br /><br />
    <textarea class="tinymce" id="texte" name="content" rows="50"></textarea>
     <!--<textarea id="texte" name="texte" rows="25" ></textarea>-->
    <br /><br />
    <!--<label for="img">Image du chapitre : </label> <input type="file" class="btn btn-default" name="img_chapter" required />-->
    <br /><br />
    <input type="submit" class="btn btn-default" value="Créer le chapitre">
  </form>



<form name="formulaire" id="formulaire" action="index.html" method="post">
    <label for="texte" ><b>Texte : </b></label>
    <textarea id="texte" name="texte" rows="25" ></textarea>
    <br />
    <label for="texte2" ><b>Texte 2 : </b></label>
    <textarea id="texte2" name="texte2" rows="25" ></textarea>
    <br /><br />
  </form>



</div>-->
<?php
$content = ob_get_clean();
require('templateAdmin.php');
?>
