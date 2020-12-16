<?php

namespace App;

use App\Core\Router;

require "Core/Router.php";



// $uri  => /se-connecter?user_id=2 => /se-connecter
$uriExploded = explode("?", $_SERVER["REQUEST_URI"]);

$uri = $uriExploded[0];

$router = new Router($uri);

$c = $router->getController();
$a = $router->getAction();




//echo "Le controller c'est ".$controller;
//echo " L'action c'est ".$action;



//Appeler le bon controller et la bonne action en fonction de l'url
//avec les bonnes vérifications

//class_exists() ou method_exists(object, method_name)

if( file_exists("./Controllers/".$c.".php")){

	include "./Controllers/".$c.".php";
	// SecurityController =>  App\Controller\SecurityController

	$c = "App\\Controller\\".$c;
	if(class_exists($c)){
		// $controller ====> SecurityController
		$cObjet = new $c();
		if(method_exists($cObjet, $a)){
			$cObjet->$a();

		}else{
			die("L'action' : ".$a." n'existe pas");
		}

	}else{
	
		die("La classe controller : ".$c." n'existe pas");
	}


}else{
	die("Le fichier controller : ".$c." n'existe pas");
}








