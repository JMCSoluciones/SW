<button class="slide-btn-cotizar floating" type="button" data-bs-toggle="modal" data-bs-target="#modalCotizacion-gral">Solicitar una cotizacion</button>
<div class="modal-cotizacion">
  <div class="modal fade" id="modalCotizacion-gral" aria-hidden="true" aria-labelledby="modalCotizacion-gralLabel" tabindex="-1">
    <div class="modal-dialog modal-lg modal-dialog-centered">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="modalCotizacion-gralLabel">SOLICITUD DE <br/><strong>COTIZACIÓN</strong></h5>
          <button class="btn-close" type="button" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <div class="content-form">
            <form action="/model/insert_cotgral.php" method="POST">
              <div class="form-floating mb-3">
                <input class="form-control form-control-lg" placeholder="Ingrese su nombre completo" type="text" name="nombre" aria-describedby="emailHelp" id="nombreCliente" maxlength="10"/>
                <label class="form-label" for="nombreCliente">Nombre Completo</label>
              </div>
              <div class="form-floating mb-3">
                <input class="form-control form-control-lg" type="number" name="telefono" maxlength="2" aria-describedby="emailHelp" placeholder="Ingrese su télefono" id="inputPhone"/>
                <label class="form-label" for="inputPhone">Teléfono a 10 dígitos</label>
              </div>
              <div class="form-floating mb-3">
                <input class="form-control form-control-lg" type="email" name="email" aria-describedby="emailHelp" placeholder="Email válido" id="inputemail"/>
                <label class="form-label" for="inputemail">Email </label>
              </div>
              <div class="form-floating mb-3">
                <input class="form-control form-control-lg" type="text" name="nombre_empresa" aria-describedby="emailHelp" placeholder="Nombre de la empresa" id="inputempresa"/>
                <label class="form-label" for="inputempresa">Nombre de la empresa</label>
              </div>
              <div class="form-floating mb-3">
                <input type="hidden" name="oculto" value=1/>
              </div>
              <div class="form-floating mb-3">
                <textarea class="form-control form-control-lg" type="text" name="mensaje" aria-describedby="emailHelp" placeholder="Ingrese su mensaje" id="inputmensaje"></textarea>
                <label class="form-label" for="inputmensaje">Mensaje</label>
              </div>
            </form>
          </div>
          <div class="modal-body__buttons"> 
            <button class="btn btn-danger" data-bs-dismiss="modal" aria-label="Close">Cancelar</button>
            <button class="btn btn-success" data-bs-target="#exampleModalToggle2" data-bs-toggle="modal" data-bs-dismiss="modal">Enviar</button>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="modal fade" id="exampleModalToggle2" aria-hidden="true" aria-labelledby="exampleModalToggleLabel2" tabindex="-1">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalToggleLabel2">Solicitud </h5>
          <button class="btn-close" type="button" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">Cotización realizada con exito!</div>
        <div class="modal-footer">
          <button class="btn btn-primary" data-bs-target="#exampleModalToggle" data-bs-toggle="modal" data-bs-dismiss="modal">Cancelar </button>
          <button class="btn btn-secondary" type="button" data-bs-dismiss="modal">Aceptar</button>
        </div>
      </div>
    </div>
  </div>
</div>