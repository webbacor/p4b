<?php

require_once('Manager.php');

/**
 * class PostManager for manage posts on DB
 */
class ChapterManager extends Manager
{
  private $nbChaptersToLoad = 3;

  public function getNbChaptersToLoad()
  {
    return $this->nbChaptersToLoad;
  }

  public function setNbChaptersToLoad($nbChapters)
  {
    $this->nbChaptersToLoad = $nbChapters;
  }

  public function getLastChapters($nbChapters)
  {
    $db = $this->dbConnect();
    $req = $db->query('SELECT * FROM chapters ORDER BY date_chapter DESC LIMIT ' . $nbChapters . '');
    if ($req === false) {
      throw new Exception("Problème dans la requete SQL pour la fonction getLastChapters()");
    } else {
      return $req;
    }
  }

  public function getChapters()
  {
    $db = $this->dbConnect();
    $req = $db->query('SELECT * FROM chapters ORDER BY date_chapter DESC');
    if ($req === false) {
      throw new Exception("Problème dans la requete SQL pour la fonction getChapters()");
    } else {
      return $req;
    }
  }

  public function getChapter($id)
  {
    $db = $this->dbConnect();
    $req = $db->query('SELECT title, author, content, img_chapter, date_chapter FROM chapters WHERE id = ' . $id . '');
    if ($req === false) {
      throw new Exception("Problème dans la requete SQL pour la fonction getChapter()");
    } else {
      $chapter = $req->fetch();
      return $chapter;
    }
  }

  public function getCountChapters()
  {
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

  public function createChapter($title, $content, $imgChapter)
  {
    $directory = 'C:\wamp64\www\Projet4\Projet4\public\images\\' . $imgChapter['name'] . '';
    
    $ok = move_uploaded_file($imgChapter['tmp_name'], $directory);
    if ($ok) {
      $db = $this->dbConnect();
      $req = $db->prepare('INSERT INTO chapters(title, content, img_chapter)
      VALUES (:title, :content, :img_chapter)');
      $req->bindParam(':title', $title);
      $req->bindParam(':content', $content);
      $req->bindParam(':img_chapter', $imgChapter['name']);
      $req->execute();
    }
  }

  public function deleteChapter($id)
  {
    $db = $this->dbConnect();
    $req = $db->exec('DELETE FROM chapters WHERE id=' . $id . '');
  }

  public function editChapter($id, $title, $content, $imgChapter)
  {
    if ($imgChapter['name'] == '') {
      $db = $this->dbConnect();
      $req = $db->prepare('UPDATE chapters SET title = :title, content = :content WHERE id = ' . $id . '');
      $req->bindParam(':title', $title);
      $req->bindParam(':content', $content);
      $req->execute();
    } else {
      $directory = 'C:\wamp64\www\Projet4\Projet4\public\images\\' . $imgChapter['name'] . '';
      $ok = move_uploaded_file($imgChapter['tmp_name'], $directory);
      if ($ok) {
        $db = $this->dbConnect();
        $req = $db->prepare('UPDATE chapters SET title = :title, content = :content, img_chapter = :img_chapter WHERE id = ' . $id . '');
        $req->bindParam(':title', $title);
        $req->bindParam(':content', $content);
        $req->bindParam(':img_chapter', $imgChapter['name']);
        $req->execute();
      }
    }
  }

}
