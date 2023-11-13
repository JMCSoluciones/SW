<?php 
include './components/head.php';
include './components/header.php';
?>

    <div class="content__section-slide">
      <section class="content__slides carousel slide carousel-fade" data-bs-ride="carousel" id="carouselExampleFade">
        <div class="carousel-inner">
          <div class="carousel-item active">
            <picture class="carousel-item__img">
              <source media="(min-width:1110px)" srcset="images/Desktop/desktopSlidesIndex-1920x466.jpg"/>
              <source media="(min-width:768px)" srcset="images/Tablet/tabletSlidesIndex-1110x466.jpg"/><img class="d-block w-100" src="images/Mobile/mobileSlidesIndex_1-722x1048.jpg" alt="Imgagen de pallets"/>
            </picture>
            <div class="slideContent">
              <div class="slideContent__box">
                <p>CONOCE</p>
                <h2 class="slideRight">NUESTRA ÁREA <br/>DE <strong>VIALIDAD</strong></h2>
                <p>SEMÁFOROS, POSTES, SEÑALAMIENTOS Y MUCHO MÁS...</p>
                <div class="slideContent__box__link"><a href="catalogo.php">Catálogo<img src="images/iconos/arrow-circle-right.svg" alt="" srcset=""/></a></div>
              </div>
            </div>
          </div>
          <div class="carousel-item">
            <picture class="carousel-item__img">
              <source media="(min-width:1110px)" srcset="images/Desktop/desktopSlidesIndex2-1920x466.jpg"/>
              <source media="(min-width:768px)" srcset="images/Tablet/tabletSlidesIndex2-1110x466.jpg"/><img class="d-block w-100" src="images/Mobile/mobileSlidesIndex_2-722x1048.jpg" alt="Imgagen de un montacargas"/>
            </picture>
            <div class="slideContent">
              <div class="slideContent__box">
                <p>NUESTROS SERVICIOS</p>
                <h2 class="slideLeft">DESARROLLO URBANO Y VIAL</h2>
                <div class="slideContent__box__link"><a href="cotiza_gral.php">Contáctanos<img src="images/iconos/arrow-circle-right.svg"/></a></div>
              </div>
            </div>
          </div>
        </div>
        <button class="carousel-control-prev hidden" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="prev"><span class="carousel-control-prev-icon hidden" aria-hidden="true"></span><span class="visually-hidden hidden">Previous</span></button>
        <button class="carousel-control-next hidden" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="next"><span class="carousel-control-next-icon hidden" aria-hidden="true"></span><span class="visually-hidden hidden">Next</span></button>
      </section>
    </div>
    <div class="content contentIndex">
      <div class="contentIndex__section-nosotros">
        <h2 class="contentIndex__section-nosotros-title title">ACERCA DE NOSOTROS</h2>
        <p class="contentIndex__section-nosotros-txt"><strong>STEROWANIA (STW)</strong> que ha mantenido una evolución constante y ha sido punta de lanza en el mercado nacional durante los últimos 13 años. Hoy en día seguimos consolidando los proyectos de nuestros clientes siendo articuladores del Ecosistema de Movilidad Sustentable en México.</p>
      </div>
      <div class="contentIndex__section-contactanos">
        <div class="contentIndex__section-contactanos-txt">
          <p>EN STEROWANIA, <br/><strong>ESTAMOS PARA SERVIRLE</strong></p>
          <p><strong>CONTÁCTANOS</strong></p>
        </div>
      </div>
      <div class="contentIndex__section-soporte">
        <h2 class="contentIndex__section-soporte-title title entrance">¿POR QUÉ SOPORTE?</h2>
        <p class="contentIndex__section-soporte-txt"> Mantenemos una relación 24/7 con nuestros clientes, logrando empatía con sus necesidades , información y procesos, <strong>incorporándonos a sus desarrollos y proyectos </strong>como un aliado estratégico.
</p>
      </div>
      <div class="contentIndex__section-catalogo">
        <div class="contentIndex__section-catalogo-txt">
          <div class="contentIndex__section-catalogo-txt-box entrance">
            <p>NUESTRO</p>
            <p>CATÁLOGO</p>
            <div class="contentIndex__section-catalogo-txt-box-link"><a href="catalogo.php">VER</a><img src="images/iconos/arrow-circle-right.svg" alt="" srcset=""/></div>
          </div>
        </div>
      </div>
      <div class="contentIndex__section-especializado">
        <h2 class="contentIndex__section-especializado-title title entrance">Equipo especializado</h2>
        <p class="contentIndex__section-especializado-txt"> Contamos con un grupo de especialistas de alto nivel, con dominio en las mejoras prácticas de la industria.
        </p>
      </div>
      <div class="contentIndex__section-innovacion">
        <div class="contentIndex__section-innovacion-txt">
          <div class="contentIndex__section-innovacion-txt-box">
            <p><strong>Innovación</strong></p>
            <p>Uno de nuestros pilares que permiten, proporcionar servicios de clase mundial.</p>
          </div>
        </div>
      </div>
      <div class="contentIndex__section-soporte2">
        <h2 class="contentIndex__section-soporte2-title title entrance">Soporte Contínuo</h2>
        <p class="contentIndex__section-soporte2-txt"> Estamos enfocados en sus necesidades, así como en eficientar sus Sistemas de Gestion de Calidad y Maximizar el potencial de éxito.</p>
      </div>
    </div>
    <?php 
  include './components/footer.php';
  ?>