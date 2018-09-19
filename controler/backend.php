<?php

require_once('model/AdminManager.php');
require_once('model/ChapterManager.php');
require_once('model/CommentManager.php');

class backend { 
      //*********************************
      //gestion affichage administrateur
      //*********************************
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
      function addChapter($title, $content){
        $chapterManager = new ChapterManager();
        $chapters = $chapterManager->createChapter($title, $content);
        header('Location: index.php');
      }

      function createChapter(){
        require('view/backend/addChapterView.php');
      }

      function deleteChapter($id){
        $chapterManager = new ChapterManager();
        $chapterManager->deleteChapter($id);
        header('Location: index.php');
      }

      function rewriteChapter($id){
        $chapterManager = new ChapterManager();
        $chapter = $chapterManager->getChapter($id);
        require('view/backend/editChapterView.php');
      }

      function editChapter($id, $title, $content){
        $chapterManager = new ChapterManager();
        $chapterManager->editChapter($id, $title, $content);
        header('Location: index.php');
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
        header('Location: comment-admin');
      }

      function getComment($idComment)
      {
        $commentManager = new CommentManager();
        $comment = $commentManager->getComment($idComment);
        require('view/backend/editCommentView.php');
      }

      function editComment($idComment, $message)
      {
        $commentManager = new CommentManager();
        $commentManager->editComment($idComment, $message);
        header('Location: comment-admin');
      }
}