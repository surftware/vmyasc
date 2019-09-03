<?php
  define('BASE_PATH', '/var/www/vmyasc.com/');
  include (BASE_PATH."includes/head.php");
  include (BASE_PATH."includes/nav.php");
?>
  <div class="section">
    <div class"container dimensiones">

  <div id="myCarousel" class="carousel slide wow fadeInDown" data-ride="carousel">
        <!-- Indicators -->
        <ol class="carousel-indicators">
          <li data-target="#myCarousel" data-slide-to="1" class="active"></li>
          <li data-target="#myCarousel" data-slide-to="2"></li>
          <li data-target="#myCarousel" data-slide-to="3"></li>
          <li data-target="#myCarousel" data-slide-to="4"></li>
        </ol>

        <!-- Wrapper for slides -->
       <div class="carousel-inner" role="listbox">
         <div class="item active">
           <img src="img/carrusel/1.png">
           <div class="transparencia1 center-blocK">
             Despacho jurídico especializado en materia<br>
             penal, constitucional y amparo.
           </div>
         </div>

         <div class="item">
           <img src="img/carrusel/2.png" >
           <div class="transparencia2">
             Victor montes
           </div>
         </div>

         <div class="item">
           <img src="img/carrusel/3.png" >
          </div>

      </div>

      <!-- Left and right controls -->
      <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
        <i class="icon-prev fa fa-angle-left "></i>
        <span class="sr-only">Previous</span>
      </a>
      <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
        <i class="icon-next fa fa-angle-right"></i>
        <span class="sr-only">Next</span>
      </a>
    </div>

  </div>
 </div>
</div>

<!-- Termina carrousel -->

<?php
  include (BASE_PATH."includes/footer.php");
  include (BASE_PATH."includes/js.php");
?>
