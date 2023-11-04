<?php 
include './components/head.php';
include './components/header.php';
?>
    <div class="slideCotizarGral slide">
      <div class="slide__box">
        <p>¿Tienes dudas o <strong>requieres una cotización?</strong></p>
        <p> <strong>¡ESCRÍBENOS!</strong></p>
      </div>
    </div>
    <div class="content ContentCotizacionGral">
      <div class="titulo">Llena este pequeño formulario, será un placer atenderte.</div>
      <div class="content-form content-formContacto">
        <h3 class="content-formContacto-title">Datos del contacto</h3>
        <form action="/model/insert_cotgral.php" method="POST" id="form_cotGral">
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
          <button class="btn btn-dark btn-lg"  type="submit">Enviar</button>
          <input type="hidden" name="oculto" value=1>
          <div class="form-floating mb-3">
            <div class="" id="mostrar_mensaje"></div>
          </div>
        </form>
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


    <?php 
   include './components/footer.php'
   ?>