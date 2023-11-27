
// Obtener el formulario y el campo de tipo file
const formContainers = document.querySelectorAll('.formulario-container');
formContainers.forEach(function(container) {
  const infoId = container.getAttribute('data-info-id');
  // Obtener el formulario utilizando el valor de infoId
  const form = document.querySelector(`#form_cotCant${infoId}`);
  // Manajador de eventos para el botón "Cancelar" o el botón de cierre del modal
  $('.closeXmodal').on('click', function (event) {
  // Prevenir la acción por defecto del formulario
  event.preventDefault();
  $(`#notificacionSolicitudCant${infoId}`).empty();
  $(`#notificacionSolicitudCant${infoId}`).removeClass('alert-danger');
  $(`#notificacionSolicitudCant${infoId}`).removeClass('alert-success');
  });


  // Escuchar el evento submit del formulario
  form.addEventListener('submit', function (event){
  event.preventDefault();
 
  const xhr = new XMLHttpRequest();

   // Crear un objeto FormData y agregar los datos del formulario
    const formData = new FormData();
    formData.append('idProd', form.idProd.value);
    formData.append('cantidadProd', form.cantidadProd.value);
    formData.append('nombre', form.nombre.value);
    formData.append('telefono', form.telefono.value);
    formData.append('email', form.email.value);
    formData.append('nombre_empresa', form.nombre_empresa.value);
    formData.append('mensaje', form.mensaje.value);
    formData.append('oculto', form.oculto.value);


    //WAITING PROGRESS
     //Crear un elemento de imagen y establecer su atributo src en la URL de la imagen GIF
    var img = $('<img>', { src: 'images/cargando.gif' });
    $(`#notificacionSolicitudCant${infoId}`).removeClass('alert-danger');
    $(`#notificacionSolicitudCant${infoId}`).removeClass('alert-success');
    $('#mensaje-imagen').remove();
    $(`#notificacionSolicitudCant${infoId}`).html(img);

  xhr.upload.onprogress = function(event){       
    // Actualizar el contenido de la imagen de carga
  img.attr('src', 'images/cargando.gif');
  };

  // Enviar los datos con AJAX
    xhr.open('POST', 'insert_cotCant.php');
    xhr.onload = function () {
      $(`#notificacionSolicitudCant${infoId}`).addClass('slideDown');
      if (xhr.status === 200) {
        $(`#notificacionSolicitudCant${infoId}`).empty();
        var mensaje = xhr.responseText;
        $(`#notificacionSolicitudCant${infoId}`).html(mensaje);
        var botonCerrar = $('<button>');
          botonCerrar.attr({
            type: "button",
            class: "btn-close",
            "data-bs-dismiss": "alert",
            "aria-label": "Close"
          });
        if(mensaje.includes('Error')){
          $(`#notificacionSolicitudCant${infoId}`).addClass('alert-dismissible');
          $(`#notificacionSolicitudCant${infoId}`).addClass('alert');
          $(`#notificacionSolicitudCant${infoId}`).addClass('fade');
          $(`#notificacionSolicitudCant${infoId}`).addClass('show');
          $(`#notificacionSolicitudCant${infoId}`).addClass('alert-danger');
          $(`#notificacionSolicitudCant${infoId}`).removeClass('alert-success');
          $(`#notificacionSolicitudCant${infoId}`).attr("role", 'alert');
          $(`#notificacionSolicitudCant${infoId}`).append(botonCerrar);      
        }else if(mensaje.includes('exitosa')){
          $(`#notificacionSolicitudCant${infoId}`).addClass('alert');
          $(`#notificacionSolicitudCant${infoId}`).addClass('alert-dismissible');
          $(`#notificacionSolicitudCant${infoId}`).addClass('fade');
          $(`#notificacionSolicitudCant${infoId}`).addClass('show');
          $(`#notificacionSolicitudCant${infoId}`).removeClass('alert-danger');
          $(`#notificacionSolicitudCant${infoId}`).addClass('alert-success');
          $(`#notificacionSolicitudCant${infoId}`).attr("role", 'alert');
          $(`#notificacionSolicitudCant${infoId}`).append(botonCerrar);      
          $(`#form_cotCant${infoId}`)[0].reset();
        }
      
  };
  }
  xhr.send(formData);
  });
  });