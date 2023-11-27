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
    <h3 class="title">Solicitudes de cotizaciones</h3>
    <div class="content__CtrlCotizaciones">
      <div id="resultadoTabla">        
        <table class="table display table-hover" id="tableCotizacion" cellspacing="0" width="100%">
          <thead class="table-dark">
            <tr>
              <th scope="col">ID</th>
              <th scope="col">fecha</th>
              <th scope="col">Cliente</th>
              <th scope="col">Estado</th>
              <th scope="col">Ver/Atender</th>
            </tr>
          </thead>
          <tbody>
            <img src="images/cargando.gif" alt="Cargando..." id="loadingImage" style="display: none;">
    <?php
    $query = $bd->query("SELECT id, fecha, id_producto,nombre_cl,telefono,email, empresa, mensaje, estatus FROM solicitudes_cotizacion ORDER BY CAST(id AS SIGNED) DESC");
    $solicitudes = $query->fetchAll(PDO::FETCH_OBJ);
    if(!$solicitudes){
      echo "No existen solicitudes de cotización";
    
    }else{
      foreach ($solicitudes as $info){
      ?>
      <tr>
        <th scope="row"><?php echo $info->id;?></th>
        <td><?php echo $info->fecha; ?></td>
        <td><?php echo $info->nombre_cl;?></td>
        <td class="status"><?php echo $info->estatus;?></td>
        <td>
          <!-- MODAL EDIT SOLICITUD DE COTIZACION -->
        <button class="btn newBtnElement" type="button" data-bs-toggle="modal" data-bs-target="#modalSolicitudCot<?= $info->id?>" data-id="<?= $info->id ?>"><img src="/images/iconos/pencil-square.svg" alt="" data-id="<?= $info->id ?>"></button>
          <div class="modal-Solicitud">
            <div class="modal fade" id="modalSolicitudCot<?= $info->id; ?>" aria-hidden="true" aria-labelledby="modalSolicitudCot<?= $info->id?>Label" tabindex="-1">
              <div class="modal-dialog modal-lg modal-dialog-centered">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title" id="modalSolicitudCot<?= $info->id?>Label">Solicitud de <br/><strong>Cotización  </strong></h5>
                    <!-- Boton cerrar x -->
                    <button class="btn-close closeXmodal" type="button" data-bs-dismiss="modal" aria-label="Close" id="#modalXSolCot"></button>
                  </div>
                  <div class="modal-body">
                    <div class="content-form formulario-container" data-info-id="<?php echo $info->id; ?>">
                      <!-- *****FORMULARIO****** -->
                      <form action="edit_solicitud.php" id="formularioEditCot<?= $info->id; ?>" method="POST">
                        <div class="form-floating mb-3">
                          <!-- INPUT ID DE LA SOLICITUD -->
                          <input class="form-control form-control-lg" type="text" name="idSolicitud"  id="idSolicitud" value="<?= $info->id ?>" placeholder="<?= $info->id ?>" readonly />
                          <label class="form-label" for="idSolicitud">Solicitud</label>
                        </div>
                        <!-- INPUT FECHA DE LA Solicitud -->
                        <div class="form-floating mb-3">
                          <input class="form-control form-control-lg" type="text" name="fechaSolicitud"  placeholder="<?= $info->nombre?>" id="fechaSolicitud" value="<?= $info->fecha;?>" readonly/>
                          <label class="form-label" for="fechaSolicitud">Fecha</label>
                        </div>
                        <!-- INPUT PRODUCTO DE LA CATEGORIA -->
                        <div class="form-floating mb-3">
                          <input class="form-control form-control-lg" type="text" name="productoSolicitud"  placeholder="<?= $info->id_producto?>" id="productoSolicitud" value="<?= $info->producto;?>" readonly/>
                          <label class="form-label" for="productoSolicitud">Producto Solicitado</label>
                        </div>
                        <!-- INPUT NOMBRE DEL CLIENTE -->
                        <div class="form-floating mb-3">
                          <input class="form-control form-control-lg" type="text" name="clienteSolicitud"  placeholder="<?= $info->nombre_cl?>" id="clienteSolicitud" value="<?= $info->nombre_cl;?>" readonly/>
                          <label class="form-label" for="clienteSolicitud">Nombre del Cliente</label>
                        </div>
                        <!-- INPUT TELÉFONO -->
                        <div class="form-floating mb-3">
                          <input class="form-control form-control-lg" type="text" name="telSolicitud"  placeholder="<?= $info->telefono?>" id="telSolicitud" value="<?= $info->telefono;?>" readonly/>
                          <label class="form-label" for="telSolicitud">Teléfono</label>
                        </div>
                        <!-- INPUT EMAIL -->
                        <div class="form-floating mb-3">
                          <input class="form-control form-control-lg" type="email" name="emailSolicitud"  placeholder="<?= $info->email?>" id="emailSolicitud" value="<?= $info->email;?>" readonly/>
                          <label class="form-label" for="emailSolicitud">Email</label>
                        </div>
                        <!-- INPUT EMPRESA  -->
                        <div class="form-floating mb-3">
                          <input class="form-control form-control-lg" type="text" name="empresaSolicitud"  placeholder="<?= $info->empresa?>" id="empresaSolicitud" value="<?= $info->empresa;?>" readonly/>
                          <label class="form-label" for="empresaSolicitud">Empresa</label>
                        </div>
                        <!-- TEXTAREA MENSAJE -->
                        <div class="form-floating mb-3">
                          <textarea class="form-control form-control-lg" type="text" name="mensajeSolicitud"  placeholder="<?= $info->nombre?>" id="mensajeSolicitud" readonly><?= $info->mensaje;?></textarea>
                          <label class="form-label" for="mensajeSolicitud">Fecha</label>
                        </div>
                        <!-- STATUS DE LA SOLICITUD -->
                        <div class="form-floating mb-3">
                          <input class="form-control form-control-lg" type="text" name="statusSolicitudActual"  placeholder="<?= $info->estatus?>" id="statusSolicitudActual" value="<?= $info->estatus?>" readonly/>
                          <label class="form-label" for="statusSolicitudActual">Status</label>
                        </div>
                        <!-- CAMBIAR STATUS -->
                        <div class="form-floating mb-3">
                          <lablel class="form-label" for="statusSolicitudNuevo">Cambiar estado de la solicitud</lablel>
                          <select class="form-control form-control-lg form-select"  name="statusSolicitudNuevo" id="statusSolicitudNuevo">
                            <option value="pendiente">Pendiente</option>
                            <option value="atendida">Atendida</option>
                            <option value="cancelada">Cancelada</option>
                          </select>
                        </div>
                        <div class="modal-body__buttons form-floating mb-3"> 
                          <button class="btn btn-danger btn-lg closeXmodal" data-bs-dismiss="modal" aria-label="Close" onclick="" id="#modalCloseSolCot">Cancelar</button>
                          <button class="btn btn-warning btn-lg" type="submit">Editar</button>
                        </div>
                        <input type="hidden" name="oculto" value="1">
                        <div class="form-floating mb-3">
                          <div class="" id="mostrar_mensaje_edit_cotizacion<?= $info->id?>"></div>
                        </div>
                      </form>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- FIN DE MODAL SOLICITUD DE COTIZACION -->
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
<!-- SCRIPT PAGINACIÓN -->
<script src="js/ajax_modal_scotizacion.js"></script>
<!-- <script src="js/paginacion_Subcategoria.js"></script> -->
<script>
$(document).ready( function () {
$('#tableCotizacion').DataTable();
} );
</script>

<script src="/js/script.js"></script> 

    <?php 
   include './components/footer-admin.php';
   ?>