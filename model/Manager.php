<?php
//**************************************************
//acces BASE DE DONNEES
//*************************************************
class Manager
{
    protected function dbConnect(){
        try 
        {
            $db = new PDO('mysql:host=localhost;dbname=blogalaska;charset=utf8', "root", "");
            return $db;
        }    
        catch (PDOException $e) 
        {// On va attraper les exceptions "Exception" s'il y en a une qui est levée.
        print "Erreur !: " . $e->getMessage() . "<br/>";
        die();
        }
    }
}
