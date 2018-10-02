<?php
session_start();
ini_set("SMTP","ssl:smtp.gmail.com");
ini_set("smtp_port","465");
ini_set('sendmail_from', 'web.bacor@gmail.com');

include_once('controler/frontend.php');
include_once('controler/backend.php');

class Routeur
{
		private $request;

		private $routes = [
		"" 				=>["controler"=>'frontend',"method"=> 'index'],
		"index" 		=> ["controler" =>'frontend',"method"=>'index'],
		"listChapters" 	=> ["controler" =>'frontend',"method"=>'listChapters'],
		"chapter" 		=> ['controler' =>'frontend', "method"=>'chapter'],
		"addComment"	=> ["controler"=> 'frontend', "method" => 'addComment'],
		"reportComment"	=> ["controler"=> 'frontend', "method" => 'reportComment'],
		"contact" 		=> ["controler" =>'frontend',"method"=>'contact'],
			];

		private $routesAdmin = [
		"" 				=> ["controler" =>'backend',"method"=>'indexAdmin'],
		"addChapter"	=> ["controler" =>'backend',"method"=>'addChapter'],
		"indexAdmin" 	=> ["controler"=> 'backend', "method" => 'indexAdmin'],
		"createChapter" => ["controler"=> 'backend', "method" => 'createChapter'],
		"editChapter"   => ["controler"=> 'backend', "method" => 'editChapter'],
		"deleteChapter"=> ["controler"=> 'backend', "method" => 'deleteChapter'],
		"commentAadmin" => ["controler"=> 'backend', "method" => 'commentAdmin'],
		"editComment" 	=> ["controler"=> 'backend', "method" => 'editComment [L]'],
		"editChapter"=> ["controler"=> 'backend', "method" => 'rewriteChapter'],
		
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
				else
        		{
              	 echo "mauvaise direction routeur";
        		}
			}


			catch(Exception $e){
			die('error :'.$e->getMessage());
			}
		}
}
