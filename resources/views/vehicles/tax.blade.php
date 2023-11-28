@extends ('layouts.template')

@section('title', 'Tarifas')

@section('content')
    <div class="container-xxl flex-grow-1 container-p-y">
        <h4 class="py-3 mb-4">
            <span class="text-muted fw-light">Vehiculos /</span> Tarifas
        </h4>

        <!-- Tax List Table -->
        <div class="card">
            <div class="d-flex flex-row justify-content-between">
                <h5 class="card-header">Lista de tarifas</h5>
                <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#createVehicle">
                    Agregar nueva tarifa
                </button>
            </div>
            <div class="table-responsive text-nowrap">
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th># id</th>
                            <th>Vehiculo</th>
                            <th>Estado</th>
                            <th>Tarifa</th>
                            <th>Acciones</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <th scope="row">1</th>
                            <td>Table cell</td>
                            <td>Table cell</td>
                            <td>Table cell</td>
                            <td>
                                <div>
                                    <button type="button" class="btn p-0 dropdown-toggle hide-arrow"
                                        data-bs-toggle="dropdown"><i class="ti ti-dots-vertical"></i></button>
                                    <div class="dropdown-menu">
                                        <button type="button" class="dropdown-item" data-bs-toggle="modal"
                                            data-bs-target="#showVehicle">
                                            <i class="ti ti-eye me-1"></i>
                                            Ver
                                        </button>
                                        <button type="button" class="dropdown-item" data-bs-toggle="modal"
                                            data-bs-target="#editVehicle">
                                            <i class="ti ti-edit me-1"></i>
                                            Editar
                                        </button>
                                        <button type="button" class="dropdown-item" data-bs-toggle="modal"
                                            data-bs-target="#deleteVehicle">
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
                            <td>
                                <div>
                                    <button type="button" class="btn p-0 dropdown-toggle hide-arrow"
                                        data-bs-toggle="dropdown"><i class="ti ti-dots-vertical"></i></button>
                                    <div class="dropdown-menu">
                                        <button type="button" class="dropdown-item" data-bs-toggle="modal"
                                            data-bs-target="#showVehicle">
                                            <i class="ti ti-eye me-1"></i>
                                            Ver
                                        </button>
                                        <button type="button" class="dropdown-item" data-bs-toggle="modal"
                                            data-bs-target="#editVehicle">
                                            <i class="ti ti-edit me-1"></i>
                                            Editar
                                        </button>
                                        <button type="button" class="dropdown-item" data-bs-toggle="modal"
                                            data-bs-target="#deleteVehicle">
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
                            <td>
                                <div>
                                    <button type="button" class="btn p-0 dropdown-toggle hide-arrow"
                                        data-bs-toggle="dropdown"><i class="ti ti-dots-vertical"></i></button>
                                    <div class="dropdown-menu">
                                        <button type="button" class="dropdown-item" data-bs-toggle="modal"
                                            data-bs-target="#showVehicle">
                                            <i class="ti ti-eye me-1"></i>
                                            Ver
                                        </button>
                                        <button type="button" class="dropdown-item" data-bs-toggle="modal"
                                            data-bs-target="#editVehicle">
                                            <i class="ti ti-edit me-1"></i>
                                            Editar
                                        </button>
                                        <button type="button" class="dropdown-item" data-bs-toggle="modal"
                                            data-bs-target="#deleteVehicle">
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
                            <td>
                                <div>
                                    <button type="button" class="btn p-0 dropdown-toggle hide-arrow"
                                        data-bs-toggle="dropdown"><i class="ti ti-dots-vertical"></i></button>
                                    <div class="dropdown-menu">
                                        <button type="button" class="dropdown-item" data-bs-toggle="modal"
                                            data-bs-target="#showVehicle">
                                            <i class="ti ti-eye me-1"></i>
                                            Ver
                                        </button>
                                        <button type="button" class="dropdown-item" data-bs-toggle="modal"
                                            data-bs-target="#editVehicle">
                                            <i class="ti ti-edit me-1"></i>
                                            Editar
                                        </button>
                                        <button type="button" class="dropdown-item" data-bs-toggle="modal"
                                            data-bs-target="#deleteVehicle">
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
                            <td>
                                <div>
                                    <button type="button" class="btn p-0 dropdown-toggle hide-arrow"
                                        data-bs-toggle="dropdown"><i class="ti ti-dots-vertical"></i></button>
                                    <div class="dropdown-menu">
                                        <button type="button" class="dropdown-item" data-bs-toggle="modal"
                                            data-bs-target="#showVehicle">
                                            <i class="ti ti-eye me-1"></i>
                                            Ver
                                        </button>
                                        <button type="button" class="dropdown-item" data-bs-toggle="modal"
                                            data-bs-target="#editVehicle">
                                            <i class="ti ti-edit me-1"></i>
                                            Editar
                                        </button>
                                        <button type="button" class="dropdown-item" data-bs-toggle="modal"
                                            data-bs-target="#deleteVehicle">
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
                            <td>
                                <div>
                                    <button type="button" class="btn p-0 dropdown-toggle hide-arrow"
                                        data-bs-toggle="dropdown"><i class="ti ti-dots-vertical"></i></button>
                                    <div class="dropdown-menu">
                                        <button type="button" class="dropdown-item" data-bs-toggle="modal"
                                            data-bs-target="#showVehicle">
                                            <i class="ti ti-eye me-1"></i>
                                            Ver
                                        </button>
                                        <button type="button" class="dropdown-item" data-bs-toggle="modal"
                                            data-bs-target="#editVehicle">
                                            <i class="ti ti-edit me-1"></i>
                                            Editar
                                        </button>
                                        <button type="button" class="dropdown-item" data-bs-toggle="modal"
                                            data-bs-target="#deleteVehicle">
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
                            <td>
                                <div>
                                    <button type="button" class="btn p-0 dropdown-toggle hide-arrow"
                                        data-bs-toggle="dropdown"><i class="ti ti-dots-vertical"></i></button>
                                    <div class="dropdown-menu">
                                        <button type="button" class="dropdown-item" data-bs-toggle="modal"
                                            data-bs-target="#showVehicle">
                                            <i class="ti ti-eye me-1"></i>
                                            Ver
                                        </button>
                                        <button type="button" class="dropdown-item" data-bs-toggle="modal"
                                            data-bs-target="#editVehicle">
                                            <i class="ti ti-edit me-1"></i>
                                            Editar
                                        </button>
                                        <button type="button" class="dropdown-item" data-bs-toggle="modal"
                                            data-bs-target="#deleteVehicle">
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

        <!-- Create Tax Modal -->
        <div class="modal fade" id="createVehicle" tabindex="-1" aria-hidden="true">
            <div class="modal-dialog modal-lg modal-simple modal-edit-user">
                <div class="modal-content p-3 p-md-5">
                    <div class="modal-body">
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        <div class="text-center mb-4">
                            <h3 class="mb-2">Agregar tarifa</h3>
                        </div>
                        <form id="editModalForm" class="row g-3" onsubmit="return false">
                            <div class="col-12 col-md-6">
                                <label class="form-label" for="modalEditMarca">Vehiculo</label>
                                    <select id="modalEditMarca" name="modalEditMarca" class="select2 form-select"
                                    data-allow-clear="true">
                                    <option value="">Vehiculo</option>
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
                                <label class="form-label" for="modalEditTarifa">Tarifa</label>
                                <div class="input-group input-group-merge">
                                    <span class="input-group-text">$</span>
                                    <input type="number" class="form-control" placeholder="100"
                                    aria-label="Amount (to the nearest dollar)" />
                                    <span class="input-group-text">.00</span>
                                </div>
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
        <!--/ Create Vehicle Modal -->

        <!-- Show Vehicle Modal -->
        <div class="modal fade" id="showVehicle" tabindex="-1" aria-hidden="true">
            <div class="modal-dialog modal-lg modal-simple modal-show-vehicle">
                <div class="modal-content p-3 p-md-5">
                    <div class="modal-body">
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        <div class="text-center mb-4">
                            <h3 class="mb-2">Ver tarifa del vehiculo</h3>
                        </div>
                        <form id="showModalForm" class="row g-3" onsubmit="return false">
                            <div class="col-12 col-md-6">
                                <label class="form-label" for="modalShowModelo">Vehiculo</label>
                                <input type="text" id="modalEditModelo" name="modalEditModelo"
                                    class="form-control modal-edit-modelo-id" placeholder="Vehiculo" disabled />
                            </div>
                            <div class="col-12 col-md-6">
                                <label class="form-label" for="modalShowStatus">Estado</label>
                                <input type="text" id="modalShowStatus" name="modalShowStatus"
                                    class="form-control modal-edit-status-id" placeholder="Estado" disabled />
                            </div>
                            <div class="col-12 col-md-6">
                                <label class="form-label" for="modalEditTarifa">Tarifa</label>
                                <input type="text" id="modalEditTarifa" name="modalEditTarifa"
                                    class="form-control modal-edit-tax-id" placeholder="Ingresa la tarifa" disabled />
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
        <!--/ Show Vehicle Modal -->

        <!-- Edit Vehicle Modal -->
        <div class="modal fade" id="editVehicle" tabindex="-1" aria-hidden="true">
            <div class="modal-dialog modal-lg modal-simple modal-edit-user">
                <div class="modal-content p-3 p-md-5">
                    <div class="modal-body">
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        <div class="text-center mb-4">
                            <h3 class="mb-2">Editar tarifa del vehiculo</h3>
                        </div>
                        <form id="editModalForm" class="row g-3" onsubmit="return false">
                            <div class="d-flex flex-column justify-content-center align-items-center gap-5">
                                <div class="col-12 col-md-6">
                                    <label class="form-label" for="modalEditTarifa">Tarifa</label>
                                    <div class="input-group input-group-merge">
                                        <span class="input-group-text">$</span>
                                        <input type="number" class="form-control" placeholder="100"
                                            aria-label="Amount (to the nearest dollar)" />
                                        <span class="input-group-text">.00</span>
                                    </div>
                                </div>
                                <div class="col-12 text-center">
                                    <button type="reset" class="btn btn-label-secondary" data-bs-dismiss="modal"
                                        aria-label="Close">Cancelar</button>
                                    <button type="submit" class="btn btn-primary me-sm-3 me-1">Guardar Cambios</button>
                                </div>

                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!--/ Edit Vehicle Modal -->

        <!-- Delete Vehicle Modal -->
        <div class="modal fade" id="deleteVehicle" tabindex="-1" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered1 modal-simple modal-add-new-cc">
                <div class="modal-content p-3 p-md-5">
                    <div class="modal-body">
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        <div class="text-center mb-4">
                            <h3 class="mb-2">¿Deseas eliminar la tarifa?</h3>
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
        <!--/ Delete Vehicle Modal -->

    </div>
@endsection
