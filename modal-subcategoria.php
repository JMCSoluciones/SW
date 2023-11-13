<?php
include './model/conexion.php';
?>
<button class="btn btn-success btn-lg newBtnElement" type="button" data-bs-toggle="modal" data-bs-target="#modalCotizacion-gral"><strong>+</strong> Nueva Subcategoria</button>
      <div class="modal-cotizacion">
        <div class="modal fade" id="modalCotizacion-gral" aria-hidden="true" aria-labelledby="modalCotizacion-gralLabel" tabindex="-1">
          <div class="modal-dialog modal-lg modal-dialog-centered">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="modalCotizacion-gralLabel">Control <br/><strong>Subcategoria</strong></h5>
                <button class="btn-close" type="button" data-bs-dismiss="modal" aria-label="Close" id="modalCancelBtn"></button>
              </div>
              <div class="modal-body">
                <div class="content-form">
                  <form action="insert_subcategoria.php" id="formularioInsert" method="POST">
                    <!-- INPUT NOMBRE DE LA SUBCATEGORIA -->
                    <div class="form-floating mb-3">
                      <input class="form-control form-control-lg" type="text" name="subcategoria" maxlength="40"  placeholder="Ingrese el nombre de la subcategoría" id="subcategoria" required/>
                      <label class="form-label" for="subcategoria">Nombre de la subcategoría</label>
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
                      <button class="btn btn-danger btn-lg" data-bs-dismiss="modal" aria-label="Close" id="modalCancelarBtn">Cancelar</button>
                      
                      <button class="btn btn-success btn-lg" type="submit" name="guardar">Guardar</button>
                    </div>
                    <input type="hidden" name="oculto" value=1>

                    <div class="form-floating mb-3">
                      <div class="" id="mostrar_mensaje_modal1"></div>
                    </div>
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <script src="/js/ajax_modal_nvaSubcategoria.js"></script>
