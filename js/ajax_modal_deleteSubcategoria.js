
// Manajador de eventos para el botón "Cancelar" o el botón de cierre del modal
$('#modalCancelarBtn').on('click', function (event) {
  // Prevenir la acción por defecto del formulario
  event.preventDefault();
  $('#mostrar_mensaje_modal_delete').empty();
  $('#mostrar_mensaje_modal_delete').removeClass('alert-danger');
  $('#mostrar_mensaje_modal_delete').removeClass('alert-success');
  });
// Obtener el formulario y el campo de tipo file
const formDeleteSub = document.querySelector('#formularioDeleteSub');
// Escuchar el evento submit del formulario
formDeleteSub.addEventListener('submit', function (event){
event.preventDefault();
const xhrdelete = new XMLHttpRequest();

 // Crear un objeto FormData y agregar los datos del formulario
  const formDataDelSub = new FormData();
  formDataDelSub.append('idSubcategoria', formDeleteSub.idSubcategoria.value);
  formDataDelSub.append('nombreSubcategoria', formDeleteSub.nombreSubcategoria.value);
  formDataDelSub.append('oculto', formDeleteSub.oculto.value);

  //WAITING PROGRESS
   //Crear un elemento de imagen y establecer su atributo src en la URL de la imagen GIF
   let imgloading = $(document.createElement('img')).attr('src', 'images/cargando.gif');
  $('#mostrar_mensaje_modal_delete').removeClass('alert-danger');
  $('#mostrar_mensaje_modal_delete').removeClass('alert-success');
  $('#mensaje-imagen').remove();
  $('#mostrar_mensaje_modal_delete').html(imgloading);

xhrdelete.upload.onprogress = function(event){  
// Actualizar el contenido de la imagen de carga
imgloading.attr('src', 'images/cargando.gif');
};

// Enviar los datos con AJAX
  xhrdelete.open('POST', 'delete_subcategoria.php');
  xhrdelete.onload = function () {
    $('#mostrar_mensaje_modal_delete').addClass('slideDown');
    if (xhrdelete.status === 200) {
      $('#mostrar_mensaje_modal_delete').empty();
      let msg = xhrdelete.responseText;
      $('#mostrar_mensaje_modal_delete').html(msg);
      let botonCerrarD = $('<button>', {
        type: 'button',
        class: 'btn-close',
        'data-bs-dismiss': 'alert',
        'aria-label': 'Close'
      });
      
      if(msg.includes('Error')){
        $('#mostrar_mensaje_modal_delete').addClass('alert-dismissible');
        $('#mostrar_mensaje_modal_delete').addClass('alert');
        $('#mostrar_mensaje_modal_delete').addClass('fade');
        $('#mostrar_mensaje_modal_delete').addClass('show');
        $('#mostrar_mensaje_modal_delete').addClass('alert-danger');
        $('#mostrar_mensaje_modal_delete').removeClass('alert-success');
        $('#mostrar_mensaje_modal_delete').attr("role", 'alert');
        $('#mostrar_mensaje_modal_delete').append(botonCerrarD);      
      }else if(msg.includes('exitosa')){
        $('#mostrar_mensaje_modal_delete').addClass('alert');
        $('#mostrar_mensaje_modal_delete').addClass('alert-dismissible');
        $('#mostrar_mensaje_modal_delete').addClass('fade');
        $('#mostrar_mensaje_modal_delete').addClass('show');
        $('#mostrar_mensaje_modal_delete').removeClass('alert-danger');
        $('#mostrar_mensaje_modal_delete').addClass('alert-success');
        $('#mostrar_mensaje_modal_delete').attr("role", 'alert');
        $('#mostrar_mensaje_modal_delete').append(botonCerrarD);      
        $('#formularioDeleteSub')[0].reset();
      }
    
};
}
xhrdelete.send(formDataDelSub);
});