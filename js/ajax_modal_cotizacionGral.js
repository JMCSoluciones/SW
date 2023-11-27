

  // Obtener el formulario utilizando el valor de infoId
  const form = document.querySelector('#form_cotGral');
  // Manajador de eventos para el botón "Cancelar" o el botón de cierre del modal
  $('.closeXmodal').on('click', function (event) {
  // Prevenir la acción por defecto del formulario
  event.preventDefault();
  $(`#form_cotGral`).empty();
  $(`#form_cotGral`).removeClass('alert-danger');
  $(`#form_cotGral`).removeClass('alert-success');
  });


  // Escuchar el evento submit del formulario
  form.addEventListener('submit', function (event){
  event.preventDefault();
 
  const xhr = new XMLHttpRequest();

   // Crear un objeto FormData y agregar los datos del formulario
    const formData = new FormData();
    formData.append('nombre', form.nombre.value);
    formData.append('telefono', form.telefono.value);
    formData.append('email', form.email.value);
    formData.append('nombre_empresa', form.nombre_empresa.value);
    formData.append('mensaje', form.mensaje.value);
    formData.append('oculto', form.oculto.value);


    //WAITING PROGRESS
     //Crear un elemento de imagen y establecer su atributo src en la URL de la imagen GIF
    var img = $('<img>', { src: 'images/cargando.gif' });
    $(`#form_cotGral`).removeClass('alert-danger');
    $(`#form_cotGral`).removeClass('alert-success');
    $('#mensaje-imagen').remove();
    $(`#form_cotGral`).html(img);

  xhr.upload.onprogress = function(event){       
    // Actualizar el contenido de la imagen de carga
  img.attr('src', 'images/cargando.gif');
  };

  // Enviar los datos con AJAX
    xhr.open('POST', 'insert_cotgral.php');
    xhr.onload = function () {
      $(`#form_cotGral`).addClass('slideDown');
      if (xhr.status === 200) {
        $(`#form_cotGral`).empty();
        var mensaje = xhr.responseText;
        $(`#form_cotGral`).html(mensaje);
        var botonCerrar = $('<button>');
          botonCerrar.attr({
            type: "button",
            class: "btn-close",
            "data-bs-dismiss": "alert",
            "aria-label": "Close"
          });
        if(mensaje.includes('Error')){
          $(`#form_cotGral`).addClass('alert-dismissible');
          $(`#form_cotGral`).addClass('alert');
          $(`#form_cotGral`).addClass('fade');
          $(`#form_cotGral`).addClass('show');
          $(`#form_cotGral`).addClass('alert-danger');
          $(`#form_cotGral`).removeClass('alert-success');
          $(`#form_cotGral`).attr("role", 'alert');
          $(`#form_cotGral`).append(botonCerrar);      
        }else if(mensaje.includes('exitosa')){
          $(`#form_cotGral`).addClass('alert');
          $(`#form_cotGral`).addClass('alert-dismissible');
          $(`#form_cotGral`).addClass('fade');
          $(`#form_cotGral`).addClass('show');
          $(`#form_cotGral`).removeClass('alert-danger');
          $(`#form_cotGral`).addClass('alert-success');
          $(`#form_cotGral`).attr("role", 'alert');
          $(`#form_cotGral`).append(botonCerrar);      
          $(`#form_cotCant`)[0].reset();
        }
      
  };
  }
  xhr.send(formData);
  });
