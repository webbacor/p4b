<?php

require_once('model/ChapterManager.php');
require_once('model/CommentManager.php');
require_once('model/AdminManager.php');

//**********************
//gestion affichage 
//**********************
 function index(){
  $chapterManager = new ChapterManager();
  $lastChapters = $chapterManager->getLastChapters(3);
  $adminManager = new AdminManager();
  $login = $adminManager->getLogin();
  $passHash = $adminManager->getPassHash();
  if (isset($_POST['login']) AND $_POST['login'] === $login AND isset($_POST['pwd']) AND password_verify($_POST['pwd'], $passHash)) {
    $_SESSION['login_admin'] = $_POST['login'];
    $_SESSION['password_admin'] = $_POST['pwd'];
    header('Location: index.php');
  } else {
    require('view/frontend/indexView.php');
  }
}

//*******************************
//gestion chapitre et commentaires
//********************************
function listChapters(){
  $chapterManager = new ChapterManager();
  $chapters = $chapterManager->getChapters(0,1);
  $chaptersToLoad =$chapterManager->getNbChaptersToLoad();
  $countChapters = $chapterManager->getCountChapters();
  unset($_SESSION['addComment']);
  unset($_SESSION['report']);
  require('view/frontend/listChaptersView.php');
}

function chapter($id){
  $chapterManager = new ChapterManager();
  $chapter = $chapterManager->getChapter($id);
  $commentManager = new CommentManager();
  $comments = $commentManager->getComments($id);
  $count = $commentManager->getCountComments($id);
  if (isset($_POST['name']) AND isset($_POST['message'])) {
    if (substr($_POST['name'],0,1) !== ' ' AND substr($_POST['message'],0,1) !== ' ' AND substr(nl2br($_POST['message']),0,6) !== '<br />') {
      $commentManager->addComment($id, $_POST['name'], $_POST['message']);
    }
  } elseif (isset($_POST['report'])) {
    $report = $commentManager->getReport($_POST['report']);
    $nbReport = $report[0];
    $nbReport++;
    $commentManager->addReport($_POST['report'], $nbReport);
  }
  require('view/frontend/chapterView.php');
}


//**********************
//gestion contact
//**********************
function contact()
{
  unset($_SESSION['addComment']);//met à "blanc" donc à null le tableau $_SESSION en cours. 
  unset($_SESSION['report']);///met à "blanc" donc à null le tableau $_SESSION en cours. 
  require('view/frontend/contactView.php');
}
