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
  <div class="block contacts" id="contacts">
    <div class="center">
      <div class="block__title  wow bounceInLeft">
        <span>Get in touch</span>
        Contact Us
        <p>Send us a message to contact you and give you more information about the <strong>Spanish
            School in
            Mexico City </strong></p>
      </div>
      <div class="contacts__block">
        <div class="left_side  wow bounceInLeft">
          <ul>
            <li><a href="mailto:exampleemail@gmail.com"><i
                  class="fa fa-envelope"></i>contact@conversationalspanishmx.com</a></li>
            <li><a href="tel:+52 5613524552"><i class="fa fa-phone"></i>+52 56-13-52-45-52</a></li>
            <li><a href="https://goo.gl/maps/X8ZRwoqS8MvsVzP39" target="_blank"><i class="fa fa-map-marker"></i>Mexico
                City</a></li>
            <li><a href="skype:contact@conversationalspanishmx.com"><i
                  class="fab fa-skype"></i></i>contact@conversationalspanishmx.com</a></li>
          </ul>
          <div class="soc">
            <div class="title">
              Social Networks
            </div>
            <div class="links">
              <a href="https://blog.conversationalspanishmx.com"><i class="fab fa-wordpress-simple"></i></a>
              <a href="skype:contact@conversationalspanishmx.com?chat"><i class="fab fa-skype"></i></a>
              <a href="https://www.instagram.com/conversationalspanishmx/"><i class="fab fa-instagram"></i></a>
              <a href="https://www.facebook.com/Conversational-Spanish-108934343810844"><i
                  class="fab fa-facebook"></i></a>
            </div>
          </div>
        </div>
        <div class="right_side  wow bounceInRight">
          <form action="index.php" method="post">
            <div class="row">
              <input name="nombre" type="text" class="input" placeholder="Name*" required>
            </div>
            <div class="row">
              <input name="telefono" type="text" class="input" placeholder="Telephone">
            </div>
            <div class="row">
              <input name="correo" type="text" class="input" placeholder="Email*" required>
            </div>
            <div class="row">
              <textarea name="mensaje" placeholder="Message" class="textarea" rows="5" required></textarea>
            </div>
            <div class="row">
              <div class="btn__wrap__right">
                <input id="bSend" type="submit" class="btn btn__orange btn__large font-weight-bold" value="Send">
              </div>
            </div>
          </form>

        </div>
      </div>

    </div>
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