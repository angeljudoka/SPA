<?php
/**
 * Se comprueba que los campos no esten vacios
 */
	if(isset($_POST['id'])){
		
		if (!empty($_POST['id'])) {

			require_once('general.class.php');
			$funciones = new seleccion;
			/**
			 * se almacenan en variables los campos.
			 */
			$id = htmlentities($_POST['id']);
			
			/**
			  * se compara el email para saber si existe, en dado caso se elimina.
			  */ 
			$busqueda=$funciones->buscarIdTratamiento($id);
			if (mysql_num_rows($busqueda)<0) {
					echo '<script language="javascript">alert("No existe ningun id tal dicho valor");</script>';
					echo "<script>location.href='tratamientos.php'</script>";	
				}else{
					$funciones->eliminarIdTratamiento($id);
					echo '<script language="javascript">alert("Usario Eliminado exitosamente");</script>';
					echo "<script>location.href='tratamientos.php'</script>";	
				}
				// alerta
		}
		else{
			echo '<script language="javascript">alert("Los Campos Estan Incompletos,favor de rellenar");</script>';
			echo "<script>location.href='tratamientos.php'</script>";
		}
		// alerta
	}else{
		echo '<script language="javascript">alert("Campos incompletos favor de rellenar");</script>';
		echo "<script>location.href='tratamientos.php'</script>";
	}
?>