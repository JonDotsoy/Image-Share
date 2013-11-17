<?php
/**
 * Clase base para controlar imagenes, requiere la connecion
 *
 * @package default
 * @author Jonathan Delgado <jonad.correo@gamil.com> 
 **/
class imagePublic
{
	/**
	 * Almacena la connecion de la base de datos
	 *
	 * @var mysqli
	 **/
	var $connect;
	function __construct($connect) {
		$this->connect = $connect;
	}
} // END class imagePublic
?>