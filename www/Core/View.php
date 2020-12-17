<?php

namespace App\Core;

class View
{


	private $template; // back ou front
	private $view; // home admin login et logout

	public function __construct( $view, $template = "front" ){

		$this->setTemplate($template);
		$this->setView($view);

	}

	public function setTemplate($template){
		if(file_exists("Views/Templates/".$template.".tpl.php")){
			$this->template = "Views/Templates/".$template.".tpl.php";
		}else{
			die("Erreur de template");
		}
	}

	public function setView($view){
		if(file_exists("Views/".$view.".view.php")){
			$this->view = "Views/".$view.".view.php";
		}else{
			die("Erreur de vue");
		}
	}

	public function __destruct(){
		include $this->template;
	}

}





