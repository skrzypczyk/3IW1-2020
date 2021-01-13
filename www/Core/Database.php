<?php

namespace App\Core;

class Database
{

	private $pdo;

	public function __construct(){
		try{
			$this->pdo = new \PDO(DBDRIVER.":host=".DBHOST.";port=".DBPORT,DBUSER,DBPWD);
		}catch(\Exception $e){
			die("Erreur SQL " . $e->getMessage());
		}
	}


	public function save(){
		echo "save";
	}

}
