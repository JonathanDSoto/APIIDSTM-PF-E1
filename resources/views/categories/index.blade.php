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
                        @foreach ($categories as $category)
                            <tr>
                                <th scope="row">{{ $category->id }}</th>
                                <td>{{ $category->categoria }}</td>
                                <td>
                                    <div>
                                        <button type="button" class="btn p-0 dropdown-toggle hide-arrow"
                                            data-bs-toggle="dropdown">
                                            <i class="ti ti-dots-vertical"></i>
                                        </button>
                                        <div class="dropdown-menu">
                                            <button type="button" class="dropdown-item" data-bs-toggle="modal"
                                                data-bs-target="#showCategory{{ $category->id }}">
                                                <i class="ti ti-eye me-1"></i> Ver
                                            </button>
                                            <button type="button" class="dropdown-item" data-bs-toggle="modal"
                                                data-bs-target="#editCategory{{ $category->id }}">
                                                <i class="ti ti-edit me-1"></i> Editar
                                            </button>
                                            <button type="button" class="dropdown-item" data-bs-toggle="modal"
                                                data-bs-target="#deleteCategory{{ $category->id }}">
                                                <i class="ti ti-trash me-1"></i> Eliminar
                                            </button>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                            <!-- Delete Category Modal -->
                            <div class="modal fade" id="deleteCategory{{ $category->id }}" tabindex="-1"
                                aria-hidden="true">
                                <div class="modal-dialog modal-lg modal-simple modal-edit-user">
                                    <div class="modal-content p-3 p-md-5">
                                        <div class="modal-body">
                                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                aria-label="Close"></button>
                                            <div class="text-center mb-4">
                                                <h3 class="mb-2">¿Seguro que deseas eliminar la categoría?</h3>
                                            </div>
                                            <form action="{{ route('categories.destroy', $category->id) }}" class="row g-3"
                                                method="post" enctype="multipart/form-data">
                                                @method('delete')
                                                @csrf
                                                <div class="col-12 text-center mt-4">
                                                    <button type="reset" class="btn btn-label-secondary btn-reset"
                                                        data-bs-dismiss="modal" aria-label="Close">Cancelar</button>
                                                    <button type="submit"
                                                        class="btn btn-primary me-sm-3 me-1">Aceptar</button>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--/ Delete Category Modal -->
                            <!-- Show Category Modal -->
                            <div class="modal fade" id="showCategory{{ $category->id }}" tabindex="-1" aria-hidden="true">
                                <div class="modal-dialog modal-lg modal-simple modal-edit-user">
                                    <div class="modal-content p-3 p-md-5">
                                        <div class="modal-body">
                                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                aria-label="Close"></button>
                                            <div class="text-center mb-4">
                                                <h3 class="mb-2">Mostrar detalles la categoría</h3>
                                            </div>
                                            <form id="editModalForm" class="row g-3"
                                                onsubmit="return false">
                                                <div class="row d-flex justify-content-center mb-4">
                                                    <div class="col-12 col-md-6">
                                                        <label class="form-label" for="modalEditTarifa">Categoria</label>
                                                        <input type="text" id="modalEditTarifa" name="modalEditTarifa"
                                                            class="form-control modal-edit-tax-id"
                                                            placeholder="Nombre de la categoría"
                                                            value="{{ $category->categoria }}" disabled />
                                                    </div>
                                                </div>
                                                <div class="col-12 text-center">
                                                    <button type="button" class="btn btn-label-secondary"
                                                        data-bs-dismiss="modal" aria-label="Close">Aceptar</button>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--/ Show Category Modal -->
                            <!-- Edit Category Modal -->
                            <div class="modal fade" id="editCategory{{ $category->id }}" tabindex="-1" aria-hidden="true">
                                <div class="modal-dialog modal-lg modal-simple modal-edit-user">
                                    <div class="modal-content p-3 p-md-5">
                                        <div class="modal-body">
                                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                aria-label="Close"></button>
                                            <div class="text-center mb-4">
                                                <h3 class="mb-2">Editar la categoría</h3>
                                            </div>
                                            <form id="editModalForm" class="row g-3"
                                                action="{{ route('categories.update', $category->id) }}" method="POST"
                                                enctype="multipart/form-data">
                                                @csrf
                                                @method('PUT')
                                                <div class="row d-flex justify-content-center mb-4">
                                                    <div class="col-12 col-md-6">
                                                        <label class="form-label" for="modalEditTarifa">Categoria</label>
                                                        <input type="text" id="modalEditTarifa" name="categoria"
                                                            class="form-control modal-edit-tax-id"
                                                            placeholder="Nombre de la categoría"
                                                            value="{{ $category->categoria }}" />
                                                    </div>
                                                </div>
                                                <div class="col-12 text-center">
                                                    <button type="reset" class="btn btn-label-secondary"
                                                        data-bs-dismiss="modal" aria-label="Close">Cancelar</button>
                                                    <button type="submit" class="btn btn-primary me-sm-3 me-1">Guardar
                                                        Cambios</button>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--/ Edit Category Modal -->
                        @endforeach
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
                            action="{{ route('categories.store') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="col-12 col-md-6">
                                <label class="form-label" for="modalEditTarifa">Categoria</label>
                                <input type="text" id="modalEditTarifa" name="categoria"
                                    class="form-control modal-edit-tax-id" placeholder="Nombre de la categoría" />
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
        <!--/ Create Category Modal -->

    </div>
@endsection