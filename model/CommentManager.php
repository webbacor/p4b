<?php
///**************************************************
//Gestion des commentaires récuperation des données sur la BD
//*************************************************
require_once('Manager.php');


class CommentManager extends Manager{

    public function getComments($idChapter)  {
      $db = $this->dbConnect();
      $req = $db->query('SELECT *, DATE_FORMAT(date_comment, \'%d/%m/%Y \') AS date_comment_fr FROM comments WHERE id_chapters = ' . $idChapter . ' ORDER BY id DESC');
      if ($req === false) {
         throw new Exception("Problème dans la requete SQL pour la fonction getComments()");
         } else {
         return $req;
      }
    }

    public function getComment($idComment){
      $db = $this->dbConnect();
      $req = $db->query('SELECT *, DATE_FORMAT(date_comment, \'%d/%m/%Y \') AS date_comment_fr FROM comments WHERE id = ' . $idComment . '');
      if ($req === false) {
         throw new Exception("Problème dans la requete SQL pour la fonction getComment()");
         } else {
          $comment = $req->fetch();
        return $comment;
      }
    }

    public function getCountComments($idChapter){
      $db = $this->dbConnect();
      $req = $db->query('SELECT COUNT(id) as nbComments FROM comments WHERE id_chapters =  ' . $idChapter . '');
      if ($req === false) {
        throw new Exception("Problème dans la requete SQL pour la fonction getCountComments()");
        } else {
          $data = $req->fetch();
          $count = $data['nbComments'];
        return $count;
      }
    }

    public function commentChapter($postId, $name, $message){
      $db = $this->dbConnect();
      $comments = $db->prepare('INSERT INTO comments(id_chapters, name, message, date_comment, reports) VALUES(?, ?, ?, NOW(),0)');
      $affectedLines = $comments->execute(array($postId, $name, $message));
      return $affectedLines;
    }

    public function deleteComment($idComment) {
      $db = $this->dbConnect();
      $req = $db->prepare('DELETE FROM comments WHERE id = ' . $idComment . '');
      $req->execute();
    }

    public function editComment($idComment, $message){
      $reports = 0;
      $db = $this->dbConnect();
      $req = $db->prepare('UPDATE comments SET message = :message, reports = :reports WHERE id = ' . $idComment . '');
      $req->bindParam(':message', $message);
      $req->bindParam(':reports', $reports);
      $req->execute();
    }

    public function getReport($idComment) {
      $db = $this->dbConnect();
      $req = $db->query('SELECT reports FROM comments WHERE id=' . $idComment . '');
      if ($req === false) {
        throw new Exception("Problème dans la requete SQL pour la fonction getReports()");
        } else {
          $report = $req->fetch();
        return $report;
      }
    }

    public function reportComment($idComment){
      $db = $this->dbConnect();
      $report = $db->prepare('UPDATE `comments` SET `reports`=1 WHERE id=?');
      $report->execute(array($idComment));
      return $report;
    }

    public function addReport($idComment, $report){
      $db = $this->dbConnect();
      $req = $db->prepare('UPDATE comments SET reports = :reports WHERE id=' . $idComment . '');
      $req->bindParam(':reports', $report);
      $req->execute();
    }
}
