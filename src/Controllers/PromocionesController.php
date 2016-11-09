<?php
/**
* 
*/
include('src/Models/promociones.php');

class PromocionesController 
{
	
	public static function promociones(){
		
		$promociones = new promociones();
		$listaPromos = $promociones->obtenerListado();
		echo $listaPromos;
	}
	public static function buscarCiudadPromos(){
		
		$id = $_GET['ciudad'];
		
		$casas = new Promociones();
		$DatosCasas = $casas->obtenerCiudadesPromo($id);
		
		echo $DatosCasas;
	}

}