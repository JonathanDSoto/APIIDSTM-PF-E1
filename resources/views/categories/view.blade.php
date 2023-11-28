@extends ('layouts.template')

@section('title', 'Ver información de categoría')

@section('content')
<div class="container-xxl flex-grow-1 container-p-y">
        <div class="card mb-4">
            <h5 class="card-header">Información de la categoría</h5>
            <div class="card-body">
                <div>
                    <label for="defaultFormControlInput" class="form-label">Categoría</label>
                    <input type="text" class="form-control" id="defaultFormControlInput" placeholder="Nombre de la categoría"
                        aria-describedby="defaultFormControlHelp" disabled/>
                </div>
            </div>
        </div>

        <h4 class="py-3 mb-4">
            <span class="text-muted fw-light">Categorías /</span> Ver información de vehiculos y categoría
        </h4>

        <!-- Vehicle List Table -->
        <div class="card">
            <div class="d-flex flex-row justify-content-between">
                <h5 class="card-header">Lista de vehiculos de la categoría</h5>
                <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#addVehicle">
                    Agregar nuevo vehículo
                </button>
            </div>
            <div class="table-responsive text-nowrap">
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th># id</th>
                            <th>Vehiculo</th>
                            <th>Acciones</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <th scope="row">1</th>
                            <td>Toyota Camry</td>
                            <td>
                                <div>
                                    <button type="button" class="btn p-0 dropdown-toggle hide-arrow"
                                        data-bs-toggle="dropdown"><i class="ti ti-dots-vertical"></i></button>
                                    <div class="dropdown-menu">
                                        <button type="button" class="dropdown-item" data-bs-toggle="modal"
                                            data-bs-target="#deleteCategory">
                                            <i class="ti ti-trash me-1"></i>
                                            Eliminar
                                        </button>
                                    </div>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <th scope="row">2</th>
                            <td>Honda Accord</td>
                            <td>
                                <div>
                                    <button type="button" class="btn p-0 dropdown-toggle hide-arrow"
                                        data-bs-toggle="dropdown"><i class="ti ti-dots-vertical"></i></button>
                                    <div class="dropdown-menu">
                                        <button type="button" class="dropdown-item" data-bs-toggle="modal"
                                            data-bs-target="#deleteCategory">
                                            <i class="ti ti-trash me-1"></i>
                                            Eliminar
                                        </button>
                                    </div>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <th scope="row">3</th>
                            <td>Ford Fusion</td>
                            <td>
                                <div>
                                    <button type="button" class="btn p-0 dropdown-toggle hide-arrow"
                                        data-bs-toggle="dropdown"><i class="ti ti-dots-vertical"></i></button>
                                    <div class="dropdown-menu">
                                        <button type="button" class="dropdown-item" data-bs-toggle="modal"
                                            data-bs-target="#deleteCategory">
                                            <i class="ti ti-trash me-1"></i>
                                            Eliminar
                                        </button>
                                    </div>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <th scope="row">4</th>
                            <td>Chevrolet Malibu</td>
                            <td>
                                <div>
                                    <button type="button" class="btn p-0 dropdown-toggle hide-arrow"
                                        data-bs-toggle="dropdown"><i class="ti ti-dots-vertical"></i></button>
                                    <div class="dropdown-menu">
                                        <button type="button" class="dropdown-item" data-bs-toggle="modal"
                                            data-bs-target="#deleteCategory">
                                            <i class="ti ti-trash me-1"></i>
                                            Eliminar
                                        </button>
                                    </div>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <th scope="row">5</th>
                            <td>BMW 3 Series</td>
                            <td>
                                <div>
                                    <button type="button" class="btn p-0 dropdown-toggle hide-arrow"
                                        data-bs-toggle="dropdown"><i class="ti ti-dots-vertical"></i></button>
                                    <div class="dropdown-menu">
                                        <button type="button" class="dropdown-item" data-bs-toggle="modal"
                                            data-bs-target="#deleteCategory">
                                            <i class="ti ti-trash me-1"></i>
                                            Eliminar
                                        </button>
                                    </div>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <th scope="row">6</th>
                            <td>Mercedes-Benz C-Class</td>
                            <td>
                                <div>
                                    <button type="button" class="btn p-0 dropdown-toggle hide-arrow"
                                        data-bs-toggle="dropdown"><i class="ti ti-dots-vertical"></i></button>
                                    <div class="dropdown-menu">
                                        <button type="button" class="dropdown-item" data-bs-toggle="modal"
                                            data-bs-target="#deleteCategory">
                                            <i class="ti ti-trash me-1"></i>
                                            Eliminar
                                        </button>
                                    </div>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <th scope="row">7</th>
                            <td>Vehículos Todoterreno (Off-Road)</td>
                            <td>
                                <div>
                                    <button type="button" class="btn p-0 dropdown-toggle hide-arrow"
                                        data-bs-toggle="dropdown"><i class="ti ti-dots-vertical"></i></button>
                                    <div class="dropdown-menu">
                                        <button type="button" class="dropdown-item" data-bs-toggle="modal"
                                            data-bs-target="#deleteCategory">
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

        <!-- Add Vehicle Modal -->
        <div class="modal fade" id="addVehicle" tabindex="-1" aria-hidden="true">
            <div class="modal-dialog modal-lg modal-simple modal-edit-user">
                <div class="modal-content p-3 p-md-5">
                    <div class="modal-body">
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        <div class="text-center mb-4">
                            <h3 class="mb-2">Agregar vehículo a categoría</h3>
                        </div>
                        <form id="editModalForm" class="row g-3 d-flex justify-content-center gap-3"
                            onsubmit="return false">
                            <div class="col-12 col-md-6">
                                <label class="form-label" for="modalEditModel">Vehículo</label>
                                <select id="modalEditModel" name="modalEditModel" class="select2 form-select"
                                    data-allow-clear="true">
                                    <option value="">Lista de vehículos</option>
                                    <option value="camry">Camry</option>
                                    <option value="accord">Accord</option>
                                    <option value="mustang">Mustang</option>
                                    <option value="silverado">Silverado</option>
                                    <option value="altima">Altima</option>
                                    <option value="3series">3 Series</option>
                                    <option value="e-class">E-Class</option>
                                    <option value="a4">A4</option>
                                    <option value="golf">Golf</option>
                                    <option value="model-s">Model S</option>
                                </select>
                            </div>
                            <div class="col-12 text-center">
                                <button type="reset" class="btn btn-label-secondary" data-bs-dismiss="modal"
                                    aria-label="Close">Cancelar</button>
                                <button type="submit" class="btn btn-primary me-sm-3 me-1">Guardar</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!--/ Add Vehicle Modal -->
        <!-- Delete Vehicle Modal -->
        <div class="modal fade" id="deleteCategory" tabindex="-1" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered1 modal-simple modal-add-new-cc">
                <div class="modal-content p-3 p-md-5">
                    <div class="modal-body">
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        <div class="text-center mb-4">
                            <h3 class="mb-2">¿Seguro que deseas eliminar el vehículo?</h3>
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
