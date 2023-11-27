
// Obtener el formulario y el campo de tipo file
const formContainers = document.querySelectorAll('.formulario-container');
formContainers.forEach(function(container) {
  const infoId = container.getAttribute('data-info-id');
  // Obtener el formulario utilizando el valor de infoId
  const form = document.querySelector(`#formularioEditProd${infoId}`);
  // Manajador de eventos para el botón "Cancelar" o el botón de cierre del modal
  $('.closeXmodal').on('click', function (event) {
  // Prevenir la acción por defecto del formulario
  event.preventDefault();
  $(`#mensajeEditProd${infoId}`).empty();
  $(`#mensajeEditProd${infoId}`).removeClass('alert-danger');
  $(`#mensajeEditProd${infoId}`).removeClass('alert-success');
  });


  // Escuchar el evento submit del formulario
  form.addEventListener('submit', function (event){
  event.preventDefault();
  let fileInputElement = document.getElementById(`foto${infoId}`);
  const xhr = new XMLHttpRequest();

   // Crear un objeto FormData y agregar los datos del formulario
    const formData = new FormData();
    formData.append('id_producto', form.id_producto.value);
    formData.append('clave', form.clave.value);
    formData.append('producto', form.producto.value);
    formData.append('selectcategoria', form.selectcategoria.value);
    formData.append('selectsubcategoria', form.selectsubcategoria.value);
    formData.append('extracto', form.extracto.value);
    formData.append('descripcion', form.descripcion.value);
    formData.append('foto', fileInputElement.files[0]);
    formData.append('oculto', form.oculto.value);


    //WAITING PROGRESS
     //Crear un elemento de imagen y establecer su atributo src en la URL de la imagen GIF
    var img = $('<img>', { src: 'images/cargando.gif' });
    $(`#mensajeEditProd${infoId}`).removeClass('alert-danger');
    $(`#mensajeEditProd${infoId}`).removeClass('alert-success');
    $('#mensaje-imagen').remove();
    $(`#mensajeEditProd${infoId}`).html(img);

  xhr.upload.onprogress = function(event){       
    // Actualizar el contenido de la imagen de carga
  img.attr('src', 'images/cargando.gif');
  };

  // Enviar los datos con AJAX
    xhr.open('POST', 'edit_producto.php');
    xhr.onload = function () {
      $(`#mensajeEditProd${infoId}`).addClass('slideDown');
      if (xhr.status === 200) {
        $(`#mensajeEditProd${infoId}`).empty();
        var mensaje = xhr.responseText;
        $(`#mensajeEditProd${infoId}`).html(mensaje);
        var botonCerrar = $('<button>');
          botonCerrar.attr({
            type: "button",
            class: "btn-close",
            "data-bs-dismiss": "alert",
            "aria-label": "Close"
          });
        if(mensaje.includes('Error')){
          $(`#mensajeEditProd${infoId}`).addClass('alert-dismissible');
          $(`#mensajeEditProd${infoId}`).addClass('alert');
          $(`#mensajeEditProd${infoId}`).addClass('fade');
          $(`#mensajeEditProd${infoId}`).addClass('show');
          $(`#mensajeEditProd${infoId}`).addClass('alert-danger');
          $(`#mensajeEditProd${infoId}`).removeClass('alert-success');
          $(`#mensajeEditProd${infoId}`).attr("role", 'alert');
          $(`#mensajeEditProd${infoId}`).append(botonCerrar);      
        }else if(mensaje.includes('exitosa')){
          $(`#mensajeEditProd${infoId}`).addClass('alert');
          $(`#mensajeEditProd${infoId}`).addClass('alert-dismissible');
          $(`#mensajeEditProd${infoId}`).addClass('fade');
          $(`#mensajeEditProd${infoId}`).addClass('show');
          $(`#mensajeEditProd${infoId}`).removeClass('alert-danger');
          $(`#mensajeEditProd${infoId}`).addClass('alert-success');
          $(`#mensajeEditProd${infoId}`).attr("role", 'alert');
          $(`#mensajeEditProd${infoId}`).append(botonCerrar);      
          $(`#formularioEditProd${infoId}`)[0].reset();
        }
      
  };
  }
  xhr.send(formData);
  });
  });