<?php 

    if($_GET){
        $request = $_GET['action'];
    }
    else{
    $request = "";
    }

require_once('routeur/Routeur.php');

$routeur = new Routeur($request);
$routeur->renderControler();

?>