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

  <div id="carouselConocenos" class="carousel slide carousel-fade" data-ride="carousel">

    <div class="carousel-inner carrusel-inner">
      <div class="carousel-item active">
        <img class="d-block w-100 img-fluid carrusel-inner" src="img/banner01.png" alt="First slide">
        <div class="transparencia1 d-block mx-auto">
          <h1 class="h1-caption">Víctor Montes y Asociados</h1>
          <p class="p-caption">Con&oacute;cenos</p>
        </div>
      </div>
    </div>
  </div>

  <!-- Termina banner-->
  <!-- Inicia Equipo de trabajo  -->
  <div class="text-center mb-5 ptb-50" id="ubicacion">
    <h1 class="h1-section text-center"> Nuestro Equipo </h1>
    <p class="text-center"> Conoce a nuestro quipo de Profesionistas, ellos estar&aacute;n para asesorarte </p>    
    
  </div>
  <!-- Termina Equipo de trabajo  -->












  <?php
  include_once ("includes/footer.php");
  include_once ("includes/js.php");  
  ?>

</body>

</html>