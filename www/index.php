<?php

require "Core/Router.php";



// $uri  => /se-connecter?user_id=2 => /se-connecter
$uriExploded = explode("?", $_SERVER["REQUEST_URI"]);

$uri = $uriExploded[0];

$router = new Router($uri);

$c = $router->getController();
$a = $router->getAction();

echo "Le controller c'est ".$c." et l'action ".$a;

die();




//echo "Le controller c'est ".$controller;
//echo " L'action c'est ".$action;



//Appeler le bon controller et la bonne action en fonction de l'url
//avec les bonnes vérifications

//class_exists() ou method_exists(object, method_name)

if( file_exists("./controllers/".$controller.".class.php")){

	include "./controllers/".$controller.".class.php";

	if(class_exists($controller)){
		// $controller ====> SecurityController
		$cObjet = new $controller();
		if(method_exists($cObjet, $action)){
			$cObjet->$action();

		}else{
			die("L'action' : ".$action." n'existe pas");
		}

	}else{
	
		die("La classe controller : ".$controller." n'existe pas");
	}


}else{
	die("Le fichier controller : ".$controller." n'existe pas");
}








