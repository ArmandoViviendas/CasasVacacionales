<?php


/**
* 
*/

class Estados{
	

	
	public function obtenerListado() {
			
		
$mysqli = new mysqli('arreyes.db.11433073.hostedresource.com', 'arreyes', 'B%4!tjo8T3112', 'arreyes');

/* comprobar la conexión */
$myArray = array();
if ($result = $mysqli->query("SELECT * FROM estados ")) {

    while($row = $result->fetch_array(MYSQL_ASSOC)) {
            $myArray[] = $row;
    }
    return json_encode($myArray);
}
}
}