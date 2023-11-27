<?php 
include './components/head.php';
include './components/header-admin.php';
include './components/control-menuAdmin.php';
include './model/conexion.php';
?>
<style>
  .dataTables_wrapper .dataTables_filter input {
    margin-bottom: 10px !important;
}
</style>
  <h3 class="title">Control de Subcategorias</h3>
<div class="content__CtrlSubcategorias">

  <?php include 'modal-subcategoria.php';?>

  <!-- TABLA -->
  <div id="resultadoTabla">        
    <table class="table display table-hover" id="tableSubcategoria">
    <thead class="table-dark">
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Nombre</th>
      <th scope="col">Categoria</th>
      <th scope="col">Editar</th>
      <th scope="col">Eliminar</th>

    </tr>
    </thead>
    <tbody>
    <img src="images/cargando.gif" alt="Cargando..." id="loadingImage" style="display: none;">

    <?php
    $query = $bd->query("SELECT id, nombre, id_categoria FROM subcategoria");
    $subcategorias = $query->fetchAll(PDO::FETCH_OBJ);
    if(!$subcategorias){
      echo "No existen subcategorias";
    
    }else{
      foreach ($subcategorias as $info){
      ?>
      <tr>
        <th scope="row"><?php echo $info->id; $subcategoria = $info->id;?></th>
        <td><?php echo $info->nombre ?></td>
        <td>
          <?php 
          $queryCat = $bd->query("SELECT nombre FROM categoria WHERE id='$info->id_categoria'");
          $categoria = $queryCat->fetchAll(PDO::FETCH_OBJ);
          foreach ($categoria as $nomSubcategoria){
            echo $nomSubcategoria->nombre;
            break;
          }
        ?></td>
        <td>
          <!-- EDIT SUBCATEGORIA -->
        <button class="btn newBtnElement" type="button" data-bs-toggle="modal" data-bs-target="#modalEditSubCategoria<?= $info->id?>" data-id="<?= $info->id ?>"><img src="/images/iconos/pencil-square.svg" alt="" data-id="<?= $info->id ?>"></button>
          <div class="modal-subcategoria">
            <div class="modal fade" id="modalEditSubCategoria<?= $info->id?>" aria-hidden="true" aria-labelledby="modalEditSubCategoria<?= $info->id?>Label" tabindex="-1">
              <div class="modal-dialog modal-lg modal-dialog-centered">
                <div class="modal-content">
                  <div class="modal-header">
           
                    <h5 class="modal-title" id="modalEditSubCategoria<?= $info->id?>Label">Editar <br/><strong>Subcategoria  </strong></h5>
                    <!-- Boton cerrar x -->
                    <button class="btn-close closeXmodal" type="button" data-bs-dismiss="modal" aria-label="Close" id="#modalCloseEditBtn"></button>
                  </div>
                  <div class="modal-body">
                    <div class="content-form formulario-container" data-info-id="<?php echo $info->id; ?>">
                      <form action="edit_subcategoria.php" id="formularioEditSub<?= $info->id?>" method="POST">
                        <div class="form-floating mb-3">
                          <input class="form-control form-control-lg" type="text" name="idSubcategoria" maxlength="40" id="idSubcategoria" value="<?= $info->id ?>" placeholder="<?= $info->id ?>" readonly />
                          <label class="form-label" for="idSubcategoria">ID</label>
                        </div>
                        <!-- INPUT NOMBRE DE LA SUBCATEGORIA -->
                        <div class="form-floating mb-3">
                          <input class="form-control form-control-lg" type="text" name="nombreSubcategoria" maxlength="40" placeholder="<?= $info->nombre?>" id="nombreSubcategoria" required/>
                          <label class="form-label" for="nombreSubcategoria">Nombre de la Subcategoria</label>
                        </div>
                        <!-- INPUT NOMBRE DE LA CATEGORIA -->
                        <div class="form-floating mb-3">
                          <lablel class="form-label" for="categoria">Categoría</lablel>
                          <select class="form-control form-control-lg form-select"  name="categoria" id="categoria">
                          <?php
                            $consulta = $bd->query("SELECT id, nombre FROM categoria;");
                            $categoria = $consulta->fetchAll(PDO::FETCH_OBJ);
                            foreach ($categoria as $dato){
                            ?>
                          <option value="<?php echo $dato->id?>"> <?php echo $dato->nombre?></option>
                          <?php 
                        }
                            ?>
                          </select>
                        </div>
                        <div class="modal-body__buttons form-floating mb-3"> 
                          <button class="btn btn-danger btn-lg closeXmodal" data-bs-dismiss="modal" aria-label="Close" onclick="" id="#modalCloseEditBtn2">Cancelar</button>
                          <button class="btn btn-warning btn-lg" type="submit">Editar</button>
                        </div>
                        <input type="hidden" name="oculto" value=1>
                        <div class="form-floating mb-3">
                          <div class="" id="mostrar_mensaje_modalEdit<?= $info->id?>"></div>
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

    
  </div>
</div>
<!-- SCRIPT AJAX MODAL EDIT-->
<script src="js/ajax_modal_editSubcategoria.js"></script>
<script src="js/ajax_modal_deleteSubcategoria.js"></script>
<script>
$(document).ready( function () {
$('#tableSubcategoria').DataTable();
} );
</script>

<?php
 include './components/footer-admin.php';
?>

