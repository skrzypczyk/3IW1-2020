<?php
//Fichier 1 controllers/Security.php

namespace App\Controllers;

class Security
{
	public function defaultAction(){

	}
}



---------------------------------------------------------------
//Fichier 2 core/Security.php

namespace App\Core;

class Security
{
	public function isConnected(){
		
	}
}



---------------------------------------------------------------
//Fichier 3

namespace App;

use App\Controller\Security as Secu;
use App\Core\Security;

require "controllers/Security.php";
require "core/Security.php";

//ici je veux accéder au security du fichier 2
$security = new Security();
//ici je veux accéder au security du fichier 1
$securityController = new Secu();

