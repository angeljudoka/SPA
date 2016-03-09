<?php
/**
 * Se comprueba que los campos no esten vacios
 */
	if(isset($_POST['id'])){
		
		if (!empty($_POST['id'])) {

			require_once('general.class.php');
			$funciones = new seleccion;
			/**
			 * Se almacenan en variable los campos que que deben de llenar
			 */
			$id = htmlentities($_POST['id']);
			
			/**
			  * se compara el email para saber que existe en dado caso de que no se elimina valor.
			  */ 
			$busqueda=$funciones->buscarIdCMedica($id);
			if (mysql_num_rows($busqueda)<0) {
					echo '<script language="javascript">alert("No existe ninguna id parecida");</script>';
					echo "<script>location.href='cMedicas.php'</script>";	
				}else{
					$funciones->eliminarIdCMedica($id);
					echo '<script language="javascript">alert("Usario Eliminado Correctamente");</script>';
					echo "<script>location.href='cMedicas.php'</script>";	
				}
				// alerta
		}
		else{
			echo '<script language="javascript">alert("Los Campos estan incompletos favor de rellenar");</script>';
			echo "<script>location.href='cMedicas.php'</script>";
		}
		// alerta
	}else{
		echo '<script language="javascript">alert("Faltaron Algunos campos por completar.");</script>';
		echo "<script>location.href='cMedicas.php'</script>";
	}
?>