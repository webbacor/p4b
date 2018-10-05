<?php

require_once('model/ChapterManager.php');
require_once('model/CommentManager.php');
require_once('model/AdminManager.php');



class frontend {
      //**********************
      //gestion affichage
      //**********************

      public function index(){
      $chapterManager = new ChapterManager();
      $lastChapters = $chapterManager->getLastChapters(3);
      $adminManager = new AdminManager();
      $login = $adminManager->getLogin();
      $passHash = $adminManager->getPassHash();
      if (isset($_POST['login']) AND $_POST['login'] === $login AND isset($_POST['pwd']) AND sha1($_POST['pwd'], $passHash)) {
        $_SESSION['login_admin'] = $_POST['login'];
        $_SESSION['password_admin'] = $_POST['pwd'];
        header('Location: index.php?action=indexAdmin');
      } else {
        require('view/frontend/indexView.php');
      }
    }

    //*******************************
    //gestion chapitres
    //********************************
    public function listChapters(){
      $chapterManager = new ChapterManager();
      $chapters = $chapterManager->getChapters(0,1);
      $chaptersToLoad =$chapterManager->getNbChaptersToLoad();
      $countChapters = $chapterManager->getCountChapters();
      unset($_SESSION['addComment']);
      unset($_SESSION['report']);
      require('view/frontend/listChaptersView.php');
    }

    public function chapter()
    {
      if(isset($_GET['id']) && $_GET['id'] > 0 )
      {
        $chapterManager = new ChapterManager();
        $chapter = $chapterManager->getChapter($_GET['id']);
        $commentManager = new CommentManager();
        $comments = $commentManager->getComments($_GET['id']);
        $count = $commentManager->getCountComments($_GET['id']);
        require('view/frontend/chapterView.php');
      }else{
        throw new Exception(' aucun identifiant de billet envoyé');
      }
    }

    //*******************************
    //gestion commentaires
    //********************************

    public function addComment(){
  		if (isset($_GET['id']) && $_GET['id'] > 0){
  			if (!empty($_POST['name']) && !empty($_POST['message'])){
  					$commentManager = new CommentManager();
  					$affectedLines = $commentManager->commentChapter($_GET['id'], htmlspecialchars($_POST['name']), nl2br(htmlspecialchars($_POST['message'])));
						header('location: index.php?action=chapter&id=' . $_GET['id']. '#comment_container');
  	    }else{
        throw new Exception(' identifiant de chapitre manquant');
        }
      }
    }

    public function reportComment() {
      if (isset($_GET['id']) && $_GET['idchapter']){
        $commentManager = new CommentManager();
        $report = $commentManager->reportComment($_GET['id']);
        header('location: index.php?action=chapter&id=' . $_GET['idchapter']. '#comment_container');
      }else{
        throw new Exception(' identifiant de chapitre manquant');
      }
    }

    //**********************
    //gestion contact
    //**********************
    public function contact(){
      unset($_SESSION['addComment']);
      unset($_SESSION['report']);
      require('view/frontend/contactView.php');
    }

}
