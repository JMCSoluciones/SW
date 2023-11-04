<?php 
include './components/head.php';
include './components/header.php';
?>
    <div class="control__lista-subcategoria">
      <div class="control__lista-subcategoria-title"> 
        <h3>Informacion de la subcategoria</h3>
      </div>
      <div class="content infoSubcategoria"> 
        <div class="content-form-subcategoria">
          <form action="">
            <div class="mb-3">
              <label for="exampleInputPassword1">Nombre</label>
              <input class="form-control" id="exampleInputPassword1" type="text" placeholder=""/>
            </div>
            <div class="mb-3">
              <label for="exampleInputPassword1">Categoría</label>
              <select class="form-select" aria-label="Default select example">
                <option selected="">Selecciona la categoría</option>
                <option value="1">Semáforo</option>
                <option value="2">Postes</option>
                <option value="3">Señalamientos</option>
                <option value="4">Complementos viales </option>
                <option value="5">Servicios de diseño vial y urbano</option>
              </select>
            </div>
            <button class="btn btn-success" type="button" data-bs-toggle="modal" data-bs-target="#agregar">Agregar </button>
            <button class="btn btn-primary" type="button" data-bs-toggle="modal" data-bs-target="#modiificar">Modificar</button>
            <button class="btn btn-danger" type="button" data-bs-toggle="modal" data-bs-target="#eliminar">Eliminar </button>
          </form>
        </div>
        <div class="modal fade" id="agregar" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="staticBackdropLabel">Agregar</h5>
                <button class="btn-close" type="button" data-bs-dismiss="modal" aria-label="Close"></button>
              </div>
              <div class="modal-body">
                <form action="">
                  <div class="mb-3">
                    <label for="exampleInputPassword1">Nombre</label>
                    <input class="form-control" id="exampleInputPassword1" type="text" placeholder="Nombre de la nueva subcategoría"/>
                  </div>
                  <div class="mb-3">
                    <label for="exampleInputPassword1">Categoría</label>
                    <select class="form-select" aria-label="Default select example">
                      <option selected="">Selecciona la categoría</option>
                      <option value="1">Semáforo</option>
                      <option value="2">Postes</option>
                      <option value="3">Señalamientos</option>
                      <option value="4">Complementos viales </option>
                      <option value="5">Servicios de diseño vial y urbano</option>
                    </select>
                  </div>
                </form>
              </div>
              <div class="modal-footer">
                <button class="btn btn-secondary" type="button" data-bs-dismiss="modal">Cancelar</button>
                <button class="btn btn-success" type="button">Guardar</button>
              </div>
            </div>
          </div>
        </div>
        <div class="modal fade" id="modiificar" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="staticBackdropLabel">Modificar</h5>
                <button class="btn-close" type="button" data-bs-dismiss="modal" aria-label="Close"></button>
              </div>
              <div class="modal-body">
                <form action="">
                  <div class="mb-3">
                    <label for="exampleInputPassword1">Nombre</label>
                    <input class="form-control" id="exampleInputPassword1" type="text" placeholder=""/>
                  </div>
                  <div class="mb-3">
                    <label for="exampleInputPassword1">Categoría</label>
                    <select class="form-select" aria-label="Default select example">
                      <option selected=""> </option>
                      <option value="1">Semáforo</option>
                      <option value="2">Postes</option>
                      <option value="3">Señalamientos</option>
                      <option value="4">Complementos viales </option>
                      <option value="5">Servicios de diseño vial y urbano</option>
                    </select>
                  </div>
                </form>
              </div>
              <div class="modal-footer">
                <button class="btn btn-secondary" type="button" data-bs-dismiss="modal">Cancelar</button>
                <button class="btn btn-success" type="button">Guardar</button>
              </div>
            </div>
          </div>
        </div>
        <div class="modal fade" id="eliminar" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="staticBackdropLabel">Eliminar</h5>
                <button class="btn-close" type="button" data-bs-dismiss="modal" aria-label="Close"></button>
              </div>
              <div class="modal-body">¿Estas seguro que deseas eliminar esta subcategoría?</div>
              <div class="modal-footer">
                <button class="btn btn-danger" type="button">Eliminar</button>
              </div>
            </div>
          </div>
        </div>
      </div>
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
          <div class="link__jmc"> <a href="https://jmcsoluciones.com" target="_blank">Desarrollado por <strong>JMC Soluciones</strong>  </a></div>
        </div>
      </div>
    </footer>
    <script src="js/app-dist.js"></script>
  </body>
</html>