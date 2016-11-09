<?php

include('config\app.php');
include('src\Infrastructure\AppConnection.php');
include('src\Models\Casas.php');

/**
* 
*/
class CasasController
{
	public static function casas(){
		
	    
		$casas = new Casas();
		$listaCasas = $casas->obtenerListadoCasas();
		
		echo $listaCasas;
	}
	public static function markers() {
		 $casas = new Casas();
		$listaCasas = $casas->obtenerListado();
		
		
		echo $listaCasas;
	}
public static function estados() {
		$estados = new Estados();
		$listaEstados = $estados->obtenerListado();
		
		
		echo $listaEstados;

	}
	public static function ciudades(){
		$ciudad = $_GET['ciudad'];
		$ciudades = new Ciudad();
		$listaCiudades = $ciudades->obtenerListado($ciudad);
		
		
		echo $listaCiudades;
}
} 
