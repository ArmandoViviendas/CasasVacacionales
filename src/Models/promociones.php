<?php

class promociones {
	const DB_HOST= 'arreyes.db.11433073.hostedresource.com';
     const DB_NAME=  'arreyes';
     const DB_USERNAME= 'arreyes';   
      const DB_PASSWORD= 'B%4!tjo8T3112';
	
/**
 * @Author Armando Reyes Perez
 * Funcion para obtener el listado de las casas para el mapas
 * @return JSON conjunto de casas activas y qeu tengan longitudes diferentes de 0.000000
 */
	
	public function obtenerListado() {
		
			$myArray = array();
			//$mysqli = new mysqli('arreyes.db.11433073.hostedresource.com', 'arreyes', 'B%4!tjo8T3112', 'arreyes');
			$mysqli = new PDO("mysql:host=".self::DB_HOST.";dbname=".self::DB_NAME, self::DB_USERNAME, self::DB_PASSWORD);
			if ($result = $mysqli->prepare("SELECT DISTINCT imagenes.idimagen, imagenes.url, casas2.nombre, casas2.estado, casas2.ciudad, casas2.latitud, casas2.longitud, casas2.recamaras_num, casas2.capacidad_num, casas2.banos_num, casas_alberca_caldera.caldera,casas_alberca_caldera.alberca,casas_alberca_caldera.solar,casas_alberca_caldera.bomba, casas_promociones.idcasas_promociones, casas_promociones.inicio, casas_promociones.fin ,casas_promociones.descripcion FROM casas_promociones INNER JOIN casas2  ON casas_promociones.idcasa = casas2.idcasa INNER JOIN casas_alberca_caldera ON casas2.idcasa = casas_alberca_caldera.idcasa INNER JOIN imagenes ON casas2.idcasa = imagenes.idcasa WHERE (now() BETWEEN casas_promociones.fecha_show AND casas_promociones.fin) AND status = 0 GROUP BY imagenes.idcasa;")) {
					
					
					$result->execute();
					/*$val = $result->get_result();
					while($row = $val->fetch_array(MYSQL_ASSOC)){
						$myArray[] = $row;
					}*/
					$result->fetchAll();
					 
			   }
			   		
		   return json_encode($result);

		$result->close();
		$mysqli->close();
		
}

public function obtenerCiudadesPromo($id) {
		
			$myArray = array();
			//$mysqli = new mysqli('arreyes.db.11433073.hostedresource.com', 'arreyes', 'B%4!tjo8T3112', 'arreyes');
			$mysqli = new mysqli(self::DB_HOST,self::DB_NAME,self::DB_PASSWORD,self::DB_USERNAME);
			if ($result = $mysqli->prepare("SELECT * FROM ciudades WHERE idestado=?")) {
					
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
}