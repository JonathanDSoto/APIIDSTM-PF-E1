@extends ('layouts.template')

@section('title', 'Historial de renta de vehiculos')

@section('content')
    <div class="container-xxl flex-grow-1 container-p-y">
        <h4 class="py-3 mb-4">
            <span class="text-muted fw-light">Categorías /</span> Lista de categorías
        </h4>

        <!-- Vehicle List Table -->
        <div class="card">
            <div class="d-flex flex-row justify-content-between">
                <h5 class="card-header">Lista de categorías</h5>
                <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#createCategory">
                    Agregar nueva categoría
                </button>
            </div>
            <div class="table-responsive text-nowrap">
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th># id</th>
                            <th>Categoría</th>
                            <th>Acciones</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <th scope="row">1</th>
                            <td>Automóviles de Pasajeros</td>
                            <td>
                                <div>
                                    <button type="button" class="btn p-0 dropdown-toggle hide-arrow"
                                        data-bs-toggle="dropdown"><i class="ti ti-dots-vertical"></i></button>
                                    <div class="dropdown-menu">
                                        <a href={{ route('categories.view') }} type="button" class="dropdown-item">
                                            <i class="ti ti-eye me-1"></i>
                                            Ver
                                        </a>
                                        <button type="button" class="dropdown-item" data-bs-toggle="modal"
                                            data-bs-target="#editCategory">
                                            <i class="ti ti-edit me-1"></i>
                                            Editar
                                        </button>
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
                            <td>SUVs (Vehículos Utilitarios Deportivos)</td>
                            <td>
                                <div>
                                    <button type="button" class="btn p-0 dropdown-toggle hide-arrow"
                                        data-bs-toggle="dropdown"><i class="ti ti-dots-vertical"></i></button>
                                    <div class="dropdown-menu">
                                        <a href={{ route('categories.view') }} type="button" class="dropdown-item">
                                            <i class="ti ti-eye me-1"></i>
                                            Ver
                                        </a>
                                        <button type="button" class="dropdown-item" data-bs-toggle="modal"
                                            data-bs-target="#editCategory">
                                            <i class="ti ti-edit me-1"></i>
                                            Editar
                                        </button>
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
                            <td>Camionetas Pickup</td>
                            <td>
                                <div>
                                    <button type="button" class="btn p-0 dropdown-toggle hide-arrow"
                                        data-bs-toggle="dropdown"><i class="ti ti-dots-vertical"></i></button>
                                    <div class="dropdown-menu">
                                        <a href={{ route('categories.view') }} type="button" class="dropdown-item">
                                            <i class="ti ti-eye me-1"></i>
                                            Ver
                                        </a>
                                        <button type="button" class="dropdown-item" data-bs-toggle="modal"
                                            data-bs-target="#editCategory">
                                            <i class="ti ti-edit me-1"></i>
                                            Editar
                                        </button>
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
                            <td>Vehículos Eléctricos</td>
                            <td>
                                <div>
                                    <button type="button" class="btn p-0 dropdown-toggle hide-arrow"
                                        data-bs-toggle="dropdown"><i class="ti ti-dots-vertical"></i></button>
                                    <div class="dropdown-menu">
                                        <a href={{ route('categories.view') }} type="button" class="dropdown-item">
                                            <i class="ti ti-eye me-1"></i>
                                            Ver
                                        </a>
                                        <button type="button" class="dropdown-item" data-bs-toggle="modal"
                                            data-bs-target="#editCategory">
                                            <i class="ti ti-edit me-1"></i>
                                            Editar
                                        </button>
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
                            <td>Vehículos Híbridos</td>
                            <td>
                                <div>
                                    <button type="button" class="btn p-0 dropdown-toggle hide-arrow"
                                        data-bs-toggle="dropdown"><i class="ti ti-dots-vertical"></i></button>
                                    <div class="dropdown-menu">
                                        <a href={{ route('categories.view') }} type="button" class="dropdown-item">
                                            <i class="ti ti-eye me-1"></i>
                                            Ver
                                        </a>
                                        <button type="button" class="dropdown-item" data-bs-toggle="modal"
                                            data-bs-target="#editCategory">
                                            <i class="ti ti-edit me-1"></i>
                                            Editar
                                        </button>
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
                            <td>Vehículos Deportivos (Coupés y Convertibles)</td>
                            <td>
                                <div>
                                    <button type="button" class="btn p-0 dropdown-toggle hide-arrow"
                                        data-bs-toggle="dropdown"><i class="ti ti-dots-vertical"></i></button>
                                    <div class="dropdown-menu">
                                        <a href={{ route('categories.view') }} type="button" class="dropdown-item">
                                            <i class="ti ti-eye me-1"></i>
                                            Ver
                                        </a>
                                        <button type="button" class="dropdown-item" data-bs-toggle="modal"
                                            data-bs-target="#editCategory">
                                            <i class="ti ti-edit me-1"></i>
                                            Editar
                                        </button>
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
                                        <a href={{ route('categories.view') }} type="button" class="dropdown-item">
                                            <i class="ti ti-eye me-1"></i>
                                            Ver
                                        </a>
                                        <button type="button" class="dropdown-item" data-bs-toggle="modal"
                                            data-bs-target="#editCategory">
                                            <i class="ti ti-edit me-1"></i>
                                            Editar
                                        </button>
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

        <!-- Create Category Modal -->
        <div class="modal fade" id="createCategory" tabindex="-1" aria-hidden="true">
            <div class="modal-dialog modal-lg modal-simple modal-edit-user">
                <div class="modal-content p-3 p-md-5">
                    <div class="modal-body">
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        <div class="text-center mb-4">
                            <h3 class="mb-2">Crear categoría</h3>
                        </div>
                        <form id="editModalForm" class="row g-3 d-flex justify-content-center gap-3"
                            onsubmit="return false">
                            <div class="col-12 col-md-6">
                                <label class="form-label" for="modalEditTarifa">Categoría</label>
                                <input type="text" id="modalEditTarifa" name="modalEditTarifa"
                                    class="form-control modal-edit-tax-id" placeholder="Nombre de la categoría" />
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
        <!--/ Create Category Modal -->
        <!-- Edit Category Modal -->
        <div class="modal fade" id="editCategory" tabindex="-1" aria-hidden="true">
            <div class="modal-dialog modal-lg modal-simple modal-edit-user">
                <div class="modal-content p-3 p-md-5">
                    <div class="modal-body">
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        <div class="text-center mb-4">
                            <h3 class="mb-2">Editar la categoría</h3>
                        </div>
                        <form id="editModalForm" class="row g-3 d-flex justify-content-center gap-3"
                            onsubmit="return false">
                            <div class="col-12 col-md-6">
                                <label class="form-label" for="modalEditTarifa">Categoria</label>
                                <input type="text" id="modalEditTarifa" name="modalEditTarifa"
                                    class="form-control modal-edit-tax-id" placeholder="Nombre de la categoría" />
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
        <!--/ Edit Category Modal -->
        <!-- Delete Category Modal -->
        <div class="modal fade" id="deleteCategory" tabindex="-1" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered1 modal-simple modal-add-new-cc">
                <div class="modal-content p-3 p-md-5">
                    <div class="modal-body">
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        <div class="text-center mb-4">
                            <h3 class="mb-2">¿Seguro que deseas eliminar la categoría?</h3>
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
        <!--/ Delete Category Modal -->

    </div>
@endsection
