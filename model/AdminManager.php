<?php
/**
 AdminManager - gestion authenfication et MP
 */
class AdminManager extends Manager
{

  public function getLogin(){
    $db = $this->dbConnect();
    $req = $db->query('SELECT login_admin FROM admin');
    if ($req === false) {
      throw new Exception("Problème dans la requete SQL pour la fonction getLogin()");
    } else {
      $data = $req->fetch();
      $login = $data['login_admin'];
      return $login;
    }
  }


  public function getMp(){
   $db = $this->dbConnect();
    $req = $db->query('SELECT password_admin FROM admin WHERE id = 1');
    if ($req === false) {
      //throw - Signale un evenement pendant l’exécution du programme.
      throw new Exception("Problème dans la requete SQL pour la fonction getLogin()");
    } else {
      $data = $req->fetch();
      $getMp = $data['password_admin'];
      return $getMp;  
      }
  }

}
