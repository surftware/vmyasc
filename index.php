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
  <!-- Inicia Carrusel index-->
  <div id="carouselndex" class="carousel slide carousel-fade" data-ride="carousel">
    <ol class="carousel-indicators">
      <li data-target="#carouselndex" data-slide-to="0" class="active"></li>
      <li data-target="#carouselndex" data-slide-to="1"></li>
      <li data-target="#carouselndex" data-slide-to="2"></li>
    </ol>
    <div class="carousel-inner ">
      <div class="carousel-item active">
        <img class="d-block w-100 img-fluid carrusel-inner" src="img/abogado8.png" alt="First slide">
        <div class="transparencia1 d-block mx-auto">
          <h1 class="h1-caption">Víctor Montes y Asociados</h1>
          <p class="p-caption">Despacho jur&iacute;dico</p>
        </div>
      </div>
      <div class="carousel-item">
        <img class="d-block w-100 img-fluid carrusel-inner" src="img/carrusel/2.jpg" alt="Second slide">
        <div class="transparencia1 d-block mx-auto">
          <p class="carousel-caption">Despacho jur&iacute;dico</p>
        </div>
      </div>
      <div class="carousel-item">
        <img class="d-block w-100 img-fluid carrusel-inner" src="img/carrusel/3.jpg" alt="Third slide">
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

  <!-- Termina Carrusel index-->

  <!-- Inicia Conozca nuestro despacho-->
  <div class="section m-5 " id="Conozca">
    <div class="container">


      <div class="row">

        <div class="col-sm-12 col-md-8 ptb-100">
          <h1 class="h1-section mb-5 text-center"> Conozca nuestro despacho</h1>

          <p class="m-5"> Somos una firma de abogados formada en el año de 1986, por el Lic. V&iacute;ctor Ra&uacute;l
            Montes Mart&iacute;nez,
            fecha
            desde
            la cual los profesionistas que en ella han colaborado, ejercen ante los Tribunales en los cuales se
            desempeñan, litigando los negocios que nos encomiendan nuestros clientes.
          </p>

          <p class="m-5"> Nuestra firma legal esta integrada por profesionistas experimentados y capacitados en
            diferentes ramas y
            especialidades del Derecho. Cuenta con clientes de diversos tipos; tales como importantes Bancos,
            Corporativos de Industrias, Fabricas, Casas de Bolsa, Empresas de Factoraje Financiero, Arrendadoras
            Financieras, Uniones de Crédito, Empresas de Servicios y Personas Físicas y Morales entre otros.
          </p>
          <a href="conocenos.php">
            <button class="button button_agua button_medium mb-5 ml-5" type="submit">Saber m&aacute;s
            </button>
          </a>
        </div>

        <div class="col-sm-12 col-md-4">

          <img src="img/abogados-cdmx.png" class="imagen_m img-fluid ptb-100">
          <div class="transparenciaImg d-block mx-auto">
            <p class="captionImg my-0">Lic. V&iacute;ctor Montes</p>
          </div>


        </div>


      </div>


    </div>
  </div>
  <!-- Termina Conozca nuestro despacho-->

  <!-- Inicia Servicios-->
  <div class="section m-5" id="Servicios">
    <div class="container">

      <div class="row">

        <div class="col-md-6 col-sm-12 ptb-100">

          <div class="row">
            <div class="col-sm-4 col-md-4 ">
            <a href="servicios.php">
              <img src="img/abogado1.png" class="imgServicios img-fluid" alt="">
              </a>  
            </div>
            <div class="col-sm-4 col-md-4  ">
            <a href="servicios.php">
              <img src="img/abogado2.png" class="imgServicios img-fluid" alt="">
              </a> 
            </div>
            <div class="col-sm-4 col-md-4 ">
            <a href="servicios.php">
              <img src="img/abogado3.png" class="imgServicios img-fluid" alt="">
            </a> 
            </div>
          </div>

          <div class="row my-4">
            <div class="col-sm-4 col-md-4 ">
            <a href="servicios.php">
              <img src="img/abogado4.png" class="imgServicios img-fluid" alt="">
              </a> 
            </div>
            <div class="col-sm-4 col-md-4 ">
            <a href="servicios.php">
              <img src="img/abogado5.png" class="imgServicios img-fluid" alt="">
              </a> 
            </div>
            <div class="col-sm-4 col-md-4 ">
            <a href="servicios.php">
              <img src="img/abogado10.png" class="imgServicios img-fluid" alt="">
              </a>
            </div>
          </div>

          <div class="row">
            <div class="col-sm-4 col-md-4 ">
            <a href="servicios.php">
              <img src="img/abogado7.png" class="imgServicios img-fluid" alt="">
              </a>
            </div>
            <div class="col-sm-4 col-md-4  ">
            <a href="servicios.php">
              <img src="img/abogado8.png" class="imgServicios img-fluid" alt="">
              </a>
            </div>
            <div class="col-sm-4 col-md-4 ">
            <a href="servicios.php">
              <img src="img/abogado9.png" class="imgServicios img-fluid" alt="">
              </a>
            </div>
          </div>

        </div>

        <div class="col-md-6 col-sm-12 ptb-50">

          <div class="row ml-5 mt-5 ">
            

            <div class="col-md-12 ">
            <h1 class="h1-section  text-center "> Servicios</h1>
              <p>Las opciones son variadas, el objetivo es el mismo Conoce las vertientes de los servicios
                que ofrecemos para la Prevención de Lavado de Dinero
              </p>
              <p>Las opciones son variadas, el objetivo es el mismo Conoce las vertientes de los servicios
                que ofrecemos para la Prevenci&oacute;n de Lavado de Dinero
              </p>
            </div>


          </div>

          <div class="row ml-5 mt-3">

            <div class="col-md-6">
              <ul>
                <li class="cLetra">
                  Revisi&oacute;n y redacci&oacute;n de documentos extrajudiciales.
                </li>
                <li class="cLetra">
                  Laboral: Despidos, excedencias,sanciones, accidente de trabajo,
                  enfermedad profesional, Seguridad Social.
                </li>
                <li class="cLetra">
                  Seguros: incumplimientos, reclamaciones a aseguradora.
                </li>
              </ul>
            </div>
            <div class="col-md-6">
              <ul>
                <li class="cLetra">
                  Reclamaci&oacute;n de Gastos Hipotecarios.
                </li>
                <li class="cLetra">
                  Bancos: Cuestiones relacionadas con la contrataci&oacute;n de cuentas corrientes,
                  tarjetas de cr&eacute;dito, pr&eacute;stamos, comisiones.
                </li>
                <li class="cLetra">
                  Vivienda habitual:Compra ,alquiler,deducciones,impuestos,etc.
                </li>
              </ul>
            </div>

          </div>

        </div>

      </div>

    </div>
  </div>
  <!-- Termina Servicios-->
  <!-- Inicia Principales mie-->
  <div class="section mt-5 mb-5" id="Nuestros">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <h1 class="h1-section text-center ptb-100"> Nuestros litigantes </h1>
          <p class="text-center"> El conocimiento asesoramiento y apoyo de miebros expertos para enriquecer el proyecto
          </p>
          <div class="owl-carousel owl-theme">
            <div class="item"><img src="img/abogado8.png">
            <div class="transparenciaImg d-block mx-auto">
            <p class="captionImg my-0">Lic. V&iacute;ctor Montes</p>
          </div>
            </div>
            <div class="item"><img src="img/abogado8.png">
              <h4>2</h4>
            </div>
            <div class="item"><img src="img/abogado8.png">
              <h4>3</h4>
            </div>
            <div class="item"><img src="img/abogado8.png">
              <h4>4</h4>
            </div>
          
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- Termina Principales miembros-->
    <!-- Termina Principales CCARROUSEL OWL-->
    <div class="owl-carousel owl-theme">
    <div class="item"><h4>1</h4></div>
    <div class="item"><h4>2</h4></div>
    <div class="item"><h4>3</h4></div>
    <div class="item"><h4>4</h4></div>
    <div class="item"><h4>5</h4></div>
    <div class="item"><h4>6</h4></div>
    <div class="item"><h4>7</h4></div>
    <div class="item"><h4>8</h4></div>
    <div class="item"><h4>9</h4></div>
    <div class="item"><h4>10</h4></div>
    <div class="item"><h4>11</h4></div>
    <div class="item"><h4>12</h4></div>
</div>

  <!-- Inicia Testimonios-->
  <div class="section bg-light mt-5 mb-5 " id="Testimonios">
    <div class="container">

      <div class="row">
        <div class="col-sm-12 col-md-12 text-center mt-5 ptb-50">
          <h1 class="h1-section text-center"> Testimonios </h1>
          <p class="text-center"> La experiencia de nuestros miembros asesores </p>
        </div>
      </div>

      <div class="row">
        <div class="col-sm-12 col-md-4 text-justify ">
          <p class="heightTest"> "Estoy encantada con sus servicios. Han demostrado un trato humano hacia mi
            persona. La firma se ha preocupado en todo momento por todo, me han atendido con gran amabilidad y
            profesionalidad
            en todo momento. Espero no tener que necesitarles en breve, pero ante cualquier problema
            legal no dudar&eacute; en volver a contar con sus servicios. Enhorabuena por el trabajo que
            realizan, y por supuesto much&iacute;simas GRACIAS." </p>

          <p class="text-center"><img src="img/abogado6.png"
              class="imgServicios mb-3 ml-1 border-light rounded-circle d-block mx-auto img-fluid" alt="">
            <b>Armando Arciniega</b>
          </p>

        </div>

        <div class="col-sm-12 col-md-4 text-justify">
          <p class="heightTest"> "Mi experiencia fue buena . Quiero resaltar en especial el trato que me
            di&oacute; el Lic. V&iacute;ctor Montes, ya que desde el primer d&iacute;a puso inter&eacute;s por mi causa
            y me informaba
            de los pasos a seguir ,los avances de mi caso y con optimismo me ayudo a resolver la situaci&oacute;n
            problem&aacute;tica que se me habia presentado, puedo decir que es una excelente profesional.No tengo
            duda en recomendar su despacho si conozco a alguien que lo necesite."
          </p>

          <p class="text-center"><img src="img/abogado6.png"
              class="imgServicios mb-3 ml-1 border-light rounded-circle d-block mx-auto img-fluid" alt="">
            <b>Armando Arciniega</b>
          </p>

        </div>

        <div class="col-sm-12 col-md-4 text-justify">

          <p class="heightTest"> "Yo que conozco el mundo de los abogados,
            puedo asegurar que nunca he visto una atenci&oacute;n al cliente
            tan excelente como la de la firma. De verdad felicito al grupo de abogados ,especialmente
            al Lic.V&iacute;ctor Montes para el que no tengo palabras suficientes de agradecimiento. Mi
            caso era un tanto delicado y ha sido muy atento desde un principio ,inform&aacute;ndome y
            resolviendo todas mis dudas. Al final se ha resuelto todo favorablemente." </p>

          <p class="text-center"><img src="img/abogado6.png"
              class="imgServicios mb-3 ml-1 border-light rounded-circle d-block mx-auto img-fluid" alt="">
            <b>Armando Arciniega</b>
          </p>

        </div>
      </div>


    </div>
  </div>
  <!-- Termina Testimonios-->
  <?php
  include_once ("includes/footer.php");
  include_once ("includes/js.php");  
  ?>

</body>

</html>