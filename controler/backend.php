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
    //Gestion chapitre
    //******************
    function addChapter(){
      $chapterManager = new ChapterManager();
      $chapters = $chapterManager->createChapter($_POST['content'], $_POST['title']);
      header('Location: index.php?action=indexAdmin');
    }

    function createChapter($content,$title){
    require('view/backend/addChapterView.php');
    }

    function deleteChapter($id){
      $id = $_POST['deleteChapter'];
      $chapterManager = new ChapterManager();
      $chapterManager->deleteChapter($id);
      header('Location: index.php?action=indexAdmin');
    }
    
    function rewriteChapter(){
      $id= $_POST['editChapter'];
      $chapterManager = new ChapterManager();
      $chapter = $chapterManager->getChapter($id);
      require('view/backend/editChapterView.php');
    }

     function editChapter(){ 
     $id= $_POST['editChapter'];
     $chapterManager = new ChapterManager();
     $chapterManager->editChapter($_POST['content'], $_POST['title']);
     header('Location: index.php?action=indexAdmin');
     }

    //*********************
    //Gestion commentaires
    //*********************

    function commentAdmin($idChapter){
      $commentManager = new CommentManager();
      $comments = $commentManager->getComments($idChapter);
      $_SESSION['idChapterforComment'] = $idChapter;
      require('view/backend/commentAdminView.php');
    }

    function removeComment($idComment){
      $commentManager = new CommentManager();
      $commentManager->deleteComment($idComment);
      header('Location: commentAdmin.php');
    }

    function getComment($idComment)    {
      $commentManager = new CommentManager();
      $comment = $commentManager->getComment($idComment);
      require('view/backend/editCommentView.php');
    }

    function editComment($idComment, $message) {
      $commentManager = new CommentManager();
      $commentManager->editComment($idComment, $message);
      header('Location: commentAdmin.php');
    }

}
