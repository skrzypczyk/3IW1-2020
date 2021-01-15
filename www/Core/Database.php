<?php

namespace App\Core;

class Database
{

	private $pdo;
	private $data;

	public function __construct(){
		try{
			$this->pdo = new \PDO(DBDRIVER.":dbname=".DBNAME.";host=".DBHOST.";port=".DBPORT,DBUSER,DBPWD);

			if(ENV == "dev"){
				$this->pdo->setAttribute(\PDO::ATTR_ERRMODE, \PDO::ERRMODE_EXCEPTION);
	    		$this->pdo->setAttribute(\PDO::ATTR_EMULATE_PREPARES, false);
    		}

		}catch(\Exception $e){
			die("Erreur SQL " . $e->getMessage());
		}
	}


	public function save(){

		/*
		//Prepare
		$query = $this->pdo->prepare("INSERT INTO wpml_user (firstname, lastname, email) 
				VALUES ( :firstname , :lastname , :email );");  // 1

		//Executer
		$query->execute(
				[
					"firstname"=>"Yves",
					"lastname"=>"Skrzypczyk",
					"email"=>"y.skrzypczyk@gmail.com"
				]
		);
		*/

		echo get_called_class(); //App\Models\User

		print_r( get_object_vars($this) ); // Array ( [firstname] => Yves [lastname] => SKRZYPCZYK [email] => y.skrzypczyk@gmail.com [pwd] => Test1234 [country] => fr [role] => 0 [status] => 0 [isDeleted] => 0 [pdo] => PDO Object ( ) )

		print_r(get_class_vars(get_class())); // Array ( [pdo] => [data] => )

	}

}






