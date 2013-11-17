<?php
include 'util/imagePublic.php';
/**
 * Administra la aplicacion principal
 *
 * @package default
 * @author Jonathan Delgado <jonad.correo@gamil.com> 
 **/
class image
{

	/**
	 * almacena las configuraciones
	 *
	 * @var string
	 **/
	private $config;
	/**
	 * undocumented class variable
	 *
	 * @var mysqli
	 **/
	protected $connect;

	function __construct() {
	}

	/**
	 * Ejecuta la instalación en la base de datos
	 *
	 * @return void
	 * @author Jonathan Delgado <jonad.correo@gamil.com>
	 **/
	function install()
	{

	}

	/**
	 * undocumented function
	 *
	 * @return void
	 * @author 
	 **/
	function createConnect()
	{
		$this->connect = new mysqli($this->config["HOST"],$this->config["USER"],$this->config["PASS"],$this->config["DB"]);
		if($this->connect->connect_error){
			die("Error en la concesión a la base de datos (".$this->connect->connect_errn.") ".$this->connect->connect_error);
		}
	}

	/**
	 * cargar el archivo de configuración config.ini
	 *
	 * @return void
	 * @author Jonathan Delgado <jonad.correo@gamil.com> 
	 **/
	function loadConfig($file = "config.ini")
	{
		$this->config = parse_ini_file($file);
	}
} // END class image
?>