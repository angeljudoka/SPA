<?php
/** * incluye todo lo que se encuentra en  conexion.php */
include_once("conexion.php");
/** 
* @package renovaspa 
* @subpackage php 
* @author Angel Rodolfo Pech Diaz angel.pechdiaz95@gmail.com
*/ 

class Seleccion
{	
	var $con;
	
	
	function Seleccion(){
		$this->con = new bd;
	 }
	 /**
	 * @param sesionUsuario($usuario,$password) selecciona el password y el email del superusuario y hace una consulta a la base de datos.
	 * @param $sql 0almacena el script sql 
	 * @return retorna script
	 */
	 function sesionUsuario($usuario,$password){	 			
	    if ($this->con->conectar()==true){
	 	    
	 	    $sql="SELECT password, email FROM superusuario WHERE email ='".$usuario."' AND password='".$password."'";
	 		return $select=mysql_query($sql);
	 	}
	 }
	 /**
	 * @param sesionRecepcionist es la funcion encargada de seleccionar el password y el email  recepcionista, se hae una consulta a la bd.
	 * @param $sql se almacenan en variables los campos.
	 * @return retorna script.
	 */
	 function sesionRecepcionista($usuario,$password){	 			
	    
	    if ($this->con->conectar()==true){
	 	    $sql="SELECT password, email FROM recepcionista WHERE email ='".$usuario."' AND password='".$password."'";
	 		return $select=mysql_query($sql);
	 	}
	 }
	 /**
	 * @param sesionRecepcionista el password y el email del recepcionista, consulta a la base de datos.
	 * @param $sql se almacenan en variables los campos.
	 * @return regresa el script.
	 */
	 function altaCliente($usuario,$apellidos,$edad,$habitacion,$email,$pais,$idioma,$hotel,$fecha,$agencia,$tratamiento,$terapeuta,$circunstancia,$opinion){	 			
	    if ($this->con->conectar()==true){
	 	    
	 	    $sql="INSERT INTO clientes(pais_id,idioma_id,hotel_id,agencia_id,tratamiento_id,	terapeuta_id,circustancias_medica_id,fecha_alta,nombre,apellidos,edad,correo_electronico,habitacion,opinion) 
	 	    VALUES ('".$pais."', '".$idioma."', '".$hotel."', '".$agencia."', '".$tratamiento."', '".$terapeuta."','".$circunstancia."', '".$fecha."', '".$usuario."', '".$apellidos."', '".$edad."','".$email."', '".$habitacion."', '".$opinion."')";
	 		return $select=mysql_query($sql);
	 	}
	 }
	 /**
	 * @param verPaises() seleccionar columnas de la tabla correspondiete
	 * @param $sql se almacenan en variables los campos. 
	 * @return retorna  script.
	 */
	 function verPaises(){	 			
	    
	    if ($this->con->conectar()==true){
	 	   
	 	    $sql="SELECT * FROM paises";
	 		return $select=mysql_query($sql);
	 	}
	 }
	 /**
	 * @param verTerapeutas() selecciona todas las columna de la tabla correspondiente
	 * @param $sql se almacenan en variables los campos.
	 * @return retorna el script.
	 */
	 function verTerapeutas(){	 			
	    if ($this->con->conectar()==true){
	 	   
	 	    $sql="SELECT * FROM terapeutas";
	 		return $select=mysql_query($sql);
	 	}
	 }
	 /**
	 * @param buscarTerapeuta selecciona el email de la tabla terapeutas
	 * @param $sql se almacenan en variables los campos. 
	 * @return retorna el script.
	 */
	 function buscarTerapeuta($email)
	 {	 			
	    if ($this->con->conectar()==true)
	    {
	 	    $sql="SELECT email FROM terapeutas WHERE email='".$email."'";
	 		return $select=mysql_query($sql);
	 	}
	 }
	 /**
	 * @param buscarIdTerapeuta selecciona el id de la tabla terapeutas
	 * @param $sql encargada de almacenar el script sql 
	 * @return regresa el script.
	 */
	 function buscarIdTerapeuta($id)
	 {	 			
	    if ($this->con->conectar()==true)
	    {
	 	    $sql="SELECT id FROM terapeutas WHERE id='".$id."'";
	 		return $select=mysql_query($sql);
	 	}
	 }
	 /**
	 * @param crearTerapeuta crear un nuevo terapeuta en la tabla correspondiente
	 * @param $sql encargada de almacenar el script sql 
	 * @return retorna  script.
	 */
	  function crearTerapeuta($nombre,$apellidos,$telefono,$sexo,$email)
	 {	 			
	    if ($this->con->conectar()==true)
	    {
	 	    $sql="INSERT INTO terapeutas(nombre,apellidos,sexo,telefono,email) 
	 	    VALUES ('".$nombre."', '".$apellidos."', '".$sexo."', '".$telefono."', '".$email."')";
	 		return $select=mysql_query($sql);
	 	}
	 }
	 /**
	 * @param eliminarTerapeuta elimina a un terapeuta en la tabla correspondiente
	 * @param $sql encargada de almacenar el script sql 
	 * @return retorna  script.
	 */
	 function eliminarTerapeuta($id)
	 {	 			
	    if ($this->con->conectar()==true)
	    {
	 	    $sql="DELETE FROM terapeutas WHERE id='".$id."'";
	 		return $select=mysql_query($sql);
	 	}
	 }
	 /**
	 * @param verCMedicas() selecciona todas las columnas de la tabla circuntancias_medicas
	 * @param $sql encargada de almacenar el script sql 
	 * @return retorna el  script.
	 */
	 function verCMedicas(){	 			
	    if ($this->con->conectar()==true){
	 	    
	 	    $sql="SELECT * FROM circustancias_medicas";
	 		return $select=mysql_query($sql);
	 	}
	 }
	 /**
	 * @param buscarCMedicas($cMedica) selecciona la columna nombre de la tabla correspondiente
	 * @param $sql encargada de almacenar el script sql 
	 * @return regresa el script.
	 */
	 function buscarCMedicas($cMedica){	 			
	    
	    if ($this->con->conectar()==true){
	 	    $sql="SELECT nombre FROM circustancias_medicas WHERE nombre='".$cMedica."'";
	 		return $select=mysql_query($sql);
	 	}
	 }
	 /**
	 * @param crearCMedica($nombre) crea una nueva circunstancia medica en la tabla correspondiente
	 * @param $sql encargada de almacenar el script sql 
	 * @return retorna  script.
	 */
	 function crearCMedica($nombre){	 			
	    
	    if ($this->con->conectar()==true){
	 	    $sql="INSERT INTO circustancias_medicas(nombre) 
	 	    VALUES ('".$nombre."')";
	 		return $select=mysql_query($sql);
	 	}
	 }
	 /**
	 * @param buscarIdCMedica($id) busca el id de la circunstancia medica en la tabla correspondiente
	 * @param $sql encargada de almacenar el script sql 
	 * @return retorna script
	 */
	 function buscarIdCMedica($id){	 			
	    
	    if ($this->con->conectar()==true){
	 	    $sql="SELECT id FROM circustancias_medicas WHERE id='".$id."'";
	 		return $select=mysql_query($sql);
	 	}
	 }
	 /**
	 * @param eliminarIdCMedica($id) busca el id de la circunstancia medica solicitada en la tabla circuntancias_medicas y se borra
	 * @param $sql encargada de almacenar el script sql 
	 * @return retorna script.
	 */
	 function eliminarIdCMedica($id){	 			
	    
	    if ($this->con->conectar()==true){
	 	    $sql="DELETE FROM circustancias_medicas WHERE id='".$id."'";
	 		return $select=mysql_query($sql);
	 	}
	 }
	 /**
	 * @param verTratamientos() selecciona todas las columnas de la tabla tratamientos
	 * @param $sql encargada de almacenar el script sql 
	 * @return retorna script
	 */
	 function verTratamientos(){	 			
	    
	    if ($this->con->conectar()==true){
	 	    $sql="SELECT * FROM tratamientos";
	 		return $select=mysql_query($sql);
	 	}
	 }
	 /**
	 * @param buscarTratamiento($nombre) selecciona la columna nombre de la tabla correspondiete
	 * @param $sql encargada de almacenar el script sql 
	 * @return retorna script
	 */
	 function buscarTratamiento($nombre){	 			
	   
	    if ($this->con->conectar()==true){
	 	    $sql="SELECT nombre FROM tratamientos WHERE nombre='".$nombre."'";
	 		return $select=mysql_query($sql);
	 	}
	 }
	 /**
	 * @param crearTratamiento($nombre) selecciona la columna nombre de la tabla tratamientos y crea uno nuevo
	 * @param $sql encargada de almacenar el script sql
	 * @return retorna script
	 */
	 function crearTratamiento($nombre){	 			
	    
	    if ($this->con->conectar()==true){
	 	    $sql="INSERT INTO tratamientos(nombre) 
	 	    VALUES ('".$nombre."')";
	 		return $select=mysql_query($sql);
	 	}
	 }
	 /**
	 * @param buscarIdTratamiento($id) selecciona la columna id de la tabla correspondiente
	 * @param $sql encargada de almacenar el script sql 
	 * @return retorna script
	 */
	 function buscarIdTratamiento($id){	 			
	    
	    if ($this->con->conectar()==true){
	 	    $sql="SELECT id FROM tratamientos WHERE id='".$id."'";
	 		return $select=mysql_query($sql);
	 	}
	 }
	 /**
	 * @param eliminarIdTratamiento($id) selecciona la columna id de la tabla tratamientos 
	 * @param $sql encargada de almacenar el script sql 
	 * @return retorna script
	 */
	 function eliminarIdTratamiento($id){	 			
	    if ($this->con->conectar()==true){
	 	    $sql="DELETE FROM tratamientos WHERE id='".$id."'";
	 		return $select=mysql_query($sql);
	 	}
	 }
}

?>