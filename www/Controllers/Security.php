<?php

namespace App\Controller;

use App\Core\Security as Secu;
use App\Core\View;
use App\Core\ConstantMaker as c;

class Security{


	public function defaultAction(){
		echo "Controller security action default";
	}


	public function loginAction(){
		echo "Controller security action login";
	}


	public function registerAction(){


		
		//Vérification des valeurs en POST


		/*
		$user = new User();
		$user->setFirstname("Yves");
		$user->setLastname("SKRZYPCZYK");
		$user->setEmail("y.skrzypczyk@gmail.com");
		$user->setPwd("Test1234");
		$user->setCountry("fr");
		$user->save();

		$log = new Log();
		$log->user("y.skrzypczyk@gmail.com");
		$log->date(time());
		$log->success(false);
		$log->save();


		$user = new User();
		$user->setId(2);
		$user->setFirstname("Toto");
		$user->save();

		*/

	}



	public function logoutAction(){

		$security = new Secu();
		if($security->isConnected()){
			echo "OK";
		}else{
			echo "NOK";
		}
		
	}


	

}