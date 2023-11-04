<?php 
include './components/head.php';
include './components/header.php';
?>
    <div class="login slideUp">
      <div class="login__title"> 
        <h2>Iniciar sesión</h2>
      </div>
      <form class="login__formLogin contentLogin__form" action="loginProcess.php" method="POST">
        <div class="login__formLogin__box">
          <div class="form-group">
            <label for="exampleInputEmail1">Usuario</label>
            <div class="icono"> <img src="/images/iconos/email-login.svg" alt=""/>
              <input class="form-control" id="exampleInputEmail1" type="text" aria-describedby="emailHelp" placeholder="Ingrese su usuario" name="user"/>
            </div>
          </div>
          <div class="form-group">
            <label for="exampleInputPassword1">Password</label>
            <div class="icono"> <img src="images/iconos/password.svg" alt=""/>
              <input class="form-control" id="exampleInputPassword1" type="password" placeholder="Password" name="password"/>
            </div>
          </div>
          <div class="form-group form-group__loginButton">
            <button class="btn btn-warning" type="submit" href="control-cotizaciones.html">ingresar</button>
          </div>
          <div class="form-group">
            <div class="alert alert-danger" role="alert">A simple danger alert—check it out!</div>
          </div>
        </div>
      </form>
    </div>
    <footer>
      <div class="footer__header">
        <div class="footer__header__box">
          <div class="footer__header__box__phone">
            <div class="footer__header-icon"><img src="images/iconos/phone.svg" alt="icono de teléfono fijo"/></div>
            <div class="footer__header__phone-num"> 
              <p>442 219-76-51 <br/>444 257-52-88</p>
            </div>
          </div>
          <div class="footer__header__box__cellphone">
            <div class="footer__header-icon"> <img src="images/iconos/smartphone.svg" alt="ícono de un celular"/></div>
            <div class="footer__header__cellphone-num"> 
              <p>442 3867559</p>
            </div>
          </div>
          <div class="footer__header__box__email"> 
            <div class="footer__header-icon"><img src="images/iconos/email.svg" alt="ícono de un email"/></div>
            <div class="footer__header__email-txt"> 
              <p>contacto@stw.com.mx</p>
            </div>
          </div>
        </div>
      </div>
      <div class="footer__box">
        <div class="footer__box__body">
          <div class="footer__box__body-logo"><img src="images/iconos/logo-amarillo.svg" alt="logotipo de Sterowania"/></div>
          <div class="footer__box__body-links">
            <h2>Enlaces Directos</h2>
            <ul> 
              <li><a href="/">Inicio</a></li>
              <li><a href="catalogo.html">Catálogo </a></li>
              <li><a href="cotiza_gral.html">Cotizar</a></li>
              <li><a href="login.html">Login</a></li>
              <li><a href="privacidad.html">Aviso de Privacidad </a></li>
            </ul>
          </div>
          <div class="footer__box__body-address"> <img src="images/iconos/address.svg" alt="ícono de ubicación"/>
            <p>Agregar dirección de SW</p>
          </div>
          <div class="footer__box__body-schedule">
            <h2>HORARIOS DE ATENCIÓN</h2>
            <div class="footer__box__body-schedule-hours">
              <p>Lunes a Viernes: </p>
              <p>9:00am - 6:00 pm</p>
              <p>Sábado: </p>
              <p>9:00am - 2:00 pm</p>
              <p>Domingo: </p>
              <p>Cerrado</p>
            </div>
          </div>
          <div class="footer__box__body-socialmedia">
            <div class="footer__box__body-socialmedia__icon">
              <h2>SÍGUENOS</h2><a href="https://facebook.com"> <img src="images/iconos/facebook.svg" alt="Ícono de facebook"/></a>
            </div>
          </div>
        </div>
        <div class="footer__foot"> 
          <div class="rights">
            <p>STEROWANIA 2023</p>
          </div>
          <p class="divisor"><strong>|</strong></p>
          <div class="link__jmc"> <a href="https://jmcsoluciones.com" target="_blank">Desarrollado por <strong>JMC Soluciones</strong></a></div>
        </div>
      </div>
    </footer>
    <script src="js/app-dist.js"></script>
    <script src="js/animations.js"></script>
  </body>
</html>