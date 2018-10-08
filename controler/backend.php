<?php

require_once('model/AdminManager.php');
require_once('model/ChapterManager.php');
require_once('model/CommentManager.php');


class backend {
/*********************************
//gestion affichage administrateur
//*********************************/

    function indexAdmin(){
      $chapterManager = new ChapterManager();
      $chapters = $chapterManager->getChapters();
      $chapters2 = $chapterManager->getChapters();
      $chapters3 = $chapterManager->getChapters();
      require('view/backend/indexAdminView.php');
    }

    function logout(){
      session_unset();//met à "blanc" donc à null le tableau $_SESSION en cours.
      header('Location: index.php');
    }

    //******************
    //Gestion chapitres
    //******************
   
    function createChapter(){
    require('view/backend/addChapterView.php');
    }
 
    function addChapter(){
      $chapterManager = new ChapterManager();
      $chapters = $chapterManager->createChapter($_POST['content'], $_POST['title']);
      header('Location: index.php?action=indexAdmin');
    }

    function editChapter(){
      $id= $_POST['editChapter'];
      $chapterManager = new ChapterManager();
      $chapter = $chapterManager->getChapter($id);
      require('view/backend/editChapterView.php');
    }

     function rewriteChapter(){
     $id = $_SESSION['idChapter'];
     $chapterManager = new ChapterManager();
     $chapterManager->editChapter($id, $_POST['content'], $_POST['title']);
     header('Location: index.php?action=indexAdmin');
     } 

     function deleteChapter(){
      $id = $_POST['deleteChapter'];
      $chapterManager = new ChapterManager();
      $chapterManager->deleteChapter($id);
      header('Location: index.php?action=indexAdmin');
    }

    //*********************
    //Gestion commentaires
    //*********************

    function commentAdmin(){
      if (!empty ($_POST['commentAdmin'])){
        $idChapter = $_POST['commentAdmin'];
      }
         else {
          $idChapter = $_SESSION['idChapter'];
         }
      $commentManager = new CommentManager();
      $comments = $commentManager->getComments($idChapter);
      $_SESSION['idChapter'] = $idChapter;
      require('view/backend/commentAdminView.php');
    }
    
    function editComment(){
      $idComment = $_POST['editComment'];
      $commentManager = new CommentManager();
      $comment = $commentManager->getComment($idComment);
      require('view/backend/editCommentView.php');
    }

    function rewriteComment() {
      $commentManager = new CommentManager();
      $commentManager->editComment($_GET['id'],($_POST['message']));
      header('Location: index.php?action=commentAdmin');
    }

    function removeComment(){
      $idComment = $_POST['deleteComment'];
      $commentManager = new CommentManager();
      $commentManager->deleteComment($idComment);
      header('Location: index.php?action=commentAdmin');
    }

}
