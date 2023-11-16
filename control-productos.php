<?php 
include './components/head.php';
include './components/header-admin.php';
include './components/control-menuAdmin.php';
include './model/conexion.php';
?>
  <h3 class="title">Control de Productos</h3>
<div class="content__CtrlProductos">
  <div class="content__CtrlProductos__box contentCtrlSearch">
    <div class="contentCtrlSearch__input">
      <form action="pquery_categoria_table.php" id="formQueryCat" method="POST">
        <label for="selectCategorias">Filtrar por categoría</label>
        <div class="contentCtrlSearch__input__cta">
        <select name="selectedCategoria" id="selectCategorias" class="form-select">
            <?php
              $consulta = $bd->query("SELECT id,nombre FROM categoria");
              $categoria = $consulta->fetchAll(PDO::FETCH_OBJ);
              if(!$categoria){
              echo 'No existen Productos ';

              }else{
                ?>
                <option value="0">Todas</option>
                <?php
              foreach ($categoria as $dato){
                ?>
                <option value="<?php echo $dato->id;?>"><?php echo $dato->nombre;?></option>
                <?php
            
            }
          }
              ?>
        </select>
        <button class="btn btn-warning" type="submit"><img src="/images/iconos/funnel-fill.svg" alt=""></button>
        </div>
      </form>
    </div>
    <div class="contentCtrlSearch__input">
      <form action="pquery_subnombre_table.php" method="POST" id="formQueryName">
        <label for="searchSubName">Buscar por nombre</label>
        <div class="contentCtrlSearch__input__cta">
          <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search" id="searchSubName" name="subname"/>
          <button class="btn btn-warning" type="submit"><img src="/images/iconos/funnel-fill.svg" alt=""></button>
        </div>
      </form>
    </div>
  </div>
  <?php include 'modal-registro-producto.php';?>

  <!-- TABLA -->
  <div id="resultadoTabla">        
    <table class="table dataTable" id="table">
    <thead class="table-dark">
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Clave</th>
      <th scope="col">Nombre</th>
      <th scope="col">Categoría</th>
      <th scope="col">Subcategoría</th>
      <th scope="col">Ver/Editar</th>
      <th scope="col">Eliminar</th>
    </tr>
    </thead>
    <tbody>
    <img src="images/cargando.gif" alt="Cargando..." id="loadingImage" style="display: none;">
    <?php
    $query = $bd->query("SELECT id, clave, producto,id_categoria, id_subcategoria, extracto, descripcion, foto, tipofoto FROM productos");
    $productos = $query->fetchAll(PDO::FETCH_OBJ);
    if(!$productos){
      echo "No existen Productos";
    
    }else{
      foreach ($productos as $info){
      ?>
      <tr>
        <th scope="row"><?=$info->id; ?></th>
        <td><?=$info->clave ?></td>
        <td><?=$info->producto ?></td>
        <td>
            <!-- CATEGORIA DEL PRODUCTO -->
            <?php 
          $queryCat = $bd->query("SELECT nombre FROM categoria WHERE id='$info->id_categoria'");
          $categoria = $queryCat->fetch(PDO::FETCH_OBJ);
          if($categoria){
            echo $categoria->nombre;
          }
          ?>
        </td>
        <td>
          <!-- SUBCATEGORIA DEL PRODUCTO -->
          <?php  
        $querySubCat = $bd->query("SELECT nombre FROM subcategoria WHERE id='$info->id_subcategoria'");
          $subcategoria = $querySubCat->fetch(PDO::FETCH_OBJ);
          if($subcategoria){
            echo $subcategoria->nombre;
          }?></td>
        <td>
          <!-- EDIT PRODUCTO -->
        <button class="btn newBtnElement" type="button" data-bs-toggle="modal" data-bs-target="#modalEditProducto<?= $info->id?>" data-id="<?= $info->id ?>"><img src="/images/iconos/pencil-square.svg" alt="" data-id="<?= $info->id ?>"></button>
          <div class="modal-editProducto">
            <div class="modal fade" id="modalEditProducto<?= $info->id?>" aria-hidden="true" aria-labelledby="modalEditProducto<?= $info->id?>Label" tabindex="-1">
              <div class="modal-dialog modal-lg modal-dialog-centered">
                <div class="modal-content">
                  <div class="modal-header">
           
                    <h5 class="modal-title" id="modalEditSubCategoria<?= $info->id?>Label">Detalles del <br/><strong>Producto  </strong></h5>
                    <!-- Boton cerrar x -->
                    <button class="btn-close closeXmodal" type="button" data-bs-dismiss="modal" aria-label="Close" id="#modalCloseEditBtn"></button>
                  </div>
                  <div class="modal-body">
                    <div class="content-form" data-info-id="<?php echo $info->id; ?>">
                    <!-- FORMULARIO -->
                      <form action="edit_producto.php" id="formularioEditProd<?= $info->id?>" method="POST">
                      <!-- ID -->
                      <div class="form-floating mb-3">
                        <input class="form-control form-control-lg" value="<?= $info->id;?>" type="text" name="clave" maxlength="10"  placeholder="ID del Producto" id="IdProducto"/>
                        <label class="form-label" for="IdProducto">ID</label>
                    </div>
                    <!-- CLAVE -->
                      <div class="form-floating mb-3">
                        <input class="form-control form-control-lg" value="<?= $info->clave; ?>" type="text" name="clave" maxlength="10"  placeholder="Clave del Producto" id="claveProducto"/>
                        <label class="form-label" for="claveProducto">Clave del producto</label>
                    </div>
                    <!-- PRODUCTO -->
                    <div class="form-floating mb-3">
                      <input class="form-control form-control-lg" value="<?= $info->producto;?>" type="text" name="producto" maxlength="80" aria-describedby="emailHelp" placeholder="Ingrese su télefono" id="nombreProducto"/>
                      <label class="form-label" for="nombreProducto">Nombre del producto</label>
                    </div>
                    <!-- CATEGORIA -->
                    <div class="form-floating mb-3">
                      <lablel class="form-label" for="selectcategoriaEdit<?= $info->id?>">Categoría</lablel>
                      <select class="form-control form-control-lg form-select" name="categoria" id="selectcategoriaEdit<?= $info->id?>" onchange="cargarSubcategorias(this.value,<?= $info->id?>)">
                        <option value="1" <?php echo ($info->id_categoria == 1) ? 'selected' : ''; ?>>Semáforos</option>
                        <option value="2" <?php echo ($info->id_categoria == 2) ? 'selected' : ''; ?>>Postes</option>
                        <option value="3" <?php echo ($info->id_categoria == 3) ? 'selected' : ''; ?>>Señalamientos</option>
                        <option value="4" <?php echo ($info->id_categoria == 4) ? 'selected' : ''; ?>>Complementos Viales</option>
                        <option value="5" <?php echo ($info->id_categoria == 5) ? 'selected' : ''; ?>>Servicios de diseño</option>
                      </select>
                    </div>
                    <!-- SUBCATEGORIA -->
                    <div class="form-floating mb-3">
                      <lablel class="form-label" for="selectsubcategoriaEdit<?= $info->id?>">Subcategoria</lablel>
                      <select class="form-control form-control-lg form-select" name="selectsubcategoriaEdit<?= $info->id?>" id="selectsubcategoriaEdit<?= $info->id?>">
                      <?php
                          // Obtener las opciones de la subcategoría desde la base de datos
                          $consultaSubcategorias = $bd->query("SELECT id, nombre FROM subcategoria");
                          $subcategorias = $consultaSubcategorias->fetchAll(PDO::FETCH_OBJ);

                          foreach ($subcategorias as $subcategoria) {
                              // Verificar si el id de la subcategoría coincide con el valor registrado en la base de datos
                              $selected = ($subcategoria->id == $info->id_subcategoria) ? 'selected' : '';

                              // Imprimir la opción
                              echo '<option value="' . $subcategoria->id . '" ' . $selected . '>' . $subcategoria->nombre . '</option>';
                          }
                          ?>
                      </select>
                    </div>
                    <!-- IMAGEN -->
                    <div class="mb-3 formEdit-img"><?php 
                        $imagen_decodificada = base64_encode($info->foto);
                        ?>
                        <img class="" src="data:<?php echo "$info->tipofoto"?>;base64,<?php echo $imagen_decodificada;?>" alt="Imagen">
                       <div class="formEdit-img__file">
                        <label class="form-label" id="formFile" for="ctaImagen">Modificar Imagen</label>
                        <input class="form-control form-control-lg" type="file" name="foto" id="foto" accept="image/jpeg, image/png/">
                       </div> 
                      
                    </div>
                    <!-- EXTRACTO -->
                    <div class="form-floating mb-3">
                      <textarea class="form-control form-control-lg" type="text" name="extracto" aria-describedby="extracto" placeholder="Ingrese su mensaje" id="extracto" value=""><?= $info->extracto?></textarea>
                      <label class="form-label" for="extracto">Extracto</label>
                    </div>
                    <!-- DESCRIPCIÓN -->
                    <div class="form-floating mb-3">
                      <textarea class="form-control form-control-lg" type="text" name="descripcion" aria-describedby="emailHelp" placeholder="Ingrese su mensaje" id="descripcion"><?= $info->descripcion;?></textarea>
                      <label class="form-label" for="descripcion">Descripción</label>
                    </div>
                    <div class="form-floating mb-3">
                      <input type="hidden" value=1 name="oculto">
                    </div>
                    <div class="modal-body__buttons form-floating mb-3"> 
                      <button class="btn btn-danger btn-lg closeXmodal" data-bs-dismiss="modal" aria-label="Close" onclick="">Cancelar</button>
                      <button class="btn btn-warning btn-lg"  type="submit" name="guardar">Editar</button>
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
          </div>
        </td>
        <td>
          <!-- ELIMINAR SUBCATEGORIA -->
        <button class="btn newBtnElement" type="button" data-bs-toggle="modal" data-bs-target="#modalDeleteSubCategoria<?= $info->id?>"  data-id="<?= $info->id ?>">
          <img src="/images/iconos/trash3-fill.svg" alt="ícono de un bote de basura"  data-id="<?= $info->id ?>"></button>
          <div class="modal-subcategoria">
            <div class="modal fade" id="modalDeleteSubCategoria<?= $info->id?>" aria-hidden="true" aria-labelledby="modalDeleteSubCategoria<?= $info->id?>Label" tabindex="-1">
              <div class="modal-dialog modal-lg modal-dialog-centered">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title" id="modalDeleteSubCategoria<?= $info->id?>Label">Eliminar <br/><strong>Subcategoria  </strong></h5>
                    <button class="btn-close closeXmodal" type="button" data-bs-dismiss="modal" aria-label="Close" id="modalCancelBtn"></button>
                  </div>
                  <div class="modal-body">
                    <div class="content-form formulario-container" data-info-id="<?= $info->id; ?>">
                      <form action="delete_subcategoria.php" id="formularioDeleteSub<?= $info->id; ?>" method="POST">
                        <div class="form-floating mb-3">
                          <input class="form-control form-control-lg" type="text" name="idSubcategoria" maxlength="40" id="idSubcategoria" value="<?= $info->id ?>" placeholder="<?= $info->id ?>" readonly />
                          <label class="form-label" for="idSubcategoria">ID</label>
                        </div>
                        <!-- INPUT NOMBRE DE LA SUBCATEGORIA -->
                        <div class="form-floating mb-3">
                          <input class="form-control form-control-lg" type="text" name="nombreSubcategoria" maxlength="40" placeholder="<?= $info->nombre?>" id="nombreSubcategoria" readonly/>
                          <label class="form-label" for="nombreSubcategoria" value="<?= $info->nombre?>"><?= $info->nombre?></label>
                        </div> 
                        <div class="modal-body__buttons form-floating mb-3"> 
                          <button class="btn btn-dark btn-lg" data-bs-dismiss="modal" aria-label="Close" onclick="" id="modalCancelarBtn">Cancelar</button>
                          <button class="btn btn-danger btn-lg" type="submit">Eliminar</button>
                        </div>
                        <input type="hidden" name="oculto" value=1>
                        <div class="form-floating mb-3">
                          <div class="" id="mostrar_mensaje_modal_delete<?= $info->id; ?>"></div>
                        </div>
                      </form>
                    </div>
                  </div>
                </div>
              </div>
            </div>
                      </div>
        </td>
      </tr>
      <?php
      }
    }
    ?>
    </tbody>
    </table> 

    <!-- PAGINACIÓN -->
            <!-- Contenedor para la paginación -->
      <nav aria-label="Page navigation example">
          <ul class="pagination">
              <li class="page-item" id="prevPage">
                  <a class="page-link" href="#" aria-label="Previous">
                  </a>
              </li>
              <!-- Números de página se generarán aquí -->
              <li class="page-item" id="nextPage">
                  <a class="page-link" href="#" aria-label="Next">
                  </a>
              </li>
          </ul>
      </nav>
  </div>
</div>

<script src="js/paginacion_Subcategoria.js"></script>
<script src="js/script.js"></script>

<?php
 include './components/footer-admin.php';
?>

