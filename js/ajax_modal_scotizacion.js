
// Obtener el formulario y el campo de tipo file
const formContainers = document.querySelectorAll('.formulario-container');

formContainers.forEach(function(container) {
    const infoId = container.getAttribute('data-info-id');
    // Obtener el formulario utilizando el valor de infoId
    const form = document.querySelector(`#formularioEditCot${infoId}`);

    // Manajador de eventos para el botón "Cancelar" o el botón de cierre del modal
$('.closeXmodal').on('click', function (event) {
    // Prevenir la acción por defecto del formulario
    event.preventDefault();
    $(`#mostrar_mensaje_edit_cotizacion${infoId}`).empty();
    $(`#mostrar_mensaje_edit_cotizacion${infoId}`).removeClass('alert-danger');
    $(`#mostrar_mensaje_edit_cotizacion${infoId}`).removeClass('alert-success');
    });
   
// Escuchar el evento submit del formulario
form.addEventListener('submit', function (event){
    event.preventDefault();
    const xhr = new XMLHttpRequest();
  
     // Crear un objeto FormData y agregar los datos del formulario
      const formData = new FormData();
      formData.append('statusSolicitudNuevo', form.statusSolicitudNuevo.value);
      formData.append('idSolicitud', form.idSolicitud.value);
      formData.append('productoSolicitud', form.productoSolicitud.value);
      formData.append('clienteSolicitud', form.clienteSolicitud.value);
      formData.append('telSolicitud', form.telSolicitud.value);
      formData.append('emailSolicitud', form.emailSolicitud.value);
      formData.append('empresaSolicitud', form.empresaSolicitud.value);
      formData.append('mensajeSolicitud', form.mensajeSolicitud.value);
      formData.append('fechaSolicitud', form.fechaSolicitud.value);
      formData.append('statusSolicitudActual', form.statusSolicitudActual.value);
      formData.append('oculto', form.oculto.value);

  
      //WAITING PROGRESS
       //Crear un elemento de imagen y establecer su atributo src en la URL de la imagen GIF
      var img = $('<img>', { src: 'images/cargando.gif' });
      $(`#mostrar_mensaje_edit_cotizacion${infoId}`).removeClass('alert-danger');
      $(`#mostrar_mensaje_edit_cotizacion${infoId}`).removeClass('alert-success');
      $('#mensaje-imagen').remove();
      $(`#mostrar_mensaje_edit_cotizacion${infoId}`).html(img);
  
  xhr.upload.onprogress = function(event){       
  // Actualizar el contenido de la imagen de carga
  img.attr('src', 'images/cargando.gif');
  };
  
    // Enviar los datos con AJAX
      xhr.open('POST', 'edit_solicitud.php');
      xhr.onload = function () {
        $(`#mostrar_mensaje_edit_cotizacion${infoId}`).addClass('slideDown');
        if (xhr.status === 200) {
          $(`#mostrar_mensaje_edit_cotizacion${infoId}`).empty();
          var mensaje = xhr.responseText;
          $(`#mostrar_mensaje_edit_cotizacion${infoId}`).html(mensaje);
          var botonCerrar = $('<button>');
            botonCerrar.attr({
              type: "button",
              class: "btn-close",
              "data-bs-dismiss": "alert",
              "aria-label": "Close"
            });
          if(mensaje.includes('Error')){
            $(`#mostrar_mensaje_edit_cotizacion${infoId}`).addClass('alert-dismissible');
            $(`#mostrar_mensaje_edit_cotizacion${infoId}`).addClass('alert');
            $(`#mostrar_mensaje_edit_cotizacion${infoId}`).addClass('fade');
            $(`#mostrar_mensaje_edit_cotizacion${infoId}`).addClass('show');
            $(`#mostrar_mensaje_edit_cotizacion${infoId}`).addClass('alert-danger');
            $(`#mostrar_mensaje_edit_cotizacion${infoId}`).removeClass('alert-success');
            $(`#mostrar_mensaje_edit_cotizacion${infoId}`).attr("role", 'alert');
            $(`#mostrar_mensaje_edit_cotizacion${infoId}`).append(botonCerrar);      
          }else if(mensaje.includes('exitosa')){
            $(`#mostrar_mensaje_edit_cotizacion${infoId}`).addClass('alert');
            $(`#mostrar_mensaje_edit_cotizacion${infoId}`).addClass('alert-dismissible');
            $(`#mostrar_mensaje_edit_cotizacion${infoId}`).addClass('fade');
            $(`#mostrar_mensaje_edit_cotizacion${infoId}`).addClass('show');
            $(`#mostrar_mensaje_edit_cotizacion${infoId}`).removeClass('alert-danger');
            $(`#mostrar_mensaje_edit_cotizacion${infoId}`).addClass('alert-success');
            $(`#mostrar_mensaje_edit_cotizacion${infoId}`).attr("role", 'alert');
            $(`#mostrar_mensaje_edit_cotizacion${infoId}`).append(botonCerrar);      
            $(`#formularioEditCot${infoId}`)[0].reset();
          }
        
    };
  }
  xhr.send(formData);
  });
});