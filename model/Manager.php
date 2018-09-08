<?php

/**
 * acces à la base de données
 */
class Manager
{

  protected function dbConnect()
  {
    $db = new PDO('mysql:host=localhost;dbname=p4;charset=utf8', "root", "");
    return $db;
  }

}

try {
    $dbh = new PDO('mysql:host=localhost;dbname=p4;charset=utf8', "root", "");
    foreach($dbh->query('SELECT * from admin') as $row) {
        print_r('');
    }
    $dbh = null;
} catch (PDOException $e) {
    print "Erreur !: " . $e->getMessage() . "<br/>";
    die();
}
?>






