<!-- <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script> -->

<?php
include 'model/conexion.php';

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

if($_SERVER['REQUEST_METHOD'] == 'POST'){
    $opcion = $_POST['selectedCategoria'];
   
    $tableHTML = "
    <table class='table dataTable' id='tableQCat'>
    <thead class='table-dark'>
    <tr>
      <th scope='col'>ID</th>
      <th scope='col'>Nombre</th>
      <th scope='col'>Categoria</th>
      <th scope='col'>Editar</th>
      <th scope='col'>Eliminar</th>

    </tr>
    </thead>

    <tbody>
    <img src='images/cargando.gif' alt='Cargando...' id='loadingImage' style='display: none;'>
    ";
    if($opcion == "0"){
        $query = $bd->query("SELECT id, nombre, id_categoria FROM subcategoria");
    }
    else{
    $query = $bd->query("SELECT id, nombre, id_categoria FROM subcategoria WHERE id_categoria = '$opcion'");

    }
    $subcategorias = $query->fetchAll(PDO::FETCH_OBJ);
    if(!$subcategorias){
      echo 'Error: No existen subcategorias';
    
    }else{
      foreach ($subcategorias as $info){
      
    $tableHTML .= 
      "<tr>
        <th scope='row'>". $info->id; 
        $subcategoria = $info->id;
    $tableHTML .= 
        "</th>
        <td>". $info->nombre; 
    $tableHTML .= "</td>
        <td>";
        $consulta = $bd->query("SELECT nombre FROM categoria WHERE id= '$info->id_categoria'");
        $categoria = $consulta->fetchAll(PDO::FETCH_OBJ);
          if ($categoria){
            $tableHTML .= $categoria[0]->nombre;
          }
    $tableHTML .=   "</td>
        <td>
        <button class='btn newBtnElement' type='button' data-bs-toggle='modal' data-bs-target='#modalEditSubCategoria" . $info->id; 
    $tableHTML .="'><img src='/images/iconos/pencil-square.svg' alt=''></button>
          <div class='modal-subcategoria'>
            <div class='modal fade' id='modalEditSubCategoria" . $info->id;
    $tableHTML .="' aria-hidden='true' aria-labelledby='modalEditSubCategoria". $info->id;
    $tableHTML .="Label' tabindex='-1'>
              <div class='modal-dialog modal-lg modal-dialog-centered'>
                <div class='modal-content'>
                  <div class='modal-header'>
           
                    <h5 class='modal-title' id='modalEditSubCategoria"
                    . $info->id;
    $tableHTML .="Label'>Editar <br/><strong>Subcategoria  </strong></h5>
                    <button class='btn-close' type='button' data-bs-dismiss='modal' aria-label='Close' ></button>
                  </div>
                  <div class='modal-body'>
                    <div class='content-form'>
                      <form action='edit_subcategoria.php' id='formularioSub' method='POST'>
                        <div class='form-floating mb-3'>
                          <input class='form-control form-control-lg' type='text' name='idSubcategoria' maxlength='40' id='idSubcategoria' value='"
                          . $info->id; 
    $tableHTML .="' placeholder='" . $info->id; 
    $tableHTML .="' readonly />
                          <label class='form-label' for='idSubcategoria'>ID</label>
                        </div>
                        <!-- INPUT NOMBRE DE LA SUBCATEGORIA -->
                        <div class='form-floating mb-3'>
                          <input class='form-control form-control-lg' type='text' name='nombreSubcategoria' maxlength='40' placeholder='" . $info->nombre; 
    $tableHTML .="' id='nombreSubcategoria' required/>
                          <label class='form-label' for='nombreSubcategoria'>Nombre de la Subcategoria</label>
                        </div>
                        <!-- INPUT NOMBRE DE LA CATEGORIA -->
                        <div class='form-floating mb-3'>
                          <lablel class='form-label' for='categoria'>Categoría</lablel>
                          <select class='form-control form-control-lg form-select'  name='categoria' id='categoria'>";
                    
    $consultaCategorias = $bd->query('SELECT id, nombre FROM categoria;');
    $categorias = $consultaCategorias->fetchAll(PDO::FETCH_OBJ);
    foreach ($categorias as $dato){
    
    $tableHTML .=" <option value='" . $dato->id; 
    $tableHTML .="'>" . $dato->nombre; 
    $tableHTML .="</option>";
                        }
                        
    $tableHTML .=" </select>
                        </div>
                        <div class='modal-body__buttons form-floating mb-3'> 
                          <button class='btn btn-danger btn-lg' data-bs-dismiss='modal' aria-label='Close' onclick=''>Cancelar</button>
                          <button class='btn btn-warning btn-lg' type='submit'>Editar</button>
                        </div>
                        <input type='hidden' name='oculto' value=1>
                        <div class='form-floating mb-3'>
                          <div class='' id='mostrar_mensaje_modalEdit'></div>
                        </div>
                      </form>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </td>
        <td>
        <button class='btn newBtnElement' type='button' data-bs-toggle='modal' data-bs-target='#modalDeleteSubCategoria". $info->id; 
        $tableHTML .="'>
          <img src='/images/iconos/trash3-fill.svg' alt='ícono de un bote de basura'></button>
          <div class='modal-subcategoria'>
            <div class='modal fade' id='modalDeleteSubCategoria". $info->id;

            $tableHTML .="' aria-hidden='true' aria-labelledby='modalDeleteSubCategoria".$info->id;
            $tableHTML .=">Label' tabindex='-1'>
              <div class='modal-dialog modal-lg modal-dialog-centered'>
                <div class='modal-content'>
                  <div class='modal-header'>
                    <h5 class='modal-title' id='modalDeleteSubCategoria". $info->id;
            $tableHTML .="Label'>Eliminar <br/><strong>Subcategoria  </strong></h5>
                    <button class='btn-close' type='button' data-bs-dismiss='modal' aria-label='Close' id='modalCancelBtn'></button>
                  </div>
                  <div class='modal-body'>
                    <div class='content-form'>
                      <form action='delete_subcategoria.php' id='formularioDeleteSubQ' method='POST'>
                        <div class='form-floating mb-3'>
                          <input class='form-control form-control-lg' type='text' name='idSubcategoria' maxlength='40' id='idSubcategoria' value='". $info->id;
              $tableHTML .="' placeholder='". $info->id; 
              $tableHTML .="' readonly />
                          <label class='form-label' for='idSubcategoria'>ID</label>
                        </div>
                        <!-- INPUT NOMBRE DE LA SUBCATEGORIA -->
                        <div class='form-floating mb-3'>
                          <input class='form-control form-control-lg' type='text' name='nombreSubcategoria' maxlength='40' placeholder='". $info->nombre;
              $tableHTML .="' id='nombreSubcategoria' readonly/>
                          <label class='form-label' for='nombreSubcategoria' value='". $info->nombre;
              $tableHTML .="'>". $info->nombre;
              $tableHTML .="</label>
                        </div> 
                        <div class='modal-body__buttons form-floating mb-3'> 
                          <button class='btn btn-dark btn-lg' data-bs-dismiss='modal' aria-label='Close' onclick='' id='modalCancelarBtn'>Cancelar</button>
                          <button class='btn btn-danger btn-lg' type='submit'>Eliminar</button>
                        </div>
                        <input type='hidden' name='oculto' value=1>
                        <div class='form-floating mb-3'>
                          <div class='' id='mostrar_mensaje_modal_delete_catQ'></div>
                        </div>
                      </form>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
      </td>
      </tr>";
      }
    }
    $tableHTML .="
    </tbody>
    </table>
    <!-- PAGINACIÓN -->
    <!-- Contenedor para la paginación -->
        <nav aria-label='Page navigation example'>
            <ul class='pagination'>
      <li class='page-item' id='prevPage'>
          <a class='page-link' href='#' aria-label='Previous'>
          </a>
      </li>
      <!-- Números de página se generarán aquí -->
      <li class='page-item' id='nextPage'>
          <a class='page-link' href='#' aria-label='Next'>
          </a>
      </li>
  </ul>
</nav>
<script>

// Manajador de eventos para el botón 'Cancelar' o el botón de cierre del modal
$('#modalCancelarBtn').on('click', function (event) {
  // Prevenir la acción por defecto del formulario
  event.preventDefault();
  $('#mostrar_mensaje_modal_delete_catQ').empty();
  $('#mostrar_mensaje_modal_delete_catQ').removeClass('alert-danger');
  $('#mostrar_mensaje_modal_delete_catQ').removeClass('alert-success');
  });
// Obtener el formulario y el campo de tipo file
let formDeleteSubQ = document.querySelector('#formularioDeleteSubQ');
// Escuchar el evento submit del formulario
formDeleteSubQ.addEventListener('submit', function (event){
event.preventDefault();
const xhrdeleteQ = new XMLHttpRequest();

 // Crear un objeto FormData y agregar los datos del formulario
  const formDataDelSubQ = new FormData();
  formDataDelSubQ.append('idSubcategoria', formDeleteSubQ.idSubcategoria.value);
  formDataDelSubQ.append('nombreSubcategoria', formDeleteSubQ.nombreSubcategoria.value);
  formDataDelSubQ.append('oculto', formDeleteSubQ.oculto.value);

  //WAITING PROGRESS
   //Crear un elemento de imagen y establecer su atributo src en la URL de la imagen GIF
   let imgloading = $(document.createElement('img')).attr('src', 'images/cargando.gif');
  $('#mostrar_mensaje_modal_delete_catQ').removeClass('alert-danger');
  $('#mostrar_mensaje_modal_delete_catQ').removeClass('alert-success');
  $('#mensaje-imagen').remove();
  $('#mostrar_mensaje_modal_delete_catQ').html(imgloading);

xhrdeleteQ.upload.onprogress = function(event){  
// Actualizar el contenido de la imagen de carga
imgloading.attr('src', 'images/cargando.gif');
};

// Enviar los datos con AJAX
  xhrdeleteQ.open('POST', 'delete_subcategoria.php');
  xhrdeleteQ.onload = function () {
    $('#mostrar_mensaje_modal_delete_catQ').addClass('slideDown');
    if (xhrdeleteQ.status === 200) {
      $('#mostrar_mensaje_modal_delete_catQ').empty();
      let msg = xhrdeleteQ.responseText;
      $('#mostrar_mensaje_modal_delete_catQ').html(msg);
      let botonCerrarD = $('<button>', {
        type: 'button',
        class: 'btn-close',
        'data-bs-dismiss': 'alert',
        'aria-label': 'Close'
      });
      
      if(msg.includes('Error')){
        $('#mostrar_mensaje_modal_delete_catQ').addClass('alert-dismissible');
        $('#mostrar_mensaje_modal_delete_catQ').addClass('alert');
        $('#mostrar_mensaje_modal_delete_catQ').addClass('fade');
        $('#mostrar_mensaje_modal_delete_catQ').addClass('show');
        $('#mostrar_mensaje_modal_delete_catQ').addClass('alert-danger');
        $('#mostrar_mensaje_modal_delete_catQ').removeClass('alert-success');
        $('#mostrar_mensaje_modal_delete_catQ').attr('role', 'alert');
        $('#mostrar_mensaje_modal_delete_catQ').append(botonCerrarD);      
      }else if(msg.includes('exitosa')){
        $('#mostrar_mensaje_modal_delete_catQ').addClass('alert');
        $('#mostrar_mensaje_modal_delete_catQ').addClass('alert-dismissible');
        $('#mostrar_mensaje_modal_delete_catQ').addClass('fade');
        $('#mostrar_mensaje_modal_delete_catQ').addClass('show');
        $('#mostrar_mensaje_modal_delete_catQ').removeClass('alert-danger');
        $('#mostrar_mensaje_modal_delete_catQ').addClass('alert-success');
        $('#mostrar_mensaje_modal_delete_catQ').attr('role', 'alert');
        $('#mostrar_mensaje_modal_delete_catQ').append(botonCerrarD);      
        $('#formularioDeleteSubQ')[0].reset();
      }
    
};
}
xhrdeleteQ.send(formDataDelSubQ);
});
</script>
";

    echo $tableHTML;
}
?>

<script src='js/paginacion_Subcategoria.js'></script>
<!-- SCRIPT AJAX MODAL DELETE -->
