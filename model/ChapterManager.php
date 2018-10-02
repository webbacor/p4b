<?php

//**************************************************
//Gestion des billets récuperation des données sur la BD
//*************************************************

require_once('Manager.php');

class ChapterManager extends Manager{

    //private $nbChaptersToLoad = 3;
    private $nbChaptersToLoad = 8;

    public function getNbChaptersToLoad()  {
      return $this->nbChaptersToLoad;
    }

    public function setNbChaptersToLoad($nbChapters)  {
      $this->nbChaptersToLoad = $nbChapters;
    }

    public function getLastChapters($nbChapters)  {
      $db = $this->dbConnect();
      $req = $db->query('SELECT * FROM chapters ORDER BY date_chapter DESC LIMIT ' . $nbChapters . '');
      if ($req === false) {
        throw new Exception("Problème dans la requete SQL pour la fonction getLastChapters()");
      } else {
        return $req;
      }
    }


    public function getChapters() {
      $db = $this->dbConnect();
      $req = $db->query('SELECT *, DATE_FORMAT(date_chapter, \'%d/%m/%Y à %Hh%i\') AS date_chapter_fr FROM chapters ORDER BY date_chapter DESC');
      if ($req === false) {
        throw new Exception("Problème dans la requete SQL pour la fonction getChapters()");
      } else {
        return $req;
      }
    }


    public function getChapter($id)
    {
        $db = $this->dbConnect();
        $req = $db->prepare('SELECT *, DATE_FORMAT(date_chapter, \'%d/%m/%Y à %Hh%i\') AS date_chapter_fr FROM chapters WHERE id = ?');
        if ($req === false) {
          throw new Exception("Problème dans la requete SQL pour la fonction getChapter()");
        } else {
        $req->execute(array($id));
        $chapter = $req->fetch();

        return $chapter;
      }
    }


    public function getCountChapters()  {
      $db = $this->dbConnect();
      $req = $db->query('SELECT COUNT(id) as nbChapters FROM chapters');
      if ($req === false) {
        throw new Exception("Problème dans la requete SQL pour la fonction getCountChapters()");
      } else {
        $data = $req->fetch();
        $count = $data['nbChapters'];
        return $count;
      }
    }


    public function createChapter($content, $title) {
          $db = $this->dbConnect();
          $chapter = $db->prepare('INSERT INTO `chapters`(`title`, `content`, `date_chapter`) VALUES (?,?,NOW())');
          $chapter->execute(array($title, $content));
          return $chapter;
      }


    public function deleteChapter($id) {
      $db = $this->dbConnect();
      $req = $db->exec('DELETE FROM chapters WHERE id=' . $id . '');
      
      }

      public function editChapter($title, $content) {
      $db = $this->dbConnect();
      $req = $db->prepare('UPDATE `chapters` SET (`title`, `content`) VALUES (?,?)');
      $req = execute(array($title, $content));
      return $req;
   
      /*if (isset($_POST['title']) AND isset($_POST['content'])) {
            editChapter($_SESSION['idChapter'], $_POST['title'], $_POST['content']);
          } else {
            rewriteChapter($_POST['editChapter']);
          }*/
      }

     
}