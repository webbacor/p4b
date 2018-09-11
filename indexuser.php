<?php
session_start();
ini_set("SMTP","ssl:smtp.gmail.com");
ini_set("smtp_port","465");
ini_set('sendmail_from', 'web.bacor@gmail.com');  
// Préparation du mail contenant le lien d'activation

require_once('controler/frontend.php');
require_once('controler/backend.php');

try {
  if (isset($_SESSION['login']) AND isset($_SESSION['pwd'])) {
    if (isset($_GET['action'])) {
        if ($_GET['action'] == 'createChapter') {
          // if (isset($_POST['title']) AND isset($_POST['content']) AND isset($_FILES['img_chapter'])) {
          //  addChapter($_POST['title'], $_POST['content'], $_FILES['img_chapter']);
          if (isset($_POST['title']) AND isset($_POST['content'])){
            addChapter($_POST['title'], $_POST['content']);
          } else {
            createChapter();
          }
        } elseif ($_GET['action'] == 'deleteChapter') {
          if (isset($_POST['deleteChapter'])) {
            deleteChapter($_POST['deleteChapter']);
          }
        } elseif ($_GET['action'] == 'editChapter') {
          if (isset($_POST['title']) AND isset($_POST['content'])) {
            //editChapter($_SESSION['idChapter'], $_POST['title'], $_POST['content'], $_FILES['img_chapter']);
            editChapter($_SESSION['idChapter'], $_POST['title'], $_POST['content']);
          } else {
            rewriteChapter($_POST['editChapter']);
          }
        } elseif ($_GET['action'] == 'logout') {
          logout();
        } elseif ($_GET['action'] == 'commentAdmin') {
          if (isset($_POST['commentAdmin'])) {
            commentAdmin($_POST['commentAdmin']);
          } else {
            commentAdmin($_SESSION['idChapterforComment']);
          }
        } elseif ($_GET['action'] == 'deleteComment') {
          removeComment($_POST['deleteComment']);
        } elseif ($_GET['action'] == 'editComment') {
          if (isset($_POST['message'])) {
            editComment($_SESSION['idComment'], $_POST['message']);
          } else {
            getComment($_POST['editComment']);
          }
        }
        } else {
          indexAdmin();
        }
    } elseif (isset($_GET['action'])) {
      if ($_GET['action'] == 'chapters') {
        if (isset($_GET['id'])) {
          chapter($_GET['id']);
        } else {
          listChapters();
        }
      } elseif ($_GET['action'] == 'contact') {
        contact();
      }
    } else {
      index();
    }



} catch (Exception $e) {
  echo 'Exception reçue : ' . $e->getMessage() . '';
}
