<?php
/**
 * acces à la base de données
 */
class Manager
{
    protected function dbConnect(){
        try 
        {
            $db = new PDO('mysql:host=localhost;dbname=p4;charset=utf8', "root", "");
            return $db;
        }    
        catch (PDOException $e) 
        {// On va attraper les exceptions "Exception" s'il y en a une qui est levée.
        print "Erreur !: " . $e->getMessage() . "<br/>";
        die();
        }
    }
}
