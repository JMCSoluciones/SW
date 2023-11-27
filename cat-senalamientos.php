<?php 
include './components/head.php';
include './components/header.php';
include './model/conexion.php';
?>
    <div class="slideSenalamientos slide">
      <div class="slide__box">
        <p>CATÁLOGO DE  </p>
        <p><strong>SEÑALAMIENTOS</strong></p>
        <div class="slide__box__link">
        <?php
            include './modal-cotizacion-gral.php'
          ?>
        </div>
      </div>
    </div>
    <?php
      include 'link-categorias.php';
    ?>
    <div class="categoriaIntro">
      <div class="titulo">Lorem ipsum dolor sit amet consectetur, adipisicing elit.</div>
    </div>
    <div class="container">
      <div class="accordion" id="accordionExample">
        <!-- CONSULTA SQL DE LAS SUBCATEGORIAS -->
        <?php
        ini_set('display_errors', 1);
        ini_set('display_startup_errors', 1);
        error_reporting(E_ALL);
              $query = $bd->query("SELECT  id,nombre FROM subcategoria WHERE id_categoria = '3' ORDER BY nombre");
              $subcategorias = $query->fetchAll(PDO::FETCH_OBJ);
              if(!$subcategorias){
                echo "No existen subcategorias";
              
              }else{
                foreach ($subcategorias as $dato){
                  ?>
                <div class="accordion-item">
                  <h2 class="accordion-header">
                    <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseSub<?=$dato->id?>" aria-expanded="false" aria-controls="collapseSub<?=$dato->id?>"><?= $dato->nombre?></button>
                  </h2>
                <div class="accordion-collapse collapse show" id="collapseSub<?=$dato->id?>" data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                    <?php
              $queryProd = $bd->query("SELECT  id,clave,producto,id_categoria,id_subcategoria,extracto,descripcion,foto,tipofoto FROM productos WHERE id_subcategoria = '$dato->id' ORDER BY id");
              $productos = $queryProd->fetchAll(PDO::FETCH_OBJ);
              if(!$productos){
                echo "No existen productos";
              
              }else{
                ini_set('display_errors', 1);
                ini_set('display_startup_errors', 1);
                error_reporting(E_ALL);
                foreach ($productos as $info){?>
                      <div class="accordion-body__item">
                        <div class="accordion-body__item-title">
                          <p><?= $info->producto?></p>
                        </div>
                        <div class="accordion-body__item-img">
                          <?php
                            $imagen_decodificada = base64_encode($info->foto);
                            echo '<a href="data:' . $info->tipofoto . ';base64,' . $imagen_decodificada . '" class="magnific-popup"><img class="magnific-popup" data-targetsize="0.45" data-duration="600" src="data:' . $info->tipofoto . ';base64,' . $imagen_decodificada . '" alt="Descripción de la imagen"></a>';
                          ?>
                        </div>
                        <div class="accordion-body__item-txt">
                          <p><?= $info->extracto?></p>
                        </div>
                        <div class="accordion-body__item-link">
                          <button class="btn-cotizacion btn btn-secundary" type="button" data-bs-toggle="modal" data-bs-target="#modalProduct<?= $info->id;?>">Cotizar</button>
                          <!-- MODAL  -->
                          <div class="modal-cotizacion">
                            <div class="modal fade" id="modalProduct<?= $info->id;?>" aria-hidden="true" aria-labelledby="modalProduct<?= $info->id;?>Label" tabindex="-1">
                              <div class="modal-dialog modal-lg modal-dialog-centered">
                                <div class="modal-content">
                                  <div class="modal-header modal-header-unico">
                                    <h5 class="modal-title" id="modalProduct<?= $info->id;?>Label">SOLICITUD DE <br/><strong>COTIZACIÓN</strong></h5>
                                    <div class="modal-header-unico__detail">
                                      <div class="modal-header-unico__detail-img">
                                      <img class="" src="data:<?php echo "$info->tipofoto"?>;base64,<?php echo $imagen_decodificada;?>" alt="Imagen">
                                      </div>
                                      <div class="modal-header-unico__detail-txt">
                                        <p><strong>PARTE/CLAVE:</strong> <?=$info->clave?></p>
                                        <p><strong>Descripción:</strong> <?=$info->descripcion?></p>
                                        <p><strong>Categoría:</strong> 
                                        <!-- CATEGORIA DEL PRODUCTO -->
                                        <?php
                                              $query = $bd->query("SELECT nombre FROM categoria WHERE id= $info->id_categoria");
                                              $cat = $query->fetch(PDO::FETCH_OBJ);
                                              if($cat){
                                                echo $cat->nombre;
                                              
                                              }else{
                                              echo "No existe categoria";
                                              }
                                                ?>
                                      </p>
                                        <p><strong>Subcategoría:</strong> 
                                        <?php
                                              $query = $bd->query("SELECT nombre FROM subcategoria WHERE id= $info->id_subcategoria");
                                              $sub = $query->fetch(PDO::FETCH_OBJ);
                                              if($sub){
                                                echo $sub->nombre;
                                              
                                              }else{
                                              echo "No existe subcategoria";
                                              }
                                                ?>
                                      
                                      </p>
                                      </div>
                                    </div>
                                    <button class="btn-close closeXmodal" type="button" data-bs-dismiss="modal" aria-label="Close"></button>
                                  </div>
                                  <div class="modal-body">
                                    <div class="content-form formulario-container" data-info-id="<?= $info->id;?>">
                                      <!-- FORMULARIO -->
                                    <form action="insert_cotCant.php" method="POST" id="form_cotCant<?= $info->id?>">
                                        <div class="form-floating mb-3">
                                          <input class="form-control form-control-lg" placeholder="ID del producto" type="number" name="idProd" aria-describedby="idProd"  id="idProd" value="<?= $info->id ?>" readonly/>
                                          <label for="idProd">ID</label>
                                        </div>
                                        <div class="form-floating mb-3">
                                          <input class="form-control form-control-lg" placeholder="Ingrese su nombre completo" type="number" name="cantidadProd" aria-describedby="cantidadProd" min="1" max="1000000" required="required" id="inputCantidad"/>
                                          <label for="inputCantidad">Cantidad</label>
                                        </div>
                                        <div class="form-floating mb-3">
                                          <input class="form-control form-control-lg" placeholder="Ingrese su nombre completo" type="text" name="nombre" aria-describedby="NombreProd" maxlength="60" minlength="3" required id="nombre_cotGral"/>
                                          <label for="nombre_cotGral">Nombre Completo</label>
                                        </div>
                                        <div class="form-floating mb-3">
                                          <input class="form-control form-control-lg" type="tel" name="telefono" minlength="10" maxlength="10" aria-describedby="emailHelp" required placeholder="Ingrese su télefono" id="telefono_cotGral"/>
                                          <label for="telefono_cotGral">Teléfono a 10 dígitos</label>
                                        </div>
                                        <div class="form-floating mb-3">
                                          <input class="form-control form-control-lg" type="email" name="email" aria-describedby="emailHelp" placeholder="Email válido" id="email_cotGral"/>
                                          <label for="email_cotGral" required>Email válido</label>
                                        </div>
                                        <div class="form-floating mb-3">
                                          <input class="form-control form-control-lg" type="text" name="nombre_empresa" aria-describedby="emailHelp" placeholder="Nombre de la empresa" id="empresa_cotGral"/>
                                          <label for="empresa_cotGral">Nombre de la empresa</label>
                                        </div>
                                        <div class="form-floating mb-3">
                                          <textarea class="form-control form-control-lg" type="text" name="mensaje" aria-describedby="emailHelp" placeholder="Ingrese su mensaje" id="mensaje_cotGral" maxlength="360"></textarea>
                                          <label for="mensaje_cotGral">Mensaje</label>
                                        </div>
                                        <div class="modal-body__buttons"> 
                                          <button class="btn btn-danger btn-lg closeXmodal" data-bs-dismiss="modal" aria-label="Close" onclick="">Cancelar</button>
                                          <button class="btn btn-success btn-lg" onclick="" type="submit">Enviar</button>
                                      </div>
                                        <input type="hidden" name="oculto" value=1>
                                        <div class="form-floating mb-3">
                                          <div class="" id="notificacionSolicitudCant<?= $info->id;?>"></div>
                                        </div>
                                      </form>
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                  <?php
                    }
                  }

                  ?>
                    </div>
                  </div>
                </div>
                  
                  <?php


                }
              }
        
        ?>
      
      </div>
    </div>
    <script type="text/javascript">
    $(document).ready(function () {
        $('.magnific-popup').magnificPopup({type:'image'});
    });
</script>
<script src="js/ajax_modal_sCotizacionCant.js"></script>
    <?php 
  include './components/footer.php';
  ?>