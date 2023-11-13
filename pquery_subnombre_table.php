<?php
include './components/head.php';
include 'model/conexion.php';
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

if($_SERVER['REQUEST_METHOD'] == 'POST'){
    $nameSub = $_POST['subname'];
   
    $tableHTML = "
    <table class='table dataTable' id='table'>
    <thead class='table-dark'>
    <tr>
      <th scope='col'>ID</th>
      <th scope='col'>Nombre</th>
      <th scope='col'>Categoria</th>
      <th scope='col'>Editar</th>
      <th scope='col'>Eliminar</th>

    </tr>
    </thead>
    <tbody><img src='images/cargando.gif' alt='Cargando...' id='loadingImage' style='display: none;'>";
 
    $query = $bd->query("SELECT id, nombre, id_categoria FROM subcategoria WHERE nombre LIKE '%$nameSub%'");
    $subcategorias = $query->fetchAll(PDO::FETCH_OBJ);
    if(!$subcategorias){
      echo 'Error: No existen subcategorias';
    
    }else{
      foreach ($subcategorias as $info){
      
    $tableHTML .= 
      "<tr>
        <th scope='row'>". $info->id; 
        $subcategorias = $info->id;
    $tableHTML .= 
        "</th>
        <td>". $info->nombre; 
    $tableHTML .= "</td>
        <td>";
        $consulta = $bd->query("SELECT id,nombre FROM categoria WHERE id= '$info->id_categoria'");
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
                          <div class='' id='mostrar_mensaje_modal2'></div>
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
          <img src='/images/iconos/trash3-fill.svg' alt='ícono de un bote de basura'>
        </td>

      </tr>";

      }
    }
$tableHTML .="
    </tbody>
    </table> <!-- PAGINACIÓN -->
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
    // Tu script para inicializar DataTables con paginación de Bootstrap
    $(document).ready(function() {
        // Inicializa DataTables con opciones, incluyendo la paginación
        $('#table').DataTable({
            paging: true,         // Habilita la paginación
            lengthChange: false,  // Oculta el control de cambio de longitud
            searching: false,     // Deshabilita la búsqueda
            ordering: true,      // Deshabilita la ordenación
            info: false,        // Oculta la información del estado de la tabla
            pageLength: 20,  // Cantidad de registros en las vistas
            columnDefs: [
            { targets: [0, 1, 2], orderable: true },  // Columnas 'id', 'nombre' y 'categoria' son ordenables
            { targets: [3, 4], orderable: false }      // Columnas 'eliminar' no es ordenable
          ]          
                   
        });

        // Lógica para manejar la paginación personalizada
        var table = $('#table').DataTable();
        $('#prevPage').on('click', function() {
            table.page('previous').draw('page');
        });

        $('#nextPage').on('click', function() {
            table.page('next').draw('page');
        });
    });
</script>

";

    echo $tableHTML;
}
?>

