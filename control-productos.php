<?php 
include './components/head.php';
include './components/header.php';
include './components/control-menuAdmin.php';
?>
    <div class="content__CtrlProductos">
      <h3 class="title">Control de Productos</h3>
      <button class="btn btn-success newBtnElement" type="button" data-bs-toggle="modal" data-bs-target="#modalCotizacion-gral">Nueva Producto</button>
      <div class="modal-cotizacion">
        <div class="modal fade" id="modalCotizacion-gral" aria-hidden="true" aria-labelledby="modalCotizacion-gralLabel" tabindex="-1">
          <div class="modal-dialog modal-lg modal-dialog-centered">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="modalCotizacion-gralLabel">Control de <br/><strong>Productos</strong></h5>
                <button class="btn-close" type="button" data-bs-dismiss="modal" aria-label="Close"></button>
              </div>
              <div class="modal-body">
                <div class="content-form">
                  <form action="">
                    <div class="form-floating mb-3">
                      <input class="form-control form-control-lg" placeholder="Ingrese su nombre completo" type="text" name="nombre" aria-describedby="emailHelp"/>
                      <label class="form-label" for="nombreCliente">ID</label>
                    </div>
                    <div class="form-floating mb-3">
                      <input class="form-control form-control-lg" type="number" name="telefono" maxlength="2" aria-describedby="emailHelp" placeholder="Ingrese su télefono" id="exampleInputEmail1"/>
                      <label class="form-label" for="exampleInputEmail1">Nombre del producto</label>
                    </div>
                    <div class="form-floating mb-3">
                      <lablel class="form-label">Categoría</lablel>
                      <select class="form-control form-control-lg form-select" type="email" name="email" aria-describedby="emailHelp" placeholder="Email válido" id="exampleInputEmail1">
                        <option>Semáforos</option>
                        <option>Postes</option>
                        <option>Señalamientos</option>
                        <option>Complementos Viales</option>
                        <option>Servicios de diseño</option>
                      </select>
                    </div>
                    <div class="form-floating mb-3">
                      <lablel class="form-label">Subcategoria</lablel>
                      <select class="form-control form-control-lg form-select" type="email" name="email" aria-describedby="emailHelp" placeholder="Email válido" id="exampleInputEmail1">
                        <option>Semáforos</option>
                        <option>Postes</option>
                        <option>Señalamientos</option>
                        <option>Complementos Viales</option>
                        <option>Servicios de diseño</option>
                      </select>
                    </div>
                    <div class="mb-3">
                      <label class="form-label" id="formFile" for="exampleInputEmail1">Imagen</label>
                      <input class="form-control form-control-lg" type="file" name="imagen" aria-describedby="emailHelp" placeholder="Ingrese su mensaje" id="exampleInputEmail1"/>
                    </div>
                    <div class="form-floating mb-3">
                      <textarea class="form-control form-control-lg" type="text" name="mensaje" aria-describedby="emailHelp" placeholder="Ingrese su mensaje" id="exampleInputEmail1"></textarea>
                      <label class="form-label" for="exampleInputEmail1">Extracto</label>
                    </div>
                    <div class="form-floating mb-3">
                      <textarea class="form-control form-control-lg" type="text" name="mensaje" aria-describedby="emailHelp" placeholder="Ingrese su mensaje" id="exampleInputEmail1"></textarea>
                      <label class="form-label" for="exampleInputEmail1">Descripción</label>
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
      <div class="content__CtrlProductos__tabs">
        <ul class="nav nav-tabs" id="myTab" role="tablist">
          <li class="nav-item content__CtrlProductos__tabs__link" role="presentation">
            <button class="nav-link active" id="Semaforos-tab" data-bs-toggle="tab" data-bs-target="#Semaforos-tab-pane" type="button" role="tab" aria-controls="Semaforos-tab-pane" aria-selected="true">Semáforos</button>
          </li>
          <li class="nav-item content__CtrlProductos__tabs__link" role="presentation">
            <button class="nav-link" id="Postes-tab" data-bs-toggle="tab" data-bs-target="#Postes-tab-pane" type="button" role="tab" aria-controls="Postes-tab-pane" aria-selected="false">Postes</button>
          </li>
          <li class="nav-item content__CtrlProductos__tabs__link" role="presentation">
            <button class="nav-link" id="Senalamientos-tab" data-bs-toggle="tab" data-bs-target="#Senalamientos-tab-pane" type="button" role="tab" aria-controls="Senalamientos-tab-pane" aria-selected="false">Señalamientos</button>
          </li>
          <li class="nav-item content__CtrlProductos__tabs__link" role="presentation">
            <button class="nav-link" id="Complementos-tab" data-bs-toggle="tab" data-bs-target="#Complementos-tab-pane" type="button" role="tab" aria-controls="Complementos-tab-pane" aria-selected="false">Complementos Viales</button>
          </li>
          <li class="nav-item content__CtrlProductos__tabs__link" role="presentation">
            <button class="nav-link" id="Servicios-tab" data-bs-toggle="tab" data-bs-target="#Servicios-tab-pane" type="button" role="tab" aria-controls="Servicios-tab-pane" aria-selected="false">Servicios de diseño</button>
          </li>
        </ul>
        <div class="tab-content" id="myTabContent">
          <div class="tab-pane fade show active" id="Semaforos-tab-pane" role="tabpanel" aria-labelledby="Semaforos-tab" tabindex="0"> 
            <div class="content__CtrlProductos__tabs__item">
              <div class="content__CtrlProductos__tabs__item__header" id="Semaforos-header">
                <h3>Productos de Semáforos</h3>
                <div class="btn-group">
                  <button class="btn btn-warning" type="button">Subcategoría</button>
                  <button class="btn btn-warning dropdown-toggle dropdown-toggle-split" type="button" data-bs-toggle="dropdown" aria-expanded="false"><span class="visually-hidden">Toggle Dropdown</span></button>
                  <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="#">Semáforos Vehículares</a></li>
                    <li><a class="dropdown-item" href="#">Semáforos peatonales</a></li>
                    <li><a class="dropdown-item" href="#">Semáforos auditivos</a></li>
                    <li><a class="dropdown-item" href="#">Complementos de semáforos</a></li>
                  </ul>
                </div>
                <form class="d-flex" role="search">
                  <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search"/>
                  <button class="btn btn-dark" type="submit">Buscar</button>
                </form>
              </div>
              <div class="content__CtrlProductos__tabs__item__body">
                <div class="table-wrapper content__CtrlProductos__tabs__item__body__table">
                  <table class="table table-striped table-hover">
                    <thead> 
                      <tr>                 
                        <th>ID</th>
                        <th>Nombre</th>
                        <th>Detalles</th>
                        <th>Acciones</th>
                      </tr>
                    </thead>
                    <tbody> 
                      <tr> 
                        <td>01</td>
                        <td>Semáforo Vehicular una sección</td>
                        <td><a href="#verzualizarProductoModal" data-toggle="modal">ver más...  </a></td>
                        <td><a class="edit" href="#editProductoModal" data-toggle="modal"><i class="material-icons" data-toggle="tooltip" title="Edit">&#xE254;</i></a><a class="delete" href="#deleteProductoModal" data-toggle="modal"><i class="material-icons" data-toggle="tooltip" title="Delete">&#xE872;</i></a></td>
                      </tr>
                      <tr> 
                        <td>02</td>
                        <td>Semáforo Vehicular dos secciones</td>
                        <td> <a href="#verzualizarProductoModal" data-toggle="modal">ver más... </a></td>
                        <td><a class="edit" href="#editProductoModal" data-toggle="modal"><i class="material-icons" data-toggle="tooltip" title="Edit">&#xE254;</i></a><a class="delete" href="#deleteProductoModal" data-toggle="modal"><i class="material-icons" data-toggle="tooltip" title="Delete">&#xE872;</i></a></td>
                      </tr>
                    </tbody>
                  </table>
                </div>
              </div>
              <div class="content__CtrlProductos__tabs__item__footer">
                <nav aria-label="...">
                  <ul class="pagination">
                    <li class="page-item disabled"></li><a class="page-link">Previous</a>
                    <li class="page-item"></li><a class="page-link" href="#">1</a>
                    <li class="page-item active" aria-current="page"></li><a class="page-link" href="#">2</a>
                    <li class="page-item"></li><a class="page-link" href="#">3</a>
                    <li class="page-item"></li><a class="page-link" href="#">Next</a>
                  </ul>
                </nav>
              </div>
            </div>
          </div>
          <div class="tab-pane fade" id="Postes-tab-pane" role="tabpanel" aria-labelledby="Postes-tab" tabindex="0">
            <div class="content__CtrlProductos__tabs__item">
              <div class="content__CtrlProductos__tabs__item__header" id="Postes-header">
                <h3>Productos de Postes</h3>
                <div class="btn-group">
                  <button class="btn btn-warning" type="button">Subcategoría</button>
                  <button class="btn btn-warning dropdown-toggle dropdown-toggle-split" type="button" data-bs-toggle="dropdown" aria-expanded="false"><span class="visually-hidden">Toggle Dropdown</span></button>
                  <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="#">Semáforos Vehículares</a></li>
                    <li><a class="dropdown-item" href="#">Semáforos peatonales</a></li>
                    <li><a class="dropdown-item" href="#">Semáforos auditivos</a></li>
                    <li><a class="dropdown-item" href="#">Complementos de semáforos</a></li>
                  </ul>
                </div>
                <form class="d-flex" role="search">
                  <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search"/>
                  <button class="btn btn-dark" type="submit">Buscar</button>
                </form>
              </div>
              <div class="content__CtrlProductos__tabs__item__body">
                <div class="table-wrapper content__CtrlProductos__tabs__item__body__table">
                  <table class="table table-striped table-hover">
                    <thead> 
                      <tr>                 
                        <th>#</th>
                        <th>Subcategoria</th>
                        <th>Detalles</th>
                        <th>Acciones</th>
                      </tr>
                    </thead>
                    <tbody> 
                      <tr> 
                        <td>01</td>
                        <td>Semáforos Vehiculares</td>
                        <td><a href="#verzualizarProductoModal" data-toggle="modal">ver más...  </a></td>
                        <td><a class="edit" href="#editProductoModal" data-toggle="modal"><i class="material-icons" data-toggle="tooltip" title="Edit">&#xE254;</i></a><a class="delete" href="#deleteProductoModal" data-toggle="modal"><i class="material-icons" data-toggle="tooltip" title="Delete">&#xE872;</i></a></td>
                      </tr>
                      <tr> 
                        <td>02</td>
                        <td>Sémaforos peatonales</td>
                        <td> <a href="#verzualizarProductoModal" data-toggle="modal">ver más... </a></td>
                        <td><a class="edit" href="#editProductoModal" data-toggle="modal"><i class="material-icons" data-toggle="tooltip" title="Edit">&#xE254;</i></a><a class="delete" href="#deleteProductoModal" data-toggle="modal"><i class="material-icons" data-toggle="tooltip" title="Delete">&#xE872;</i></a></td>
                      </tr>
                    </tbody>
                  </table>
                </div>
              </div>
              <div class="content__CtrlProductos__tabs__item__footer"></div>
            </div>
          </div>
          <div class="tab-pane fade" id="Senalamientos-tab-pane" role="tabpanel" aria-labelledby="Senalamientos-tab" tabindex="0">
            <div class="content__CtrlProductos__tabs__item">
              <div class="content__CtrlProductos__tabs__item__header" id="Senalamientos-header">
                <h3>Subcategorías de Señalamientos</h3>
                <div class="btn-group">
                  <button class="btn btn-warning" type="button">Subcategoría</button>
                  <button class="btn btn-warning dropdown-toggle dropdown-toggle-split" type="button" data-bs-toggle="dropdown" aria-expanded="false"><span class="visually-hidden">Toggle Dropdown</span></button>
                  <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="#">Semáforos Vehículares</a></li>
                    <li><a class="dropdown-item" href="#">Semáforos peatonales</a></li>
                    <li><a class="dropdown-item" href="#">Semáforos auditivos</a></li>
                    <li><a class="dropdown-item" href="#">Complementos de semáforos</a></li>
                  </ul>
                </div>
                <form class="d-flex" role="search">
                  <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search"/>
                  <button class="btn btn-dark" type="submit">Buscar</button>
                </form>
              </div>
              <div class="content__CtrlProductos__tabs__item__body">
                <div class="table-wrapper content__CtrlProductos__tabs__item__body__table">
                  <table class="table table-striped table-hover">
                    <thead> 
                      <tr>                 
                        <th>#</th>
                        <th>Subcategoria</th>
                        <th>Detalles</th>
                        <th>Acciones</th>
                      </tr>
                    </thead>
                    <tbody> 
                      <tr> 
                        <td>01</td>
                        <td>Semáforos Vehiculares</td>
                        <td><a href="#verzualizarProductoModal" data-toggle="modal">ver más...  </a></td>
                        <td><a class="edit" href="#editProductoModal" data-toggle="modal"><i class="material-icons" data-toggle="tooltip" title="Edit">&#xE254;</i></a><a class="delete" href="#deleteProductoModal" data-toggle="modal"><i class="material-icons" data-toggle="tooltip" title="Delete">&#xE872;</i></a></td>
                      </tr>
                      <tr> 
                        <td>02</td>
                        <td>Sémaforos peatonales</td>
                        <td> <a href="#verzualizarProductoModal" data-toggle="modal">ver más... </a></td>
                        <td><a class="edit" href="#editProductoModal" data-toggle="modal"><i class="material-icons" data-toggle="tooltip" title="Edit">&#xE254;</i></a><a class="delete" href="#deleteProductoModal" data-toggle="modal"><i class="material-icons" data-toggle="tooltip" title="Delete">&#xE872;</i></a></td>
                      </tr>
                    </tbody>
                  </table>
                </div>
              </div>
              <div class="content__CtrlProductos__tabs__item__footer"></div>
            </div>
          </div>
          <div class="tab-pane fade" id="Complementos-tab-pane" role="tabpanel" aria-labelledby="Complementos-tab" tabindex="0">
            <div class="content__CtrlProductos__tabs__item">
              <div class="content__CtrlProductos__tabs__item__header" id="Complementos-header">
                <h3>Productos de Complementos Viales</h3>
                <div class="btn-group">
                  <button class="btn btn-warning" type="button">Subcategoría</button>
                  <button class="btn btn-warning dropdown-toggle dropdown-toggle-split" type="button" data-bs-toggle="dropdown" aria-expanded="false"><span class="visually-hidden">Toggle Dropdown</span></button>
                  <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="#">Semáforos Vehículares</a></li>
                    <li><a class="dropdown-item" href="#">Semáforos peatonales</a></li>
                    <li><a class="dropdown-item" href="#">Semáforos auditivos</a></li>
                    <li><a class="dropdown-item" href="#">Complementos de semáforos</a></li>
                  </ul>
                </div>
                <form class="d-flex" role="search">
                  <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search"/>
                  <button class="btn btn-dark" type="submit">Buscar</button>
                </form>
              </div>
              <div class="content__CtrlProductos__tabs__item__body">
                <div class="table-wrapper content__CtrlProductos__tabs__item__body__table">
                  <table class="table table-striped table-hover">
                    <thead> 
                      <tr>                 
                        <th>#</th>
                        <th>Subcategoria</th>
                        <th>Detalles</th>
                        <th>Acciones</th>
                      </tr>
                    </thead>
                    <tbody> 
                      <tr> 
                        <td>01</td>
                        <td>Semáforos Vehiculares</td>
                        <td><a href="#verzualizarProductoModal" data-toggle="modal">ver más...  </a></td>
                        <td><a class="edit" href="#editProductoModal" data-toggle="modal"><i class="material-icons" data-toggle="tooltip" title="Edit">&#xE254;</i></a><a class="delete" href="#deleteProductoModal" data-toggle="modal"><i class="material-icons" data-toggle="tooltip" title="Delete">&#xE872;</i></a></td>
                      </tr>
                      <tr> 
                        <td>02</td>
                        <td>Sémaforos peatonales</td>
                        <td> <a href="#verzualizarProductoModal" data-toggle="modal">ver más... </a></td>
                        <td><a class="edit" href="#editProductoModal" data-toggle="modal"><i class="material-icons" data-toggle="tooltip" title="Edit">&#xE254;</i></a><a class="delete" href="#deleteProductoModal" data-toggle="modal"><i class="material-icons" data-toggle="tooltip" title="Delete">&#xE872;</i></a></td>
                      </tr>
                    </tbody>
                  </table>
                </div>
              </div>
              <div class="content__CtrlProductos__tabs__item__footer"></div>
            </div>
          </div>
          <div class="tab-pane fade" id="Servicios-tab-pane" role="tabpanel" aria-labelledby="Servicios-tab" tabindex="0">
            <div class="content__CtrlProductos__tabs__item">
              <div class="content__CtrlProductos__tabs__item__header" id="Servicios-header">
                <h3>Productos de Servicios de Diseño</h3>
                <div class="btn-group">
                  <button class="btn btn-warning" type="button">Subcategoría</button>
                  <button class="btn btn-warning dropdown-toggle dropdown-toggle-split" type="button" data-bs-toggle="dropdown" aria-expanded="false"><span class="visually-hidden">Toggle Dropdown</span></button>
                  <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="#">Semáforos Vehículares</a></li>
                    <li><a class="dropdown-item" href="#">Semáforos peatonales</a></li>
                    <li><a class="dropdown-item" href="#">Semáforos auditivos</a></li>
                    <li><a class="dropdown-item" href="#">Complementos de semáforos</a></li>
                  </ul>
                </div>
                <form class="d-flex" role="search">
                  <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search"/>
                  <button class="btn btn-dark" type="submit">Buscar</button>
                </form>
              </div>
              <div class="content__CtrlProductos__tabs__item__body">
                <div class="table-wrapper content__CtrlProductos__tabs__item__body__table">
                  <table class="table table-striped table-hover">
                    <thead> 
                      <tr>                 
                        <th>#</th>
                        <th>Subcategoria</th>
                        <th>Detalles</th>
                        <th>Acciones</th>
                      </tr>
                    </thead>
                    <tbody> 
                      <tr> 
                        <td>01</td>
                        <td>Semáforos Vehiculares</td>
                        <td><a href="#verzualizarProductoModal" data-toggle="modal">ver más...  </a></td>
                        <td><a class="edit" href="#editProductoModal" data-toggle="modal"><i class="material-icons" data-toggle="tooltip" title="Edit">&#xE254;</i></a><a class="delete" href="#deleteProductoModal" data-toggle="modal"><i class="material-icons" data-toggle="tooltip" title="Delete">&#xE872;</i></a></td>
                      </tr>
                      <tr> 
                        <td>02</td>
                        <td>Sémaforos peatonales</td>
                        <td> <a href="#verzualizarProductoModal" data-toggle="modal">ver más... </a></td>
                        <td><a class="edit" href="#editProductoModal" data-toggle="modal"><i class="material-icons" data-toggle="tooltip" title="Edit">&#xE254;</i></a><a class="delete" href="#deleteProductoModal" data-toggle="modal"><i class="material-icons" data-toggle="tooltip" title="Delete">&#xE872;</i></a></td>
                      </tr>
                    </tbody>
                  </table>
                </div>
              </div>
              <div class="content__CtrlProductos__tabs__item__footer"></div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <?php 
   include './components/footer-admin.php'
   ?>