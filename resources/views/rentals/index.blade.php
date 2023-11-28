@extends ('layouts.template')

@section('title', 'Historial de renta de vehiculos')

@section('content')
    <div class="container-xxl flex-grow-1 container-p-y">
        <h4 class="py-3 mb-4">
            <span class="text-muted fw-light">Rentas /</span> Lista de rentas de vehiculos
        </h4>

        <!-- Vehicle List Table -->
        <div class="card">
            <div class="d-flex flex-row justify-content-between">
                <h5 class="card-header">Lista de rentas</h5>
                <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#createRental">
                    Rentar vehículo
                </button>
            </div>
            <div class="table-responsive text-nowrap">
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th># id</th>
                            <th>Cliente</th>
                            <th>Vehiculo</th>
                            <th>Fecha de prestamo</th>
                            <th>Fecha de entrega</th>
                            <th>Dias</th>
                            <th>Tarifa</th>
                            <th>Método de pago</th>
                            <th>Total</th>
                            <th>Estado</th>
                            <th>Acciones</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <th scope="row">1</th>
                            <td>Table cell</td>
                            <td>Table cell</td>
                            <td>Table cell</td>
                            <td>Table cell</td>
                            <td>Table cell</td>
                            <td>Table cell</td>
                            <td>Table cell</td>
                            <td>Table cell</td>
                            <td>Table cell</td>
                            <td>
                                <div>
                                    <button type="button" class="btn p-0 dropdown-toggle hide-arrow"
                                        data-bs-toggle="dropdown"><i class="ti ti-dots-vertical"></i></button>
                                    <div class="dropdown-menu">
                                        <button type="button" class="dropdown-item" data-bs-toggle="modal"
                                            data-bs-target="#showRental">
                                            <i class="ti ti-eye me-1"></i>
                                            Ver
                                        </button>
                                        <button type="button" class="dropdown-item" data-bs-toggle="modal"
                                            data-bs-target="#editRental">
                                            <i class="ti ti-edit me-1"></i>
                                            Editar
                                        </button>
                                        <button type="button" class="dropdown-item" data-bs-toggle="modal"
                                            data-bs-target="#deleteRental">
                                            <i class="ti ti-trash me-1"></i>
                                            Eliminar
                                        </button>
                                    </div>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <th scope="row">2</th>
                            <td>Table cell</td>
                            <td>Table cell</td>
                            <td>Table cell</td>
                            <td>Table cell</td>
                            <td>Table cell</td>
                            <td>Table cell</td>
                            <td>Table cell</td>
                            <td>Table cell</td>
                            <td>Table cell</td>
                            <td>
                                <div>
                                    <button type="button" class="btn p-0 dropdown-toggle hide-arrow"
                                        data-bs-toggle="dropdown"><i class="ti ti-dots-vertical"></i></button>
                                    <div class="dropdown-menu">
                                        <button type="button" class="dropdown-item" data-bs-toggle="modal"
                                            data-bs-target="#showRental">
                                            <i class="ti ti-eye me-1"></i>
                                            Ver
                                        </button>
                                        <button type="button" class="dropdown-item" data-bs-toggle="modal"
                                            data-bs-target="#editRental">
                                            <i class="ti ti-edit me-1"></i>
                                            Editar
                                        </button>
                                        <button type="button" class="dropdown-item" data-bs-toggle="modal"
                                            data-bs-target="#deleteRental">
                                            <i class="ti ti-trash me-1"></i>
                                            Eliminar
                                        </button>
                                    </div>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <th scope="row">3</th>
                            <td>Table cell</td>
                            <td>Table cell</td>
                            <td>Table cell</td>
                            <td>Table cell</td>
                            <td>Table cell</td>
                            <td>Table cell</td>
                            <td>Table cell</td>
                            <td>Table cell</td>
                            <td>Table cell</td>
                            <td>
                                <div>
                                    <button type="button" class="btn p-0 dropdown-toggle hide-arrow"
                                        data-bs-toggle="dropdown"><i class="ti ti-dots-vertical"></i></button>
                                    <div class="dropdown-menu">
                                        <button type="button" class="dropdown-item" data-bs-toggle="modal"
                                            data-bs-target="#showRental">
                                            <i class="ti ti-eye me-1"></i>
                                            Ver
                                        </button>
                                        <button type="button" class="dropdown-item" data-bs-toggle="modal"
                                            data-bs-target="#editRental">
                                            <i class="ti ti-edit me-1"></i>
                                            Editar
                                        </button>
                                        <button type="button" class="dropdown-item" data-bs-toggle="modal"
                                            data-bs-target="#deleteRental">
                                            <i class="ti ti-trash me-1"></i>
                                            Eliminar
                                        </button>
                                    </div>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <th scope="row">4</th>
                            <td>Table cell</td>
                            <td>Table cell</td>
                            <td>Table cell</td>
                            <td>Table cell</td>
                            <td>Table cell</td>
                            <td>Table cell</td>
                            <td>Table cell</td>
                            <td>Table cell</td>
                            <td>Table cell</td>
                            <td>
                                <div>
                                    <button type="button" class="btn p-0 dropdown-toggle hide-arrow"
                                        data-bs-toggle="dropdown"><i class="ti ti-dots-vertical"></i></button>
                                    <div class="dropdown-menu">
                                        <button type="button" class="dropdown-item" data-bs-toggle="modal"
                                            data-bs-target="#showRental">
                                            <i class="ti ti-eye me-1"></i>
                                            Ver
                                        </button>
                                        <button type="button" class="dropdown-item" data-bs-toggle="modal"
                                            data-bs-target="#editRental">
                                            <i class="ti ti-edit me-1"></i>
                                            Editar
                                        </button>
                                        <button type="button" class="dropdown-item" data-bs-toggle="modal"
                                            data-bs-target="#deleteRental">
                                            <i class="ti ti-trash me-1"></i>
                                            Eliminar
                                        </button>
                                    </div>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <th scope="row">5</th>
                            <td>Table cell</td>
                            <td>Table cell</td>
                            <td>Table cell</td>
                            <td>Table cell</td>
                            <td>Table cell</td>
                            <td>Table cell</td>
                            <td>Table cell</td>
                            <td>Table cell</td>
                            <td>Table cell</td>
                            <td>
                                <div>
                                    <button type="button" class="btn p-0 dropdown-toggle hide-arrow"
                                        data-bs-toggle="dropdown"><i class="ti ti-dots-vertical"></i></button>
                                    <div class="dropdown-menu">
                                        <button type="button" class="dropdown-item" data-bs-toggle="modal"
                                            data-bs-target="#showRental">
                                            <i class="ti ti-eye me-1"></i>
                                            Ver
                                        </button>
                                        <button type="button" class="dropdown-item" data-bs-toggle="modal"
                                            data-bs-target="#editRental">
                                            <i class="ti ti-edit me-1"></i>
                                            Editar
                                        </button>
                                        <button type="button" class="dropdown-item" data-bs-toggle="modal"
                                            data-bs-target="#deleteRental">
                                            <i class="ti ti-trash me-1"></i>
                                            Eliminar
                                        </button>
                                    </div>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <th scope="row">6</th>
                            <td>Table cell</td>
                            <td>Table cell</td>
                            <td>Table cell</td>
                            <td>Table cell</td>
                            <td>Table cell</td>
                            <td>Table cell</td>
                            <td>Table cell</td>
                            <td>Table cell</td>
                            <td>Table cell</td>
                            <td>
                                <div>
                                    <button type="button" class="btn p-0 dropdown-toggle hide-arrow"
                                        data-bs-toggle="dropdown"><i class="ti ti-dots-vertical"></i></button>
                                    <div class="dropdown-menu">
                                        <button type="button" class="dropdown-item" data-bs-toggle="modal"
                                            data-bs-target="#showRental">
                                            <i class="ti ti-eye me-1"></i>
                                            Ver
                                        </button>
                                        <button type="button" class="dropdown-item" data-bs-toggle="modal"
                                            data-bs-target="#editRental">
                                            <i class="ti ti-edit me-1"></i>
                                            Editar
                                        </button>
                                        <button type="button" class="dropdown-item" data-bs-toggle="modal"
                                            data-bs-target="#deleteRental">
                                            <i class="ti ti-trash me-1"></i>
                                            Eliminar
                                        </button>
                                    </div>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <th scope="row">7</th>
                            <td>Table cell</td>
                            <td>Table cell</td>
                            <td>Table cell</td>
                            <td>Table cell</td>
                            <td>Table cell</td>
                            <td>Table cell</td>
                            <td>Table cell</td>
                            <td>Table cell</td>
                            <td>Table cell</td>
                            <td>
                                <div>
                                    <button type="button" class="btn p-0 dropdown-toggle hide-arrow"
                                        data-bs-toggle="dropdown"><i class="ti ti-dots-vertical"></i></button>
                                    <div class="dropdown-menu">
                                        <button type="button" class="dropdown-item" data-bs-toggle="modal"
                                            data-bs-target="#showRental">
                                            <i class="ti ti-eye me-1"></i>
                                            Ver
                                        </button>
                                        <button type="button" class="dropdown-item" data-bs-toggle="modal"
                                            data-bs-target="#editRental">
                                            <i class="ti ti-edit me-1"></i>
                                            Editar
                                        </button>
                                        <button type="button" class="dropdown-item" data-bs-toggle="modal"
                                            data-bs-target="#deleteRental">
                                            <i class="ti ti-trash me-1"></i>
                                            Eliminar
                                        </button>
                                    </div>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <th scope="row">8</th>
                            <td>Table cell</td>
                            <td>Table cell</td>
                            <td>Table cell</td>
                            <td>Table cell</td>
                            <td>Table cell</td>
                            <td>Table cell</td>
                            <td>Table cell</td>
                            <td>Table cell</td>
                            <td>Table cell</td>
                            <td>
                                <div>
                                    <button type="button" class="btn p-0 dropdown-toggle hide-arrow"
                                        data-bs-toggle="dropdown"><i class="ti ti-dots-vertical"></i></button>
                                    <div class="dropdown-menu">
                                        <button type="button" class="dropdown-item" data-bs-toggle="modal"
                                            data-bs-target="#showRental">
                                            <i class="ti ti-eye me-1"></i>
                                            Ver
                                        </button>
                                        <button type="button" class="dropdown-item" data-bs-toggle="modal"
                                            data-bs-target="#editRental">
                                            <i class="ti ti-edit me-1"></i>
                                            Editar
                                        </button>
                                        <button type="button" class="dropdown-item" data-bs-toggle="modal"
                                            data-bs-target="#deleteRental">
                                            <i class="ti ti-trash me-1"></i>
                                            Eliminar
                                        </button>
                                    </div>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <th scope="row">9</th>
                            <td>Table cell</td>
                            <td>Table cell</td>
                            <td>Table cell</td>
                            <td>Table cell</td>
                            <td>Table cell</td>
                            <td>Table cell</td>
                            <td>Table cell</td>
                            <td>Table cell</td>
                            <td>Table cell</td>
                            <td>
                                <div>
                                    <button type="button" class="btn p-0 dropdown-toggle hide-arrow"
                                        data-bs-toggle="dropdown"><i class="ti ti-dots-vertical"></i></button>
                                    <div class="dropdown-menu">
                                        <button type="button" class="dropdown-item" data-bs-toggle="modal"
                                            data-bs-target="#showRental">
                                            <i class="ti ti-eye me-1"></i>
                                            Ver
                                        </button>
                                        <button type="button" class="dropdown-item" data-bs-toggle="modal"
                                            data-bs-target="#editRental">
                                            <i class="ti ti-edit me-1"></i>
                                            Editar
                                        </button>
                                        <button type="button" class="dropdown-item" data-bs-toggle="modal"
                                            data-bs-target="#deleteRental">
                                            <i class="ti ti-trash me-1"></i>
                                            Eliminar
                                        </button>
                                    </div>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <th scope="row">10</th>
                            <td>Table cell</td>
                            <td>Table cell</td>
                            <td>Table cell</td>
                            <td>Table cell</td>
                            <td>Table cell</td>
                            <td>Table cell</td>
                            <td>Table cell</td>
                            <td>Table cell</td>
                            <td>Table cell</td>
                            <td>
                                <div>
                                    <button type="button" class="btn p-0 dropdown-toggle hide-arrow"
                                        data-bs-toggle="dropdown"><i class="ti ti-dots-vertical"></i></button>
                                    <div class="dropdown-menu">
                                        <button type="button" class="dropdown-item" data-bs-toggle="modal"
                                            data-bs-target="#showRental">
                                            <i class="ti ti-eye me-1"></i>
                                            Ver
                                        </button>
                                        <button type="button" class="dropdown-item" data-bs-toggle="modal"
                                            data-bs-target="#editRental">
                                            <i class="ti ti-edit me-1"></i>
                                            Editar
                                        </button>
                                        <button type="button" class="dropdown-item" data-bs-toggle="modal"
                                            data-bs-target="#deleteRental">
                                            <i class="ti ti-trash me-1"></i>
                                            Eliminar
                                        </button>
                                    </div>
                                </div>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>

        <!-- Create Rental Modal -->
        <div class="modal fade" id="createRental" tabindex="-1" aria-hidden="true">
            <div class="modal-dialog modal-lg modal-simple modal-edit-user">
                <div class="modal-content p-3 p-md-5">
                    <div class="modal-body">
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        <div class="text-center mb-4">
                            <h3 class="mb-2">Crear renta de vehículo</h3>
                        </div>
                        <form id="editModalForm" class="row g-3" onsubmit="return false">
                            <div class="col-12 col-md-6">
                                <label class="form-label" for="modalEditMarca">Cliente</label>
                                <select id="modalEditMarca" name="modalEditMarca" class="select2 form-select"
                                    data-allow-clear="true">
                                    <option value="">Cliente</option>
                                    <option value="ty">Toyota</option>
                                    <option value="hnda">Honda</option>
                                    <option value="ford">Ford</option>
                                    <option value="chv">Chevrolet</option>
                                    <option value="nis">Nissan</option>
                                    <option value="bmw">BMW</option>
                                    <option value="mer">Mercedes-Benz</option>
                                    <option value="audi">Audi</option>
                                    <option value="volk">Volkswagen</option>
                                    <option value="tesla">Tesla</option>
                                </select>
                            </div>
                            <div class="col-12 col-md-6">
                                <label class="form-label" for="modalEditMarca">Vehículo</label>
                                <select id="modalEditMarca" name="modalEditMarca" class="select2 form-select"
                                    data-allow-clear="true">
                                    <option value="">Vehículo</option>
                                    <option value="ty">Toyota</option>
                                    <option value="hnda">Honda</option>
                                    <option value="ford">Ford</option>
                                    <option value="chv">Chevrolet</option>
                                    <option value="nis">Nissan</option>
                                    <option value="bmw">BMW</option>
                                    <option value="mer">Mercedes-Benz</option>
                                    <option value="audi">Audi</option>
                                    <option value="volk">Volkswagen</option>
                                    <option value="tesla">Tesla</option>
                                </select>
                            </div>
                            <div class="col-12 col-md-6">
                                <label class="form-label" for="modalShowCategory">Fecha de prestamo</label>
                                <input type="text" id="modalEditCategory" name="modalEditCategory"
                                    class="form-control modal-edit-category-id" placeholder="Fecha de prestamo" />
                            </div>
                            <div class="col-12 col-md-6">
                                <label class="form-label" for="modalShowCategory">Fecha de entrega</label>
                                <input type="text" id="modalEditCategory" name="modalEditCategory"
                                    class="form-control modal-edit-category-id" placeholder="Fecha de entrega" />
                            </div>
                            <div class="col-12 col-md-6">
                                <label class="form-label" for="modalShowStatus">Días</label>
                                <input type="text" id="modalShowStatus" name="modalShowStatus"
                                    class="form-control modal-edit-status-id" placeholder="Días" />
                            </div>
                            <div class="col-12 col-md-6">
                                <label class="form-label" for="modalEditTarifa">Tarifa</label>
                                <div class="input-group input-group-merge">
                                    <span class="input-group-text">$</span>
                                    <input type="number" class="form-control" placeholder="100"
                                        aria-label="Amount (to the nearest dollar)" />
                                    <span class="input-group-text">.00</span>
                                </div>
                            </div>
                            <div class="col-12 col-md-6">
                                <label class="form-label" for="modalEditStatus">Método de pago</label>
                                <select id="modalEditStatus" name="modalEditStatus" class="select2 form-select"
                                    aria-label="Default select example">
                                    <option selected>Método de pago</option>
                                    <option value="1">Efectivo</option>
                                    <option value="2">Transferencia</option>
                                    <option value="3">Tarjeta de crédito</option>
                                </select>
                            </div>
                            <div class="col-12 col-md-6">
                                <label class="form-label" for="modalEditTarifa">Total</label>
                                <input type="number" id="modalEditTarifa" name="modalEditTarifa"
                                    class="form-control modal-edit-tax-id" placeholder="Total" />
                            </div>
                            <div class="col-12 text-center d-flex gap-2 justify-content-center">
                                <button type="reset" class="btn btn-label-secondary" data-bs-dismiss="modal"
                                    aria-label="Close">Cancelar</button>
                                <button type="submit" class="btn btn-primary me-sm-3 me-1">Guardar</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!--/ Create Rental Modal -->

        <!-- Show Rental Modal -->
        <div class="modal fade" id="showRental" tabindex="-1" aria-hidden="true">
            <div class="modal-dialog modal-lg modal-simple modal-show-vehicle">
                <div class="modal-content p-3 p-md-5">
                    <div class="modal-body">
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        <div class="text-center mb-4">
                            <h3 class="mb-2">Ver información de la renta</h3>
                        </div>
                        <form id="showModalForm" class="row g-3" onsubmit="return false">
                            <div class="col-12 col-md-6">
                                <label class="form-label" for="modalShowMarca">Cliente</label>
                                <input type="text" id="modalEditMarca" name="modalEditMarca"
                                    class="form-control modal-edit-marca-id" placeholder="01 - Fernando de La Barrera"
                                    disabled />
                            </div>
                            <div class="col-12 col-md-6">
                                <label class="form-label" for="modalShowModelo">Vehiculo</label>
                                <input type="text" id="modalEditModelo" name="modalEditModelo"
                                    class="form-control modal-edit-modelo-id" placeholder="Vehiculo" disabled />
                            </div>
                            <div class="col-12 col-md-6">
                                <label class="form-label" for="modalShowCategory">Fecha de prestamo</label>
                                <input type="text" id="modalEditCategory" name="modalEditCategory"
                                    class="form-control modal-edit-category-id" placeholder="Fecha de prestamo"
                                    disabled />
                            </div>
                            <div class="col-12 col-md-6">
                                <label class="form-label" for="modalShowCategory">Fecha de entrega</label>
                                <input type="text" id="modalEditCategory" name="modalEditCategory"
                                    class="form-control modal-edit-category-id" placeholder="Fecha de entrega" disabled />
                            </div>
                            <div class="col-12 col-md-6">
                                <label class="form-label" for="modalShowStatus">Días</label>
                                <input type="text" id="modalShowStatus" name="modalShowStatus"
                                    class="form-control modal-edit-status-id" placeholder="Días" disabled />
                            </div>
                            <div class="col-12 col-md-6">
                                <label class="form-label" for="modalEditTarifa">Tarifa</label>
                                <input type="text" id="modalEditTarifa" name="modalEditTarifa"
                                    class="form-control modal-edit-tax-id" placeholder="Ingresa la tarifa" disabled />
                            </div>
                            <div class="col-12 col-md-6">
                                <label class="form-label" for="modalEditTarifa">Método de pago</label>
                                <input type="text" id="modalEditTarifa" name="modalEditTarifa"
                                    class="form-control modal-edit-tax-id" placeholder="Método de pago" disabled />
                            </div>
                            <div class="col-12 col-md-6">
                                <label class="form-label" for="modalEditTarifa">Total</label>
                                <input type="text" id="modalEditTarifa" name="modalEditTarifa"
                                    class="form-control modal-edit-tax-id" placeholder="Total" disabled />
                            </div>
                            <div class="col-12 col-md-6">
                                <label class="form-label" for="modalEditTarifa">Estado</label>
                                <input type="text" id="modalEditTarifa" name="modalEditTarifa"
                                    class="form-control modal-edit-tax-id" placeholder="Estado" disabled />
                            </div>
                            <div class="col-12 text-center">
                                <button type="reset" class="btn btn-label-secondary" data-bs-dismiss="modal"
                                    aria-label="Close">Cancelar</button>
                                <button type="submit" class="btn btn-primary me-sm-3 me-1">Aceptar</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!--/ Show Rental Modal -->

        <!-- Edit Rental Modal -->
        <div class="modal fade" id="editRental" tabindex="-1" aria-hidden="true">
            <div class="modal-dialog modal-lg modal-simple modal-edit-user">
                <div class="modal-content p-3 p-md-5">
                    <div class="modal-body">
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        <div class="text-center mb-4">
                            <h3 class="mb-2">Editar información de la renta</h3>
                        </div>
                        <form id="editModalForm" class="row g-3" onsubmit="return false">
                            <div class="col-12 col-md-6">
                                <label class="form-label" for="modalEditMarca">Cliente</label>
                                <select id="modalEditMarca" name="modalEditMarca" class="select2 form-select"
                                    data-allow-clear="true">
                                    <option value="">Cliente</option>
                                    <option value="ty">Toyota</option>
                                    <option value="hnda">Honda</option>
                                    <option value="ford">Ford</option>
                                    <option value="chv">Chevrolet</option>
                                    <option value="nis">Nissan</option>
                                    <option value="bmw">BMW</option>
                                    <option value="mer">Mercedes-Benz</option>
                                    <option value="audi">Audi</option>
                                    <option value="volk">Volkswagen</option>
                                    <option value="tesla">Tesla</option>
                                </select>
                            </div>
                            <div class="col-12 col-md-6">
                                <label class="form-label" for="modalEditMarca">Vehículo</label>
                                <select id="modalEditMarca" name="modalEditMarca" class="select2 form-select"
                                    data-allow-clear="true">
                                    <option value="">Vehículo</option>
                                    <option value="ty">Toyota</option>
                                    <option value="hnda">Honda</option>
                                    <option value="ford">Ford</option>
                                    <option value="chv">Chevrolet</option>
                                    <option value="nis">Nissan</option>
                                    <option value="bmw">BMW</option>
                                    <option value="mer">Mercedes-Benz</option>
                                    <option value="audi">Audi</option>
                                    <option value="volk">Volkswagen</option>
                                    <option value="tesla">Tesla</option>
                                </select>
                            </div>
                            <div class="col-12 col-md-6">
                                <label class="form-label" for="modalShowCategory">Fecha de prestamo</label>
                                <input type="text" id="modalEditCategory" name="modalEditCategory"
                                    class="form-control modal-edit-category-id" placeholder="Fecha de prestamo" />
                            </div>
                            <div class="col-12 col-md-6">
                                <label class="form-label" for="modalShowCategory">Fecha de entrega</label>
                                <input type="text" id="modalEditCategory" name="modalEditCategory"
                                    class="form-control modal-edit-category-id" placeholder="Fecha de entrega" />
                            </div>
                            <div class="col-12 col-md-6">
                                <label class="form-label" for="modalShowStatus">Días</label>
                                <input type="text" id="modalShowStatus" name="modalShowStatus"
                                    class="form-control modal-edit-status-id" placeholder="Días" />
                            </div>
                            <div class="col-12 col-md-6">
                                <label class="form-label" for="modalEditTarifa">Tarifa</label>
                                <div class="input-group input-group-merge">
                                    <span class="input-group-text">$</span>
                                    <input type="number" class="form-control" placeholder="100"
                                        aria-label="Amount (to the nearest dollar)" />
                                    <span class="input-group-text">.00</span>
                                </div>
                            </div>
                            <div class="col-12 col-md-6">
                                <label class="form-label" for="modalEditStatus">Método de pago</label>
                                <select id="modalEditStatus" name="modalEditStatus" class="select2 form-select"
                                    aria-label="Default select example">
                                    <option selected>Método de pago</option>
                                    <option value="1">Efectivo</option>
                                    <option value="2">Transferencia</option>
                                    <option value="3">Tarjeta de crédito</option>
                                </select>
                            </div>
                            <div class="col-12 col-md-6">
                                <label class="form-label" for="modalEditTarifa">Total</label>
                                <input type="number" id="modalEditTarifa" name="modalEditTarifa"
                                    class="form-control modal-edit-tax-id" placeholder="Total" />
                            </div>
                            <div class="col-12 col-md-6">
                                <label class="form-label" for="modalEditStatus">Estado</label>
                                <select id="modalEditStatus" name="modalEditStatus" class="select2 form-select"
                                    aria-label="Default select example">
                                    <option selected>Estado</option>
                                    <option value="1">Activo</option>
                                    <option value="2">Inactivo</option>
                                    <option value="3">Suspendido</option>
                                </select>
                            </div>
                            <div class="col-12 text-center d-flex gap-2 justify-content-center">
                                <button type="reset" class="btn btn-label-secondary" data-bs-dismiss="modal"
                                    aria-label="Close">Cancelar</button>
                                <button type="submit" class="btn btn-primary me-sm-3 me-1">Guardar cambios</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!--/ Edit Rental Modal -->

        <!-- Delete Rental Modal -->
        <div class="modal fade" id="deleteRental" tabindex="-1" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered1 modal-simple modal-add-new-cc">
                <div class="modal-content p-3 p-md-5">
                    <div class="modal-body">
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        <div class="text-center mb-4">
                            <h3 class="mb-2">¿Seguro que deseas eliminar la renta?</h3>
                        </div>
                        <form id="addNewCCForm" class="row g-3" onsubmit="return false">
                            <input type="hidden">
                            <div class="col-12 text-center">
                                <button type="reset" class="btn btn-label-secondary btn-reset" data-bs-dismiss="modal"
                                    aria-label="Close">Cancelar</button>
                                <button type="submit" class="btn btn-primary me-sm-3 me-1">Aceptar</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!--/ Delete Rental Modal -->

    </div>
@endsection
