<?php 
include './components/head.php';
include './components/header.php';
?> 
    <div class="slideSemaforos slide">
      <div class="slide__box">
        <p>CATÁLOGO DE  </p>
        <p><strong>SEMAFOROS</strong></p>
        <div class="slide__box__link">
          <?php
            include './modal-cotizacion-gral.php'
          ?>
        </div>
      </div>
    </div>
    <div class="link-categorias">
      <p>Consulta otra categoría</p>
      <div class="dropdown"><a class="btn btn-warning dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">Categorias</a>
        <ul class="dropdown-menu">
          <li><a class="dropdown-item" href="cat-semaforos.html">Semáforos</a><a class="dropdown-item" href="cat-postes.html">Postes</a><a class="dropdown-item" href="cat-senalamientos.html">Señalamientos</a><a class="dropdown-item" href="cat-complementos.html">Complementos viales</a><a class="dropdown-item" href="cat-servicios.html">Servicios de diseño vial y urbano</a></li>
        </ul>
      </div>
    </div>
    <div class="categoriaIntro">
      <div class="titulo">Lorem ipsum dolor sit amet consectetur, adipisicing elit.  </div>
    </div>
    <div class="container">
      <div class="accordion" id="accordionExample">
        <div class="accordion-item">
          <h2 class="accordion-header">
            <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">Semáforos vehiculares</button>
          </h2>
          <div class="accordion-collapse collapse show" id="collapseOne" data-bs-parent="#accordionExample">
            <div class="accordion-body">
              <div class="accordion-body__item">
                <div class="accordion-body__item-title">
                  <p>titulo</p>
                </div>
                <div class="accordion-body__item-img"><img src="images/Productos/Semaforos/Semaforo vehicular/6.jpg" alt="imagen del producto" srcset=""/></div>
                <div class="accordion-body__item-txt">
                  <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatibus, cum aut beatae</p>
                </div>
                <div class="accordion-body__item-link">
                  <button class="btn-cotizacion btn btn-secundary" type="button" data-bs-toggle="modal" data-bs-target="#modalCotizacion-unica">Cotizar</button>
                  <div class="modal-cotizacion">
                    <div class="modal fade" id="modalCotizacion-unica" aria-hidden="true" aria-labelledby="modalCotizacion-unicaLabel" tabindex="-1">
                      <div class="modal-dialog modal-lg modal-dialog-centered">
                        <div class="modal-content">
                          <div class="modal-header modal-header-unico">
                            <h5 class="modal-title" id="modalCotizacion-unicaLabel">SOLICITUD DE <br/><strong>COTIZACIÓN</strong></h5>
                            <div class="modal-header-unico__detail">
                              <div class="modal-header-unico__detail-img"><img src="images/Productos/Semaforos/Semaforo vehicular/7.jpg" alt="imagen del producto" srcset=""/></div>
                              <div class="modal-header-unico__detail-txt">
                                <p><strong>ID:</strong> B103</p>
                                <p><strong>Descripción:</strong> Descripción del Producto</p>
                                <p><strong>Categoría:</strong> Categoría del Producto</p>
                                <p><strong>Subcategoría:</strong> Subcategoría del Producto</p>
                              </div>
                            </div>
                            <button class="btn-close" type="button" data-bs-dismiss="modal" aria-label="Close"></button>
                          </div>
                          <div class="modal-body">
                            <div class="content-form">
                              <form action="">
                                <div class="form-floating mb-3">
                                  <input class="form-control form-control-lg" placeholder="Ingrese su nombre completo" type="number" name="nombre" aria-describedby="emailHelp" min="1" max="1000000" required="required" id="inputCantidad"/>
                                  <label for="inputCantidad">Cantidad</label>
                                </div>
                                <div class="form-floating mb-3">
                                  <input class="form-control form-control-lg" placeholder="Ingrese su nombre completo" type="text" name="nombre" aria-describedby="emailHelp" maxlength="40" required="required" id="nombreCliente"/>
                                  <label for="nombreCliente">Nombre Completo</label>
                                </div>
                                <div class="form-floating mb-3">
                                  <input class="form-control form-control-lg" type="tel" name="telefono" maxlength="10" aria-describedby="emailHelp" pattern="[0-9]{3}-[0-9]{3}-[0-9]{4}" required="required" placeholder="Ingrese su télefono" id="exampleInputEmail1"/>
                                  <label for="exampleInputEmail1">Teléfono a 10 dígitos</label>
                                </div>
                                <div class="form-floating mb-3">
                                  <input class="form-control form-control-lg" type="email" name="email" aria-describedby="emailHelp" placeholder="Email válido" id="exampleInputEmail1"/>
                                  <label for="exampleInputEmail1">Email </label>
                                </div>
                                <div class="form-floating mb-3">
                                  <input class="form-control form-control-lg" type="text" name="nombre_empresa" aria-describedby="emailHelp" placeholder="Nombre de la empresa" id="exampleInputEmail1"/>
                                  <label for="exampleInputEmail1">Nombre de la empresa</label>
                                </div>
                                <div class="form-floating mb-3">
                                  <textarea class="form-control form-control-lg" type="text" name="mensaje" aria-describedby="emailHelp" placeholder="Ingrese su mensaje" id="exampleInputEmail1"></textarea>
                                  <label for="exampleInputEmail1">Mensaje</label>
                                </div>
                              </form>
                            </div>
                            <div class="modal-body__buttons"> 
                              <button class="btn btn-danger" data-bs-dismiss="modal" aria-label="Close">Cancelar</button>
                              <button class="btn btn-success" data-bs-target="#exampleModalToggle2" data-bs-toggle="modal" data-bs-dismiss="modal">Enviar</button>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="modal fade" id="exampleModalToggle2" aria-hidden="true" aria-labelledby="exampleModalToggleLabel2" tabindex="-1">
                      <div class="modal-dialog modal-dialog-centered">
                        <div class="modal-content">
                          <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalToggleLabel2">Solicitud </h5>
                            <button class="btn-close" type="button" data-bs-dismiss="modal" aria-label="Close"></button>
                          </div>
                          <div class="modal-body">Cotización realizada con exito!</div>
                          <div class="modal-footer">
                            <button class="btn btn-primary" data-bs-target="#exampleModalToggle" data-bs-toggle="modal" data-bs-dismiss="modal">Cancelar </button>
                            <button class="btn btn-secondary" type="button" data-bs-dismiss="modal">Aceptar</button>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="accordion-body__item">
                <div class="accordion-body__item-title">
                  <p>titulo</p>
                </div>
                <div class="accordion-body__item-img"><img src="images/Productos/Semaforos/Semaforo vehicular/6.jpg" alt="imagen del producto" srcset=""/></div>
                <div class="accordion-body__item-txt">
                  <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatibus, cum aut beatae</p>
                </div>
                <div class="accordion-body__item-link">
                  <button class="btn-cotizacion btn btn-secundary" type="button" data-bs-toggle="modal" data-bs-target="#modalCotizacion-unica">Cotizar</button>
                  <div class="modal-cotizacion">
                    <div class="modal fade" id="modalCotizacion-unica" aria-hidden="true" aria-labelledby="modalCotizacion-unicaLabel" tabindex="-1">
                      <div class="modal-dialog modal-lg modal-dialog-centered">
                        <div class="modal-content">
                          <div class="modal-header modal-header-unico">
                            <h5 class="modal-title" id="modalCotizacion-unicaLabel">SOLICITUD DE <br/><strong>COTIZACIÓN</strong></h5>
                            <div class="modal-header-unico__detail">
                              <div class="modal-header-unico__detail-img"><img src="images/Productos/Semaforos/Semaforo vehicular/7.jpg" alt="imagen del producto" srcset=""/></div>
                              <div class="modal-header-unico__detail-txt">
                                <p><strong>ID:</strong> B103</p>
                                <p><strong>Descripción:</strong> Descripción del Producto</p>
                                <p><strong>Categoría:</strong> Categoría del Producto</p>
                                <p><strong>Subcategoría:</strong> Subcategoría del Producto</p>
                              </div>
                            </div>
                            <button class="btn-close" type="button" data-bs-dismiss="modal" aria-label="Close"></button>
                          </div>
                          <div class="modal-body">
                            <div class="content-form">
                              <form action="">
                                <div class="form-floating mb-3">
                                  <input class="form-control form-control-lg" placeholder="Ingrese su nombre completo" type="number" name="nombre" aria-describedby="emailHelp" min="1" max="1000000" required="required" id="inputCantidad"/>
                                  <label for="inputCantidad">Cantidad</label>
                                </div>
                                <div class="form-floating mb-3">
                                  <input class="form-control form-control-lg" placeholder="Ingrese su nombre completo" type="text" name="nombre" aria-describedby="emailHelp" maxlength="40" required="required" id="nombreCliente"/>
                                  <label for="nombreCliente">Nombre Completo</label>
                                </div>
                                <div class="form-floating mb-3">
                                  <input class="form-control form-control-lg" type="tel" name="telefono" maxlength="10" aria-describedby="emailHelp" pattern="[0-9]{3}-[0-9]{3}-[0-9]{4}" required="required" placeholder="Ingrese su télefono" id="exampleInputEmail1"/>
                                  <label for="exampleInputEmail1">Teléfono a 10 dígitos</label>
                                </div>
                                <div class="form-floating mb-3">
                                  <input class="form-control form-control-lg" type="email" name="email" aria-describedby="emailHelp" placeholder="Email válido" id="exampleInputEmail1"/>
                                  <label for="exampleInputEmail1">Email </label>
                                </div>
                                <div class="form-floating mb-3">
                                  <input class="form-control form-control-lg" type="text" name="nombre_empresa" aria-describedby="emailHelp" placeholder="Nombre de la empresa" id="exampleInputEmail1"/>
                                  <label for="exampleInputEmail1">Nombre de la empresa</label>
                                </div>
                                <div class="form-floating mb-3">
                                  <textarea class="form-control form-control-lg" type="text" name="mensaje" aria-describedby="emailHelp" placeholder="Ingrese su mensaje" id="exampleInputEmail1"></textarea>
                                  <label for="exampleInputEmail1">Mensaje</label>
                                </div>
                              </form>
                            </div>
                            <div class="modal-body__buttons"> 
                              <button class="btn btn-danger" data-bs-dismiss="modal" aria-label="Close">Cancelar</button>
                              <button class="btn btn-success" data-bs-target="#exampleModalToggle2" data-bs-toggle="modal" data-bs-dismiss="modal">Enviar</button>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="modal fade" id="exampleModalToggle2" aria-hidden="true" aria-labelledby="exampleModalToggleLabel2" tabindex="-1">
                      <div class="modal-dialog modal-dialog-centered">
                        <div class="modal-content">
                          <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalToggleLabel2">Solicitud </h5>
                            <button class="btn-close" type="button" data-bs-dismiss="modal" aria-label="Close"></button>
                          </div>
                          <div class="modal-body">Cotización realizada con exito!</div>
                          <div class="modal-footer">
                            <button class="btn btn-primary" data-bs-target="#exampleModalToggle" data-bs-toggle="modal" data-bs-dismiss="modal">Cancelar </button>
                            <button class="btn btn-secondary" type="button" data-bs-dismiss="modal">Aceptar</button>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="accordion-body__item">
                <div class="accordion-body__item-title">
                  <p>titulo</p>
                </div>
                <div class="accordion-body__item-img"><img src="images/Productos/Semaforos/Semaforo vehicular/6.jpg" alt="imagen del producto" srcset=""/></div>
                <div class="accordion-body__item-txt">
                  <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatibus, cum aut beatae</p>
                </div>
                <div class="accordion-body__item-link">
                  <button class="btn-cotizacion btn btn-secundary" type="button" data-bs-toggle="modal" data-bs-target="#modalCotizacion-unica">Cotizar</button>
                  <div class="modal-cotizacion">
                    <div class="modal fade" id="modalCotizacion-unica" aria-hidden="true" aria-labelledby="modalCotizacion-unicaLabel" tabindex="-1">
                      <div class="modal-dialog modal-lg modal-dialog-centered">
                        <div class="modal-content">
                          <div class="modal-header modal-header-unico">
                            <h5 class="modal-title" id="modalCotizacion-unicaLabel">SOLICITUD DE <br/><strong>COTIZACIÓN</strong></h5>
                            <div class="modal-header-unico__detail">
                              <div class="modal-header-unico__detail-img"><img src="images/Productos/Semaforos/Semaforo vehicular/7.jpg" alt="imagen del producto" srcset=""/></div>
                              <div class="modal-header-unico__detail-txt">
                                <p><strong>ID:</strong> B103</p>
                                <p><strong>Descripción:</strong> Descripción del Producto</p>
                                <p><strong>Categoría:</strong> Categoría del Producto</p>
                                <p><strong>Subcategoría:</strong> Subcategoría del Producto</p>
                              </div>
                            </div>
                            <button class="btn-close" type="button" data-bs-dismiss="modal" aria-label="Close"></button>
                          </div>
                          <div class="modal-body">
                            <div class="content-form">
                              <form action="">
                                <div class="form-floating mb-3">
                                  <input class="form-control form-control-lg" placeholder="Ingrese su nombre completo" type="number" name="nombre" aria-describedby="emailHelp" min="1" max="1000000" required="required" id="inputCantidad"/>
                                  <label for="inputCantidad">Cantidad</label>
                                </div>
                                <div class="form-floating mb-3">
                                  <input class="form-control form-control-lg" placeholder="Ingrese su nombre completo" type="text" name="nombre" aria-describedby="emailHelp" maxlength="40" required="required" id="nombreCliente"/>
                                  <label for="nombreCliente">Nombre Completo</label>
                                </div>
                                <div class="form-floating mb-3">
                                  <input class="form-control form-control-lg" type="tel" name="telefono" maxlength="10" aria-describedby="emailHelp" pattern="[0-9]{3}-[0-9]{3}-[0-9]{4}" required="required" placeholder="Ingrese su télefono" id="exampleInputEmail1"/>
                                  <label for="exampleInputEmail1">Teléfono a 10 dígitos</label>
                                </div>
                                <div class="form-floating mb-3">
                                  <input class="form-control form-control-lg" type="email" name="email" aria-describedby="emailHelp" placeholder="Email válido" id="exampleInputEmail1"/>
                                  <label for="exampleInputEmail1">Email </label>
                                </div>
                                <div class="form-floating mb-3">
                                  <input class="form-control form-control-lg" type="text" name="nombre_empresa" aria-describedby="emailHelp" placeholder="Nombre de la empresa" id="exampleInputEmail1"/>
                                  <label for="exampleInputEmail1">Nombre de la empresa</label>
                                </div>
                                <div class="form-floating mb-3">
                                  <textarea class="form-control form-control-lg" type="text" name="mensaje" aria-describedby="emailHelp" placeholder="Ingrese su mensaje" id="exampleInputEmail1"></textarea>
                                  <label for="exampleInputEmail1">Mensaje</label>
                                </div>
                              </form>
                            </div>
                            <div class="modal-body__buttons"> 
                              <button class="btn btn-danger" data-bs-dismiss="modal" aria-label="Close">Cancelar</button>
                              <button class="btn btn-success" data-bs-target="#exampleModalToggle2" data-bs-toggle="modal" data-bs-dismiss="modal">Enviar</button>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="modal fade" id="exampleModalToggle2" aria-hidden="true" aria-labelledby="exampleModalToggleLabel2" tabindex="-1">
                      <div class="modal-dialog modal-dialog-centered">
                        <div class="modal-content">
                          <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalToggleLabel2">Solicitud </h5>
                            <button class="btn-close" type="button" data-bs-dismiss="modal" aria-label="Close"></button>
                          </div>
                          <div class="modal-body">Cotización realizada con exito!</div>
                          <div class="modal-footer">
                            <button class="btn btn-primary" data-bs-target="#exampleModalToggle" data-bs-toggle="modal" data-bs-dismiss="modal">Cancelar </button>
                            <button class="btn btn-secondary" type="button" data-bs-dismiss="modal">Aceptar</button>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="accordion-body__item">
                <div class="accordion-body__item-title">
                  <p>titulo</p>
                </div>
                <div class="accordion-body__item-img"><img src="images/Productos/Semaforos/Semaforo vehicular/6.jpg" alt="imagen del producto" srcset=""/></div>
                <div class="accordion-body__item-txt">
                  <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatibus, cum aut beatae</p>
                </div>
                <div class="accordion-body__item-link">
                  <button class="btn-cotizacion btn btn-secundary" type="button" data-bs-toggle="modal" data-bs-target="#modalCotizacion-unica">Cotizar</button>
                  <div class="modal-cotizacion">
                    <div class="modal fade" id="modalCotizacion-unica" aria-hidden="true" aria-labelledby="modalCotizacion-unicaLabel" tabindex="-1">
                      <div class="modal-dialog modal-lg modal-dialog-centered">
                        <div class="modal-content">
                          <div class="modal-header modal-header-unico">
                            <h5 class="modal-title" id="modalCotizacion-unicaLabel">SOLICITUD DE <br/><strong>COTIZACIÓN</strong></h5>
                            <div class="modal-header-unico__detail">
                              <div class="modal-header-unico__detail-img"><img src="images/Productos/Semaforos/Semaforo vehicular/7.jpg" alt="imagen del producto" srcset=""/></div>
                              <div class="modal-header-unico__detail-txt">
                                <p><strong>ID:</strong> B103</p>
                                <p><strong>Descripción:</strong> Descripción del Producto</p>
                                <p><strong>Categoría:</strong> Categoría del Producto</p>
                                <p><strong>Subcategoría:</strong> Subcategoría del Producto</p>
                              </div>
                            </div>
                            <button class="btn-close" type="button" data-bs-dismiss="modal" aria-label="Close"></button>
                          </div>
                          <div class="modal-body">
                            <div class="content-form">
                              <form action="">
                                <div class="form-floating mb-3">
                                  <input class="form-control form-control-lg" placeholder="Ingrese su nombre completo" type="number" name="nombre" aria-describedby="emailHelp" min="1" max="1000000" required="required" id="inputCantidad"/>
                                  <label for="inputCantidad">Cantidad</label>
                                </div>
                                <div class="form-floating mb-3">
                                  <input class="form-control form-control-lg" placeholder="Ingrese su nombre completo" type="text" name="nombre" aria-describedby="emailHelp" maxlength="40" required="required" id="nombreCliente"/>
                                  <label for="nombreCliente">Nombre Completo</label>
                                </div>
                                <div class="form-floating mb-3">
                                  <input class="form-control form-control-lg" type="tel" name="telefono" maxlength="10" aria-describedby="emailHelp" pattern="[0-9]{3}-[0-9]{3}-[0-9]{4}" required="required" placeholder="Ingrese su télefono" id="exampleInputEmail1"/>
                                  <label for="exampleInputEmail1">Teléfono a 10 dígitos</label>
                                </div>
                                <div class="form-floating mb-3">
                                  <input class="form-control form-control-lg" type="email" name="email" aria-describedby="emailHelp" placeholder="Email válido" id="exampleInputEmail1"/>
                                  <label for="exampleInputEmail1">Email </label>
                                </div>
                                <div class="form-floating mb-3">
                                  <input class="form-control form-control-lg" type="text" name="nombre_empresa" aria-describedby="emailHelp" placeholder="Nombre de la empresa" id="exampleInputEmail1"/>
                                  <label for="exampleInputEmail1">Nombre de la empresa</label>
                                </div>
                                <div class="form-floating mb-3">
                                  <textarea class="form-control form-control-lg" type="text" name="mensaje" aria-describedby="emailHelp" placeholder="Ingrese su mensaje" id="exampleInputEmail1"></textarea>
                                  <label for="exampleInputEmail1">Mensaje</label>
                                </div>
                              </form>
                            </div>
                            <div class="modal-body__buttons"> 
                              <button class="btn btn-danger" data-bs-dismiss="modal" aria-label="Close">Cancelar</button>
                              <button class="btn btn-success" data-bs-target="#exampleModalToggle2" data-bs-toggle="modal" data-bs-dismiss="modal">Enviar</button>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="modal fade" id="exampleModalToggle2" aria-hidden="true" aria-labelledby="exampleModalToggleLabel2" tabindex="-1">
                      <div class="modal-dialog modal-dialog-centered">
                        <div class="modal-content">
                          <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalToggleLabel2">Solicitud </h5>
                            <button class="btn-close" type="button" data-bs-dismiss="modal" aria-label="Close"></button>
                          </div>
                          <div class="modal-body">Cotización realizada con exito!</div>
                          <div class="modal-footer">
                            <button class="btn btn-primary" data-bs-target="#exampleModalToggle" data-bs-toggle="modal" data-bs-dismiss="modal">Cancelar </button>
                            <button class="btn btn-secondary" type="button" data-bs-dismiss="modal">Aceptar</button>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="accordion-item">
          <h2 class="accordion-header">
            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">Semáforos Peatonales </button>
          </h2>
          <div class="accordion-collapse collapse" id="collapseTwo" data-bs-parent="#accordionExample">
            <div class="accordion-body">
              <div class="accordion-body__item">
                <div class="accordion-body__item-title">
                  <p>titulo</p>
                </div>
                <div class="accordion-body__item-img"><img src="images/Productos/Semaforos/Semaforo vehicular/6.jpg" alt="imagen del producto" srcset=""/></div>
                <div class="accordion-body__item-txt">
                  <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatibus, cum aut beatae</p>
                </div>
                <div class="accordion-body__item-link">
                  <button class="btn-cotizacion btn btn-secundary" type="button" data-bs-toggle="modal" data-bs-target="#modalCotizacion-unica">Cotizar</button>
                  <div class="modal-cotizacion">
                    <div class="modal fade" id="modalCotizacion-unica" aria-hidden="true" aria-labelledby="modalCotizacion-unicaLabel" tabindex="-1">
                      <div class="modal-dialog modal-lg modal-dialog-centered">
                        <div class="modal-content">
                          <div class="modal-header modal-header-unico">
                            <h5 class="modal-title" id="modalCotizacion-unicaLabel">SOLICITUD DE <br/><strong>COTIZACIÓN</strong></h5>
                            <div class="modal-header-unico__detail">
                              <div class="modal-header-unico__detail-img"><img src="images/Productos/Semaforos/Semaforo vehicular/7.jpg" alt="imagen del producto" srcset=""/></div>
                              <div class="modal-header-unico__detail-txt">
                                <p><strong>ID:</strong> B103</p>
                                <p><strong>Descripción:</strong> Descripción del Producto</p>
                                <p><strong>Categoría:</strong> Categoría del Producto</p>
                                <p><strong>Subcategoría:</strong> Subcategoría del Producto</p>
                              </div>
                            </div>
                            <button class="btn-close" type="button" data-bs-dismiss="modal" aria-label="Close"></button>
                          </div>
                          <div class="modal-body">
                            <div class="content-form">
                              <form action="">
                                <div class="form-floating mb-3">
                                  <input class="form-control form-control-lg" placeholder="Ingrese su nombre completo" type="number" name="nombre" aria-describedby="emailHelp" min="1" max="1000000" required="required" id="inputCantidad"/>
                                  <label for="inputCantidad">Cantidad</label>
                                </div>
                                <div class="form-floating mb-3">
                                  <input class="form-control form-control-lg" placeholder="Ingrese su nombre completo" type="text" name="nombre" aria-describedby="emailHelp" maxlength="40" required="required" id="nombreCliente"/>
                                  <label for="nombreCliente">Nombre Completo</label>
                                </div>
                                <div class="form-floating mb-3">
                                  <input class="form-control form-control-lg" type="tel" name="telefono" maxlength="10" aria-describedby="emailHelp" pattern="[0-9]{3}-[0-9]{3}-[0-9]{4}" required="required" placeholder="Ingrese su télefono" id="exampleInputEmail1"/>
                                  <label for="exampleInputEmail1">Teléfono a 10 dígitos</label>
                                </div>
                                <div class="form-floating mb-3">
                                  <input class="form-control form-control-lg" type="email" name="email" aria-describedby="emailHelp" placeholder="Email válido" id="exampleInputEmail1"/>
                                  <label for="exampleInputEmail1">Email </label>
                                </div>
                                <div class="form-floating mb-3">
                                  <input class="form-control form-control-lg" type="text" name="nombre_empresa" aria-describedby="emailHelp" placeholder="Nombre de la empresa" id="exampleInputEmail1"/>
                                  <label for="exampleInputEmail1">Nombre de la empresa</label>
                                </div>
                                <div class="form-floating mb-3">
                                  <textarea class="form-control form-control-lg" type="text" name="mensaje" aria-describedby="emailHelp" placeholder="Ingrese su mensaje" id="exampleInputEmail1"></textarea>
                                  <label for="exampleInputEmail1">Mensaje</label>
                                </div>
                              </form>
                            </div>
                            <div class="modal-body__buttons"> 
                              <button class="btn btn-danger" data-bs-dismiss="modal" aria-label="Close">Cancelar</button>
                              <button class="btn btn-success" data-bs-target="#exampleModalToggle2" data-bs-toggle="modal" data-bs-dismiss="modal">Enviar</button>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="modal fade" id="exampleModalToggle2" aria-hidden="true" aria-labelledby="exampleModalToggleLabel2" tabindex="-1">
                      <div class="modal-dialog modal-dialog-centered">
                        <div class="modal-content">
                          <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalToggleLabel2">Solicitud </h5>
                            <button class="btn-close" type="button" data-bs-dismiss="modal" aria-label="Close"></button>
                          </div>
                          <div class="modal-body">Cotización realizada con exito!</div>
                          <div class="modal-footer">
                            <button class="btn btn-primary" data-bs-target="#exampleModalToggle" data-bs-toggle="modal" data-bs-dismiss="modal">Cancelar </button>
                            <button class="btn btn-secondary" type="button" data-bs-dismiss="modal">Aceptar</button>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="accordion-body__item">
                <div class="accordion-body__item-title">
                  <p>titulo</p>
                </div>
                <div class="accordion-body__item-img"><img src="images/Productos/Semaforos/Semaforo vehicular/6.jpg" alt="imagen del producto" srcset=""/></div>
                <div class="accordion-body__item-txt">
                  <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatibus, cum aut beatae</p>
                </div>
                <div class="accordion-body__item-link">
                  <button class="btn-cotizacion btn btn-secundary" type="button" data-bs-toggle="modal" data-bs-target="#modalCotizacion-unica">Cotizar</button>
                  <div class="modal-cotizacion">
                    <div class="modal fade" id="modalCotizacion-unica" aria-hidden="true" aria-labelledby="modalCotizacion-unicaLabel" tabindex="-1">
                      <div class="modal-dialog modal-lg modal-dialog-centered">
                        <div class="modal-content">
                          <div class="modal-header modal-header-unico">
                            <h5 class="modal-title" id="modalCotizacion-unicaLabel">SOLICITUD DE <br/><strong>COTIZACIÓN</strong></h5>
                            <div class="modal-header-unico__detail">
                              <div class="modal-header-unico__detail-img"><img src="images/Productos/Semaforos/Semaforo vehicular/7.jpg" alt="imagen del producto" srcset=""/></div>
                              <div class="modal-header-unico__detail-txt">
                                <p><strong>ID:</strong> B103</p>
                                <p><strong>Descripción:</strong> Descripción del Producto</p>
                                <p><strong>Categoría:</strong> Categoría del Producto</p>
                                <p><strong>Subcategoría:</strong> Subcategoría del Producto</p>
                              </div>
                            </div>
                            <button class="btn-close" type="button" data-bs-dismiss="modal" aria-label="Close"></button>
                          </div>
                          <div class="modal-body">
                            <div class="content-form">
                              <form action="">
                                <div class="form-floating mb-3">
                                  <input class="form-control form-control-lg" placeholder="Ingrese su nombre completo" type="number" name="nombre" aria-describedby="emailHelp" min="1" max="1000000" required="required" id="inputCantidad"/>
                                  <label for="inputCantidad">Cantidad</label>
                                </div>
                                <div class="form-floating mb-3">
                                  <input class="form-control form-control-lg" placeholder="Ingrese su nombre completo" type="text" name="nombre" aria-describedby="emailHelp" maxlength="40" required="required" id="nombreCliente"/>
                                  <label for="nombreCliente">Nombre Completo</label>
                                </div>
                                <div class="form-floating mb-3">
                                  <input class="form-control form-control-lg" type="tel" name="telefono" maxlength="10" aria-describedby="emailHelp" pattern="[0-9]{3}-[0-9]{3}-[0-9]{4}" required="required" placeholder="Ingrese su télefono" id="exampleInputEmail1"/>
                                  <label for="exampleInputEmail1">Teléfono a 10 dígitos</label>
                                </div>
                                <div class="form-floating mb-3">
                                  <input class="form-control form-control-lg" type="email" name="email" aria-describedby="emailHelp" placeholder="Email válido" id="exampleInputEmail1"/>
                                  <label for="exampleInputEmail1">Email </label>
                                </div>
                                <div class="form-floating mb-3">
                                  <input class="form-control form-control-lg" type="text" name="nombre_empresa" aria-describedby="emailHelp" placeholder="Nombre de la empresa" id="exampleInputEmail1"/>
                                  <label for="exampleInputEmail1">Nombre de la empresa</label>
                                </div>
                                <div class="form-floating mb-3">
                                  <textarea class="form-control form-control-lg" type="text" name="mensaje" aria-describedby="emailHelp" placeholder="Ingrese su mensaje" id="exampleInputEmail1"></textarea>
                                  <label for="exampleInputEmail1">Mensaje</label>
                                </div>
                              </form>
                            </div>
                            <div class="modal-body__buttons"> 
                              <button class="btn btn-danger" data-bs-dismiss="modal" aria-label="Close">Cancelar</button>
                              <button class="btn btn-success" data-bs-target="#exampleModalToggle2" data-bs-toggle="modal" data-bs-dismiss="modal">Enviar</button>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="modal fade" id="exampleModalToggle2" aria-hidden="true" aria-labelledby="exampleModalToggleLabel2" tabindex="-1">
                      <div class="modal-dialog modal-dialog-centered">
                        <div class="modal-content">
                          <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalToggleLabel2">Solicitud </h5>
                            <button class="btn-close" type="button" data-bs-dismiss="modal" aria-label="Close"></button>
                          </div>
                          <div class="modal-body">Cotización realizada con exito!</div>
                          <div class="modal-footer">
                            <button class="btn btn-primary" data-bs-target="#exampleModalToggle" data-bs-toggle="modal" data-bs-dismiss="modal">Cancelar </button>
                            <button class="btn btn-secondary" type="button" data-bs-dismiss="modal">Aceptar</button>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="accordion-body__item">
                <div class="accordion-body__item-title">
                  <p>titulo</p>
                </div>
                <div class="accordion-body__item-img"><img src="images/Productos/Semaforos/Semaforo vehicular/6.jpg" alt="imagen del producto" srcset=""/></div>
                <div class="accordion-body__item-txt">
                  <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatibus, cum aut beatae</p>
                </div>
                <div class="accordion-body__item-link">
                  <button class="btn-cotizacion btn btn-secundary" type="button" data-bs-toggle="modal" data-bs-target="#modalCotizacion-unica">Cotizar</button>
                  <div class="modal-cotizacion">
                    <div class="modal fade" id="modalCotizacion-unica" aria-hidden="true" aria-labelledby="modalCotizacion-unicaLabel" tabindex="-1">
                      <div class="modal-dialog modal-lg modal-dialog-centered">
                        <div class="modal-content">
                          <div class="modal-header modal-header-unico">
                            <h5 class="modal-title" id="modalCotizacion-unicaLabel">SOLICITUD DE <br/><strong>COTIZACIÓN</strong></h5>
                            <div class="modal-header-unico__detail">
                              <div class="modal-header-unico__detail-img"><img src="images/Productos/Semaforos/Semaforo vehicular/7.jpg" alt="imagen del producto" srcset=""/></div>
                              <div class="modal-header-unico__detail-txt">
                                <p><strong>ID:</strong> B103</p>
                                <p><strong>Descripción:</strong> Descripción del Producto</p>
                                <p><strong>Categoría:</strong> Categoría del Producto</p>
                                <p><strong>Subcategoría:</strong> Subcategoría del Producto</p>
                              </div>
                            </div>
                            <button class="btn-close" type="button" data-bs-dismiss="modal" aria-label="Close"></button>
                          </div>
                          <div class="modal-body">
                            <div class="content-form">
                              <form action="">
                                <div class="form-floating mb-3">
                                  <input class="form-control form-control-lg" placeholder="Ingrese su nombre completo" type="number" name="nombre" aria-describedby="emailHelp" min="1" max="1000000" required="required" id="inputCantidad"/>
                                  <label for="inputCantidad">Cantidad</label>
                                </div>
                                <div class="form-floating mb-3">
                                  <input class="form-control form-control-lg" placeholder="Ingrese su nombre completo" type="text" name="nombre" aria-describedby="emailHelp" maxlength="40" required="required" id="nombreCliente"/>
                                  <label for="nombreCliente">Nombre Completo</label>
                                </div>
                                <div class="form-floating mb-3">
                                  <input class="form-control form-control-lg" type="tel" name="telefono" maxlength="10" aria-describedby="emailHelp" pattern="[0-9]{3}-[0-9]{3}-[0-9]{4}" required="required" placeholder="Ingrese su télefono" id="exampleInputEmail1"/>
                                  <label for="exampleInputEmail1">Teléfono a 10 dígitos</label>
                                </div>
                                <div class="form-floating mb-3">
                                  <input class="form-control form-control-lg" type="email" name="email" aria-describedby="emailHelp" placeholder="Email válido" id="exampleInputEmail1"/>
                                  <label for="exampleInputEmail1">Email </label>
                                </div>
                                <div class="form-floating mb-3">
                                  <input class="form-control form-control-lg" type="text" name="nombre_empresa" aria-describedby="emailHelp" placeholder="Nombre de la empresa" id="exampleInputEmail1"/>
                                  <label for="exampleInputEmail1">Nombre de la empresa</label>
                                </div>
                                <div class="form-floating mb-3">
                                  <textarea class="form-control form-control-lg" type="text" name="mensaje" aria-describedby="emailHelp" placeholder="Ingrese su mensaje" id="exampleInputEmail1"></textarea>
                                  <label for="exampleInputEmail1">Mensaje</label>
                                </div>
                              </form>
                            </div>
                            <div class="modal-body__buttons"> 
                              <button class="btn btn-danger" data-bs-dismiss="modal" aria-label="Close">Cancelar</button>
                              <button class="btn btn-success" data-bs-target="#exampleModalToggle2" data-bs-toggle="modal" data-bs-dismiss="modal">Enviar</button>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="modal fade" id="exampleModalToggle2" aria-hidden="true" aria-labelledby="exampleModalToggleLabel2" tabindex="-1">
                      <div class="modal-dialog modal-dialog-centered">
                        <div class="modal-content">
                          <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalToggleLabel2">Solicitud </h5>
                            <button class="btn-close" type="button" data-bs-dismiss="modal" aria-label="Close"></button>
                          </div>
                          <div class="modal-body">Cotización realizada con exito!</div>
                          <div class="modal-footer">
                            <button class="btn btn-primary" data-bs-target="#exampleModalToggle" data-bs-toggle="modal" data-bs-dismiss="modal">Cancelar </button>
                            <button class="btn btn-secondary" type="button" data-bs-dismiss="modal">Aceptar</button>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="accordion-body__item">
                <div class="accordion-body__item-title">
                  <p>titulo</p>
                </div>
                <div class="accordion-body__item-img"><img src="images/Productos/Semaforos/Semaforo vehicular/6.jpg" alt="imagen del producto" srcset=""/></div>
                <div class="accordion-body__item-txt">
                  <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatibus, cum aut beatae</p>
                </div>
                <div class="accordion-body__item-link">
                  <button class="btn-cotizacion btn btn-secundary" type="button" data-bs-toggle="modal" data-bs-target="#modalCotizacion-unica">Cotizar</button>
                  <div class="modal-cotizacion">
                    <div class="modal fade" id="modalCotizacion-unica" aria-hidden="true" aria-labelledby="modalCotizacion-unicaLabel" tabindex="-1">
                      <div class="modal-dialog modal-lg modal-dialog-centered">
                        <div class="modal-content">
                          <div class="modal-header modal-header-unico">
                            <h5 class="modal-title" id="modalCotizacion-unicaLabel">SOLICITUD DE <br/><strong>COTIZACIÓN</strong></h5>
                            <div class="modal-header-unico__detail">
                              <div class="modal-header-unico__detail-img"><img src="images/Productos/Semaforos/Semaforo vehicular/7.jpg" alt="imagen del producto" srcset=""/></div>
                              <div class="modal-header-unico__detail-txt">
                                <p><strong>ID:</strong> B103</p>
                                <p><strong>Descripción:</strong> Descripción del Producto</p>
                                <p><strong>Categoría:</strong> Categoría del Producto</p>
                                <p><strong>Subcategoría:</strong> Subcategoría del Producto</p>
                              </div>
                            </div>
                            <button class="btn-close" type="button" data-bs-dismiss="modal" aria-label="Close"></button>
                          </div>
                          <div class="modal-body">
                            <div class="content-form">
                              <form action="">
                                <div class="form-floating mb-3">
                                  <input class="form-control form-control-lg" placeholder="Ingrese su nombre completo" type="number" name="nombre" aria-describedby="emailHelp" min="1" max="1000000" required="required" id="inputCantidad"/>
                                  <label for="inputCantidad">Cantidad</label>
                                </div>
                                <div class="form-floating mb-3">
                                  <input class="form-control form-control-lg" placeholder="Ingrese su nombre completo" type="text" name="nombre" aria-describedby="emailHelp" maxlength="40" required="required" id="nombreCliente"/>
                                  <label for="nombreCliente">Nombre Completo</label>
                                </div>
                                <div class="form-floating mb-3">
                                  <input class="form-control form-control-lg" type="tel" name="telefono" maxlength="10" aria-describedby="emailHelp" pattern="[0-9]{3}-[0-9]{3}-[0-9]{4}" required="required" placeholder="Ingrese su télefono" id="exampleInputEmail1"/>
                                  <label for="exampleInputEmail1">Teléfono a 10 dígitos</label>
                                </div>
                                <div class="form-floating mb-3">
                                  <input class="form-control form-control-lg" type="email" name="email" aria-describedby="emailHelp" placeholder="Email válido" id="exampleInputEmail1"/>
                                  <label for="exampleInputEmail1">Email </label>
                                </div>
                                <div class="form-floating mb-3">
                                  <input class="form-control form-control-lg" type="text" name="nombre_empresa" aria-describedby="emailHelp" placeholder="Nombre de la empresa" id="exampleInputEmail1"/>
                                  <label for="exampleInputEmail1">Nombre de la empresa</label>
                                </div>
                                <div class="form-floating mb-3">
                                  <textarea class="form-control form-control-lg" type="text" name="mensaje" aria-describedby="emailHelp" placeholder="Ingrese su mensaje" id="exampleInputEmail1"></textarea>
                                  <label for="exampleInputEmail1">Mensaje</label>
                                </div>
                              </form>
                            </div>
                            <div class="modal-body__buttons"> 
                              <button class="btn btn-danger" data-bs-dismiss="modal" aria-label="Close">Cancelar</button>
                              <button class="btn btn-success" data-bs-target="#exampleModalToggle2" data-bs-toggle="modal" data-bs-dismiss="modal">Enviar</button>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="modal fade" id="exampleModalToggle2" aria-hidden="true" aria-labelledby="exampleModalToggleLabel2" tabindex="-1">
                      <div class="modal-dialog modal-dialog-centered">
                        <div class="modal-content">
                          <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalToggleLabel2">Solicitud </h5>
                            <button class="btn-close" type="button" data-bs-dismiss="modal" aria-label="Close"></button>
                          </div>
                          <div class="modal-body">Cotización realizada con exito!</div>
                          <div class="modal-footer">
                            <button class="btn btn-primary" data-bs-target="#exampleModalToggle" data-bs-toggle="modal" data-bs-dismiss="modal">Cancelar </button>
                            <button class="btn btn-secondary" type="button" data-bs-dismiss="modal">Aceptar</button>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="accordion-item">
          <h2 class="accordion-header">
            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">Semáforos Auditivos</button>
          </h2>
          <div class="accordion-collapse collapse" id="collapseThree" data-bs-parent="#accordionExample">
            <div class="accordion-body">
              <div class="accordion-body__item">
                <div class="accordion-body__item-title">
                  <p>titulo</p>
                </div>
                <div class="accordion-body__item-img"><img src="images/Productos/Semaforos/Semaforo vehicular/6.jpg" alt="imagen del producto" srcset=""/></div>
                <div class="accordion-body__item-txt">
                  <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatibus, cum aut beatae</p>
                </div>
                <div class="accordion-body__item-link">
                  <button class="btn-cotizacion btn btn-secundary" type="button" data-bs-toggle="modal" data-bs-target="#modalCotizacion-unica">Cotizar</button>
                  <div class="modal-cotizacion">
                    <div class="modal fade" id="modalCotizacion-unica" aria-hidden="true" aria-labelledby="modalCotizacion-unicaLabel" tabindex="-1">
                      <div class="modal-dialog modal-lg modal-dialog-centered">
                        <div class="modal-content">
                          <div class="modal-header modal-header-unico">
                            <h5 class="modal-title" id="modalCotizacion-unicaLabel">SOLICITUD DE <br/><strong>COTIZACIÓN</strong></h5>
                            <div class="modal-header-unico__detail">
                              <div class="modal-header-unico__detail-img"><img src="images/Productos/Semaforos/Semaforo vehicular/7.jpg" alt="imagen del producto" srcset=""/></div>
                              <div class="modal-header-unico__detail-txt">
                                <p><strong>ID:</strong> B103</p>
                                <p><strong>Descripción:</strong> Descripción del Producto</p>
                                <p><strong>Categoría:</strong> Categoría del Producto</p>
                                <p><strong>Subcategoría:</strong> Subcategoría del Producto</p>
                              </div>
                            </div>
                            <button class="btn-close" type="button" data-bs-dismiss="modal" aria-label="Close"></button>
                          </div>
                          <div class="modal-body">
                            <div class="content-form">
                              <form action="">
                                <div class="form-floating mb-3">
                                  <input class="form-control form-control-lg" placeholder="Ingrese su nombre completo" type="number" name="nombre" aria-describedby="emailHelp" min="1" max="1000000" required="required" id="inputCantidad"/>
                                  <label for="inputCantidad">Cantidad</label>
                                </div>
                                <div class="form-floating mb-3">
                                  <input class="form-control form-control-lg" placeholder="Ingrese su nombre completo" type="text" name="nombre" aria-describedby="emailHelp" maxlength="40" required="required" id="nombreCliente"/>
                                  <label for="nombreCliente">Nombre Completo</label>
                                </div>
                                <div class="form-floating mb-3">
                                  <input class="form-control form-control-lg" type="tel" name="telefono" maxlength="10" aria-describedby="emailHelp" pattern="[0-9]{3}-[0-9]{3}-[0-9]{4}" required="required" placeholder="Ingrese su télefono" id="exampleInputEmail1"/>
                                  <label for="exampleInputEmail1">Teléfono a 10 dígitos</label>
                                </div>
                                <div class="form-floating mb-3">
                                  <input class="form-control form-control-lg" type="email" name="email" aria-describedby="emailHelp" placeholder="Email válido" id="exampleInputEmail1"/>
                                  <label for="exampleInputEmail1">Email </label>
                                </div>
                                <div class="form-floating mb-3">
                                  <input class="form-control form-control-lg" type="text" name="nombre_empresa" aria-describedby="emailHelp" placeholder="Nombre de la empresa" id="exampleInputEmail1"/>
                                  <label for="exampleInputEmail1">Nombre de la empresa</label>
                                </div>
                                <div class="form-floating mb-3">
                                  <textarea class="form-control form-control-lg" type="text" name="mensaje" aria-describedby="emailHelp" placeholder="Ingrese su mensaje" id="exampleInputEmail1"></textarea>
                                  <label for="exampleInputEmail1">Mensaje</label>
                                </div>
                              </form>
                            </div>
                            <div class="modal-body__buttons"> 
                              <button class="btn btn-danger" data-bs-dismiss="modal" aria-label="Close">Cancelar</button>
                              <button class="btn btn-success" data-bs-target="#exampleModalToggle2" data-bs-toggle="modal" data-bs-dismiss="modal">Enviar</button>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="modal fade" id="exampleModalToggle2" aria-hidden="true" aria-labelledby="exampleModalToggleLabel2" tabindex="-1">
                      <div class="modal-dialog modal-dialog-centered">
                        <div class="modal-content">
                          <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalToggleLabel2">Solicitud </h5>
                            <button class="btn-close" type="button" data-bs-dismiss="modal" aria-label="Close"></button>
                          </div>
                          <div class="modal-body">Cotización realizada con exito!</div>
                          <div class="modal-footer">
                            <button class="btn btn-primary" data-bs-target="#exampleModalToggle" data-bs-toggle="modal" data-bs-dismiss="modal">Cancelar </button>
                            <button class="btn btn-secondary" type="button" data-bs-dismiss="modal">Aceptar</button>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="accordion-body__item">
                <div class="accordion-body__item-title">
                  <p>titulo</p>
                </div>
                <div class="accordion-body__item-img"><img src="images/Productos/Semaforos/Semaforo vehicular/6.jpg" alt="imagen del producto" srcset=""/></div>
                <div class="accordion-body__item-txt">
                  <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatibus, cum aut beatae</p>
                </div>
                <div class="accordion-body__item-link">
                  <button class="btn-cotizacion btn btn-secundary" type="button" data-bs-toggle="modal" data-bs-target="#modalCotizacion-unica">Cotizar</button>
                  <div class="modal-cotizacion">
                    <div class="modal fade" id="modalCotizacion-unica" aria-hidden="true" aria-labelledby="modalCotizacion-unicaLabel" tabindex="-1">
                      <div class="modal-dialog modal-lg modal-dialog-centered">
                        <div class="modal-content">
                          <div class="modal-header modal-header-unico">
                            <h5 class="modal-title" id="modalCotizacion-unicaLabel">SOLICITUD DE <br/><strong>COTIZACIÓN</strong></h5>
                            <div class="modal-header-unico__detail">
                              <div class="modal-header-unico__detail-img"><img src="images/Productos/Semaforos/Semaforo vehicular/7.jpg" alt="imagen del producto" srcset=""/></div>
                              <div class="modal-header-unico__detail-txt">
                                <p><strong>ID:</strong> B103</p>
                                <p><strong>Descripción:</strong> Descripción del Producto</p>
                                <p><strong>Categoría:</strong> Categoría del Producto</p>
                                <p><strong>Subcategoría:</strong> Subcategoría del Producto</p>
                              </div>
                            </div>
                            <button class="btn-close" type="button" data-bs-dismiss="modal" aria-label="Close"></button>
                          </div>
                          <div class="modal-body">
                            <div class="content-form">
                              <form action="">
                                <div class="form-floating mb-3">
                                  <input class="form-control form-control-lg" placeholder="Ingrese su nombre completo" type="number" name="nombre" aria-describedby="emailHelp" min="1" max="1000000" required="required" id="inputCantidad"/>
                                  <label for="inputCantidad">Cantidad</label>
                                </div>
                                <div class="form-floating mb-3">
                                  <input class="form-control form-control-lg" placeholder="Ingrese su nombre completo" type="text" name="nombre" aria-describedby="emailHelp" maxlength="40" required="required" id="nombreCliente"/>
                                  <label for="nombreCliente">Nombre Completo</label>
                                </div>
                                <div class="form-floating mb-3">
                                  <input class="form-control form-control-lg" type="tel" name="telefono" maxlength="10" aria-describedby="emailHelp" pattern="[0-9]{3}-[0-9]{3}-[0-9]{4}" required="required" placeholder="Ingrese su télefono" id="exampleInputEmail1"/>
                                  <label for="exampleInputEmail1">Teléfono a 10 dígitos</label>
                                </div>
                                <div class="form-floating mb-3">
                                  <input class="form-control form-control-lg" type="email" name="email" aria-describedby="emailHelp" placeholder="Email válido" id="exampleInputEmail1"/>
                                  <label for="exampleInputEmail1">Email </label>
                                </div>
                                <div class="form-floating mb-3">
                                  <input class="form-control form-control-lg" type="text" name="nombre_empresa" aria-describedby="emailHelp" placeholder="Nombre de la empresa" id="exampleInputEmail1"/>
                                  <label for="exampleInputEmail1">Nombre de la empresa</label>
                                </div>
                                <div class="form-floating mb-3">
                                  <textarea class="form-control form-control-lg" type="text" name="mensaje" aria-describedby="emailHelp" placeholder="Ingrese su mensaje" id="exampleInputEmail1"></textarea>
                                  <label for="exampleInputEmail1">Mensaje</label>
                                </div>
                              </form>
                            </div>
                            <div class="modal-body__buttons"> 
                              <button class="btn btn-danger" data-bs-dismiss="modal" aria-label="Close">Cancelar</button>
                              <button class="btn btn-success" data-bs-target="#exampleModalToggle2" data-bs-toggle="modal" data-bs-dismiss="modal">Enviar</button>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="modal fade" id="exampleModalToggle2" aria-hidden="true" aria-labelledby="exampleModalToggleLabel2" tabindex="-1">
                      <div class="modal-dialog modal-dialog-centered">
                        <div class="modal-content">
                          <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalToggleLabel2">Solicitud </h5>
                            <button class="btn-close" type="button" data-bs-dismiss="modal" aria-label="Close"></button>
                          </div>
                          <div class="modal-body">Cotización realizada con exito!</div>
                          <div class="modal-footer">
                            <button class="btn btn-primary" data-bs-target="#exampleModalToggle" data-bs-toggle="modal" data-bs-dismiss="modal">Cancelar </button>
                            <button class="btn btn-secondary" type="button" data-bs-dismiss="modal">Aceptar</button>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="accordion-body__item">
                <div class="accordion-body__item-title">
                  <p>titulo</p>
                </div>
                <div class="accordion-body__item-img"><img src="images/Productos/Semaforos/Semaforo vehicular/6.jpg" alt="imagen del producto" srcset=""/></div>
                <div class="accordion-body__item-txt">
                  <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatibus, cum aut beatae</p>
                </div>
                <div class="accordion-body__item-link">
                  <button class="btn-cotizacion btn btn-secundary" type="button" data-bs-toggle="modal" data-bs-target="#modalCotizacion-unica">Cotizar</button>
                  <div class="modal-cotizacion">
                    <div class="modal fade" id="modalCotizacion-unica" aria-hidden="true" aria-labelledby="modalCotizacion-unicaLabel" tabindex="-1">
                      <div class="modal-dialog modal-lg modal-dialog-centered">
                        <div class="modal-content">
                          <div class="modal-header modal-header-unico">
                            <h5 class="modal-title" id="modalCotizacion-unicaLabel">SOLICITUD DE <br/><strong>COTIZACIÓN</strong></h5>
                            <div class="modal-header-unico__detail">
                              <div class="modal-header-unico__detail-img"><img src="images/Productos/Semaforos/Semaforo vehicular/7.jpg" alt="imagen del producto" srcset=""/></div>
                              <div class="modal-header-unico__detail-txt">
                                <p><strong>ID:</strong> B103</p>
                                <p><strong>Descripción:</strong> Descripción del Producto</p>
                                <p><strong>Categoría:</strong> Categoría del Producto</p>
                                <p><strong>Subcategoría:</strong> Subcategoría del Producto</p>
                              </div>
                            </div>
                            <button class="btn-close" type="button" data-bs-dismiss="modal" aria-label="Close"></button>
                          </div>
                          <div class="modal-body">
                            <div class="content-form">
                              <form action="">
                                <div class="form-floating mb-3">
                                  <input class="form-control form-control-lg" placeholder="Ingrese su nombre completo" type="number" name="nombre" aria-describedby="emailHelp" min="1" max="1000000" required="required" id="inputCantidad"/>
                                  <label for="inputCantidad">Cantidad</label>
                                </div>
                                <div class="form-floating mb-3">
                                  <input class="form-control form-control-lg" placeholder="Ingrese su nombre completo" type="text" name="nombre" aria-describedby="emailHelp" maxlength="40" required="required" id="nombreCliente"/>
                                  <label for="nombreCliente">Nombre Completo</label>
                                </div>
                                <div class="form-floating mb-3">
                                  <input class="form-control form-control-lg" type="tel" name="telefono" maxlength="10" aria-describedby="emailHelp" pattern="[0-9]{3}-[0-9]{3}-[0-9]{4}" required="required" placeholder="Ingrese su télefono" id="exampleInputEmail1"/>
                                  <label for="exampleInputEmail1">Teléfono a 10 dígitos</label>
                                </div>
                                <div class="form-floating mb-3">
                                  <input class="form-control form-control-lg" type="email" name="email" aria-describedby="emailHelp" placeholder="Email válido" id="exampleInputEmail1"/>
                                  <label for="exampleInputEmail1">Email </label>
                                </div>
                                <div class="form-floating mb-3">
                                  <input class="form-control form-control-lg" type="text" name="nombre_empresa" aria-describedby="emailHelp" placeholder="Nombre de la empresa" id="exampleInputEmail1"/>
                                  <label for="exampleInputEmail1">Nombre de la empresa</label>
                                </div>
                                <div class="form-floating mb-3">
                                  <textarea class="form-control form-control-lg" type="text" name="mensaje" aria-describedby="emailHelp" placeholder="Ingrese su mensaje" id="exampleInputEmail1"></textarea>
                                  <label for="exampleInputEmail1">Mensaje</label>
                                </div>
                              </form>
                            </div>
                            <div class="modal-body__buttons"> 
                              <button class="btn btn-danger" data-bs-dismiss="modal" aria-label="Close">Cancelar</button>
                              <button class="btn btn-success" data-bs-target="#exampleModalToggle2" data-bs-toggle="modal" data-bs-dismiss="modal">Enviar</button>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="modal fade" id="exampleModalToggle2" aria-hidden="true" aria-labelledby="exampleModalToggleLabel2" tabindex="-1">
                      <div class="modal-dialog modal-dialog-centered">
                        <div class="modal-content">
                          <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalToggleLabel2">Solicitud </h5>
                            <button class="btn-close" type="button" data-bs-dismiss="modal" aria-label="Close"></button>
                          </div>
                          <div class="modal-body">Cotización realizada con exito!</div>
                          <div class="modal-footer">
                            <button class="btn btn-primary" data-bs-target="#exampleModalToggle" data-bs-toggle="modal" data-bs-dismiss="modal">Cancelar </button>
                            <button class="btn btn-secondary" type="button" data-bs-dismiss="modal">Aceptar</button>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="accordion-body__item">
                <div class="accordion-body__item-title">
                  <p>titulo</p>
                </div>
                <div class="accordion-body__item-img"><img src="images/Productos/Semaforos/Semaforo vehicular/6.jpg" alt="imagen del producto" srcset=""/></div>
                <div class="accordion-body__item-txt">
                  <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatibus, cum aut beatae</p>
                </div>
                <div class="accordion-body__item-link">
                  <button class="btn-cotizacion btn btn-secundary" type="button" data-bs-toggle="modal" data-bs-target="#modalCotizacion-unica">Cotizar</button>
                  <div class="modal-cotizacion">
                    <div class="modal fade" id="modalCotizacion-unica" aria-hidden="true" aria-labelledby="modalCotizacion-unicaLabel" tabindex="-1">
                      <div class="modal-dialog modal-lg modal-dialog-centered">
                        <div class="modal-content">
                          <div class="modal-header modal-header-unico">
                            <h5 class="modal-title" id="modalCotizacion-unicaLabel">SOLICITUD DE <br/><strong>COTIZACIÓN</strong></h5>
                            <div class="modal-header-unico__detail">
                              <div class="modal-header-unico__detail-img"><img src="images/Productos/Semaforos/Semaforo vehicular/7.jpg" alt="imagen del producto" srcset=""/></div>
                              <div class="modal-header-unico__detail-txt">
                                <p><strong>ID:</strong> B103</p>
                                <p><strong>Descripción:</strong> Descripción del Producto</p>
                                <p><strong>Categoría:</strong> Categoría del Producto</p>
                                <p><strong>Subcategoría:</strong> Subcategoría del Producto</p>
                              </div>
                            </div>
                            <button class="btn-close" type="button" data-bs-dismiss="modal" aria-label="Close"></button>
                          </div>
                          <div class="modal-body">
                            <div class="content-form">
                              <form action="">
                                <div class="form-floating mb-3">
                                  <input class="form-control form-control-lg" placeholder="Ingrese su nombre completo" type="number" name="nombre" aria-describedby="emailHelp" min="1" max="1000000" required="required" id="inputCantidad"/>
                                  <label for="inputCantidad">Cantidad</label>
                                </div>
                                <div class="form-floating mb-3">
                                  <input class="form-control form-control-lg" placeholder="Ingrese su nombre completo" type="text" name="nombre" aria-describedby="emailHelp" maxlength="40" required="required" id="nombreCliente"/>
                                  <label for="nombreCliente">Nombre Completo</label>
                                </div>
                                <div class="form-floating mb-3">
                                  <input class="form-control form-control-lg" type="tel" name="telefono" maxlength="10" aria-describedby="emailHelp" pattern="[0-9]{3}-[0-9]{3}-[0-9]{4}" required="required" placeholder="Ingrese su télefono" id="exampleInputEmail1"/>
                                  <label for="exampleInputEmail1">Teléfono a 10 dígitos</label>
                                </div>
                                <div class="form-floating mb-3">
                                  <input class="form-control form-control-lg" type="email" name="email" aria-describedby="emailHelp" placeholder="Email válido" id="exampleInputEmail1"/>
                                  <label for="exampleInputEmail1">Email </label>
                                </div>
                                <div class="form-floating mb-3">
                                  <input class="form-control form-control-lg" type="text" name="nombre_empresa" aria-describedby="emailHelp" placeholder="Nombre de la empresa" id="exampleInputEmail1"/>
                                  <label for="exampleInputEmail1">Nombre de la empresa</label>
                                </div>
                                <div class="form-floating mb-3">
                                  <textarea class="form-control form-control-lg" type="text" name="mensaje" aria-describedby="emailHelp" placeholder="Ingrese su mensaje" id="exampleInputEmail1"></textarea>
                                  <label for="exampleInputEmail1">Mensaje</label>
                                </div>
                              </form>
                            </div>
                            <div class="modal-body__buttons"> 
                              <button class="btn btn-danger" data-bs-dismiss="modal" aria-label="Close">Cancelar</button>
                              <button class="btn btn-success" data-bs-target="#exampleModalToggle2" data-bs-toggle="modal" data-bs-dismiss="modal">Enviar</button>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="modal fade" id="exampleModalToggle2" aria-hidden="true" aria-labelledby="exampleModalToggleLabel2" tabindex="-1">
                      <div class="modal-dialog modal-dialog-centered">
                        <div class="modal-content">
                          <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalToggleLabel2">Solicitud </h5>
                            <button class="btn-close" type="button" data-bs-dismiss="modal" aria-label="Close"></button>
                          </div>
                          <div class="modal-body">Cotización realizada con exito!</div>
                          <div class="modal-footer">
                            <button class="btn btn-primary" data-bs-target="#exampleModalToggle" data-bs-toggle="modal" data-bs-dismiss="modal">Cancelar </button>
                            <button class="btn btn-secondary" type="button" data-bs-dismiss="modal">Aceptar</button>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="accordion-item">
          <h2 class="accordion-header">
            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">Complementos semáforos </button>
          </h2>
          <div class="accordion-collapse collapse" id="collapseFour" data-bs-parent="#accordionExample">
            <div class="accordion-body">
              <div class="accordion-body__item">
                <div class="accordion-body__item-title">
                  <p>titulo</p>
                </div>
                <div class="accordion-body__item-img"><img src="images/Productos/Semaforos/Semaforo vehicular/6.jpg" alt="imagen del producto" srcset=""/></div>
                <div class="accordion-body__item-txt">
                  <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatibus, cum aut beatae</p>
                </div>
                <div class="accordion-body__item-link">
                  <button class="btn-cotizacion btn btn-secundary" type="button" data-bs-toggle="modal" data-bs-target="#modalCotizacion-unica">Cotizar</button>
                  <div class="modal-cotizacion">
                    <div class="modal fade" id="modalCotizacion-unica" aria-hidden="true" aria-labelledby="modalCotizacion-unicaLabel" tabindex="-1">
                      <div class="modal-dialog modal-lg modal-dialog-centered">
                        <div class="modal-content">
                          <div class="modal-header modal-header-unico">
                            <h5 class="modal-title" id="modalCotizacion-unicaLabel">SOLICITUD DE <br/><strong>COTIZACIÓN</strong></h5>
                            <div class="modal-header-unico__detail">
                              <div class="modal-header-unico__detail-img"><img src="images/Productos/Semaforos/Semaforo vehicular/7.jpg" alt="imagen del producto" srcset=""/></div>
                              <div class="modal-header-unico__detail-txt">
                                <p><strong>ID:</strong> B103</p>
                                <p><strong>Descripción:</strong> Descripción del Producto</p>
                                <p><strong>Categoría:</strong> Categoría del Producto</p>
                                <p><strong>Subcategoría:</strong> Subcategoría del Producto</p>
                              </div>
                            </div>
                            <button class="btn-close" type="button" data-bs-dismiss="modal" aria-label="Close"></button>
                          </div>
                          <div class="modal-body">
                            <div class="content-form">
                              <form action="">
                                <div class="form-floating mb-3">
                                  <input class="form-control form-control-lg" placeholder="Ingrese su nombre completo" type="number" name="nombre" aria-describedby="emailHelp" min="1" max="1000000" required="required" id="inputCantidad"/>
                                  <label for="inputCantidad">Cantidad</label>
                                </div>
                                <div class="form-floating mb-3">
                                  <input class="form-control form-control-lg" placeholder="Ingrese su nombre completo" type="text" name="nombre" aria-describedby="emailHelp" maxlength="40" required="required" id="nombreCliente"/>
                                  <label for="nombreCliente">Nombre Completo</label>
                                </div>
                                <div class="form-floating mb-3">
                                  <input class="form-control form-control-lg" type="tel" name="telefono" maxlength="10" aria-describedby="emailHelp" pattern="[0-9]{3}-[0-9]{3}-[0-9]{4}" required="required" placeholder="Ingrese su télefono" id="exampleInputEmail1"/>
                                  <label for="exampleInputEmail1">Teléfono a 10 dígitos</label>
                                </div>
                                <div class="form-floating mb-3">
                                  <input class="form-control form-control-lg" type="email" name="email" aria-describedby="emailHelp" placeholder="Email válido" id="exampleInputEmail1"/>
                                  <label for="exampleInputEmail1">Email </label>
                                </div>
                                <div class="form-floating mb-3">
                                  <input class="form-control form-control-lg" type="text" name="nombre_empresa" aria-describedby="emailHelp" placeholder="Nombre de la empresa" id="exampleInputEmail1"/>
                                  <label for="exampleInputEmail1">Nombre de la empresa</label>
                                </div>
                                <div class="form-floating mb-3">
                                  <textarea class="form-control form-control-lg" type="text" name="mensaje" aria-describedby="emailHelp" placeholder="Ingrese su mensaje" id="exampleInputEmail1"></textarea>
                                  <label for="exampleInputEmail1">Mensaje</label>
                                </div>
                              </form>
                            </div>
                            <div class="modal-body__buttons"> 
                              <button class="btn btn-danger" data-bs-dismiss="modal" aria-label="Close">Cancelar</button>
                              <button class="btn btn-success" data-bs-target="#exampleModalToggle2" data-bs-toggle="modal" data-bs-dismiss="modal">Enviar</button>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="modal fade" id="exampleModalToggle2" aria-hidden="true" aria-labelledby="exampleModalToggleLabel2" tabindex="-1">
                      <div class="modal-dialog modal-dialog-centered">
                        <div class="modal-content">
                          <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalToggleLabel2">Solicitud </h5>
                            <button class="btn-close" type="button" data-bs-dismiss="modal" aria-label="Close"></button>
                          </div>
                          <div class="modal-body">Cotización realizada con exito!</div>
                          <div class="modal-footer">
                            <button class="btn btn-primary" data-bs-target="#exampleModalToggle" data-bs-toggle="modal" data-bs-dismiss="modal">Cancelar </button>
                            <button class="btn btn-secondary" type="button" data-bs-dismiss="modal">Aceptar</button>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="accordion-body__item">
                <div class="accordion-body__item-title">
                  <p>titulo</p>
                </div>
                <div class="accordion-body__item-img"><img src="images/Productos/Semaforos/Semaforo vehicular/6.jpg" alt="imagen del producto" srcset=""/></div>
                <div class="accordion-body__item-txt">
                  <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatibus, cum aut beatae</p>
                </div>
                <div class="accordion-body__item-link">
                  <button class="btn-cotizacion btn btn-secundary" type="button" data-bs-toggle="modal" data-bs-target="#modalCotizacion-unica">Cotizar</button>
                  <div class="modal-cotizacion">
                    <div class="modal fade" id="modalCotizacion-unica" aria-hidden="true" aria-labelledby="modalCotizacion-unicaLabel" tabindex="-1">
                      <div class="modal-dialog modal-lg modal-dialog-centered">
                        <div class="modal-content">
                          <div class="modal-header modal-header-unico">
                            <h5 class="modal-title" id="modalCotizacion-unicaLabel">SOLICITUD DE <br/><strong>COTIZACIÓN</strong></h5>
                            <div class="modal-header-unico__detail">
                              <div class="modal-header-unico__detail-img"><img src="images/Productos/Semaforos/Semaforo vehicular/7.jpg" alt="imagen del producto" srcset=""/></div>
                              <div class="modal-header-unico__detail-txt">
                                <p><strong>ID:</strong> B103</p>
                                <p><strong>Descripción:</strong> Descripción del Producto</p>
                                <p><strong>Categoría:</strong> Categoría del Producto</p>
                                <p><strong>Subcategoría:</strong> Subcategoría del Producto</p>
                              </div>
                            </div>
                            <button class="btn-close" type="button" data-bs-dismiss="modal" aria-label="Close"></button>
                          </div>
                          <div class="modal-body">
                            <div class="content-form">
                              <form action="">
                                <div class="form-floating mb-3">
                                  <input class="form-control form-control-lg" placeholder="Ingrese su nombre completo" type="number" name="nombre" aria-describedby="emailHelp" min="1" max="1000000" required="required" id="inputCantidad"/>
                                  <label for="inputCantidad">Cantidad</label>
                                </div>
                                <div class="form-floating mb-3">
                                  <input class="form-control form-control-lg" placeholder="Ingrese su nombre completo" type="text" name="nombre" aria-describedby="emailHelp" maxlength="40" required="required" id="nombreCliente"/>
                                  <label for="nombreCliente">Nombre Completo</label>
                                </div>
                                <div class="form-floating mb-3">
                                  <input class="form-control form-control-lg" type="tel" name="telefono" maxlength="10" aria-describedby="emailHelp" pattern="[0-9]{3}-[0-9]{3}-[0-9]{4}" required="required" placeholder="Ingrese su télefono" id="exampleInputEmail1"/>
                                  <label for="exampleInputEmail1">Teléfono a 10 dígitos</label>
                                </div>
                                <div class="form-floating mb-3">
                                  <input class="form-control form-control-lg" type="email" name="email" aria-describedby="emailHelp" placeholder="Email válido" id="exampleInputEmail1"/>
                                  <label for="exampleInputEmail1">Email </label>
                                </div>
                                <div class="form-floating mb-3">
                                  <input class="form-control form-control-lg" type="text" name="nombre_empresa" aria-describedby="emailHelp" placeholder="Nombre de la empresa" id="exampleInputEmail1"/>
                                  <label for="exampleInputEmail1">Nombre de la empresa</label>
                                </div>
                                <div class="form-floating mb-3">
                                  <textarea class="form-control form-control-lg" type="text" name="mensaje" aria-describedby="emailHelp" placeholder="Ingrese su mensaje" id="exampleInputEmail1"></textarea>
                                  <label for="exampleInputEmail1">Mensaje</label>
                                </div>
                              </form>
                            </div>
                            <div class="modal-body__buttons"> 
                              <button class="btn btn-danger" data-bs-dismiss="modal" aria-label="Close">Cancelar</button>
                              <button class="btn btn-success" data-bs-target="#exampleModalToggle2" data-bs-toggle="modal" data-bs-dismiss="modal">Enviar</button>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="modal fade" id="exampleModalToggle2" aria-hidden="true" aria-labelledby="exampleModalToggleLabel2" tabindex="-1">
                      <div class="modal-dialog modal-dialog-centered">
                        <div class="modal-content">
                          <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalToggleLabel2">Solicitud </h5>
                            <button class="btn-close" type="button" data-bs-dismiss="modal" aria-label="Close"></button>
                          </div>
                          <div class="modal-body">Cotización realizada con exito!</div>
                          <div class="modal-footer">
                            <button class="btn btn-primary" data-bs-target="#exampleModalToggle" data-bs-toggle="modal" data-bs-dismiss="modal">Cancelar </button>
                            <button class="btn btn-secondary" type="button" data-bs-dismiss="modal">Aceptar</button>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="accordion-body__item">
                <div class="accordion-body__item-title">
                  <p>titulo</p>
                </div>
                <div class="accordion-body__item-img"><img src="images/Productos/Semaforos/Semaforo vehicular/6.jpg" alt="imagen del producto" srcset=""/></div>
                <div class="accordion-body__item-txt">
                  <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatibus, cum aut beatae</p>
                </div>
                <div class="accordion-body__item-link">
                  <button class="btn-cotizacion btn btn-secundary" type="button" data-bs-toggle="modal" data-bs-target="#modalCotizacion-unica">Cotizar</button>
                  <div class="modal-cotizacion">
                    <div class="modal fade" id="modalCotizacion-unica" aria-hidden="true" aria-labelledby="modalCotizacion-unicaLabel" tabindex="-1">
                      <div class="modal-dialog modal-lg modal-dialog-centered">
                        <div class="modal-content">
                          <div class="modal-header modal-header-unico">
                            <h5 class="modal-title" id="modalCotizacion-unicaLabel">SOLICITUD DE <br/><strong>COTIZACIÓN</strong></h5>
                            <div class="modal-header-unico__detail">
                              <div class="modal-header-unico__detail-img"><img src="images/Productos/Semaforos/Semaforo vehicular/7.jpg" alt="imagen del producto" srcset=""/></div>
                              <div class="modal-header-unico__detail-txt">
                                <p><strong>ID:</strong> B103</p>
                                <p><strong>Descripción:</strong> Descripción del Producto</p>
                                <p><strong>Categoría:</strong> Categoría del Producto</p>
                                <p><strong>Subcategoría:</strong> Subcategoría del Producto</p>
                              </div>
                            </div>
                            <button class="btn-close" type="button" data-bs-dismiss="modal" aria-label="Close"></button>
                          </div>
                          <div class="modal-body">
                            <div class="content-form">
                              <form action="">
                                <div class="form-floating mb-3">
                                  <input class="form-control form-control-lg" placeholder="Ingrese su nombre completo" type="number" name="nombre" aria-describedby="emailHelp" min="1" max="1000000" required="required" id="inputCantidad"/>
                                  <label for="inputCantidad">Cantidad</label>
                                </div>
                                <div class="form-floating mb-3">
                                  <input class="form-control form-control-lg" placeholder="Ingrese su nombre completo" type="text" name="nombre" aria-describedby="emailHelp" maxlength="40" required="required" id="nombreCliente"/>
                                  <label for="nombreCliente">Nombre Completo</label>
                                </div>
                                <div class="form-floating mb-3">
                                  <input class="form-control form-control-lg" type="tel" name="telefono" maxlength="10" aria-describedby="emailHelp" pattern="[0-9]{3}-[0-9]{3}-[0-9]{4}" required="required" placeholder="Ingrese su télefono" id="exampleInputEmail1"/>
                                  <label for="exampleInputEmail1">Teléfono a 10 dígitos</label>
                                </div>
                                <div class="form-floating mb-3">
                                  <input class="form-control form-control-lg" type="email" name="email" aria-describedby="emailHelp" placeholder="Email válido" id="exampleInputEmail1"/>
                                  <label for="exampleInputEmail1">Email </label>
                                </div>
                                <div class="form-floating mb-3">
                                  <input class="form-control form-control-lg" type="text" name="nombre_empresa" aria-describedby="emailHelp" placeholder="Nombre de la empresa" id="exampleInputEmail1"/>
                                  <label for="exampleInputEmail1">Nombre de la empresa</label>
                                </div>
                                <div class="form-floating mb-3">
                                  <textarea class="form-control form-control-lg" type="text" name="mensaje" aria-describedby="emailHelp" placeholder="Ingrese su mensaje" id="exampleInputEmail1"></textarea>
                                  <label for="exampleInputEmail1">Mensaje</label>
                                </div>
                              </form>
                            </div>
                            <div class="modal-body__buttons"> 
                              <button class="btn btn-danger" data-bs-dismiss="modal" aria-label="Close">Cancelar</button>
                              <button class="btn btn-success" data-bs-target="#exampleModalToggle2" data-bs-toggle="modal" data-bs-dismiss="modal">Enviar</button>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="modal fade" id="exampleModalToggle2" aria-hidden="true" aria-labelledby="exampleModalToggleLabel2" tabindex="-1">
                      <div class="modal-dialog modal-dialog-centered">
                        <div class="modal-content">
                          <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalToggleLabel2">Solicitud </h5>
                            <button class="btn-close" type="button" data-bs-dismiss="modal" aria-label="Close"></button>
                          </div>
                          <div class="modal-body">Cotización realizada con exito!</div>
                          <div class="modal-footer">
                            <button class="btn btn-primary" data-bs-target="#exampleModalToggle" data-bs-toggle="modal" data-bs-dismiss="modal">Cancelar </button>
                            <button class="btn btn-secondary" type="button" data-bs-dismiss="modal">Aceptar</button>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="accordion-body__item">
                <div class="accordion-body__item-title">
                  <p>titulo</p>
                </div>
                <div class="accordion-body__item-img"><img src="images/Productos/Semaforos/Semaforo vehicular/6.jpg" alt="imagen del producto" srcset=""/></div>
                <div class="accordion-body__item-txt">
                  <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatibus, cum aut beatae</p>
                </div>
                <div class="accordion-body__item-link">
                  <button class="btn-cotizacion btn btn-secundary" type="button" data-bs-toggle="modal" data-bs-target="#modalCotizacion-unica">Cotizar</button>
                  <div class="modal-cotizacion">
                    <div class="modal fade" id="modalCotizacion-unica" aria-hidden="true" aria-labelledby="modalCotizacion-unicaLabel" tabindex="-1">
                      <div class="modal-dialog modal-lg modal-dialog-centered">
                        <div class="modal-content">
                          <div class="modal-header modal-header-unico">
                            <h5 class="modal-title" id="modalCotizacion-unicaLabel">SOLICITUD DE <br/><strong>COTIZACIÓN</strong></h5>
                            <div class="modal-header-unico__detail">
                              <div class="modal-header-unico__detail-img"><img src="images/Productos/Semaforos/Semaforo vehicular/7.jpg" alt="imagen del producto" srcset=""/></div>
                              <div class="modal-header-unico__detail-txt">
                                <p><strong>ID:</strong> B103</p>
                                <p><strong>Descripción:</strong> Descripción del Producto</p>
                                <p><strong>Categoría:</strong> Categoría del Producto</p>
                                <p><strong>Subcategoría:</strong> Subcategoría del Producto</p>
                              </div>
                            </div>
                            <button class="btn-close" type="button" data-bs-dismiss="modal" aria-label="Close"></button>
                          </div>
                          <div class="modal-body">
                            <div class="content-form">
                              <form action="">
                                <div class="form-floating mb-3">
                                  <input class="form-control form-control-lg" placeholder="Ingrese su nombre completo" type="number" name="nombre" aria-describedby="emailHelp" min="1" max="1000000" required="required" id="inputCantidad"/>
                                  <label for="inputCantidad">Cantidad</label>
                                </div>
                                <div class="form-floating mb-3">
                                  <input class="form-control form-control-lg" placeholder="Ingrese su nombre completo" type="text" name="nombre" aria-describedby="emailHelp" maxlength="40" required="required" id="nombreCliente"/>
                                  <label for="nombreCliente">Nombre Completo</label>
                                </div>
                                <div class="form-floating mb-3">
                                  <input class="form-control form-control-lg" type="tel" name="telefono" maxlength="10" aria-describedby="emailHelp" pattern="[0-9]{3}-[0-9]{3}-[0-9]{4}" required="required" placeholder="Ingrese su télefono" id="exampleInputEmail1"/>
                                  <label for="exampleInputEmail1">Teléfono a 10 dígitos</label>
                                </div>
                                <div class="form-floating mb-3">
                                  <input class="form-control form-control-lg" type="email" name="email" aria-describedby="emailHelp" placeholder="Email válido" id="exampleInputEmail1"/>
                                  <label for="exampleInputEmail1">Email </label>
                                </div>
                                <div class="form-floating mb-3">
                                  <input class="form-control form-control-lg" type="text" name="nombre_empresa" aria-describedby="emailHelp" placeholder="Nombre de la empresa" id="exampleInputEmail1"/>
                                  <label for="exampleInputEmail1">Nombre de la empresa</label>
                                </div>
                                <div class="form-floating mb-3">
                                  <textarea class="form-control form-control-lg" type="text" name="mensaje" aria-describedby="emailHelp" placeholder="Ingrese su mensaje" id="exampleInputEmail1"></textarea>
                                  <label for="exampleInputEmail1">Mensaje</label>
                                </div>
                              </form>
                            </div>
                            <div class="modal-body__buttons"> 
                              <button class="btn btn-danger" data-bs-dismiss="modal" aria-label="Close">Cancelar</button>
                              <button class="btn btn-success" data-bs-target="#exampleModalToggle2" data-bs-toggle="modal" data-bs-dismiss="modal">Enviar</button>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="modal fade" id="exampleModalToggle2" aria-hidden="true" aria-labelledby="exampleModalToggleLabel2" tabindex="-1">
                      <div class="modal-dialog modal-dialog-centered">
                        <div class="modal-content">
                          <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalToggleLabel2">Solicitud </h5>
                            <button class="btn-close" type="button" data-bs-dismiss="modal" aria-label="Close"></button>
                          </div>
                          <div class="modal-body">Cotización realizada con exito!</div>
                          <div class="modal-footer">
                            <button class="btn btn-primary" data-bs-target="#exampleModalToggle" data-bs-toggle="modal" data-bs-dismiss="modal">Cancelar </button>
                            <button class="btn btn-secondary" type="button" data-bs-dismiss="modal">Aceptar</button>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <?php 
  include './components/footer.php';
  ?>