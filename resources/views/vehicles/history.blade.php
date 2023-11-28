@extends ('layouts.template')

@section('title', 'Historial de renta de vehiculos')

@section('content')
    <div class="container-xxl flex-grow-1 container-p-y">
        <h4 class="py-3 mb-4">
            <span class="text-muted fw-light">Vehiculos /</span> Lista de rentas de vehiculos
        </h4>

        <!-- Vehicle List Table -->
        <div class="card">
            <h5 class="card-header">Historial de rentas de vehiculos</h5>
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
{{--                                         <button type="button" class="dropdown-item" data-bs-toggle="modal"
                                            data-bs-target="#editVehicle">
                                            <i class="ti ti-edit me-1"></i>
                                            Editar
                                        </button>
                                        <button type="button" class="dropdown-item" data-bs-toggle="modal"
                                            data-bs-target="#deleteVehicle">
                                            <i class="ti ti-trash me-1"></i>
                                            Eliminar
                                        </button> --}}
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
{{--                                         <button type="button" class="dropdown-item" data-bs-toggle="modal"
                                            data-bs-target="#editVehicle">
                                            <i class="ti ti-edit me-1"></i>
                                            Editar
                                        </button>
                                        <button type="button" class="dropdown-item" data-bs-toggle="modal"
                                            data-bs-target="#deleteVehicle">
                                            <i class="ti ti-trash me-1"></i>
                                            Eliminar
                                        </button> --}}
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
{{--                                         <button type="button" class="dropdown-item" data-bs-toggle="modal"
                                            data-bs-target="#editVehicle">
                                            <i class="ti ti-edit me-1"></i>
                                            Editar
                                        </button>
                                        <button type="button" class="dropdown-item" data-bs-toggle="modal"
                                            data-bs-target="#deleteVehicle">
                                            <i class="ti ti-trash me-1"></i>
                                            Eliminar
                                        </button> --}}
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
{{--                                         <button type="button" class="dropdown-item" data-bs-toggle="modal"
                                            data-bs-target="#editVehicle">
                                            <i class="ti ti-edit me-1"></i>
                                            Editar
                                        </button>
                                        <button type="button" class="dropdown-item" data-bs-toggle="modal"
                                            data-bs-target="#deleteVehicle">
                                            <i class="ti ti-trash me-1"></i>
                                            Eliminar
                                        </button> --}}
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
{{--                                         <button type="button" class="dropdown-item" data-bs-toggle="modal"
                                            data-bs-target="#editVehicle">
                                            <i class="ti ti-edit me-1"></i>
                                            Editar
                                        </button>
                                        <button type="button" class="dropdown-item" data-bs-toggle="modal"
                                            data-bs-target="#deleteVehicle">
                                            <i class="ti ti-trash me-1"></i>
                                            Eliminar
                                        </button> --}}
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
{{--                                         <button type="button" class="dropdown-item" data-bs-toggle="modal"
                                            data-bs-target="#editVehicle">
                                            <i class="ti ti-edit me-1"></i>
                                            Editar
                                        </button>
                                        <button type="button" class="dropdown-item" data-bs-toggle="modal"
                                            data-bs-target="#deleteVehicle">
                                            <i class="ti ti-trash me-1"></i>
                                            Eliminar
                                        </button> --}}
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
{{--                                         <button type="button" class="dropdown-item" data-bs-toggle="modal"
                                            data-bs-target="#editVehicle">
                                            <i class="ti ti-edit me-1"></i>
                                            Editar
                                        </button>
                                        <button type="button" class="dropdown-item" data-bs-toggle="modal"
                                            data-bs-target="#deleteVehicle">
                                            <i class="ti ti-trash me-1"></i>
                                            Eliminar
                                        </button> --}}
                                    </div>
                                </div>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>

        <!-- Show Vehicle Modal -->
        <div class="modal fade" id="showVehicle" tabindex="-1" aria-hidden="true">
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
                                    class="form-control modal-edit-marca-id" placeholder="01 - Fernando de La Barrera" disabled />
                            </div>
                            <div class="col-12 col-md-6">
                                <label class="form-label" for="modalShowModelo">Vehiculo</label>
                                <input type="text" id="modalEditModelo" name="modalEditModelo"
                                    class="form-control modal-edit-modelo-id" placeholder="Vehiculo" disabled />
                            </div>
                            <div class="col-12 col-md-6">
                                <label class="form-label" for="modalShowCategory">Fecha de prestamo</label>
                                <input type="text" id="modalEditCategory" name="modalEditCategory"
                                    class="form-control modal-edit-category-id" placeholder="Fecha de prestamo" disabled />
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
                            <h3 class="mb-2">Editar información del vehiculo</h3>
                        </div>
                        <form id="editModalForm" class="row g-3" onsubmit="return false">
                            <div class="col-12 col-md-6">
                                <label class="form-label" for="modalEditTarifa">Cliente</label>
                                <input type="text" id="modalEditTarifa" name="modalEditTarifa"
                                    class="form-control modal-edit-tax-id" placeholder="Cliente"/>
                            </div>
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
                                <label class="form-label" for="modalEditTarifa">Fecha de prestamo</label>
                                <input type="datetime-local" id="modalEditTarifa" name="modalEditTarifa"
                                    class="form-control modal-edit-tax-id" placeholder="Cliente"/>
                            </div>
                            <div class="col-12 col-md-6">
                                <label class="form-label" for="modalEditTarifa">Fecha de entrega</label>
                                <input type="datetime-local" id="modalEditTarifa" name="modalEditTarifa"
                                    class="form-control modal-edit-tax-id" placeholder="Cliente"/>
                            </div>
                            <div class="col-12 col-md-6">
                                <label class="form-label" for="modalEditTarifa">Días</label>
                                <input type="number" id="modalEditTarifa" name="modalEditTarifa"
                                    class="form-control modal-edit-tax-id" placeholder="Días"/>
                            </div>

                            <div class="col-12 col-md-6">
                                <label class="form-label" for="modalEditTarifa">Método de pago</label>
                                <input type="text" id="modalEditTarifa" name="modalEditTarifa"
                                    class="form-control modal-edit-tax-id" placeholder="Método de pago"/>
                            </div>
                            <div class="col-12 col-md-6">
                                <label class="form-label" for="modalEditTarifa">Total</label>
                                <input type="number" id="modalEditTarifa" name="modalEditTarifa"
                                    class="form-control modal-edit-tax-id" placeholder="Total"/>
                            </div>
                            <div class="col-12 text-center">
                                <button type="reset" class="btn btn-label-secondary" data-bs-dismiss="modal"
                                    aria-label="Close">Cancelar</button>
                                <button type="submit" class="btn btn-primary me-sm-3 me-1">Guardar Cambios</button>
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
        <!--/ Delete Vehicle Modal -->

    </div>
@endsection
