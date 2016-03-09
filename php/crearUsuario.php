<?php
//Se comprueban que se manden todos los campos a  "altaTecnico.php"
	if(isset($_POST['nombre']) AND isset($_POST['apellidos']) AND isset($_POST['edad']) AND isset($_POST['habitacion']) AND isset($_POST['email']) AND isset($_POST['pais']) AND isset($_POST['idioma']) AND isset($_POST['hotel']) AND isset($_POST['fecha']) AND isset($_POST['agencia']) AND isset($_POST['tratamiento']) AND isset($_POST['terapeuta'])
		AND isset($_POST['circunstancia']) AND isset($_POST['opinion'])){
		
		if (!empty($_POST['usuario']) OR !empty($_POST['apellidos']) OR !empty($_POST['edad']) OR !empty($_POST['habitacion']) OR !empty($_POST['email']) OR !empty($_POST['pais']) OR !empty($_POST['idioma']) OR !empty($_POST['idioma']) OR !empty($_POST['fecha'])  OR !empty($_POST['agencia']) OR !empty($_POST['tratamiento']) OR !empty($_POST['terapeuta']) OR !empty($_POST['circunstancia']) OR !empty($_POST['opinion'])) {
		// Se  llaman ciertas funciones del"general.class.php" 
			require_once('general.class.php');
			$crear = new seleccion;
			// estas se almacenan en variables "altaTecnico.php"
			$usuario = htmlentities($_POST['nombre']);
			$apellidos = htmlentities($_POST['apellidos']);
			$edad = htmlentities($_POST['edad']);
			$habitacion = htmlentities($_POST['habitacion']);
			$email = htmlentities($_POST['email']);
			$pais = htmlentities($_POST['pais']);
			$idioma = htmlentities($_POST['idioma']);
			$hotel = htmlentities($_POST['hotel']);	
			$fecha = htmlentities($_POST['fecha']);
			$agencia = htmlentities($_POST['agencia']);
			$tratamiento = htmlentities($_POST['tratamiento']);
			$terapeuta = htmlentities($_POST['terapeuta']);
			$circunstancia = htmlentities($_POST['circunstancia']);
			$opinion = htmlentities($_POST['opinion']);

			// se compara el email para saber si existe, si existe se crea si no arroja error
			
					$crear->altaCliente($usuario,$apellidos,$edad,$habitacion,$email,$pais,$idioma,$hotel,$fecha,$agencia,$tratamiento,$terapeuta,$circunstancia,$opinion);
					echo '<script language="javascript">alert("Usario Registrado Correctamente");</script>';
					echo "<script>location.href='recepcionista.php'</script>";	
				
				// alerta
		}
		else{
			echo '<script language="javascript">alert("Los Campos Estan Vacios, Por Favor Vuleva  intentar");</script>';
			echo "<script>location.href='altaTecnico.php'</script>";
		}
		// alerta
	}else{
		echo '<script language="javascript">alert("Faltaron Algunos Campos Por Rellenar");</script>';
		echo "<script>location.href='altaTecnico.php'</script>";
	}
?>