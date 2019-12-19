<!DOCTYPE html>
<html>

<?php
	 
	$tituloPagina="Contacto | Víctor Montes y Asociados";
	include_once ("includes/head.php"); 	  
 ?>

<body>
  <?php

  /*define('BASE_PATH', '/var/www/vmyasc.com/');*/
  include_once ("includes/nav.php");	  
  
 ?>


  <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
      <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
      <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
      <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
    </ol>
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img class="d-block w-100" src="img/carrusel/1.jpg" alt="First slide">
      </div>
      <div class="carousel-item">
        <img class="d-block w-100" src="img/carrusel/2.jpg" alt="Second slide">
      </div>
      <div class="carousel-item">
        <img class="d-block w-100" src="img/carrusel/3.jpg" alt="Third slide">
      </div>
    </div>
    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>

  <!-- contacts area start -->
  <div class="contacts ptb-100" id="contacts">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
          <h1 class="h1-section text-center ">
            Cont&aacute;ctanos
          </h1>
          <p class="text-center">Contestaremos a la brevedad.</p>
        </div>
      </div>
    </div>
    <div class="row justify-content-center">
      <div class="col-xs-12 col-sm-12 col-md-8 col-lg-6">
        <div class="form">
          <form action="../php/contact-form.php" class="form form--contacts">
            <input type="text" class="form_field" placeholder="Nombre" required="">
            <input type="text" class="form_field" placeholder="Telefono" required="">
            <input type="text" class="form_field" placeholder="Email" required="">
            <textarea class="form_textarea" placeholder="Mensage"></textarea>
            <button class="button button_agua button_medium mb-5" type="submit">ENVIAR</button>
          </form>
        </div>
      </div>
    </div>
  </div>
  <!-- contacts area end -->
  <div class="text-center mb-5 ptb-100" id="ubicacion">
  <h1 class="h1-section text-center"> Ubicaci&oacute;n </h1>
          <p class="text-center"> Vis&iacute;tanos por primera vez, toda la informaci&oacute;n que necesites ser&aacute; 
          brindada personalmente . </p>
          <p>Lunes a Viernes de: 10:00 am a 3:00 pm y 5:00 pm a 8:00 pm</p>
    <iframe
      src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3764.553615587871!2d-99.17735778509469!3d19.34516698693408!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x85d1ffe44f731a01%3A0x5eba228778ee32ab!2sInterior%204%2C%20Kappa%2011%2C%20Romero%20de%20Terreros%2C%2004310%20Ciudad%20de%20M%C3%A9xico%2C%20CDMX!5e0!3m2!1ses-419!2smx!4v1576175341286!5m2!1ses-419!2smx"
      width="900" height="450" frameborder="0" style="border:0;" allowfullscreen="">
    </iframe>
  </div>






  <?php
    $remitente = $_POST['correo'];
    $destinatario = 'and_3406@hotmail.com'; // en esta línea va el mail del destinatario.
    $asunto = 'E-mail enviado desde la página principal vmyasc.com'; // acá se puede modificar el asunto del mail
    if (!$_POST)
    {

    }
    else
    {
      $cuerpo =  "Nombre:   " . $_POST["nombre"]    . "\r\n"; 
      $cuerpo .= "Teléfono: " . $_POST["telefono"]  . "\r\n";
      $cuerpo .= "Email:    " . $_POST["correo"]    . "\r\n";
      $cuerpo .= "Mensaje:  " . $_POST["mensaje"]   . "\r\n";
      //las líneas de arriba definen el contenido del mail. Las palabras que están dentro de $_POST[""] deben coincidir con el "name" de cada campo. 
	    // Si se agrega un campo al formulario, hay que agregarlo acá.

      $headers  = "MIME-Version: 1.0\n";
      $headers .= "Content-type: text/plain; charset=utf-8\n";
      $headers .= "X-Priority: 3\n";
      $headers .= "X-MSMail-Priority: Normal\n";
      $headers .= "X-Mailer: php\n";
      $headers .= "From: \"".$_POST['nombre']."\" <".$remitente.">\n";

      mail($destinatario, $asunto, $cuerpo, $headers);
    }
?>


  <?php
  include_once ("includes/footer.php");
  include_once ("includes/js.php");
  
  ?>

</body>

</html>