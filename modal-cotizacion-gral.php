<button class="slide-btn-cotizar floating" type="button" data-bs-toggle="modal" data-bs-target="#modalCotizacion-gral">Solicitar una cotizacion</button>
<div class="modal-cotizacion">
  <div class="modal fade" id="modalCotizacion-gral" aria-hidden="true" aria-labelledby="modalCotizacion-gralLabel" tabindex="-1">
    <div class="modal-dialog modal-lg modal-dialog-centered">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="modalCotizacion-gralLabel">SOLICITUD DE <br/><strong>COTIZACIÓN</strong></h5>
          <button class="btn-close" type="button" onclick="limpiarNotificacion();" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <div class="content-form">
          <form action="insert_cotgral.php" method="POST" id="form_cotGral">
            <div class="form-floating mb-3">
              <input class="form-control form-control-lg" placeholder="Ingrese su nombre completo" type="text" name="nombre" aria-describedby="emailHelp" maxlength="30" minlength="3" required id="nombre_cotGral" pattern="[A-Za-z0-9_-]{3,30}"/>
              <label for="nombre_cotGral">Nombre Completo</label>
            </div>
            <div class="form-floating mb-3">
              <input class="form-control form-control-lg" type="tel" name="telefono" minlength="10" maxlength="10" aria-describedby="emailHelp" required placeholder="Ingrese su télefono" id="telefono_cotGral"/>
              <label for="telefono_cotGral">Teléfono a 10 dígitos</label>
            </div>
            <div class="form-floating mb-3">
              <input class="form-control form-control-lg" type="email" name="email" aria-describedby="emailHelp" placeholder="Email válido" id="email_cotGral"/>
              <label for="email_cotGral" required>Email válido</label>
            </div>
            <div class="form-floating mb-3">
              <input class="form-control form-control-lg" type="text" name="nombre_empresa" aria-describedby="emailHelp" placeholder="Nombre de la empresa" id="empresa_cotGral"/>
              <label for="empresa_cotGral">Nombre de la empresa</label>
            </div>
            <div class="form-floating mb-3">
              <textarea class="form-control form-control-lg" type="text" name="mensaje" aria-describedby="emailHelp" placeholder="Ingrese su mensaje" id="mensaje_cotGral" maxlength="360"></textarea>
              <label for="mensaje_cotGral">Mensaje</label>
            </div>
            <div class="modal-body__buttons"> 
              <button class="btn btn-danger btn-lg" data-bs-dismiss="modal" aria-label="Close" onclick="limpiarNotificacion('mostrar_mensaje');">Cancelar</button>
              <button class="btn btn-success btn-lg" onclick="" type="submit">Enviar</button>
          </div>
            <input type="hidden" name="oculto" value=1>
            <div class="form-floating mb-3">
              <div class="" id="mostrar_mensaje"></div>
            </div>
        </form>
          </div>
          
        </div>
      </div>
    </div>
  </div>
</div>
<script>
    // Obtener el formulario y el campo de tipo file
    const form = document.querySelector('#form_cotGral');
    // Escuchar el evento submit del formulario
    form.addEventListener('submit', function (event){
      event.preventDefault();
       // Crear un objeto FormData y agregar los datos del formulario
        const formData = new FormData();
        formData.append('nombre', form.nombre.value);
        formData.append('telefono', form.telefono.value);
        formData.append('email', form.email.value);
        formData.append('nombre_empresa', form.nombre_empresa.value);
        formData.append('mensaje', form.mensaje.value);
        formData.append('oculto', form.oculto.value);

      // Enviar los datos con AJAX
        const xhr = new XMLHttpRequest();
        xhr.open('POST', 'insert_cotgral.php');
        xhr.onload = function () {
          $('#mostrar_mensaje').addClass('slideDown');
          if (xhr.status === 200) {
            var mensaje = xhr.responseText;
            $('#mostrar_mensaje').html(mensaje);

            if(mensaje.includes('Error')){
              $('#mostrar_mensaje').addClass('notificacion-error');
              $('#mostrar_mensaje').removeClass("notificacion-exito");      
            }else if(mensaje.includes('exitosa')){
              $('#mostrar_mensaje').removeClass("notificacion-error");
              $('#mostrar_mensaje').addClass("notificacion-exito");

              $('#form_cotGral').trigger('reset');
            }
          
      };
    }
    xhr.upload.onprogress = function(event){
          //Crear un elemento de imagen y establecer su atributo src en la URL de la imagen GIF
            var img = $('<img>', { src: 'images/cargando.gif' });
            // Agregar el elemento de imagen al elemento HTML que deseas mostrar la imagen de carga
            $('#mostrar_mensaje').removeClass("notificacion-error");
            $('#mostrar_mensaje').removeClass("notificacion-exito");
            $('#mensaje-imagen').remove();
            $('#mostrar_mensaje').html(img);

    };
  xhr.send(formData);


    });
  </script>
  <script src="/js/script.js"></script>
