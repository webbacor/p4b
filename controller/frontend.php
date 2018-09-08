<?php

require_once('model/ChapterManager.php');
require_once('model/CommentManager.php');
require_once('model/AdminManager.php');

function index()
{
  $chapterManager = new ChapterManager();
  $lastChapters = $chapterManager->getLastChapters(3);
  $adminManager = new AdminManager();
  $login = $adminManager->getLogin();
  $passHash = $adminManager->getPassHash();
  if (isset($_POST['login']) AND $_POST['login'] === $login AND isset($_POST['pwd']) AND password_verify($_POST['pwd'], $passHash)) {
    $_SESSION['login'] = $_POST['login'];
    $_SESSION['pwd'] = $_POST['pwd'];
    header('Location: index.php');
  } else {
    require('view/frontend/indexView.php');
  }
}

function listChapters()
{
  $chapterManager = new ChapterManager();
  $chapters = $chapterManager->getChapters(0,1);
  $chaptersToLoad =$chapterManager->getNbChaptersToLoad();
  $countChapters = $chapterManager->getCountChapters();
  unset($_SESSION['addComment']);
  unset($_SESSION['report']);
  require('view/frontend/listChaptersView.php');
}

function chapter($id)
{
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

function contact()
{
  unset($_SESSION['addComment']);
  unset($_SESSION['report']);
  require('view/frontend/contactView.php');
}
