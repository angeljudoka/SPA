<?php
//require once para que este requiera el documento general.class
require_once("general.class.php");
$objeto = new Seleccion;
$objeto2 = new Seleccion;
$paises=$objeto2->verPaises();
$terapeutas=$objeto->verTerapeutas();

?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
  <title>Cuestionario</title>

  <!-- Bootstrap -->
  <link href="../css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="../css/styes.css">
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
   
</head>
  <body>
    <div class="container">
      <div class="page-header">
        <div class="row">
          <div class="col-md-6">
            <img src="../img/logo.jpg" alt="Logo del la empresa" height="100" width="200">
          </div>
          <div class="col-md-6">
          <h2 id="titulo">Exoneración de Responsabilidad</h2>
          </div>
        </div>
      </div>
      <div class="form-group">
      <label for="">
        Por favor, dedique unos minutos a leer cuidadosamente la inormación siguiente y suscribirlacon su fuirma al finalizar la
        lectura, muchas gracias</label>
      </div>
      <div class="form-group">
        <label for="">1. El masaje o tratamiento que usted va a recibir tiene el próposito básico derelajación
        y el alivio de ka tensión muscular seperficial.</label>
        <label for="">2. Si usted está insatisfecho con el servicio, o experimenta cualquier tipo de molestia o
        dolor durante la    sesión, informe por favor al terapeuta cuanto antes.</label>
        <label for="">3. Si no se menciona nada durante la sesión, asumiremos que no ha habido ningún problema.</label>
        <label for="">4. Cualquier insinuación, hecho o propuesta de caracter sexual ocasionara el fiinmediato de la
        sesión y él/la huésped sera obligado al pago completo del servicio.</label>
        <label for="">5. Por la seguridad de sus valores, le sugerimos dejarlos en la caja fuerte dehabitación.
        Renova spa no asumirá ninguna responsabilidad por robo o extravío de valores. </label>
        <label for="">6. Le agradecemos su comprensión y esperamos que disfrute de nuestros servicios.</label>
      </div>
      <form action="crearUsuario.php" method="post">
        <div class="row">
          <div class="col-md-6">
            <div class="form-group">
              <label>Nombre(s)</label>
              <input type="text" class="form-control"  placeholder="&#128697; Nombre(s)" required name="nombre">
            </div>
          </div>
          <div class="col-md-6">
            <div class="form-group">
              <label>Apellido(s):</label>
              <input type="text" class="form-control"  placeholder="&#128697; Apellido(s)" required name="apellidos">
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-4">
            <div class="form-group">
              <label>Edad:</label>
              <input type="number" class="form-control"  placeholder="&#35; Edad" required name="edad">
            </div>
          </div>
          <div class="col-md-4">
            <div class="form-group">
              <label>Email:</label>
              <input type="email" class="form-control" placeholder="&#64; Email" required name="email">
            </div>
          </div>
          <div class="col-md-4">
            <div class="form-group">
              <label>Habitación:</label>
              <input type="number" class="form-control" placeholder="&#35; Numero De Habitación" name="habitacion">
            </div>
          </div>
        </div>
          <div class="row">
            <div class="col-md-4">
              <div class="form-group">
                <label>Seleccione su pais:</label>
                <br>
                  <select name="pais" id="">

                    <option value="1">Mexico</option>
                    <option value="2">Estados unidos</option>
                    <option value="3">Grecia</option>
                    <option value="4">Alemania</option>
                    <option value="5">Italia</option>
                    <option value="6">Nigeria</option>
                    <option value="7">Canada</option>
                    <option value="8">Holanda</option>
                    <option value="9">Belgica</option>
                    <option value="10">Japon</option>
                  </select>
              </div>
            </div>
            <div class="col-md-4">
              <div class="form-group">
                <label for="">Seleccione Idioma</label>
                  <select name="idioma" id="">
                    <option value="1">Español</option>
                    <option value="2">English</option>
                    <option value="3">French</option>
                    <option value="4">Italian</option>
                  </select>
              </div>
            </div>
            <div class="col-md-4">
              <div class="form-group">
              <label>Favor De Seleccionar Tu Hotel:</label>
               <select name="hotel" id="">
                 <option value="1">Bahia Principe</option>
                 <option value="2">Hotel Maya Yucatan</option>
                 <option value="3">Palace Resorts</option>
                 <option value="4">Moon Palace</option>
               </select>
              </div>
            </div>
          </div>
         <div class="row">
            <div class="col-md-6">
              <div class="form-group">
                <label>Fecha De Alta:</label>
                <input  type="date" placeholder="&#128197; Fecha De Alta" name="fecha">
              </div>
            </div>
            <div class="col-md-6">
              <div class="form-group">
                <label>Favor De Seleccionar Agencia:</label>
                <select name="agencia" id="">
                  <option value="1">Volaris</option>
                  <option value="2">Empanaditas</option>
                  <option value="3">Mayan Dammmm</option>
                  <option value="4">Manati Divers</option>
                </select>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-4">
              <div class="form-group">
                <label for="">Seleccione Su Tratamiento:</label>
                  <select name="tratamiento" id="">
                    <option value="1">Escoliosis</option>
                    <option value="2">Masaje arabe</option>
                    <option value="3">Terapia maya</option>
                  </select>
              </div>
            </div>
            <div class="col-md-4">
              <div class="form-group">
                <label for=""> Terapeuta:</label>
                  <select name="terapeuta" id="">

                    <option value="1">Mia Khalifa</option>
                    <option value="2">Sasha Grey</option>
                    <option value="3">Lisa Ann</option>
                    <option value="4">Jada Fire</option>
                  </select>

              </div>
            </div>
            <div class="col-md-4">
              <div class="form-group">
                <label for="">Antes de iniciar el tratamiento selecciona sus historial o simtomas que tiene (seleccione solo una)</label>
                  <select name="circunstancia" id="">
                    <option value="1">Embarazos</option>
                    <option value="2">Problemas de colon</option>
                    <option value="3">Dolor General</option>
                    <option value="4">Alergia</option>
                    <option value="5">Problemas De La Piel</option>
                    <option value="6">Cirugía Reciente</option>
                    <option value="7">Diabetes</option>
                    <option value="8">Acne</option>
                    <option value="9">Otro</option>
                  </select>
              </div>
            </div>
          </div>
          <label for="">Por favor, regalenos su opinion de como lo trataron.</label>
              <textarea class="form-control" name="opinion"> </textarea>
              
              <br>
              <br>
          <div class="row">
            <div class="col-md-4">

            </div>
            <div class="col-md-4">
              <img src="../img/firma.jpg" alt="">
            </div>
            <div class="col-md-4">

            </div>
          </div>
        <div class="form-group">
          <button type="submit" class="btn btn-primary btn-lg btn-block" onclick="window.print()">Registrar</button>
        </div>
      </form>
    </div>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>
