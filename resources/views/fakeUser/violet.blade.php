@extends ('layouts.template')
@section('menu')
@include('layouts.sidebar')
@endsection
@section('searchbar')
@include('layouts.searchbar')
@endsection
@section('content')
<div class="container-xxl flex-grow-1 container-p-y">
  <div class="row">
    <!-- User Sidebar -->
    <div class="col-xl-4 col-lg-5 col-md-5 order-1 order-md-0">
      <!-- User Card -->
      <div class="card mb-4">
        <div class="card-body">
          <div class="user-avatar-section">
            <div class=" d-flex align-items-center flex-column">
              <img class="img-fluid rounded mb-3 pt-1 mt-4" src="../../assets/img/avatars/15.png" height="100" width="100" alt="User avatar" />
              <div class="user-info text-center">
                <h4 class="mb-2">Violet Mendoza</h4>
                <span class="badge bg-label-secondary mt-1">Cliente</span>
              </div>
            </div>
          </div>
          <div class="d-flex justify-content-around flex-wrap mt-3 pt-3 pb-4 border-bottom">
            
          </div>
          <p class="mt-4 small text-uppercase text-muted">Detalles</p>
          <div class="info-container">
            <ul class="list-unstyled">
              <li class="mb-2 pt-1">
                <span class="fw-medium me-1">Correo:</span>
                <span>vafgot@vultukir.org</span>
              </li>
              <li class="mb-2 pt-1">
                <span class="fw-medium me-1">Contacto:</span>
                <span>(123) 456-7890</span>
              </li>
            </ul>
            <div class="d-flex justify-content-center">
              <a href="javascript:;" class="btn btn-primary me-3" data-bs-target="#editUser" data-bs-toggle="modal">Edit</a>
              <a href="javascript:;" class="btn btn-label-danger suspend-user">Eliminar</a>
               <div class="modal fade" id="editUser" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-simple modal-edit-user">
      <div class="modal-content p-3 p-md-5">
        <div class="modal-body">
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          <div class="text-center mb-4">
            <h3 class="mb-2">Editar Información de Usuario</h3>
          </div>
          <form id="editUserForm" class="row g-3" onsubmit="return false">
            <div class="col-12 col-md-6">
              <label class="form-label" for="modalEditUserFirstName">Nombre</label>
              <input type="text" id="modalEditUserFirstName" name="modalEditUserFirstName" class="form-control" placeholder="John" />
            </div>
            <div class="col-12 col-md-6">
              <label class="form-label" for="modalEditUserLastName">Apellido</label>
              <input type="text" id="modalEditUserLastName" name="modalEditUserLastName" class="form-control" placeholder="Doe" />
            </div>
            <div class="col-12 col-md-6">
              <label class="form-label" for="modalEditUserEmail">Correo Electrónico</label>
              <input type="text" id="modalEditUserEmail" name="modalEditUserEmail" class="form-control" placeholder="example@domain.com" />
            </div>
            <div class="col-12 col-md-6">
              <label class="form-label" for="modalEditUserEmail">Dirección</label>
              <input type="text" id="modalEditUserEmail" name="modalEditUserEmail" class="form-control" placeholder="Calle Falsa, 123, Spriengfield" />
            </div>
            <div class="col-12 col-md-6">
              <label class="form-label" for="modalEditUserEmail">Número Ext.</label>
              <input type="text" id="modalEditUserEmail" name="modalEditUserEmail" class="form-control" placeholder="123" />
            </div>
            <div class="col-12 col-md-6">
              <label class="form-label" for="modalEditUserEmail">Código Postal</label>
              <input type="text" id="modalEditUserEmail" name="modalEditUserEmail" class="form-control" placeholder="00000" />
            </div>
            <div class="col-12 col-md-6">
              <label class="form-label" for="modalEditUserPhone">Teléfono</label>
              <div class="input-group">
                <span class="input-group-text">US (+1)</span>
                <input type="text" id="modalEditUserPhone" name="modalEditUserPhone" class="form-control phone-number-mask" placeholder="202 555 0111" />
              </div>
            </div>
            <div class="col-12 text-center">
              <button type="submit" class="btn btn-primary me-sm-3 me-1">Guardar</button>
              <button type="reset" class="btn btn-label-secondary" data-bs-dismiss="modal" aria-label="Close">Cancelar</button>
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
      <!-- /User Card -->
      <!-- Plan Card -->

    </div>
    <!--/ User Sidebar -->


    <!-- User Content -->
    <div class="col-xl-8 col-lg-7 col-md-7 order-0 order-md-1">

      <div class="card mb-4">
        <div class="table-responsive mb-3">
          <table class="table datatable-invoice border-top">
            <thead>
              <tr>

                <th>Auto</th>
                <th>Tarifa</th>
                <th>Renta</th>
                <th>Devolución</th>
                <th>Dias</th>
                <th>Total</th>
              </tr>
            </thead>
            <tbody>

  <tr>
    <td>Toyota Corolla</td>
    <td>$50</td>
    <td>$300</td>
    <td>$50</td>
    <td>5</td>
    <td>$350</td>
  </tr>
  <tr>
    <td>Ford Focus</td>
    <td>$45</td>
    <td>$250</td>
    <td>$30</td>
    <td>4</td>
    <td>$280</td>
  </tr>
  <tr>
    <td>Chevrolet Malibu</td>
    <td>$55</td>
    <td>$400</td>
    <td>$70</td>
    <td>7</td>
    <td>$470</td>
  </tr>
  <tr>
    <td>Honda Civic</td>
    <td>$48</td>
    <td>$350</td>
    <td>$40</td>
    <td>3</td>
    <td>$390</td>
  </tr>
  <tr>
    <td>Nissan Altima</td>
    <td>$52</td>
    <td>$280</td>
    <td>$25</td>
    <td>6</td>
    <td>$305</td>
  </tr>
  <tr>
    <td>Hyundai Elantra</td>
    <td>$42</td>
    <td>$200</td>
    <td>$20</td>
    <td>2</td>
    <td>$220</td>
  </tr>
  <tr>
    <td>Subaru Impreza</td>
    <td>$47</td>
    <td>$320</td>
    <td>$45</td>
    <td>4</td>
    <td>$365</td>
  </tr>
  <tr>
    <td>Mazda3</td>
    <td>$50</td>
    <td>$300</td>
    <td>$30</td>
    <td>5</td>
    <td>$330</td>
  </tr>
  <tr>
    <td>Volkswagen Jetta</td>
    <td>$53</td>
    <td>$380</td>
    <td>$60</td>
    <td>6</td>
    <td>$440</td>
  </tr>
  <tr>
    <td>Chrysler 300</td>
    <td>$60</td>
    <td>$450</td>
    <td>$75</td>
    <td>8</td>
    <td>$525</td>
  </tr>
            </tbody>
          </table>
        </div>
      </div>

    </div>

  </div>

  <div class="modal fade" id="editUser" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-simple modal-edit-user">
      <div class="modal-content p-3 p-md-5">
        <div class="modal-body">
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          <div class="text-center mb-4">
            <h3 class="mb-2">Editar Información de Usuario</h3>
          </div>
          <form id="editUserForm" class="row g-3" onsubmit="return false">
            <div class="col-12 col-md-6">
              <label class="form-label" for="modalEditUserFirstName">Nombre</label>
              <input type="text" id="modalEditUserFirstName" name="modalEditUserFirstName" class="form-control" placeholder="John" />
            </div>
            <div class="col-12 col-md-6">
              <label class="form-label" for="modalEditUserLastName">Apellido</label>
              <input type="text" id="modalEditUserLastName" name="modalEditUserLastName" class="form-control" placeholder="Doe" />
            </div>
            <div class="col-12 col-md-6">
              <label class="form-label" for="modalEditUserEmail">Correo Electrónico</label>
              <input type="text" id="modalEditUserEmail" name="modalEditUserEmail" class="form-control" placeholder="example@domain.com" />
            </div>
            <div class="col-12 col-md-6">
              <label class="form-label" for="modalEditUserEmail">Dirección</label>
              <input type="text" id="modalEditUserEmail" name="modalEditUserEmail" class="form-control" placeholder="Calle Falsa, 123, Spriengfield" />
            </div>
            <div class="col-12 col-md-6">
              <label class="form-label" for="modalEditUserEmail">Número Ext.</label>
              <input type="text" id="modalEditUserEmail" name="modalEditUserEmail" class="form-control" placeholder="123" />
            </div>
            <div class="col-12 col-md-6">
              <label class="form-label" for="modalEditUserEmail">Código Postal</label>
              <input type="text" id="modalEditUserEmail" name="modalEditUserEmail" class="form-control" placeholder="00000" />
            </div>
            <div class="col-12 col-md-6">
              <label class="form-label" for="modalEditUserPhone">Teléfono</label>
              <div class="input-group">
                <span class="input-group-text">US (+1)</span>
                <input type="text" id="modalEditUserPhone" name="modalEditUserPhone" class="form-control phone-number-mask" placeholder="202 555 0111" />
              </div>
            </div>
            <div class="col-12 text-center">
              <button type="submit" class="btn btn-primary me-sm-3 me-1">Guardar</button>
              <button type="reset" class="btn btn-label-secondary" data-bs-dismiss="modal" aria-label="Close">Cancelar</button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>

</div>
<script src="../../assets/vendor/libs/jquery/jquery.js"></script>
<script src="../../assets/vendor/libs/popper/popper.js"></script>
<!-- <script src="../../assets/vendor/js/bootstrap.js"></script> -->
<script src="../../assets/vendor/libs/node-waves/node-waves.js"></script>
<script src="../../assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.js"></script>
<script src="../../assets/vendor/libs/hammer/hammer.js"></script>
<script src="../../assets/vendor/libs/i18n/i18n.js"></script>
<script src="../../assets/vendor/libs/typeahead-js/typeahead.js"></script>
<script src="../../assets/vendor/js/menu.js"></script>

<!-- endbuild -->


<!-- Vendors JS -->
<script src="../../assets/vendor/libs/moment/moment.js"></script>
<script src="../../assets/vendor/libs/datatables-bs5/datatables-bootstrap5.js"></script>
<script src="../../assets/vendor/libs/select2/select2.js"></script>
<script src="../../assets/vendor/libs/@form-validation/umd/bundle/popular.min.js"></script>
<script src="../../assets/vendor/libs/@form-validation/umd/plugin-bootstrap5/index.min.js"></script>
<script src="../../assets/vendor/libs/@form-validation/umd/plugin-auto-focus/index.min.js"></script>
<script src="../../assets/vendor/libs/cleavejs/cleave.js"></script>
<script src="../../assets/vendor/libs/cleavejs/cleave-phone.js"></script>

<!-- Main JS -->
<script src="../../assets/js/main.js"></script>


<!-- Page JS -->
<script src="../../assets/js/app-user-list.js"></script>

@endsection
