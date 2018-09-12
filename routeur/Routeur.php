<?php
session_start();
ini_set("SMTP","ssl:smtp.gmail.com");
ini_set("smtp_port","465");
ini_set('sendmail_from', 'web.bacor@gmail.com');  

include_once('controler/Frontend.php');
include_once('controler/Backend.php');

class Routeur
{
		private $request;


		private $routes = [
		"" =>["controler"=>'frontend',"method"=> 'index'],
		"index" => ["controler" =>'frontend',"method"=>'index'],
		"indexView" => ["controler" =>'frontend',"method"=>'indexView'],
		"chapter" => ["controler" =>'frontend',"method"=>'chapter'],
		"chapters" => ["controler" =>'frontend',"method"=>'chapters'],
		"listChapters" => ["controler" =>'frontend',"method"=>'listChapters'],
		"contact" => ["controler" =>'frontend',"method"=>'contact'],
		];


		private $routesAdmin = [
		"indexAdminView" => ["controler"=> 'backend', "method" => 'indexAdminView'],
		"logout" => ["controler"=> 'backend', "method" => 'logout'],
		"addChapter" => ["controler"=> 'backend', "method" => 'addChapter'],
		"createChapter" => ["controler"=> 'backend', "method" => 'createChapter'],
		"addChapter" => ["controler"=> 'backend', "method" => 'addChapter'],
		"deleteChapter" => ["controler"=> 'backend', "method" => 'deleteChapter'],
		"rewriteChapter" => ["controler"=> 'backend', "method" => 'rewriteChapter'],
		"editChapter" => ["controler"=> 'backend', "method" => ' editChapter'],
		"commentAdmin" => ["controler"=> 'backend', "method" => 'commentAdmin'],
		"removeComment" => ["controler"=> 'backend', "method" => 'removeComment'],
		"getComment" => ["controler"=> 'backend', "method" => 'getComment'],
		"editComment" => ["controler"=> 'backend', "method" => 'editComment']
		];




		public function __construct($request)
		{
		$this->request = $request;
		}

		public function renderControler(){
		$request = $this->request;

			try{

				if(key_exists($request, $this->routes)){
					$controler = $this->routes[$request]['controler'];
					$method = $this->routes[$request]['method'];

					$currentControler = new $controler();
					$currentControler->$method();
				}
				elseif (key_exists($request, $this->routesAdmin)){
					$controler = $this->routesAdmin[$request]['controler'];
					$method = $this->routesAdmin[$request]['method'];

					$currentControler = new $controler();
					$currentControler->$method();
				}
			}
		

		catch(Exception $e){
		die('error :'.$e->getMessage());
		}
}		
