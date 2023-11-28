@extends ('layouts.template')

@section('title', 'Clientes')

@section('content')
    <div class="container-xxl flex-grow-1 container-p-y">
        <h4 class="py-3 mb-4">
            <span class="text-muted fw-light">Clientes /</span> Lista de clientes
        </h4>

        <!-- Clients List Table -->
        <div class="card">
            <div class="d-flex flex-row justify-content-between">
                <h5 class="card-header">Lista de clientes</h5>
                <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#createClient">
                    Agregar nuevo cliente
                </button>
            </div>
            <div class="table-responsive text-nowrap">
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th># id</th>
                            <th>Nombres</th>
                            <th>Apellido Paterno</th>
                            <th>Correo electrónico</th>
                            <th>Teléfono</th>
                            <th>Dirección</th>
                            <th>Código postal</th>
                            <th>Número Exterior</th>
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
                            <td>
                                <div>
                                    <button type="button" class="btn p-0 dropdown-toggle hide-arrow"
                                        data-bs-toggle="dropdown"><i class="ti ti-dots-vertical"></i></button>
                                    <div class="dropdown-menu">
                                        <button type="button" class="dropdown-item" data-bs-toggle="modal"
                                            data-bs-target="#showClient">
                                            <i class="ti ti-eye me-1"></i>
                                            Ver
                                        </button>
                                        <button type="button" class="dropdown-item" data-bs-toggle="modal"
                                            data-bs-target="#editClient">
                                            <i class="ti ti-edit me-1"></i>
                                            Editar
                                        </button>
                                        <button type="button" class="dropdown-item" data-bs-toggle="modal"
                                            data-bs-target="#deleteClient">
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
                            <td>
                                <div>
                                    <button type="button" class="btn p-0 dropdown-toggle hide-arrow"
                                        data-bs-toggle="dropdown"><i class="ti ti-dots-vertical"></i></button>
                                    <div class="dropdown-menu">
                                        <button type="button" class="dropdown-item" data-bs-toggle="modal"
                                            data-bs-target="#showClient">
                                            <i class="ti ti-eye me-1"></i>
                                            Ver
                                        </button>
                                        <button type="button" class="dropdown-item" data-bs-toggle="modal"
                                            data-bs-target="#editClient">
                                            <i class="ti ti-edit me-1"></i>
                                            Editar
                                        </button>
                                        <button type="button" class="dropdown-item" data-bs-toggle="modal"
                                            data-bs-target="#deleteClient">
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
                            <td>
                                <div>
                                    <button type="button" class="btn p-0 dropdown-toggle hide-arrow"
                                        data-bs-toggle="dropdown"><i class="ti ti-dots-vertical"></i></button>
                                    <div class="dropdown-menu">
                                        <button type="button" class="dropdown-item" data-bs-toggle="modal"
                                            data-bs-target="#showClient">
                                            <i class="ti ti-eye me-1"></i>
                                            Ver
                                        </button>
                                        <button type="button" class="dropdown-item" data-bs-toggle="modal"
                                            data-bs-target="#editClient">
                                            <i class="ti ti-edit me-1"></i>
                                            Editar
                                        </button>
                                        <button type="button" class="dropdown-item" data-bs-toggle="modal"
                                            data-bs-target="#deleteClient">
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
                            <td>
                                <div>
                                    <button type="button" class="btn p-0 dropdown-toggle hide-arrow"
                                        data-bs-toggle="dropdown"><i class="ti ti-dots-vertical"></i></button>
                                    <div class="dropdown-menu">
                                        <button type="button" class="dropdown-item" data-bs-toggle="modal"
                                            data-bs-target="#showClient">
                                            <i class="ti ti-eye me-1"></i>
                                            Ver
                                        </button>
                                        <button type="button" class="dropdown-item" data-bs-toggle="modal"
                                            data-bs-target="#editClient">
                                            <i class="ti ti-edit me-1"></i>
                                            Editar
                                        </button>
                                        <button type="button" class="dropdown-item" data-bs-toggle="modal"
                                            data-bs-target="#deleteClient">
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
                            <td>
                                <div>
                                    <button type="button" class="btn p-0 dropdown-toggle hide-arrow"
                                        data-bs-toggle="dropdown"><i class="ti ti-dots-vertical"></i></button>
                                    <div class="dropdown-menu">
                                        <button type="button" class="dropdown-item" data-bs-toggle="modal"
                                            data-bs-target="#showClient">
                                            <i class="ti ti-eye me-1"></i>
                                            Ver
                                        </button>
                                        <button type="button" class="dropdown-item" data-bs-toggle="modal"
                                            data-bs-target="#editClient">
                                            <i class="ti ti-edit me-1"></i>
                                            Editar
                                        </button>
                                        <button type="button" class="dropdown-item" data-bs-toggle="modal"
                                            data-bs-target="#deleteClient">
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
                            <td>
                                <div>
                                    <button type="button" class="btn p-0 dropdown-toggle hide-arrow"
                                        data-bs-toggle="dropdown"><i class="ti ti-dots-vertical"></i></button>
                                    <div class="dropdown-menu">
                                        <button type="button" class="dropdown-item" data-bs-toggle="modal"
                                            data-bs-target="#showClient">
                                            <i class="ti ti-eye me-1"></i>
                                            Ver
                                        </button>
                                        <button type="button" class="dropdown-item" data-bs-toggle="modal"
                                            data-bs-target="#editClient">
                                            <i class="ti ti-edit me-1"></i>
                                            Editar
                                        </button>
                                        <button type="button" class="dropdown-item" data-bs-toggle="modal"
                                            data-bs-target="#deleteClient">
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
                            <td>
                                <div>
                                    <button type="button" class="btn p-0 dropdown-toggle hide-arrow"
                                        data-bs-toggle="dropdown"><i class="ti ti-dots-vertical"></i></button>
                                    <div class="dropdown-menu">
                                        <button type="button" class="dropdown-item" data-bs-toggle="modal"
                                            data-bs-target="#showClient">
                                            <i class="ti ti-eye me-1"></i>
                                            Ver
                                        </button>
                                        <button type="button" class="dropdown-item" data-bs-toggle="modal"
                                            data-bs-target="#editClient">
                                            <i class="ti ti-edit me-1"></i>
                                            Editar
                                        </button>
                                        <button type="button" class="dropdown-item" data-bs-toggle="modal"
                                            data-bs-target="#deleteClient">
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
                            <td>
                                <div>
                                    <button type="button" class="btn p-0 dropdown-toggle hide-arrow"
                                        data-bs-toggle="dropdown"><i class="ti ti-dots-vertical"></i></button>
                                    <div class="dropdown-menu">
                                        <button type="button" class="dropdown-item" data-bs-toggle="modal"
                                            data-bs-target="#showClient">
                                            <i class="ti ti-eye me-1"></i>
                                            Ver
                                        </button>
                                        <button type="button" class="dropdown-item" data-bs-toggle="modal"
                                            data-bs-target="#editClient">
                                            <i class="ti ti-edit me-1"></i>
                                            Editar
                                        </button>
                                        <button type="button" class="dropdown-item" data-bs-toggle="modal"
                                            data-bs-target="#deleteClient">
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
                            <td>
                                <div>
                                    <button type="button" class="btn p-0 dropdown-toggle hide-arrow"
                                        data-bs-toggle="dropdown"><i class="ti ti-dots-vertical"></i></button>
                                    <div class="dropdown-menu">
                                        <button type="button" class="dropdown-item" data-bs-toggle="modal"
                                            data-bs-target="#showClient">
                                            <i class="ti ti-eye me-1"></i>
                                            Ver
                                        </button>
                                        <button type="button" class="dropdown-item" data-bs-toggle="modal"
                                            data-bs-target="#editClient">
                                            <i class="ti ti-edit me-1"></i>
                                            Editar
                                        </button>
                                        <button type="button" class="dropdown-item" data-bs-toggle="modal"
                                            data-bs-target="#deleteClient">
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
                            <td>
                                <div>
                                    <button type="button" class="btn p-0 dropdown-toggle hide-arrow"
                                        data-bs-toggle="dropdown"><i class="ti ti-dots-vertical"></i></button>
                                    <div class="dropdown-menu">
                                        <button type="button" class="dropdown-item" data-bs-toggle="modal"
                                            data-bs-target="#showClient">
                                            <i class="ti ti-eye me-1"></i>
                                            Ver
                                        </button>
                                        <button type="button" class="dropdown-item" data-bs-toggle="modal"
                                            data-bs-target="#editClient">
                                            <i class="ti ti-edit me-1"></i>
                                            Editar
                                        </button>
                                        <button type="button" class="dropdown-item" data-bs-toggle="modal"
                                            data-bs-target="#deleteClient">
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

        <!-- Create Vehicle Modal -->
        <div class="modal fade" id="createClient" tabindex="-1" aria-hidden="true">
            <div class="modal-dialog modal-lg modal-simple modal-edit-user">
                <div class="modal-content p-3 p-md-5">
                    <div class="modal-body">
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        <div class="text-center mb-4">
                            <h3 class="mb-2">Agregar cliente</h3>
                        </div>
                        <form id="editModalForm" class="row g-3" onsubmit="return false">
                            <div class="col-12 col-md-6">
                                <label class="form-label" for="modalShowMarca">Nombres</label>
                                <input type="text" id="modalEditMarca" name="modalEditMarca"
                                    class="form-control modal-edit-marca-id" placeholder="Nombres"/>
                            </div>
                            <div class="col-12 col-md-6">
                                <label class="form-label" for="modalShowMarca">Apellido Paterno</label>
                                <input type="text" id="modalEditMarca" name="modalEditMarca"
                                    class="form-control modal-edit-marca-id" placeholder="Apellido Paterno"/>
                            </div>
                            <div class="col-12 col-md-6">
                                <label class="form-label" for="modalShowMarca">Correo electrónico</label>
                                <input type="email" id="modalEditMarca" name="modalEditMarca"
                                    class="form-control modal-edit-marca-id" placeholder="Correo electrónico"/>
                            </div>
                            <div class="col-12 col-md-6">
                                <label class="form-label" for="modalShowMarca">Teléfono</label>
                                <input type="number" id="modalEditMarca" name="modalEditMarca"
                                    class="form-control modal-edit-marca-id" placeholder="Teléfono"/>
                            </div>
                            <div class="col-12 col-md-6">
                                <label class="form-label" for="modalShowMarca">Dirección</label>
                                <input type="text" id="modalEditMarca" name="modalEditMarca"
                                    class="form-control modal-edit-marca-id" placeholder="Dirección"/>
                            </div>
                            <div class="col-12 col-md-6">
                                <label class="form-label" for="modalShowMarca">Código postal</label>
                                <input type="number" id="modalEditMarca" name="modalEditMarca"
                                    class="form-control modal-edit-marca-id" placeholder="Código postal"/>
                            </div>

                            <div class="col-12 col-md-6">
                                <label class="form-label" for="modalShowMarca">Número de exterior</label>
                                <input type="number" id="modalEditMarca" name="modalEditMarca"
                                    class="form-control modal-edit-marca-id" placeholder="Número de exterior"/>
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
        <!--/ Create Client Modal -->

        <!-- Show Client Modal -->
        <div class="modal fade" id="showClient" tabindex="-1" aria-hidden="true">
            <div class="modal-dialog modal-lg modal-simple modal-edit-user">
                <div class="modal-content p-3 p-md-5">
                    <div class="modal-body">
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        <div class="text-center mb-4">
                            <h3 class="mb-2">Ver información del cliente</h3>
                        </div>
                        <form id="editModalForm" class="row g-3" onsubmit="return false">
                            <div class="col-12 col-md-6">
                                <label class="form-label" for="modalShowMarca">Nombres</label>
                                <input type="text" id="modalEditMarca" name="modalEditMarca"
                                    class="form-control modal-edit-marca-id" placeholder="Nombres" disabled/>
                            </div>
                            <div class="col-12 col-md-6">
                                <label class="form-label" for="modalShowMarca">Apellido Paterno</label>
                                <input type="text" id="modalEditMarca" name="modalEditMarca"
                                    class="form-control modal-edit-marca-id" placeholder="Apellido Paterno" disabled/>
                            </div>
                            <div class="col-12 col-md-6">
                                <label class="form-label" for="modalShowMarca">Correo electrónico</label>
                                <input type="email" id="modalEditMarca" name="modalEditMarca"
                                    class="form-control modal-edit-marca-id" placeholder="Correo electrónico" disabled/>
                            </div>
                            <div class="col-12 col-md-6">
                                <label class="form-label" for="modalShowMarca">Teléfono</label>
                                <input type="number" id="modalEditMarca" name="modalEditMarca"
                                    class="form-control modal-edit-marca-id" placeholder="Teléfono" disabled/>
                            </div>
                            <div class="col-12 col-md-6">
                                <label class="form-label" for="modalShowMarca">Dirección</label>
                                <input type="text" id="modalEditMarca" name="modalEditMarca"
                                    class="form-control modal-edit-marca-id" placeholder="Dirección" disabled/>
                            </div>
                            <div class="col-12 col-md-6">
                                <label class="form-label" for="modalShowMarca">Código postal</label>
                                <input type="number" id="modalEditMarca" name="modalEditMarca"
                                    class="form-control modal-edit-marca-id" placeholder="Código postal" disabled/>
                            </div>

                            <div class="col-12 col-md-6">
                                <label class="form-label" for="modalShowMarca">Número de exterior</label>
                                <input type="number" id="modalEditMarca" name="modalEditMarca"
                                    class="form-control modal-edit-marca-id" placeholder="Número de exterior" disabled/>
                            </div>
                            <div class="col-12 text-center d-flex gap-2 justify-content-center">
                                <button type="reset" class="btn btn-label-secondary" data-bs-dismiss="modal"
                                    aria-label="Close">Cancelar</button>
                                <button type="submit" class="btn btn-primary me-sm-3 me-1">Aceptar</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!--/ Show Client Modal -->

        <!-- Edit Client Modal -->
        <div class="modal fade" id="editClient" tabindex="-1" aria-hidden="true">
            <div class="modal-dialog modal-lg modal-simple modal-edit-user">
                <div class="modal-content p-3 p-md-5">
                    <div class="modal-body">
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        <div class="text-center mb-4">
                            <h3 class="mb-2">Editar información del cliente</h3>
                        </div>
                        <form id="editModalForm" class="row g-3" onsubmit="return false">
                            <div class="col-12 col-md-6">
                                <label class="form-label" for="modalShowMarca">Nombres</label>
                                <input type="text" id="modalEditMarca" name="modalEditMarca"
                                    class="form-control modal-edit-marca-id" placeholder="Nombres"/>
                            </div>
                            <div class="col-12 col-md-6">
                                <label class="form-label" for="modalShowMarca">Apellido Paterno</label>
                                <input type="text" id="modalEditMarca" name="modalEditMarca"
                                    class="form-control modal-edit-marca-id" placeholder="Apellido Paterno"/>
                            </div>
                            <div class="col-12 col-md-6">
                                <label class="form-label" for="modalShowMarca">Correo electrónico</label>
                                <input type="email" id="modalEditMarca" name="modalEditMarca"
                                    class="form-control modal-edit-marca-id" placeholder="Correo electrónico"/>
                            </div>
                            <div class="col-12 col-md-6">
                                <label class="form-label" for="modalShowMarca">Teléfono</label>
                                <input type="number" id="modalEditMarca" name="modalEditMarca"
                                    class="form-control modal-edit-marca-id" placeholder="Teléfono"/>
                            </div>
                            <div class="col-12 col-md-6">
                                <label class="form-label" for="modalShowMarca">Dirección</label>
                                <input type="text" id="modalEditMarca" name="modalEditMarca"
                                    class="form-control modal-edit-marca-id" placeholder="Dirección"/>
                            </div>
                            <div class="col-12 col-md-6">
                                <label class="form-label" for="modalShowMarca">Código postal</label>
                                <input type="number" id="modalEditMarca" name="modalEditMarca"
                                    class="form-control modal-edit-marca-id" placeholder="Código postal"/>
                            </div>

                            <div class="col-12 col-md-6">
                                <label class="form-label" for="modalShowMarca">Número de exterior</label>
                                <input type="number" id="modalEditMarca" name="modalEditMarca"
                                    class="form-control modal-edit-marca-id" placeholder="Número de exterior"/>
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
        <!--/ Edit Client Modal -->

        <!-- Delete Client Modal -->
        <div class="modal fade" id="deleteClient" tabindex="-1" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered1 modal-simple modal-add-new-cc">
                <div class="modal-content p-3 p-md-5">
                    <div class="modal-body">
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        <div class="text-center mb-4">
                            <h3 class="mb-2">¿Deseas eliminar el cliente?</h3>
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
        <!--/ Delete Client Modal -->

    </div>
@endsection
