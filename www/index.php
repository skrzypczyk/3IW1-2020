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

$controller = empty($uriExploded[0])?"global":$uriExploded[0];
$action = $uriExploded[1]??"default";


//echo "Le controller c'est ".$controller;
//echo " L'action c'est ".$action;



//Appeler le bon controller et la bonne action en fonction de l'url
//avec les bonnes vérifications

//class_exists() ou method_exists(object, method_name)