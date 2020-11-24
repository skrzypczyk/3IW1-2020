<?php

/* 
http://127.0.0.1/users/list

$controller = "users"
$action = "list"

Par défaut 
$controller = "global"
$action = "default"

*/

// $uri  => /users/list/
$uri = trim($_SERVER["REQUEST_URI"], "/");

$uriExploded = explode("/", $uri);

$controller = ucfirst(empty($uriExploded[0])?"global":$uriExploded[0])."Controller";
$action = ($uriExploded[1]??"default")."Action";


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








