<?php
//************************************************
//acces BASE DE DONNEES 1&1
//************************************************
class Manager
{
    protected function dbConnect(){
        try
        {
            $db = new PDO('mysql:host=db756379669.db.1and1.com;dbname=db756379669;charset=utf8', "dbo756379669", "code62119D*");
            return $db;
        }
        catch (PDOException $e)
        {// On va attraper les exceptions "Exception" s'il y en a une qui est levée.
        print "Erreur !: " . $e->getMessage() . "<br/>";
        die();
        }
    }
}
//************************************************
//====BASE DONNEES EN LOCAL====
//************************************************
/*class Manager
{
    protected function dbConnect(){
        try{
            $db = new PDO('mysql:host=localhost;dbname=blogalaska;charset=utf8', "root", "");
            return $db;
        }
        catch (PDOException $e){
            print "Erreur !: " . $e->getMessage() . "<br/>";
            die();
        }
    }
}
*/
