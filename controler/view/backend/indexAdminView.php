<?php $title = "Bienvenue Jean Forteroche"; ?>

<?php ob_start(); ?>


<div id="admin_container">

  <h2>Chapitres</h2>
  <div id="chapter_admin_container">

    <div class="chapter_admin">
      <a href="index.php?action=createChapter"><button type="button" name="createChapter" class="btn btn-lg btn-default">Création</button></a>
      <br />

  </div>


 <div class="chapter_admin">

        <form action="index.php?action=editChapter" method="post">
        <input type="submit" class="btn btn-lg btn-default" value="Édition">
        <br/><br />

        <select class="form-control" name="editChapter">
          <?php
            foreach ($chapters as $chapter) {
              echo '<option value="' . $chapter['id'] . '">' . $chapter['title'] . '</option>';
            }
           ?>
        </select>

      </form>
    </div>



  <div class="chapter_admin">
    <form action="index.php?action=deleteChapter" method="post">



        <button type="button" class="btn btn-lg btn-default" data-toggle="modal" data-target="#myModal">Supprimer</button>
        <br/><br />
        <select class="form-control" name="deleteChapter">
          <?php
            foreach ($chapters2 as $chapter) {
              echo '<option value="' . $chapter['id'] . '">' . $chapter['title'] . '</option>';
            }
           ?>
        </select>
        <br />




        <div id="myModal" class="modal fade" role="dialog">
        <div class="modal-dialog">

          <!-- Modal content-->
          <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal">&times;</button>
              <h4 class="modal-title">Suppression du chapitre</h4>
            </div>
            <div class="modal-body">
              <div class="alert alert-danger">
                <strong>Attention !</strong> Vous êtes sur le point de supprimer le chapitre selectionné. Cliquez sur le bouton pour supprimer <strong>DÉFINITIVEMENT</strong> le chapitre. (action irréversible)
              </div>
              <input type="submit" class="btn btn-lg btn-danger" value="Supprimer" action=''>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-default" data-dismiss="modal">Annuler</button>
            </div>
          </div><!--Fin modal-->

        </div>
      </div>
      </form>

    </div>
  </div>
  <br /><br />
  <h2>Commentaires</h2>
  <div class="comment_admin" style="margin-bottom: 100px;">
    <h4><strong>Administration des commentaires</strong></h4>
    <br/ >
     <form action="index.php?action=commentAdmin" method="post">
      <select class="form-control" name="commentAdmin">
        <?php
          foreach ($chapters3 as $chapter) {
            echo '<option value="' . $chapter['id'] . '">' . $chapter['title'] . '</option>';
          }
         ?>
      </select>
      <br />
      <input type="submit" class="btn btn-lg btn-default" value="Afficher">
    </form>
  </div>
</div>

<?php $content = ob_get_clean(); ?>
<?php require('templateAdmin.php'); ?>
