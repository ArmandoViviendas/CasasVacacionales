<?php


/**
* 
*/

     
class Casas {
	const DB_HOST= 'arreyes.db.11433073.hostedresource.com';
     const DB_NAME=  'arreyes';
     const DB_USERNAME= 'arreyes';   
      const DB_PASSWORD= 'B%4!tjo8T3112';
	
/**
 * @Author Armando Reyes Perez
 * Funcion para obtener el listado de las casas para el mapas
 * @return JSON conjunto de casas activas y qeu tengan longitudes diferentes de 0.000000
 */
	
	public function obtenerListado($listaUrl) {
		
			$myArray = array();
			//$mysqli = new mysqli('arreyes.db.11433073.hostedresource.com', 'arreyes', 'B%4!tjo8T3112', 'arreyes');

			$mysqli = new mysqli(self::DB_HOST,self::DB_NAME,self::DB_PASSWORD,self::DB_USERNAME);
			if ($result = $mysqli->prepare("SELECT DISTINCT imagenes.idimagen, imagenes.idcasa, imagenes.url, casas2.nombre, casas2.estado, casas2.ciudad, casas2.latitud, casas2.longitud, casas2.recamaras_num, casas2.capacidad_num, casas2.banos_num, casas2.ptos_fuertes, casas2.sala_detalles, casas2.recamara_detalles, casas2.comedor_detalles, casas2.cocina_detalles, casas2.tvs_detalles, casas2.jardin_detalles, casas2.comentarios, casas_tarifas.costo, monedas.iso FROM imagenes INNER JOIN casas2 ON imagenes.idcasa = casas2.idcasa INNER JOIN casas_tarifas ON casas2.idcasa = casas_tarifas.idcasa INNER JOIN monedas ON  casas_tarifas.idmoneda = monedas.idmoneda WHERE ciudad =? AND status = 0 AND latitud != 0.000000 GROUP BY imagenes.idcasa;")) {
					$result->bind_param("s", $listaUrl);
					
					$result->execute();
					$val = $result->get_result();
					while($row = $val->fetch_array(MYSQL_ASSOC)){
						$myArray[] = $row;
					}
					 
			   }
		   return json_encode($myArray);

		$result->close();
		$mysqli->close();
		
}

/**
 * @Author Armando Reyes Perez
 * Funcion para obtener el listado de las casas 
 *  @return JSON conjunto de casas activas de dicha ciudad seleccionada
 */
	public function obtenerListadoCasas($listaUrl) {
			$myArray = array();
			$mysqli = new mysqli(self::DB_HOST,self::DB_NAME,self::DB_PASSWORD,self::DB_USERNAME);
			if ($result = $mysqli->prepare("SELECT DISTINCT imagenes.idimagen, imagenes.idcasa, imagenes.url, casas2.nombre, casas2.estado, casas2.ciudad, casas2.latitud, casas2.longitud, casas2.recamaras_num, casas2.capacidad_num, casas2.banos_num, casas_alberca_caldera.caldera,casas_alberca_caldera.alberca,casas_alberca_caldera.solar,casas_alberca_caldera.bomba , casas_tarifas.costo, monedas.iso FROM imagenes INNER JOIN casas2 ON imagenes.idcasa = casas2.idcasa INNER JOIN casas_alberca_caldera ON imagenes.idcasa = casas_alberca_caldera.idcasa INNER JOIN casas_tarifas ON casas2.idcasa = casas_tarifas.idcasa INNER JOIN monedas ON  casas_tarifas.idmoneda = monedas.idmoneda WHERE ciudad = ? AND status = 0 GROUP BY casas2.nombre;")) {
					$result->bind_param("s", $listaUrl);
					
					$result->execute();
					$val = $result->get_result();
					while($row = $val->fetch_array(MYSQL_ASSOC)){
						$myArray[] = $row;
					}
					 
			   }
		   return json_encode($myArray);

		$result->close();
		$mysqli->close();
	}

public function obtenerUse($id){
		
		$myArray = array();
		$mysqli = new mysqli(self::DB_HOST,self::DB_NAME,self::DB_PASSWORD,self::DB_USERNAME);
		if ($result = $mysqli->prepare("SELECT * FROM casas2 WHERE idcasa=?")) {
				$result->bind_param("i", $value);
				$value = 144;
				$result->execute();
				$val = $result->get_result();
				while($row = $val->fetch_array(MYSQL_ASSOC)){
					$myArray[] = $row;
				}
				 
		   }
		   return json_encode($myArray);

		$result->close();
		$mysqli->close();
		}    

public function obtenerPrecios($int) {
			$myArray = array();
			$mysqli = new mysqli(self::DB_HOST,self::DB_NAME,self::DB_PASSWORD,self::DB_USERNAME);
			if ($result = $mysqli->prepare("SELECT * FROM casas_tarifas INNER JOIN monedas ON casas_tarifas.idmoneda = monedas.idmoneda INNER JOIN tarifas ON tarifas.idtarifa=casas_tarifas.tipo  WHERE idcasa =? ORDER BY weight DESC;")) {
					$result->bind_param("i", $int);
					
					$result->execute();
					$val = $result->get_result();
					while($row = $val->fetch_array(MYSQL_ASSOC)){
						$myArray[] = $row;
					}
					 
			   }
		   return json_encode($myArray);

		$result->close();
		$mysqli->close();
	}
public function obtenerDatosAlberca($listaUrl){
	$myArray = array();
			$mysqli = new mysqli(self::DB_HOST,self::DB_NAME,self::DB_PASSWORD,self::DB_USERNAME);
			if ($result = $mysqli->prepare("SELECT * FROM casas2 INNER JOIN casas_alberca_caldera ON casas2.idcasa = casas_alberca_caldera.idcasa WHERE ciudad=? AND status = 0;")) {
					$result->bind_param("s", $listaUrl);
					
					$result->execute();
					$val = $result->get_result();
					while($row = $val->fetch_array(MYSQL_ASSOC)){
						$myArray[] = $row;
					}
					 
			   }
		   return json_encode($myArray);

		$result->close();
		$mysqli->close();

}
public function obtenerDatosCasa($int) {
	$myArray = array();
			$mysqli = new mysqli(self::DB_HOST,self::DB_NAME,self::DB_PASSWORD,self::DB_USERNAME);
			if ($result = $mysqli->prepare("SELECT * FROM casas2 INNER JOIN imagenes ON casas2.idcasa = imagenes.idcasa WHERE casas2.idcasa = ? ORDER BY imagenes.number;")) {
					$result->bind_param("i", $int);
					
					$result->execute();
					$val = $result->get_result();
					while($row = $val->fetch_array(MYSQL_ASSOC)){
						$myArray[] = $row;
					}
					 
			   }
		   return json_encode($myArray);

		$result->close();
		$mysqli->close();
}
public function obtenerDatos($int){
	$myArray = array();
			$mysqli = new mysqli(self::DB_HOST,self::DB_NAME,self::DB_PASSWORD,self::DB_USERNAME);
			if ($result = $mysqli->prepare("SELECT * FROM casas2  WHERE idcasa =?;")) {
					$result->bind_param("i", $int);
					
					$result->execute();
					$val = $result->get_result();
					while($row = $val->fetch_array(MYSQL_ASSOC)){
						$myArray[] = $row;
					}
					 
			   }
		   return json_encode($myArray);

		$result->close();
		$mysqli->close();
}
public function obtenerImgenesPorId($id){
	$myArray = array();
			$mysqli = new mysqli(self::DB_HOST,self::DB_NAME,self::DB_PASSWORD,self::DB_USERNAME);
			if ($result = $mysqli->prepare("SELECT * FROM imagenes WHERE idcasa=? LIMIT 1")) {
					$result->bind_param("i", $id);
					
					$result->execute();
					$val = $result->get_result();
					while($row = $val->fetch_array(MYSQL_ASSOC)){
						$myArray[] = $row;
					}
					 
			   }
		   return json_encode($myArray);

		$result->close();
		$mysqli->close();
}
		
public function obtenerImgs($id){
	$myArray = array();
			$mysqli = new mysqli(self::DB_HOST,self::DB_NAME,self::DB_PASSWORD,self::DB_USERNAME);
			if ($result = $mysqli->prepare("SELECT * FROM imagenes INNER JOIN casas2 ON imagenes.idcasa = casas2.idcasa WHERE imagenes.idcasa=?")) {
					$result->bind_param("i", $id);
					
					$result->execute();
					$val = $result->get_result();
					while($row = $val->fetch_array(MYSQL_ASSOC)){
						$myArray[] = $row;
					}
					 
			   }
		   return json_encode($myArray);

		$result->close();
		$mysqli->close();
}
public function obtenerPorPrecio($precio1,$precio2,$listaUrl){
	$myArray = array();
			$mysqli = new mysqli(self::DB_HOST,self::DB_NAME,self::DB_PASSWORD,self::DB_USERNAME);
			if ($result = $mysqli->prepare("SELECT DISTINCT imagenes.idimagen, imagenes.idcasa, imagenes.url, casas2.nombre, casas2.estado, casas2.ciudad, casas2.latitud, casas2.longitud, casas2.recamaras_num, casas2.capacidad_num, casas2.banos_num, casas_alberca_caldera.caldera,casas_alberca_caldera.alberca,casas_alberca_caldera.solar,casas_alberca_caldera.bomba , casas_tarifas.costo, monedas.iso FROM imagenes INNER JOIN casas2 ON imagenes.idcasa = casas2.idcasa INNER JOIN casas_alberca_caldera ON imagenes.idcasa = casas_alberca_caldera.idcasa INNER JOIN casas_tarifas ON casas2.idcasa = casas_tarifas.idcasa INNER JOIN monedas ON  casas_tarifas.idmoneda = monedas.idmoneda WHERE ciudad = ? AND casas_tarifas.costo BETWEEN ? AND ?  AND  status = 0  GROUP BY imagenes.idcasa ")) {
					$result->bind_param("sii",$listaUrl,$precio1,$precio2);
					
					$result->execute();
					$val = $result->get_result();
					while($row = $val->fetch_array(MYSQL_ASSOC)){
						$myArray[] = $row;
					}
					 
			   }

		   return json_encode($myArray);

		$result->close();
		$mysqli->close();

}
public function obtenerTodasCiudades(){
	$myArray = array();
			$mysqli = new mysqli(self::DB_HOST,self::DB_NAME,self::DB_PASSWORD,self::DB_USERNAME);
			if ($result = $mysqli->prepare("SELECT * FROM ciudades;")) {
					
					
					$result->execute();
					$val = $result->get_result();
					while($row = $val->fetch_array(MYSQL_ASSOC)){
						$myArray[] = $row;
					}
					 
			   }

		   return json_encode($myArray);

		$result->close();
		$mysqli->close();

}


public function obtenerPorAlberca($dato,$listaUrl){
	$myArray = array();
			$mysqli = new mysqli(self::DB_HOST,self::DB_NAME,self::DB_PASSWORD,self::DB_USERNAME);
			if ($result = $mysqli->prepare("SELECT DISTINCT imagenes.idimagen, imagenes.idcasa, imagenes.url, casas2.nombre, casas2.estado, casas2.ciudad, casas2.latitud, casas2.longitud, casas2.recamaras_num, casas2.capacidad_num, casas2.banos_num, casas_alberca_caldera.caldera,casas_alberca_caldera.alberca,casas_alberca_caldera.solar,casas_alberca_caldera.bomba , casas_tarifas.costo, monedas.iso FROM imagenes INNER JOIN casas2 ON imagenes.idcasa = casas2.idcasa INNER JOIN casas_alberca_caldera ON imagenes.idcasa = casas_alberca_caldera.idcasa INNER JOIN casas_tarifas ON casas2.idcasa = casas_tarifas.idcasa INNER JOIN monedas ON  casas_tarifas.idmoneda = monedas.idmoneda WHERE ciudad = ? AND status = 0 AND casas_alberca_caldera.alberca = ? GROUP BY casas2.nombre;")) {
					$result->bind_param("si", $listaUrl,$dato);
					
					$result->execute();
					$val = $result->get_result();
					while($row = $val->fetch_array(MYSQL_ASSOC)){
						$myArray[] = $row;
					}
					 
			   }

		   return json_encode($myArray);

		$result->close();
		$mysqli->close();
}

public function obtenerPorCaldera($dato,$listaUrl){
	$myArray = array();
			$mysqli = new mysqli(self::DB_HOST,self::DB_NAME,self::DB_PASSWORD,self::DB_USERNAME);
			if ($result = $mysqli->prepare("SELECT DISTINCT imagenes.idimagen, imagenes.idcasa, imagenes.url, casas2.nombre, casas2.estado, casas2.ciudad, casas2.latitud, casas2.longitud, casas2.recamaras_num, casas2.capacidad_num, casas2.banos_num, casas_alberca_caldera.caldera,casas_alberca_caldera.alberca,casas_alberca_caldera.solar,casas_alberca_caldera.bomba , casas_tarifas.costo, monedas.iso FROM imagenes INNER JOIN casas2 ON imagenes.idcasa = casas2.idcasa INNER JOIN casas_alberca_caldera ON imagenes.idcasa = casas_alberca_caldera.idcasa INNER JOIN casas_tarifas ON casas2.idcasa = casas_tarifas.idcasa INNER JOIN monedas ON  casas_tarifas.idmoneda = monedas.idmoneda WHERE ciudad = ? AND status = 0 AND casas_alberca_caldera.caldera = ? GROUP BY casas2.nombre;")) {
					$result->bind_param("si", $listaUrl,$dato);
					
					$result->execute();
					$val = $result->get_result();
					while($row = $val->fetch_array(MYSQL_ASSOC)){
						$myArray[] = $row;
					}
					 
			   }

		   return json_encode($myArray);

		$result->close();
		$mysqli->close();
}
}