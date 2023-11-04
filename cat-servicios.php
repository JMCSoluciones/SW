<?php 
include './components/head.php';
include './components/header.php';
?>
    <div class="slideServicios slide">
      <div class="slide__box">
        <p>SERVICIOS DE DISEÑO  </p>
        <p>VIAL Y <br/> <strong>URBANO</strong></p>
        <div class="slide__box__link">
          <button class="slide-btn-cotizar floating" type="button" data-bs-toggle="modal" data-bs-target="#modalCotizacion-gral">Solicitar una cotizacion</button>
          <div class="modal-cotizacion">
            <div class="modal fade" id="modalCotizacion-gral" aria-hidden="true" aria-labelledby="modalCotizacion-gralLabel" tabindex="-1">
              <div class="modal-dialog modal-lg modal-dialog-centered">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title" id="modalCotizacion-gralLabel">SOLICITUD DE <br/><strong>COTIZACIÓN</strong></h5>
                    <button class="btn-close" type="button" data-bs-dismiss="modal" aria-label="Close"></button>
                  </div>
                  <div class="modal-body">
                    <div class="content-form">
                      <form action="">
                        <div class="form-floating mb-3">
                          <input class="form-control form-control-lg" placeholder="Ingrese su nombre completo" type="text" name="nombre" aria-describedby="emailHelp" id="nombreCliente"/>
                          <label class="form-label" for="nombreCliente">Nombre Completo</label>
                        </div>
                        <div class="form-floating mb-3">
                          <input class="form-control form-control-lg" type="number" name="telefono" maxlength="2" aria-describedby="emailHelp" placeholder="Ingrese su télefono" id="exampleInputEmail1"/>
                          <label class="form-label" for="exampleInputEmail1">Teléfono a 10 dígitos</label>
                        </div>
                        <div class="form-floating mb-3">
                          <input class="form-control form-control-lg" type="email" name="email" aria-describedby="emailHelp" placeholder="Email válido" id="exampleInputEmail1"/>
                          <label class="form-label" for="exampleInputEmail1">Email </label>
                        </div>
                        <div class="form-floating mb-3">
                          <input class="form-control form-control-lg" type="text" name="nombre_empresa" aria-describedby="emailHelp" placeholder="Nombre de la empresa" id="exampleInputEmail1"/>
                          <label class="form-label" for="exampleInputEmail1">Nombre de la empresa</label>
                        </div>
                        <div class="form-floating mb-3">
                          <textarea class="form-control form-control-lg" type="text" name="mensaje" aria-describedby="emailHelp" placeholder="Ingrese su mensaje" id="exampleInputEmail1"></textarea>
                          <label class="form-label" for="exampleInputEmail1">Mensaje</label>
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
    <div class="link-categorias">
      <p>Consulta otra categoría</p>
      <div class="dropdown"><a class="btn btn-warning dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">Categorias</a>
        <ul class="dropdown-menu">
          <li><a class="dropdown-item" href="cat-semaforos.html">Semáforos</a><a class="dropdown-item" href="cat-postes.html">Postes</a><a class="dropdown-item" href="cat-senalamientos.html">Señalamientos</a><a class="dropdown-item" href="cat-complementos.html">Complementos viales</a><a class="dropdown-item" href="cat-servicios.html">Servicios de diseño vial y urbano</a></li>
        </ul>
      </div>
    </div>
    <div class="categoriaIntro">
      <div class="titulo">Lorem ipsum dolor sit amet consectetur, adipisicing elit.</div>
    </div>
    <div class="container">
      <div class="accordion" id="accordionExample">
        <div class="accordion-item">
          <h2 class="accordion-header">
            <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">Diseño Urbano</button>
          </h2>
          <div class="accordion-collapse collapse show" id="collapseOne" data-bs-parent="#accordionExample">
            <div class="accordion-body">
              <div class="accordion-body__item">
                <div class="accordion-body__item-title">
                  <p>titulo</p>
                </div>
                <div class="accordion-body__item-img"><img src="images/Productos/Semaforos/Semaforo vehicular/7.jpg" alt="imagen del producto" srcset=""/></div>
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
                <div class="accordion-body__item-img"><img src="images/Productos/Semaforos/Semaforo vehicular/7.jpg" alt="imagen del producto" srcset=""/></div>
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
                <div class="accordion-body__item-img"><img src="images/Productos/Semaforos/Semaforo vehicular/7.jpg" alt="imagen del producto" srcset=""/></div>
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
            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">Estudio impacto vial, Fraccionamientos, centros comerciales, nuevas vialidades.</button>
          </h2>
          <div class="accordion-collapse collapse" id="collapseTwo" data-bs-parent="#accordionExample">
            <div class="accordion-body">
              <div class="accordion-body__item">
                <div class="accordion-body__item-title">
                  <p>titulo</p>
                </div>
                <div class="accordion-body__item-img"><img src="images/Productos/Semaforos/Semaforo vehicular/7.jpg" alt="imagen del producto" srcset=""/></div>
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
                <div class="accordion-body__item-img"><img src="images/Productos/Semaforos/Semaforo vehicular/7.jpg" alt="imagen del producto" srcset=""/></div>
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
                <div class="accordion-body__item-img"><img src="images/Productos/Semaforos/Semaforo vehicular/7.jpg" alt="imagen del producto" srcset=""/></div>
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
    <footer>
      <div class="footer__header">
        <div class="footer__header__box">
          <div class="footer__header__box__phone">
            <div class="footer__header-icon"><img src="images/iconos/phone.svg" alt="icono de teléfono fijo"/></div>
            <div class="footer__header__phone-num"> 
              <p>442 219-76-51 <br/>444 257-52-88</p>
            </div>
          </div>
          <div class="footer__header__box__cellphone">
            <div class="footer__header-icon"> <img src="images/iconos/smartphone.svg" alt="ícono de un celular"/></div>
            <div class="footer__header__cellphone-num"> 
              <p>442 3867559</p>
            </div>
          </div>
          <div class="footer__header__box__email"> 
            <div class="footer__header-icon"><img src="images/iconos/email.svg" alt="ícono de un email"/></div>
            <div class="footer__header__email-txt"> 
              <p>contacto@stw.com.mx</p>
            </div>
          </div>
        </div>
      </div>
      <div class="footer__box">
        <div class="footer__box__body">
          <div class="footer__box__body-logo"><img src="images/iconos/logo-amarillo.svg" alt="logotipo de Sterowania"/></div>
          <div class="footer__box__body-links">
            <h2>Enlaces Directos</h2>
            <ul> 
              <li><a href="/">Inicio</a></li>
              <li><a href="catalogo.html">Catálogo </a></li>
              <li><a href="cotiza_gral.html">Cotizar</a></li>
              <li><a href="login.html">Login</a></li>
              <li><a href="privacidad.html">Aviso de Privacidad </a></li>
            </ul>
          </div>
          <div class="footer__box__body-address"> <img src="images/iconos/address.svg" alt="ícono de ubicación"/>
            <p>Agregar dirección de SW</p>
          </div>
          <div class="footer__box__body-schedule">
            <h2>HORARIOS DE ATENCIÓN</h2>
            <div class="footer__box__body-schedule-hours">
              <p>Lunes a Viernes: </p>
              <p>9:00am - 6:00 pm</p>
              <p>Sábado: </p>
              <p>9:00am - 2:00 pm</p>
              <p>Domingo: </p>
              <p>Cerrado</p>
            </div>
          </div>
          <div class="footer__box__body-socialmedia">
            <div class="footer__box__body-socialmedia__icon">
              <h2>SÍGUENOS</h2><a href="https://facebook.com"> <img src="images/iconos/facebook.svg" alt="Ícono de facebook"/></a>
            </div>
          </div>
        </div>
        <div class="footer__foot"> 
          <div class="rights">
            <p>STEROWANIA 2023</p>
          </div>
          <p class="divisor"><strong>|</strong></p>
          <div class="link__jmc"> <a href="https://jmcsoluciones.com" target="_blank">Desarrollado por <strong>JMC Soluciones</strong></a></div>
        </div>
      </div>
    </footer>
    <script src="js/app-dist.js"></script>
    <script src="js/animations.js"></script>
  </body>
</html>