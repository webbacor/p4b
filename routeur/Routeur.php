<?php
session_start ();

include_once('controller/Frontend.php');
include_once('controller/Backend.php');

class Routeur
{/*
private $request;

private $routes = [
"" => ["controller"=> 'Frontend', "method" => 'home'],
"home" => ["controller"=> 'Frontend', "method" => 'home'],
"chapterView" => ["controller"=> 'Frontend', "method" => 'chapterView'],
"addComment" => ["controller"=> 'Frontend', "method" => 'addComment'],
"reportComment" => ["controller"=> 'Frontend', "method" => 'reportComment'],
"loginView" => ["controller"=> 'Frontend', "method" => 'loginView'],
"controlLogin" => ["controller"=> 'Frontend', "method" => 'controlLogin']
];

private $routesAdmin = [
"adminView" => ["controller"=> 'Backend', "method" => 'adminView'],
"editChapter" => ["controller"=> 'Backend', "method" => 'editChapter'],
"writeChapter" => ["controller"=> 'Backend', "method" => 'writeChapter'],
"manageComments" => ["controller"=> 'Backend', "method" => 'manageComments'],
"addChapter" => ["controller"=> 'Backend', "method" => 'addChapter'],
"validateDelete" => ["controller"=> 'Backend', "method" => 'validateDelete'],
"deleteChapter" => ["controller"=> 'Backend', "method" => 'deleteChapter'],
"changeChapter" => ["controller"=> 'Backend', "method" => 'changeChapter'],
"updateChapter" => ["controller"=> 'Backend', "method" => 'updateChapter'],
"deleteComment" => ["controller"=> 'Backend', "method" => 'deleteComment'],
"changeComment" => ["controller"=> 'Backend', "method" => 'changeComment'],
"updateComment" => ["controller"=> 'Backend', "method" => 'updateComment']
];

public function __construct($request)
{
$this->request = $request;
}

public function renderController()
{
$request = $this->request;

try
{
if(key_exists($request, $this->routes))
{
$controller = $this->routes[$request]['controller'];
$method = $this->routes[$request]['method'];

$currentController = new $controller();
$currentController->$method();
}
elseif (key_exists($request, $this->routesAdmin))
{
if (isset($_SESSION['login']))
{
index.php
<?php

if($_GET)
{
$request = $_GET['action'];
}
else
{
$request = "";
}

require_once('classes/Routeur.php');

$routeur = new Routeur($request);
$routeur->renderController();

*/