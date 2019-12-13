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

  <div id="carouselndex" class="carousel slide carousel-fade" data-ride="carousel">
    <ol class="carousel-indicators">
      <li data-target="#carouselndex" data-slide-to="0" class="active"></li>
      <li data-target="#carouselndex" data-slide-to="1"></li>
      <li data-target="#carouselndex" data-slide-to="2"></li>
    </ol>
    <div class="carousel-inner carrusel-inner">
      <div class="carousel-item active">
        <img class="d-block w-100" src="img/carrusel/1.jpg" alt="First slide">
        <div class="transparencia1 d-block mx-auto">
          <p class="carousel-caption">Despacho jur&iacute;dico</p>
        </div>
      </div>
      <div class="carousel-item">
        <img class="d-block w-100" src="img/carrusel/2.jpg" alt="Second slide">
        <div class="transparencia1 d-block mx-auto">
          <p class="carousel-caption">Despacho jur&iacute;dico</p>
        </div>
      </div>
      <div class="carousel-item">
        <img class="d-block w-100" src="img/carrusel/3.jpg" alt="Third slide">
        <div class="transparencia1 d-block mx-auto">
          <p class="carousel-caption">Despacho jur&iacute;dico</p>
        </div>
      </div>
    </div>
    <a class="carousel-control-prev" href="#carouselndex" role="button" data-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselndex" role="button" data-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>

  <!-- Termina Carrusel-->

  <div class="section mt-5 mb-5 ">
    <div class="container">


      <div class="row">

        <div class="col-sm-12 col-md-6 text-justify mb-5">
          <h1 class="h1-section mb-4 "> Conozca nuestro despacho</h1>

          <p class=""> Somos una firma de abogados formada en el año de 1986, por el Lic. Víctor Raúl Montes Martínez,
            fecha
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

        <div class="col-sm-12 col-md-6 d-block mx-auto mb-5">
          <img src=" img/abogados-cdmx.png" class="imagen_m">
          <a href="conocenos.php " class="btn btn-sm botones rounded-pill mt-4 ml-5" role="button">Saber m&aacute;s</a>
        </div>

      </div>


    </div>
  </div>


  <div class="section">
    <div class="container">
      <div class="row">

        <div class="col-md-6">
          <div class="row">

            <div class="col-md-4">
              <img src="img/abogado1.png" class="imgServicios mb-3 ml-1" alt="">
              <img src="img/abogado2.png" class="imgServicios mb-3 ml-1" alt="">
              <img src="img/abogado3.png" class="imgServicios mb-3 ml-1" alt="">
            </div>
            <div class="col-md-4">
              <img src="img/abogado4.png" class="imgServicios mb-3 ml-1" alt="">
              <img src="img/abogado5.png" class="imgServicios mb-3 ml-1" alt="">
              <img src="img/abogado6.png" class="imgServicios mb-3 ml-1" alt="">
            </div>
            <div class="col-md-4">
              <img src="img/abogado7.png" class="imgServicios mb-3 ml-1" alt="">
              <img src="img/abogado8.png" class="imgServicios mb-3 ml-1" alt="">
              <img src="img/abogado9.png" class="imgServicios mb-3 ml-1" alt="">
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
                <li class="cLetra">
                  Servicio 1
                </li>
                <li class="cLetra">
                  Servicio 2
                </li>
                <li class="cLetra">
                  Servicio 3
                </li>
              </ul>
            </div>
            <div class="col-md-6">
              <ul>
                <li class="cLetra">
                  Servicio 4
                </li>
                <li class="cLetra">
                  Servicio 5
                </li>
                <li class="cLetra">
                  Servicio 6
                </li>
              </ul>
            </div>

          </div>

        </div>

      </div>
    </div>
  </div>

  <div class="section mt-5 mb-5">
    <div class="container">

      <div class="row">
        <div class="col-md-12">
          <h1 class="h1-section text-center"> Principales miembros </h1>
          <p class="text-center"> El conocimiento, asesoramiento y apoyo de miembros expertos para enriquecer el
            proyecto
          </p>
          <div class="flexslider carousel">
            <div class="flexslider carousel">
              <ul class="slides">

                <li>
                  <img src="img/ab01.png">
                  <div class="">
                    <h4> Presidente de la firma </h4>
                    <p>titular de la unidad de inteligencia financiera</p>
                  </div>
                </li>
                <li>
                  <img src="img/ab02.png" />
                  <section class="caption">
                    <p> Presidente de la firma </p>
                    <p>titular de la unidad de inteligencia financiera</p>
                  </section>
                </li>
                <li>
                  <img src="img/ab03.png" />
                  <section class="caption">
                    <p> Presidente de la firma </p>
                    <p>titular de la unidad de inteligencia financiera</p>
                  </section>
                </li>
                <li>
                  <img src="img/ab04.png" />
                  <section class="caption">
                    <p> Presidente de la firma </p>
                    <p>titular de la unidad de inteligencia financiera</p>
                  </section>
                </li>
                <li>
                  <img src="img/ab05.png" />
                  <section class="caption">
                    <p> Presidente de la firma </p>
                    <p>titular de la unidad de inteligencia financiera</p>
                  </section>
                </li>
                <li>
                  <img src="img/ab06.png" />
                  <section class="caption">
                    <p class="font-size:small"> Presidente de la firma </p>
                    <p>titular de la unidad de inteligencia financiera</p>
                  </section>
                </li>
                <li>
                  <img src="img/ab06.png" />
                  <section class="caption">
                    <p> Presidente de la firma </p>
                    <p>titular de la unidad de inteligencia financiera</p>
                  </section>
                </li>
                <li>
                  <img src="img/ab06.png" />
                  <section class="caption">
                    <p> Presidente de la firma </p>
                    <p>titular de la unidad de inteligencia financiera</p>
                  </section>
                </li>
                <!-- items mirrored twice, total of 12 -->
              </ul>
            </div>
          </div>
        </div>
      </div>

    </div>
  </div>
  <!-- Carrusel boostrap -->
  <div class="container">

    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
      <ol class="carousel-indicators">
        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="4"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="5"></li>
      </ol>
      <div class="carousel-inner">

        <div class="carousel-item active">
          <img class="d-block w-100" src="img/ab01.png" alt="First slide">
          <div class="carousel-caption d-none d-md-block">
            <h5>Presidente de la firma</h5>
            <p>titular de la unidad de inteligencia financiera</p>
          </div>
        </div>
        <div class="carousel-item ">
          <img class="d-block w-100" src="img/ab02.png" alt="Second slide">
          <div class="carousel-caption d-none d-md-block">
            <h5>Presidente de la firma</h5>
            <p>titular de la unidad de inteligencia financiera</p>
          </div>
        </div>
        <div class="carousel-item ">
          <img class="d-block w-100" src="img/ab03.png" alt="Third slide">
          <div class="carousel-caption d-none d-md-block">
            <h5>Presidente de la firma</h5>
            <p>titular de la unidad de inteligencia financiera</p>
          </div>
        </div>
        <div class="carousel-item ">
          <img class="d-block w-100" src="img/ab04.png" alt="Fourth slide">
          <div class="carousel-caption d-none d-md-block">
            <h5>Presidente de la firma</h5>
            <p>titular de la unidad de inteligencia financiera</p>
          </div>
        </div>
        <div class="carousel-item ">
          <img class="d-block w-100" src="img/ab05.png" alt="Fifth slide">
          <div class="carousel-caption d-none d-md-block">
            <h5>Presidente de la firma</h5>
            <p>titular de la unidad de inteligencia financiera</p>
          </div>
        </div>
        <div class="carousel-item ">
          <img class="d-block w-100" src="img/ab06.png" alt="Sixth slide">
          <div class="carousel-caption d-none d-md-block">
            <h5>Presidente de la firma</h5>
            <p>titular de la unidad de inteligencia financiera</p>
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
  </div>

  <!-- Carrusel boostrap final-->
  <!-- Carrusel boostrap multiples items-->
  <div class="container-fluid">
    <div id="carouselExample" class="carousel slide" data-ride="carousel" data-interval="9000">
        <div class="carousel-inner row w-10 mxauto" role="listbox">
            <div class="carousel-item col-md-4 active">
                <img class="img-fluid mx-auto d-bloc" src="img/ab01.png" alt="slide 1">
                <div class="carousel-caption d-none d-md-block">
            <h5>Presidente de la firma</h5>
            <p>titular de la unidad de inteligencia financiera</p>
          </div>
            </div>
            <div class="carousel-item col-md-4">
                <img class="img-fluid mx-auto d-block" src="img/ab02.png" alt="slide 2">
                <div class="carousel-caption d-none d-md-block">
            <h5>Presidente de la firma</h5>
            <p>titular de la unidad de inteligencia financiera</p>
          </div>
            </div>
            <div class="carousel-item col-md-4">
                <img class="img-fluid mx-auto d-block" src="img/ab03.png" alt="slide 3">
                <div class="carousel-caption d-none d-md-block">
            <h5>Presidente de la firma</h5>
            <p>titular de la unidad de inteligencia financiera</p>
          </div>
            </div>
            <div class="carousel-item col-md-4">
                <img class="img-fluid mx-auto d-block" src="img/ab04.png" alt="slide 4">
                <div class="carousel-caption d-none d-md-block">
            <h5>Presidente de la firma</h5>
            <p>titular de la unidad de inteligencia financiera</p>
          </div>
            </div>
            <div class="carousel-item col-md-4">
                <img class="img-fluid mx-auto d-block" src="img/ab05.png" alt="slide 5">
                <div class="carousel-caption d-none d-md-block">
            <h5>Presidente de la firma</h5>
            <p>titular de la unidad de inteligencia financiera</p>
          </div>
            </div>
            <div class="carousel-item col-md-4">
                <img class="img-fluid mx-auto d-block" src="img/ab06.png" alt="slide 6">
                <div class="carousel-caption d-none d-md-block">
            <h5>Presidente de la firma</h5>
            <p>titular de la unidad de inteligencia financiera</p>
          </div>
            </div>
            <div class="carousel-item col-md-4">
                <img class="img-fluid mx-auto d-block" src="img/ab07.png" alt="slide 7">
                <div class="carousel-caption d-none d-md-block">
            <h5>Presidente de la firma</h5>
            <p>titular de la unidad de inteligencia financiera</p>
          </div>
            </div>
            <div class="carousel-item col-md-4">
                <img class="img-fluid mx-auto d-block" src="img/ab07.png" alt="slide 7">
                <div class="carousel-caption d-none d-md-block">
            <h5>Presidente de la firma</h5>
            <p>titular de la unidad de inteligencia financiera</p>
          </div>
            </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExample" role="button" data-slide="prev">
            <i class="fa fa-chevron-left fa-lg text-muted"></i>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next text-faded" href="#carouselExample" role="button" data-slide="next">
            <i class="fa fa-chevron-right fa-lg text-muted"></i>
            <span class="sr-only">Next</span>
        </a>
    </div>
</div>
  <!-- Carrusel boostrap multiples items final -->
  <div class="section bg-light mt-5 mb-5">
    <div class="container">

      <div class="row">
        <div class="col-sm-12 col-md-12 text-center mt-5">
          <h1 class="h1-section text-center"> Testimonios </h1>
          <p class="text-center"> La experiencia de nuestros miembros asesores </p>
        </div>
      </div>

      <div class="row">
        <div class="col-sm-12 col-md-4 text-justify ">
          <p class=""> "Ante una realidad cada vez más exigente y
            riesgosa en materia de cumplimiento normativo y frente a los complejos
            atajos que toma la delincuencia organizada para mover sus fondos ilegales
            es encomiable el surgimiento de una organización dedicada a la profesionalización
            de todos los actores encargados de detectar, prevneir y controlar los delitos financieros,
            que van desde el lavado de dinero hasta la corrupción internacional." </p>
          <div class="tc">
            <img src="img/abogado7.png" class="imgServicios mb-3 ml-1 border-light rounded-circle  " alt="">


            <p><b>Marcos Czacki</b></p>
          </div>
        </div>

        <div class="col-sm-12 col-md-4 text-justify">
          <p class=""> "Ante una realidad cada vez más exigente y
            riesgosa en materia de cumplimiento normativo y frente a los complejos
            atajos que toma la delincuencia organizada para mover sus fondos ilegales
            es encomiable el surgimiento de una organización dedicada a la profesionalización
            de todos los actores encargados de detectar, prevneir y controlar los delitos financieros,
            que van desde el lavado de dinero hasta la corrupción internacional." </p>
          <div class="tc">
            <img src="img/abogado7.png" class="imgServicios mb-3 ml-1 border-light rounded-circle " alt="">


            <p><b>Marcos Czacki</b></p>
          </div>
        </div>

        <div class="col-sm-12 col-md-4 text-justify">

          <p class=""> "Ante una realidad cada vez más exigente y
            riesgosa en materia de cumplimiento normativo y frente a los complejos
            atajos que toma la delincuencia organizada para mover sus fondos ilegales
            es encomiable el surgimiento de una organización dedicada a la profesionalización
            de todos los actores encargados de detectar, prevneir y controlar los delitos financieros,
            que van desde el lavado de dinero hasta la corrupción internacional." </p>
          <div class="tc">
            <img src="img/abogado7.png" class="imgServicios mb-3 ml-1 border-light rounded-circle " alt="">


            <p><b>Armando Arciniega</b></p>
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