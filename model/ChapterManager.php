<?php

//**************************************************
//Gestion des billets récuperation des données sur la BD
//*************************************************

require_once('Manager.php');

class ChapterManager extends Manager{

    private $nbChaptersToLoad = 3;

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

    public function getChapters()  {
      $db = $this->dbConnect();
      $req = $db->query('SELECT * FROM chapters ORDER BY date_chapter DESC');
      if ($req === false) {
        throw new Exception("Problème dans la requete SQL pour la fonction getChapters()");
      } else {
        return $req;
      }
    }

    public function getChapter($id)
    {    $db = $this->dbConnect();
      $req = $db->query('SELECT title, content, date_chapter FROM chapters WHERE id = ' . $id . '');
      if ($req === false) {
        throw new Exception("Problème dans la requete SQL pour la fonction getChapter()");
      } else {
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

    public function createChapter($title, $content)  {
          $db = $this->dbConnect();
        $req = $db->prepare('INSERT INTO chapters(title, content)
        VALUES (:title, :content)');
        $req->bindParam(':title', $title);
        $req->bindParam(':content', $content);
        
        $req->execute();
      }
    
    public function deleteChapter($id) {
      $db = $this->dbConnect();
      $req = $db->exec('DELETE FROM chapters WHERE id=' . $id . '');
    }

    public function editChapter($id, $title, $content) {
          $db = $this->dbConnect();
          $req = $db->prepare('UPDATE chapters SET title = :title, content = :content, WHERE id = ' . $id . '');
          $req->bindParam(':title', $title);
          $req->bindParam(':content', $content);
          $req->execute();  
    }
    
}

 