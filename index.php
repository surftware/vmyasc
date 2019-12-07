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
          <p class="letrasTransparencia1">Despacho jurídico</p>
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
    <div class="container-fluid">

      <div class="row mt-5 mb-3">
        <div class="col-md-12 col-sm-12">
          <h1 class="h1-section"> Conozca nuestro despacho</h1>
        </div>
      </div>

      <div class="row">
        <div class="col-md-6 col-sm-6 text-justify">
          <p> Somos una firma de abogados formada en el año de 1986, por el Lic. Víctor Raúl Montes Martínez, fecha
            desde
            la cual los profesionistas que en ella han colaborado, ejercen ante los Tribunales en los cuales se
            desempeñan, litigando los negocios que nos encomiendan nuestros clientes.
          </p>

          <p> Nuestra firma legal esta integrada por profesionistas experimentados y capacitados en diferentes ramas y
            especialidades del Derecho. Cuenta con clientes de diversos tipos; tales como importantes Bancos,
            Corporativos de Industrias, Fabricas, Casas de Bolsa, Empresas de Factoraje Financiero, Arrendadoras
            Financieras, Uniones de Crédito, Empresas de Servicios y Personas Físicas y Morales entre otros.
          </p>
        </div>
        <div class="col-md-6 col-sm-6 text-right">
          <img src=" img/abogados-cdmx.png" class="imagen_m">
        </div>
        <a href="contacto.php" class="circle-button btn btn-sm botones" role="button">Saber m&aacute;s</a>

      </div>
    </div>
  </div>


  <div class="section">
    <div class="container-fluid">
      <div class="row">

        <div class="col-md-6">
          <div class="row">

            <div class="col-md-4">
              <img src="img/carrusel/x3.png" class="imgServicios mb-3" alt="">
              <img src="img/carrusel/x3.png" class="imgServicios mb-3" alt="">
              <img src="img/carrusel/x3.png" class="imgServicios mb-3" alt="">
            </div>
            <div class="col-md-4">
              <img src="img/carrusel/x3.png" class="imgServicios mb-3" alt="">
              <img src="img/carrusel/x3.png" class="imgServicios mb-3" alt="">
              <img src="img/carrusel/x3.png" class="imgServicios mb-3" alt="">
            </div>
            <div class="col-md-4">
              <img src="img/carrusel/x3.png" class="imgServicios mb-3" alt="">
              <img src="img/carrusel/x3.png" class="imgServicios mb-3" alt="">
              <img src="img/carrusel/x3.png" class="imgServicios mb-3" alt="">
            </div>

          </div>
        </div>

        <div class="col-md-6">

          <div class="row ml-5 mt-5">
            <h1 class="h1-section"> Servicios</h1>
            <div class="col-md-12">
              <p>Las opciones son variadas, el objetivo es el mismo
                Conoce las vertientes de los servicios que ofrecemos para la Prevención de Lavado de Dinero
              </p>
              <p>Las opciones son variadas, el objetivo es el mismo

                Conoce las vertientes de los servicios que ofrecemos para la Prevención de Lavado de Dinero</p>
            </div>
          </div>
          <div class="row ml-5 mt-3">
            <div class="col-md-6">
              <ul>
                <li>
                  Servicio 1
                </li>
                <li>
                Servicio 2
                </li>
                <li>
                Servicio 3
                </li>
              </ul>
            </div>
            <div class="col-md-6">
            <ul>
                <li>
                Servicio 4
                </li>
                <li>
                Servicio 5
                </li>
                <li>
                Servicio 6
                </li>
              </ul>
            </div>

          </div>

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