<?php
/**
	*  @package renovaSpa
	*  @subpackage php
	*  @author Angel Rodolfo Pech Diaz <angel.pechdiaz95@gmail.com>
	* */
class bd{
	/**
	 * $baseDatos almacena la bd que se utiliza
	 * $servidor almacena el valor del servidor
	 * $usuario indica el usuario que tiene privilegio para acceder
	 * $contrasena contiene la password del usuario
	 */
	var $conexion;
	var $baseDatos;
	var $servidor;
	var $usuario;
	var $contrasena;
	/**
	  * esta funcion es para asignarle a las variables los datos de la bd
	  */
	function bd(){
		$this->baseDatos="baseDatos";
		$this->servidor="localhost";
		$this->usuario="root";
		$this->contrasena="";

	}
	/**
	* 
 	* @param $conex conexion a la base de datos.
 	*/
	function conectar(){
		if (!($conex=@mysql_connect($this->servidor,$this->usuario,$this->contrasena))) {
			echo"<h1>Error no se puede conectar a la bd.</h1>";
			exit();
		}
		if (!@mysql_select_db($this->baseDatos,$conex)){
			echo "<h1>La base de datos esta mal seleccionada.</h1>";
			exit();
		}
		$this->conexion=$conex;
		return true;
	}
}
?>
