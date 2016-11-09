<?php
include('src/Views/View.php');


/**
* Es un mediador de un pedido HTTP que en este caso es un request 
*lo traduce el pedido en un mensaje de dominio 
* Arma el Response y se lo delega a alguien mas 
*/
class HomeController {


	/**
	*Este metodo manda a renderizar el index de nuestra apagina pasandole como parametro 
	* 'home'  que sera el request a nuestro objeto view
	*/

	public static function index() {


		$view = new View('home');
		return $view->render();
	}
	public static function ciudad() {
		$view = new View('ciudad');
		return $view->render();
	}
	public static function mapa() {
		$view = new View('mapa');
		return $view->render();
	}
	public static function casa(){
		$view = new View('casa');
		return $view->render();
	}
	public static function  promociones(){
		$view = new View('promocion');
		return $view->render();
	}

}