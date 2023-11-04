<?php 
include './components/head.php';
include './components/header.php';
include './components/control-menuAdmin.php';
?>
    <div class="content__CtrlCotizaciones">
      <h3 class="title">Solicitudes de cotizaciones</h3>
      <div class="content__CtrlCotizaciones__tabs">
        <ul class="nav nav-tabs" id="myTab" role="tablist">
          <li class="nav-item content__CtrlCotizaciones__tabs__link" role="presentation">
            <button class="nav-link active" id="pendientes-tab" data-bs-toggle="tab" data-bs-target="#pendientes-tab-pane" type="button" role="tab" aria-controls="pendientes-tab-pane" aria-selected="true">Pendientes</button>
          </li>
          <li class="nav-item content__CtrlCotizaciones__tabs__link" role="presentation">
            <button class="nav-link" id="atendidas-tab" data-bs-toggle="tab" data-bs-target="#atendidas-tab-pane" type="button" role="tab" aria-controls="atendidas-tab-pane" aria-selected="false">Atendidas</button>
          </li>
          <li class="nav-item content__CtrlCotizaciones__tabs__link" role="presentation">
            <button class="nav-link" id="canceladas-tab" data-bs-toggle="tab" data-bs-target="#canceladas-tab-pane" type="button" role="tab" aria-controls="canceladas-tab-pane" aria-selected="false">Canceladas</button>
          </li>
        </ul>
        <div class="tab-content" id="myTabContent">
          <div class="tab-pane fade show active" id="pendientes-tab-pane" role="tabpanel" aria-labelledby="pendientes-tab" tabindex="0"> 
            <div class="content__CtrlCotizaciones__tabs__item">
              <div class="content__CtrlCotizaciones__tabs__item__header" id="pendientes-header">
                <h3>Solicitudes Pendientes</h3>
                <form class="d-flex" role="search">
                  <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search"/>
                  <button class="btn btn-dark" type="submit">Buscar</button>
                </form>
              </div>
              <div class="content__CtrlCotizaciones__tabs__item__body">
                <div class="table-wrapper content__CtrlCotizaciones__tabs__item__body__table">
                  <table class="table table-striped table-hover">
                    <thead> 
                      <tr>                 
                        <th>#</th>
                        <th>Cliente</th>
                        <th>Fecha</th>
                        <th>Estatus</th>
                        <th>Detalles</th>
                        <th>Acciones</th>
                      </tr>
                    </thead>
                    <tbody> 
                      <tr> 
                        <td>01</td>
                        <td>Nombre cliente</td>
                        <td>23/octubre/2023</td>
                        <td>pendiente </td>
                        <td><a href="#verzualizarProductoModal" data-toggle="modal">ver más...  </a></td>
                        <td><a class="edit" href="#editProductoModal" data-toggle="modal"><i class="material-icons" data-toggle="tooltip" title="Edit">&#xE254;</i></a><a class="delete" href="#deleteProductoModal" data-toggle="modal"><i class="material-icons" data-toggle="tooltip" title="Delete">&#xE872;</i></a></td>
                      </tr>
                      <tr> 
                        <td>02</td>
                        <td>cliente 2</td>
                        <td>23/octubre/2023</td>
                        <td>cotizada</td>
                        <td> <a href="#verzualizarProductoModal" data-toggle="modal">ver más... </a></td>
                        <td><a class="edit" href="#editProductoModal" data-toggle="modal"><i class="material-icons" data-toggle="tooltip" title="Edit">&#xE254;</i></a><a class="delete" href="#deleteProductoModal" data-toggle="modal"><i class="material-icons" data-toggle="tooltip" title="Delete">&#xE872;</i></a></td>
                      </tr>
                    </tbody>
                  </table>
                </div>
              </div>
              <div class="content__CtrlCotizaciones__tabs__item__footer">
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
          <div class="tab-pane fade" id="atendidas-tab-pane" role="tabpanel" aria-labelledby="atendidas-tab" tabindex="0">
            <div class="content__CtrlCotizaciones__tabs__item">
              <div class="content__CtrlCotizaciones__tabs__item__header" id="atendidas-header">
                <h3>Solicitudes Atendidas</h3>
                <form class="d-flex" role="search">
                  <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search"/>
                  <button class="btn btn-dark" type="submit">Buscar</button>
                </form>
              </div>
              <div class="content__CtrlCotizaciones__tabs__item__body">
                <div class="table-wrapper content__CtrlCotizaciones__tabs__item__body__table">
                  <table class="table table-striped table-hover">
                    <thead> 
                      <tr>                 
                        <th>#</th>
                        <th>Cliente</th>
                        <th>Fecha</th>
                        <th>Estatus</th>
                        <th>Detalles</th>
                        <th>Acciones</th>
                      </tr>
                    </thead>
                    <tbody> 
                      <tr> 
                        <td>01</td>
                        <td>Nombre cliente</td>
                        <td>23/octubre/2023</td>
                        <td>pendiente </td>
                        <td><a href="#verzualizarProductoModal" data-toggle="modal">ver más...  </a></td>
                        <td><a class="edit" href="#editProductoModal" data-toggle="modal"><i class="material-icons" data-toggle="tooltip" title="Edit">&#xE254;</i></a><a class="delete" href="#deleteProductoModal" data-toggle="modal"><i class="material-icons" data-toggle="tooltip" title="Delete">&#xE872;</i></a></td>
                      </tr>
                      <tr> 
                        <td>02</td>
                        <td>cliente 2</td>
                        <td>23/octubre/2023</td>
                        <td>cotizada</td>
                        <td> <a href="#verzualizarProductoModal" data-toggle="modal">ver más... </a></td>
                        <td><a class="edit" href="#editProductoModal" data-toggle="modal"><i class="material-icons" data-toggle="tooltip" title="Edit">&#xE254;</i></a><a class="delete" href="#deleteProductoModal" data-toggle="modal"><i class="material-icons" data-toggle="tooltip" title="Delete">&#xE872;</i></a></td>
                      </tr>
                    </tbody>
                  </table>
                </div>
              </div>
              <div class="content__CtrlCotizaciones__tabs__item__footer"></div>
            </div>
          </div>
          <div class="tab-pane fade" id="canceladas-tab-pane" role="tabpanel" aria-labelledby="canceladas-tab" tabindex="0">
            <div class="content__CtrlCotizaciones__tabs__item">
              <div class="content__CtrlCotizaciones__tabs__item__header" id="canceladas-header">
                <h3>Solicitudes Canceladas</h3>
                <form class="d-flex" role="search">
                  <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search"/>
                  <button class="btn btn-dark" type="submit">Buscar</button>
                </form>
              </div>
              <div class="content__CtrlCotizaciones__tabs__item__body">
                <div class="table-wrapper content__CtrlCotizaciones__tabs__item__body__table">
                  <table class="table table-striped table-hover">
                    <thead> 
                      <tr>                 
                        <th>#</th>
                        <th>Cliente</th>
                        <th>Fecha</th>
                        <th>Estatus</th>
                        <th>Detalles</th>
                        <th>Acciones</th>
                      </tr>
                    </thead>
                    <tbody> 
                      <tr> 
                        <td>01</td>
                        <td>Nombre cliente</td>
                        <td>23/octubre/2023</td>
                        <td>pendiente </td>
                        <td><a href="#verzualizarProductoModal" data-toggle="modal">ver más...  </a></td>
                        <td><a class="edit" href="#editProductoModal" data-toggle="modal"><i class="material-icons" data-toggle="tooltip" title="Edit">&#xE254;</i></a><a class="delete" href="#deleteProductoModal" data-toggle="modal"><i class="material-icons" data-toggle="tooltip" title="Delete">&#xE872;</i></a></td>
                      </tr>
                      <tr> 
                        <td>02</td>
                        <td>cliente 2</td>
                        <td>23/octubre/2023</td>
                        <td>cotizada</td>
                        <td> <a href="#verzualizarProductoModal" data-toggle="modal">ver más... </a></td>
                        <td><a class="edit" href="#editProductoModal" data-toggle="modal"><i class="material-icons" data-toggle="tooltip" title="Edit">&#xE254;</i></a><a class="delete" href="#deleteProductoModal" data-toggle="modal"><i class="material-icons" data-toggle="tooltip" title="Delete">&#xE872;</i></a></td>
                      </tr>
                    </tbody>
                  </table>
                </div>
              </div>
              <div class="content__CtrlCotizaciones__tabs__item__footer"></div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <?php 
   include './components/footer-admin.php'
   ?>