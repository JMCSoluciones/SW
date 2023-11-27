<button class="btn btn-success newBtnElement btn-lg" type="button" data-bs-toggle="modal" data-bs-target="#modalNuevoProducto">Nuevo Producto</button>
  <!-- MODAL -->
      <div class="modal-cotizacion">
        <div class="modal fade" id="modalNuevoProducto" aria-hidden="true" aria-labelledby="modalNuevoProductoLabel" tabindex="-1">
          <div class="modal-dialog modal-lg modal-dialog-centered">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="modalNuevoProductoLabel">Control de <br/><strong>Productos</strong></h5>
                <button class="btn-close" type="button" data-bs-dismiss="modal" aria-label="Close" onclick=""></button>
              </div>
              <div class="modal-body">
                <div class="content-form">
                  <form action="insert_product.php" method="POST" id="formularioP" enctype="multipart/form-data" accept-charset="utf-8">
                  <div class="form-floating mb-3">
                      <input class="form-control form-control-lg" type="text" name="clave" maxlength="10"  placeholder="Clave del Producto" id="claveProducto"/>
                      <label class="form-label" for="claveProducto">Clave del producto</label>
                    </div>
                    <div class="form-floating mb-3">
                      <input class="form-control form-control-lg" type="text" name="producto" maxlength="80" aria-describedby="emailHelp" placeholder="Ingrese su télefono" id="nombreProducto"/>
                      <label class="form-label" for="nombreProducto">Nombre del producto</label>
                    </div>
                    <div class="form-floating mb-3">
                      <lablel class="form-label" for="selectcategoria">Categoría</lablel>
                      <select class="form-control form-control-lg form-select" name="categoria" id="selectcategoria">
                        <option value=1>Semáforos</option>
                        <option value=2>Postes</option>
                        <option value=3>Señalamientos</option>
                        <option value=4>Complementos Viales</option>
                        <option value=5>Servicios de diseño</option>
                      </select>
                    </div>
                    <div class="form-floating mb-3">
                      <lablel class="form-label" for="selectsubcategoria">Subcategoria</lablel>
                      <select class="form-control form-control-lg form-select" name="selectsubcategoria" id="selectsubcategoria">
                      </select>

                    </div>
                    <div class="mb-3">
                      <label class="form-label" id="formFile" for="ctaImagen">Imagen</label>
                      <input class="form-control form-control-lg" type="file" name="foto" id="foto" accept="image/jpeg, image/png/">
                    </div>
                    <div class="form-floating mb-3">
                      <textarea class="form-control form-control-lg" type="text" name="extracto" aria-describedby="extracto" placeholder="Ingrese su mensaje" id="extracto"></textarea>
                      <label class="form-label" for="extracto">Extracto</label>
                    </div>
                    <div class="form-floating mb-3">
                      <textarea class="form-control form-control-lg" type="text" name="descripcion" aria-describedby="emailHelp" placeholder="Ingrese su mensaje" id="descripcion"></textarea>
                      <label class="form-label" for="descripcion">Descripción</label>
                    </div>
                    <div class="form-floating mb-3">
                      <input type="hidden" value=1 name="oculto">
                    </div>
                    <div class="modal-body__buttons form-floating mb-3"> 
                      <button class="btn btn-danger btn-lg" data-bs-dismiss="modal" aria-label="Close" onclick=";">Cancelar</button>
                      <button class="btn btn-success btn-lg"  type="submit" name="guardar">Guardar</button>
                    </div>
                    <div class="form-floating mb-3">
                      <div class="" id="mostrar_mensaje"></div>
                    </div>
                  </form>
                </div>
                
              </div>
            </div>
          </div>
        </div>
        <script>
   const form = document.querySelector('#formularioP');
    form.addEventListener('submit', function (event) {
  event.preventDefault();
  let fileInputElement = document.getElementById('foto');
  const formData = new FormData();
  formData.append('clave', form.clave.value);
  formData.append('producto', form.producto.value);
  formData.append('selectcategoria', form.selectcategoria.value);
  formData.append('selectsubcategoria', form.selectsubcategoria.value);
  formData.append('extracto', form.extracto.value);
  formData.append('descripcion', form.descripcion.value);
  formData.append('foto', fileInputElement.files[0]);
  formData.append('oculto', form.oculto.value);

  const xhr = new XMLHttpRequest();
  xhr.open('POST', './insert_product.php');
  
  xhr.onload = function () {
    $('#mostrar_mensaje').addClass('slideDown');
    if (xhr.status === 200) {
      var mensaje = xhr.responseText;
      $('#mostrar_mensaje').html(mensaje);
      if (mensaje.includes('Error')) {
        $('#mostrar_mensaje').addClass('notificacion-error');
        $('#mostrar_mensaje').removeClass('notificacion-exito');
      } else if (mensaje.includes('exitosa')) {
        $('#mostrar_mensaje').removeClass('notificacion-error');
        $('#mostrar_mensaje').addClass('notificacion-exito');
        $('#formulario').trigger('reset');
   
      }
    };
  }

  xhr.onerror = function() {
    console.error("Error en la solicitud AJAX");
  };

  xhr.upload.onprogress = function(event) {
    var img = $('<img>', { src: 'images/cargando.gif' });
    $('#mostrar_mensaje').removeClass('notificacion-error');
    $('#mostrar_mensaje').removeClass('notificacion-exito');
    $('#mensaje-imagen').remove();
    $('#mostrar_mensaje').html(img);
  };

  xhr.send(formData);
});

  </script>
 <script src="js/script.js"></script>