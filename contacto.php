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
                        <div class="row">
                           <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                              <h2 class="title tc">
                                 Contaactanos
                              </h2>
                              <p class="contacts_description tc">Contestaremos a la brevedad.</p>
                           </div>
                        </div>
                        <div class="row justify-content-center">
                           <div class="col-xs-12 col-sm-12 col-md-8 col-lg-6">
                              <div class="form">
                                 <form action="../php/contact-form.php" class="form form--contacts">
                                    <input type="text" class="form_field" placeholder="Name" required="">
                                    <input type="text" class="form_field" placeholder="Email" required="">
                                    <textarea class="form_textarea" placeholder="Message"></textarea>
                                    <button class="button button_orange button_medium" type="submit">SUBMIT</button>
                                 </form>
                              </div>
                           </div>
                        </div>
                     </div>
                     <!-- contacts area end -->
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