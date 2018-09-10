<?php

$title= "Administration des commentaires"; ?>
<?php ob_start(); ?>
<h2 style="text-align:center;">Administration des commentaires</h2>
<br />
<div id="commentAdmin">
  <?php
    $i = 0;
    foreach ($comments as $comment) {
      $i++;
      $dateFormat = new DateTime($comment['date_comment']);
      $dateFr = $dateFormat->format('d/m/Y à H:i:s');
      if ($comment['reports'] > 0) {
        echo '<div style="background-color:#c9302c;" class="comments">';
      } else {
        echo '<div class="comments">';
      }
      echo 'Écrit par <strong>' . htmlspecialchars($comment['name']) . '</strong> le ' . $dateFr;
      echo '<div class="btn-comments">';
      echo '<button data-toggle="modal" data-target="#myModal' . $i . '" name="deleteComment" value=' . $comment['id'] . ' class="btn btn-default">Supprimer</button>';
      echo '<div class="modal fade" id="myModal' . $i .'" role="dialog">
              <div class="modal-dialog">
                <!-- Modal content-->
                <div class="modal-content">
                  <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title">Supprimer un commentaire</h4>
                  </div>
                  <div style="text-align:center;" class="modal-body">
                    <form action="index.php?action=deleteComment" method="post">
                      <div class="alert alert-danger">
                        <strong>Attention !</strong> Vous êtes sur le point de supprimer le commentaire. Cliquez sur le bouton pour supprimer <strong>DÉFINITIVEMENT</strong> le commentaire. (action irréversible)
                      </div>
                      <button name="deleteComment" value=' . $comment['id'] . ' style="text-align:center;" class="btn btn-lg btn-danger">Supprimer</button>
                    </form>
                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Fermer</button>
                  </div>
                </div>
              </div>
            </div>';

      echo '<form action="edit-comment" method="post">
      <button name="editComment" value=' . $comment['id'] . ' style="margin-right:10px;" class="btn btn-default">Editer</button>
      </form>';
      echo '</div>';
      echo "<br />";
      echo htmlspecialchars($comment['message']);
      echo '</div>';
    }
    if ($i === 0) {
      echo '<br />';
      echo '<h3 style="text-align:center">Aucun commentaire</h3>';
    }
  ?>
</div>
<?php $content = ob_get_clean(); ?>
<?php require('templateAdmin.php'); ?>
