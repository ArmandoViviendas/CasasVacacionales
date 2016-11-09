<?php

include('config/app.php');
include('src/Infrastructure/AppConnection.php');
include('src/Models/Casas.php');
include('src/Models/Ciudad.php');
include('src/Models/Estados.php');
include('src/Controllers/UrlController.php');
/**
* 
*/
class CasasController
{
	public static function casas(){
		$id = $_GET['url'];
	    $url = new UrlController();
	    $listaUrl = $url->obtenerUrl($id);
		$casas = new Casas();
		$listaCasas = $casas->obtenerListadoCasas($listaUrl);
		
		echo $listaCasas;
	}
	public static function markers() {

		$id = $_GET['url'];
		$url = new UrlController();
	    $listaUrl = $url->obtenerUrl($id);
		 $casas = new Casas();
		$listaCasas = $casas->obtenerListado($listaUrl);
		
		
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
	public static function value(){
		$id = $_GET['url'];
		$ciudades = new Casas();
		$listaCiudades = $ciudades->obtenerUse($id);
		
		
		echo $listaCiudades;
	}
	public static function precios(){
		$id = $_GET['url'];
		$url = parse_url($id);
		$url = $url['path'];	
		$array = explode("/", $url);
		$id = $array[2];
		$int = (int)$id;
		$casas = new Casas();
		$DatosCasas = $casas->obtenerPrecios($int);
		
		echo $DatosCasas;
	}
	public static function alberca(){
		$id = $_GET['url'];
	    $url = new UrlController();
	    $listaUrl = $url->obtenerUrl($id);
		$casas = new Casas();
		$listaCasas = $casas->obtenerDatosAlberca($listaUrl);
		
		echo $listaCasas;
	}
	public static function ciudad(){
		$id = $_GET['url'];
		
		$url = new UrlController();
	    $listaUrl = $url->obtenerUrl($id);
		$casas = new Ciudad();
		$listaCasas = $casas->obtenerCiudades($listaUrl);
		
		echo $listaCasas;
	}
	public static function casa() {
		$id = $_GET['url'];
		$url = parse_url($id);
		$url = $url['path'];	
		$array = explode("/", $url);
		$id = $array[2];
		$int = (int)$id;
		$casas = new Casas();
		$DatosCasas = $casas->obtenerDatosCasa($int);
		
		echo $DatosCasas;

	}
	public static function datos() {
		$id = $_GET['url'];
		$url = parse_url($id);
		$url = $url['path'];	
		$array = explode("/", $url);
		$id = $array[2];
		$int = (int)$id;
		$casas = new Casas();
		$DatosCasas = $casas->obtenerDatos($int);
		
		echo $DatosCasas;

	}
	public static function fechas(){
		$llegada = $_GET['llegada'];
		$salida = $_GET['salida'];
		$personas = $_GET['personas'];
		$ciudad = $_GET['ciudad'];

		
	}
	public  static function buscaCasa(){
		$id = $_GET['id'];
		$casas = new Casas();
		$DatosCasas = $casas->obtenerImgenesPorId($id);
		
		echo $DatosCasas;
	}

public  static function buscarImgs(){
		$id = $_GET['id'];
		$casas = new Casas();
		$DatosCasas = $casas->obtenerImgs($id);
		
		echo $DatosCasas;
	}
	public static function buscarPorPrecio(){
		$id = $_GET['url'];
		$precio1 = $_GET['precio1'];
		$precio2 = $_GET['precio2'];
		$url = new UrlController();
	    $listaUrl = $url->obtenerUrl($id);
		$casas = new Casas();
		$DatosCasas = $casas->obtenerPorPrecio($precio1,$precio2,$listaUrl);
		
		echo $DatosCasas;
	}
	public static function buscarTodasCiudades(){
		
		$casas = new Casas();
		$DatosCasas = $casas->obtenerTodasCiudades();
		
		echo $DatosCasas;
	}
	
	public static function buscarAlberca(){
		$dato = $_GET['data'];
		$id = $_GET['url'];
		$url = new UrlController();
	    $listaUrl = $url->obtenerUrl($id);
		$casas = new Casas();
		$DatosCasas = $casas->obtenerPorAlberca($dato,$listaUrl);
		
		echo $DatosCasas;
	}
	
	public static function buscarCaldera(){
		$dato = $_GET['data'];
		$id = $_GET['url'];
		$url = new UrlController();
	    $listaUrl = $url->obtenerUrl($id);
		$casas = new Casas();
		$DatosCasas = $casas->obtenerPorCaldera($dato,$listaUrl);
		
		echo $DatosCasas;
	}
		
}