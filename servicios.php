<!DOCTYPE html>
<html>

<?php	 
	$tituloPagina="Inicio | Víctor Montes y Asociados";
  include_once ("includes/head.php"); 	  
 ?>

<body>
  <?php
  /*define('BASE_PATH', '/var/www/vmyasc.com/');*/
  include_once ("includes/nav.php");	  
 ?>

  <div id="carouselServicios" class="carousel slide carousel-fade" data-ride="carousel">

    <div class="carousel-inner carrusel-inner">
      <div class="carousel-item active">
        <img class="d-block w-100 img-fluid carrusel-inner" src="img/carrusel/vmyasc-conocenos.png" alt="First slide">
        <div class="transparencia1 d-block mx-auto">
          <h1 class="h1-caption">Víctor Montes y Asociados</h1>
          <p class="p-caption">Servicios</p>
        </div>
      </div>
    </div>
  </div>

  <!-- Termina banner-->



  <?php
  include_once ("includes/footer.php");
  include_once ("includes/js.php");  
  ?>

</body>

</html>