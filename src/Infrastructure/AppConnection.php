<?php


/**
* Esta clase actua como singleton para asegurar que se cree una coneccion para todas las clases que
* la necesitan 
*/
final class AppConnection
{
	private $dbObjects = array();
	private static $instance;

	
	private function __construct()
	{
	}
/**
*GetInstance va a checar si ya hay una coneccion a la base de datos sino  hay crea una nueva
*/
	public static function GetInstance() {
		if(self::$instance == null)
			self::$instance = new AppConnection();

        
		return self::$instance;
	}
/**
*Obtiene la conexion 
*/
	public function GetConnection($dsn, $username, $password) {
		$hash = md5($dsn . $username . $password);
		if(array_key_exists($hash, $this->dbObjects)) {
			return $this->dbObjects[$hash];
		}
		else {
			try {
				$dbh = new mysql_connect($dsn, $username, $password);
				$dbh->setAttribute(PDO::MYSQL_ATTR_USE_BUFFERED_QUERY, TRUE);
				$this->dbObjects[$hash] = $dbh;
                $st = $this->dbObjects[$hash]->prepare('SET NAMES "utf8"');
                $st->execute();
				return $this->dbObjects[$hash]; 
			}
			catch(PDOException $e){
				print "Error! :" . $e->getMessage(). "<br/>";
				die();

			}
			
		}

	}
}
