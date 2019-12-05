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

  <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
      <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
      <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
      <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
    </ol>
    <div class="carousel-inner carrusel-inner">
      <div class="carousel-item active">
        <img class="d-block w-100" src="img/carrusel/1.jpg" alt="First slide">
        <div class="transparencia1 d-block mx-auto">
          <p>Despacho jurídico</p>
        </div>
      </div>
      <div class="carousel-item">
        <img class="d-block w-100" src="img/carrusel/2.jpg" alt="Second slide">
        <div class="transparencia1 d-block mx-auto">
          <p>Avisos</p>
        </div>
      </div>
      <div class="carousel-item">
        <img class="d-block w-100" src="img/carrusel/3.jpg" alt="Third slide">
        <div class="transparencia1 d-block mx-auto">
          <p>Despacho jurídico</p>
        </div>
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

  <div class="section">
    <div class="container">

      <div class="row mt-5 mb-3">
        <div class="col-md-12 col-sm-12">
          <h1 class="h1-section text-left"> Conozca nuestro despacho</h1>
        </div>
      </div>

      <div class="row">
        <div class="col-md-8 col-sm-6">
          <p> La Asociación de Prevención de Lavado de Dinero y Delitos Económicos –ASPLDE— es una
            organización compuesta por socios y miembros, expertos en la prevención y detección del lavado de dinero
            y otros delitos económicos, cuya finalidad radica en conformar la red más amplia de expertos en México,
            en la construcción permanente de las mejores prácticas en la materia.
          </p>
          <p> En ASPLDE, estamos convencidos, de que contar con herramientas y conocimientos de vanguardia,
            permitiran que la prevención del lavado de dinero, financiamiento al terrorismo y otros delitos económicos
            se realicen de manera técnica, integral y profesional.
          </p>
        </div>
        <div class="col-md-4 col-sm-6 text-right">
          <img src=" img/logoFooter.png" class="imagen_m">
        </div>
        <div a href= "" class="circle-button btn btn-sm">  Arcerca de nosotros </a>

        </div>
      </div>
    </div>
  </div>



  <?php
  include_once ("includes/footer.php");
  include_once ("includes/js.php");  
  ?>

</body>

</html>