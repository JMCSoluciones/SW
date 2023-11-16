
// Obtener el formulario y el campo de tipo file
const formDeleteSub = document.querySelectorAll('.formulario-container');

formDeleteSub.forEach(function(container) {
  const infoId = container.getAttribute('data-info-id');
  // Obtener el formulario utilizando el valor de infoId
  const form = document.querySelector(`#formularioDeleteSub${infoId}`);
// Manajador de eventos para el botón "Cancelar" o el botón de cierre del modal
$('.closeXmodal').on('click', function (event) {
  // Prevenir la acción por defecto del formulario
  event.preventDefault();
  $(`#mostrar_mensaje_modal_delete${infoId}`).empty();
  $(`#mostrar_mensaje_modal_delete${infoId}`).removeClass('alert-danger');
  $(`#mostrar_mensaje_modal_delete${infoId}`).removeClass('alert-success');
  });


// Escuchar el evento submit del formulario
form.addEventListener('submit', function (event){
  event.preventDefault();
  const xhr = new XMLHttpRequest();

   // Crear un objeto FormData y agregar los datos del formulario
    const formData = new FormData();
    formData.append('idSubcategoria', form.idSubcategoria.value);
    formData.append('oculto', form.oculto.value);


    //WAITING PROGRESS
     //Crear un elemento de imagen y establecer su atributo src en la URL de la imagen GIF
    var img = $('<img>', { src: 'images/cargando.gif' });
    $(`#mostrar_mensaje_modal_delete${infoId}`).removeClass('alert-danger');
    $(`#mostrar_mensaje_modal_delete${infoId}`).removeClass('alert-success');
    $('#mensaje-imagen').remove();
    $(`#mostrar_mensaje_modal_delete${infoId}`).html(img);

xhr.upload.onprogress = function(event){       
// Actualizar el contenido de la imagen de carga
img.attr('src', 'images/cargando.gif');
};

  // Enviar los datos con AJAX
    xhr.open('POST', 'delete_subcategoria.php');
    xhr.onload = function () {
      $(`#mostrar_mensaje_modal_delete${infoId}`).addClass('slideDown');
      if (xhr.status === 200) {
        $(`#mostrar_mensaje_modal_delete${infoId}`).empty();
        var mensaje = xhr.responseText;
        $(`#mostrar_mensaje_modal_delete${infoId}`).html(mensaje);
        var botonCerrar = $('<button>');
          botonCerrar.attr({
            type: "button",
            class: "btn-close",
            "data-bs-dismiss": "alert",
            "aria-label": "Close"
          });
        if(mensaje.includes('Error')){
          $(`#mostrar_mensaje_modal_delete${infoId}`).addClass('alert-dismissible');
          $(`#mostrar_mensaje_modal_delete${infoId}`).addClass('alert');
          $(`#mostrar_mensaje_modal_delete${infoId}`).addClass('fade');
          $(`#mostrar_mensaje_modal_delete${infoId}`).addClass('show');
          $(`#mostrar_mensaje_modal_delete${infoId}`).addClass('alert-danger');
          $(`#mostrar_mensaje_modal_delete${infoId}`).removeClass('alert-success');
          $(`#mostrar_mensaje_modal_delete${infoId}`).attr("role", 'alert');
          $(`#mostrar_mensaje_modal_delete${infoId}`).append(botonCerrar);      
        }else if(mensaje.includes('exitosa')){
          $(`#mostrar_mensaje_modal_delete${infoId}`).addClass('alert');
          $(`#mostrar_mensaje_modal_delete${infoId}`).addClass('alert-dismissible');
          $(`#mostrar_mensaje_modal_delete${infoId}`).addClass('fade');
          $(`#mostrar_mensaje_modal_delete${infoId}`).addClass('show');
          $(`#mostrar_mensaje_modal_delete${infoId}`).removeClass('alert-danger');
          $(`#mostrar_mensaje_modal_delete${infoId}`).addClass('alert-success');
          $(`#mostrar_mensaje_modal_delete${infoId}`).attr("role", 'alert');
          $(`#mostrar_mensaje_modal_delete${infoId}`).append(botonCerrar);      
          $(`#formularioDeleteSub${infoId}`)[0].reset();
        }
      
  };
}
xhr.send(formData);
});
});