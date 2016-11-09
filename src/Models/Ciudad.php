<?php


/**
* 
*/

class Ciudad {
	

	
	public function obtenerListado($ciudad) {
		$mysqli = new mysqli('arreyes.db.11433073.hostedresource.com', 'arreyes', 'B%4!tjo8T3112', 'arreyes');
		
		
		if($ciudad == 'Distrito Federal'){
			$myArray = array();
			if ($result = $mysqli->query("SELECT * FROM ciudades where idestado = 1")) {

    		while($row = $result->fetch_array(MYSQL_ASSOC)) {
            	$myArray[] = $row;
    		}
   			 return json_encode($myArray);
			}
		}
		if($ciudad == 'Guanajuato'){
			$myArray = array();
			if ($result = $mysqli->query("SELECT * FROM ciudades where idestado = 2")) {

    		while($row = $result->fetch_array(MYSQL_ASSOC)) {
            	$myArray[] = $row;
    		}
   			 return json_encode($myArray);
			}
		}
		if($ciudad == 'Guerrero'){
			$myArray = array();
			if ($result = $mysqli->query("SELECT * FROM ciudades where idestado = 3")) {

    		while($row = $result->fetch_array(MYSQL_ASSOC)) {
            	$myArray[] = $row;
    		}
   			 return json_encode($myArray);
			}
		}
		if($ciudad == 'Hidalgo'){
			$myArray = array();
			if ($result = $mysqli->query("SELECT * FROM ciudades where idestado = 4")) {

    		while($row = $result->fetch_array(MYSQL_ASSOC)) {
            	$myArray[] = $row;
    		}
   			 return json_encode($myArray);
			}
		}
		if($ciudad == 'México'){
			$myArray = array();
			if ($result = $mysqli->query("SELECT * FROM ciudades where idestado = 5")) {

    		while($row = $result->fetch_array(MYSQL_ASSOC)) {
            	$myArray[] = $row;
    		}
   			 return json_encode($myArray);
			}
		}
		if($ciudad == 'Morelos'){
			$myArray = array();
			if ($result = $mysqli->query("SELECT * FROM ciudades where idestado = 6")) {

    		while($row = $result->fetch_array(MYSQL_ASSOC)) {
            	$myArray[] = $row;
    		}
   			 return json_encode($myArray);
			}
		}
		if($ciudad == 'Queretaro'){
			$myArray = array();
			if ($result = $mysqli->query("SELECT * FROM ciudades where idestado = 7")) {

    		while($row = $result->fetch_array(MYSQL_ASSOC)) {
            	$myArray[] = $row;
    		}
   			 return json_encode($myArray);
			}
		}
		if($ciudad == 'Veracruz'){
			$myArray = array();
			if ($result = $mysqli->query("SELECT * FROM ciudades where idestado = 8")) {

    		while($row = $result->fetch_array(MYSQL_ASSOC)) {
            	$myArray[] = $row;
    		}
   			 return json_encode($myArray);
			}
		}
		if($ciudad == 'Michoacan'){
			$myArray = array();
			if ($result = $mysqli->query("SELECT * FROM ciudades where idestado = 9")) {

    		while($row = $result->fetch_array(MYSQL_ASSOC)) {
            	$myArray[] = $row;
    		}
   			 return json_encode($myArray);
			}
		}
		if($ciudad == 'Baja California Sur'){
			$myArray = array();
			if ($result = $mysqli->query("SELECT * FROM ciudades where idestado = 10")) {

    		while($row = $result->fetch_array(MYSQL_ASSOC)) {
            	$myArray[] = $row;
    		}
   			 return json_encode($myArray);
			}
		}
		if($ciudad == 'Quintana Roo'){
			$myArray = array();
			if ($result = $mysqli->query("SELECT * FROM ciudades where idestado = 16")) {

    		while($row = $result->fetch_array(MYSQL_ASSOC)) {
            	$myArray[] = $row;
    		}
   			 return json_encode($myArray);
			}
		}
		if($ciudad == 'Jalisco'){
			$myArray = array();
			if ($result = $mysqli->query("SELECT * FROM ciudades where idestado = 15")) {

    		while($row = $result->fetch_array(MYSQL_ASSOC)) {
            	$myArray[] = $row;
    		}
   			 return json_encode($myArray);
			}
		}
		if($ciudad == 'Nayarit'){
			$myArray = array();
			if ($result = $mysqli->query("SELECT * FROM ciudades where idestado = 17")) {

    		while($row = $result->fetch_array(MYSQL_ASSOC)) {
            	$myArray[] = $row;
    		}
   			 return json_encode($myArray);
			}
		}
/* comprobar la conexión */
/*$myArray = array();
if ($result = $mysqli->query("SELECT * FROM ciudades where idestado = 6")) {

    while($row = $result->fetch_array(MYSQL_ASSOC)) {
            $myArray[] = $row;
    }
    return json_encode($myArray);
}*/
}
public function obtenerCiudades($listaUrl){
	$myArray = array();
			$mysqli = new mysqli('arreyes.db.11433073.hostedresource.com', 'arreyes', 'B%4!tjo8T3112', 'arreyes');
			if ($result = $mysqli->prepare("SELECT idestado from ciudades WHERE nombre =? ")) {
					$result->bind_param("s", $listaUrl);
					
					$result->execute();
					$val = $result->get_result();
					while($row = $val->fetch_array(MYSQL_ASSOC)){
						$myArray = $row;
					}
					 
			   }
			  $obtenerCiudades = $this->ciudades($myArray);

			  return $obtenerCiudades;
		  // return json_encode($myArray);

		$result->close();
		$mysqli->close();
	}

	public function ciudades($myArray){

		$var = $myArray['idestado'];
		$mysqli = new mysqli('arreyes.db.11433073.hostedresource.com', 'arreyes', 'B%4!tjo8T3112', 'arreyes');
		if ($result = $mysqli->prepare("SELECT * FROM ciudades WHERE idestado =?; ")) {
					$result->bind_param("i", $var);
					
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

