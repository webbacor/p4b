<?php

require_once('model/ChapterManager.php');
require_once('model/CommentManager.php');
require_once('model/AdminManager.php');

function indexAdmin()
{
  $chapterManager = new ChapterManager();
  $chapters = $chapterManager->getChapters();
  $chapters2 = $chapterManager->getChapters();
  $chapters3 = $chapterManager->getChapters();
  require('view/backend/indexAdminView.php');
}




/* Une session est une variable enregistrée sur l'ordinateur affichant la page (client), lors de la destruction d'un session tu supprimes seulement les données enregistrées du client.

- La base de données est stockée sur le serveur, tes pages PHP qui en ont besoin ouvrent une connexion à celle ci directement depuis le serveur mais celles ci n'ont pas besoin d'être fermé lorsque la session client est détruite.*/

function logout()
{
  session_unset();//met à "blanc" donc à null le tableau $_SESSION en cours. 
  header('Location: index.php');
}

function addChapter($title, $content)
{
  $chapterManager = new ChapterManager();
  //$chapters = $chapterManager->createChapter();
  $chapters = $chapterManager->createChapter($title, $content);
  header('Location: index.php');
}

function createChapter()
{
  
  require('view/backend/addChapterView.php');
}

function deleteChapter($id)
{
  $chapterManager = new ChapterManager();
  $chapterManager->deleteChapter($id);
  header('Location: index.php');
}

function rewriteChapter($id)
{
  $chapterManager = new ChapterManager();
  $chapter = $chapterManager->getChapter($id);
  require('view/backend/editChapterView.php');
}

function editChapter($id, $title, $content, $imgChapter)
{
  $chapterManager = new ChapterManager();
  $chapterManager->editChapter($id, $title, $content, $imgChapter);
  header('Location: index.php');
}

function commentAdmin($idChapter)
{
  $commentManager = new CommentManager();
  $comments = $commentManager->getComments($idChapter);
  $_SESSION['idChapterforComment'] = $idChapter;
  require('view/backend/commentAdminView.php');
}
function removeComment($idComment)
{
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
