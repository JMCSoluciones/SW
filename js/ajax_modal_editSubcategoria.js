$(document).ready(function () {
// Manajador de eventos para el botón "Cancelar" o el botón de cierre del modal
$('#modalCloseEditBtn','#modalCloseEditBtn2').on('click', function (event) {
  // Prevenir la acción por defecto del formulario
  event.preventDefault();
  $('#mostrar_mensaje_modalEdit').empty();
  $('#mostrar_mensaje_modalEdit').removeClass('alert-danger');
  $('#mostrar_mensaje_modalEdit').removeClass('alert-success');
  });
// Obtener el formulario y el campo de tipo file
const formEditSub = document.querySelector('#formularioEditSub');
// Escuchar el evento submit del formulario
formEditSub.addEventListener('submit', function (event){
event.preventDefault();
const xhrEdit = new XMLHttpRequest();

 // Crear un objeto FormData y agregar los datos del formulario
  const formDataEditSub = new FormData();
  formDataEditSub.append('idSubcategoria', formEditSub.idSubcategoria.value);
  formDataEditSub.append('nombreSubcategoria', formEditSub.nombreSubcategoria.value);
  formDataEditSub.append('categoria', formEditSub.categoria.value);
  formDataEditSub.append('oculto', formEditSub.oculto.value);

  //WAITING PROGRESS
   //Crear un elemento de imagen y establecer su atributo src en la URL de la imagen GIF
  let img = $('<img>', { src: 'images/cargando.gif' });
  $('#mostrar_mensaje_modalEdit').removeClass('alert-danger');
  $('#mostrar_mensaje_modalEdit').removeClass('alert-success');
  $('#mensaje-imagen').remove();
  $('#mostrar_mensaje_modalEdit').html(img);

xhrEdit.upload.onprogress = function(event){       
// Actualizar el contenido de la imagen de carga
img.attr('src', 'images/cargando.gif');
};

// Enviar los datos con AJAX
  xhrEdit.open('POST', 'edit_subcategoria.php');
  xhrEdit.onload = function () {
    $('#mostrar_mensaje_modalEdit').addClass('slideDown');
    if (xhrEdit.status === 200) {
      $('#mostrar_mensaje_modalEdit').empty();
      let mensaje = xhrEdit.responseText;
      $('#mostrar_mensaje_modalEdit').html(mensaje);
      let botonCerrarD = $('<button>', {
        type: 'button',
        class: 'btn-close',
        'data-bs-dismiss': 'alert',
        'aria-label': 'Close'
      });
      
      if(mensaje.includes('Error')){
        $('#mostrar_mensaje_modalEdit').addClass('alert-dismissible');
        $('#mostrar_mensaje_modalEdit').addClass('alert');
        $('#mostrar_mensaje_modalEdit').addClass('fade');
        $('#mostrar_mensaje_modalEdit').addClass('show');
        $('#mostrar_mensaje_modalEdit').addClass('alert-danger');
        $('#mostrar_mensaje_modalEdit').removeClass('alert-success');
        $('#mostrar_mensaje_modalEdit').attr("role", 'alert');
        $('#mostrar_mensaje_modalEdit').append(botonCerrarD);      
      }else if(mensaje.includes('exitosa')){
        $('#mostrar_mensaje_modalEdit').addClass('alert');
        $('#mostrar_mensaje_modalEdit').addClass('alert-dismissible');
        $('#mostrar_mensaje_modalEdit').addClass('fade');
        $('#mostrar_mensaje_modalEdit').addClass('show');
        $('#mostrar_mensaje_modalEdit').removeClass('alert-danger');
        $('#mostrar_mensaje_modalEdit').addClass('alert-success');
        $('#mostrar_mensaje_modalEdit').attr("role", 'alert');
        $('#mostrar_mensaje_modalEdit').append(botonCerrarD);      
        $('#formularioInsert')[0].reset();
      }
    
};
}
xhrEdit.send(formDataEditSub);
  });
});