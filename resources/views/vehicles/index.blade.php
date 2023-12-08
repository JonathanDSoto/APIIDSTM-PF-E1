@extends ('layouts.template')

@section('title', 'Lista de vehiculos')

@section('content')
    <div class="container-xxl flex-grow-1 container-p-y">
        <h4 class="py-3 mb-4">
            <span class="text-muted fw-light">Vehiculos /</span> Lista de vehiculos
        </h4>
        <!-- Vehicle List Table -->
        <div class="card">
            <div class="d-flex flex-row justify-content-between">
                <h5 class="card-header">Lista de vehículos</h5>
                <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#createVehicle">
                    Agregar nuevo vehículo
                </button>
            </div>
            <div class="table-responsive text-nowrap">
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th>Modelo</th>
                            <th>Marca</th>
                            <th>Categoría</th>
                            <th>Estado</th>
                            <th>Tarifa</th>
                            <th>Acciones</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($data['cars'] as $car): ?>
                        <tr>
                            <td><?= $car->nombre ?></td>
                            <td><?= $car->marca ?></td>
                            <td><?= $car->categoria ?></td>
                            <td><?= $car->is_avaliable ? 'Disponible' : 'No disponible' ?></td>
                            <td><?= $car->tarifa ?></td>
                            <td>
                                <div>
                                    <button type="button" class="btn p-0 dropdown-toggle hide-arrow"
                                        data-bs-toggle="dropdown">
                                        <i class="ti ti-dots-vertical"></i>
                                    </button>
                                    <div class="dropdown-menu">
                                        <button type="button" class="dropdown-item" data-bs-toggle="modal"
                                            data-bs-target="#showVehicle{{ $car->id }}" {{-- onclick="obtenerDatos({{ $car->id }})" --}}>
                                            <i class="ti ti-eye me-1"></i> Ver
                                        </button>
                                        <button type="button" class="dropdown-item" data-bs-toggle="modal"
                                            data-bs-target="#editVehicle{{ $car->id }}">
                                            <i class="ti ti-edit me-1"></i> Editar
                                        </button>
                                        <button type="button" class="dropdown-item" data-bs-toggle="modal"
                                            data-bs-target="#deleteVehicle{{ $car->id }}">
                                            <i class="ti ti-trash me-1"></i> Eliminar
                                        </button>
                                    </div>
                                </div>
                            </td>
                        </tr>
                        <!-- Delete Vehicle Modal -->
                        <div class="modal fade" id="deleteVehicle{{ $car->id }}" tabindex="-1" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered1 modal-simple modal-add-new-cc">
                                <div class="modal-content p-3 p-md-5">
                                    <div class="modal-body">
                                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                                            aria-label="Close"></button>
                                        <div class="text-center mb-4">
                                            <h3 class="mb-2">¿Deseas eliminar el vehículo?</h3>
                                        </div>
                                        <form action="{{ route('vehicles.destroy', $car->id) }}" class="row g-3"
                                            method="post" enctype="multipart/form-data">
                                            @method('delete')
                                            @csrf
                                            <div class="col-12 text-center">
                                                <button type="button" class="btn btn-label-secondary btn-reset"
                                                    data-bs-dismiss="modal" aria-label="Close">Cancelar</button>
                                                <button type="submit" class="btn btn-primary me-sm-3 me-1">Aceptar</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--/ Delete Vehicle Modal -->
                        <!-- Show Vehicle Modal -->
                        <div class="modal fade" id="showVehicle{{ $car->id }}" tabindex="-1" aria-hidden="true">
                            <div class="modal-dialog modal-lg modal-simple modal-show-vehicle">
                                <div class="modal-content p-3 p-md-5">
                                    <div class="modal-body">
                                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                                            aria-label="Close"></button>
                                        <div class="text-center mb-4">
                                            <h3 class="mb-2">Ver información del vehiculo</h3>
                                        </div>
                                        <form id="showModalForm" class="row g-3">
                                            <div class="row">
                                                <div class="col-12 col-md-6">
                                                    <label class="form-label" for="modalShowMarca">Marca</label>
                                                    <input type="text" id="showMarca" name="modalEditMarca"
                                                        class="form-control modal-edit-marca-id" value="{{ $car->marca }}"
                                                        placeholder="Marca" disabled />
                                                </div>
                                                <div class="col-12 col-md-6">
                                                    <label class="form-label" for="modalShowModelo">Modelo</label>
                                                    <input type="text" id="showModelo" name="modalEditModelo"
                                                        class="form-control modal-edit-modelo-id"
                                                        value="{{ $car->nombre }}" placeholder="Modelo" disabled />
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-12 col-md-6">
                                                    <label class="form-label" for="modalShowCategory">Categoría</label>
                                                    <input type="text" id="showCategoria" name="modalEditCategory"
                                                        class="form-control modal-edit-category-id"
                                                        value="{{ $car->categoria }}"placeholder="Categoría" disabled />
                                                </div>
                                                <div class="col-12 col-md-6">
                                                    <label class="form-label" for="modalShowStatus">Estado</label>
                                                    <input type="text" id="showEstado" name="modalShowStatus"
                                                        class="form-control modal-edit-status-id"
                                                        value="{{ $car->is_avaliable ? 'Disponible' : 'No disponible' }}"
                                                        placeholder="Estado" disabled />
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-12 col-md-6">
                                                    <label class="form-label" for="modalEditTarifa">Tarifa</label>
                                                    <input type="text" id="showTarifa" name="modalEditTarifa"
                                                        class="form-control modal-edit-tax-id"
                                                        value="{{ $car->tarifa }}" placeholder="Ingresa la tarifa"
                                                        disabled />
                                                </div>
                                            </div>
                                            <div class="col-12 text-center mt-5">
                                                <button type="reset" class="btn btn-primary me-sm-3 me-1"
                                                    data-bs-dismiss="modal" aria-label="Close">Aceptar</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--/ Show Vehicle Modal -->

                        <!-- Edit Vehicle Modal -->
                        <div class="modal fade" id="editVehicle{{ $car->id }}" tabindex="-1" aria-hidden="true">
                            <div class="modal-dialog modal-lg modal-simple modal-edit-user">
                                <div class="modal-content p-3 p-md-5">
                                    <div class="modal-body">
                                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                                            aria-label="Close"></button>
                                        <div class="text-center mb-4">
                                            <h3 class="mb-2">Editar información del vehiculo</h3>
                                        </div>
                                        <form id="editModalForm" class="row g-3"
                                            action="{{ route('vehicles.update', $car->id) }}" method="POST"
                                            enctype="multipart/form-data">
                                            @csrf
                                            @method('PUT')
                                            <div class="row">
                                                <div class="col-12 col-md-6">
                                                    <label class="form-label" for="modalEditMarca">Marca</label>
                                                    <select id="modalEditMarca" name="trademarks_id"
                                                        class="select2 form-select" data-allow-clear="true" required>
                                                        <option value="{{ $car->trademarks_id }}" selected>
                                                            {{ $car->marca }}</option>
    
                                                        @foreach ($data['trademarks'] as $trademark)
                                                            @if (!$car->trademarks_id || $car->trademarks_id !== $trademark->id)
                                                                <option value="{{ $trademark->id }}">{{ $trademark->marca }}
                                                                </option>
                                                            @endif
                                                        @endforeach
                                                    </select>
                                                </div>
                                                <div class="col-12 col-md-6">
                                                    <label class="form-label" for="modalEditMarca">Modelo</label>
                                                    <select id="modalEditMarca" name="v_models_id"
                                                        class="select2 form-select" data-allow-clear="true" required>
                                                        <option value="{{ $car->v_models_id }}" selected>{{ $car->nombre }}
                                                        </option>
    
                                                        @foreach ($data['models'] as $model)
                                                            @if (!$car->v_models_id || $car->v_models_id !== $model->id)
                                                                <option value="{{ $model->id }}">{{ $model->nombre }}
                                                                </option>
                                                            @endif
                                                        @endforeach
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-12 col-md-6">
                                                    <label class="form-label" for="modalEditCategoria">Categoría</label>
                                                    <select id="modalEditCategoria" name="categories_id"
                                                        class="select2 form-select" data-allow-clear="true" required>
                                                        <option value="{{ $car->categories_id }}" selected>
                                                            {{ $car->categoria }}</option>

                                                        @foreach ($data['categories'] as $category)
                                                            @if (!$car->categories_id || $car->categories_id !== $category->id)
                                                                <option value="{{ $category->id }}">
                                                                    {{ $category->categoria }}</option>
                                                            @endif
                                                        @endforeach
                                                    </select>
                                                </div>
                                                <div class="col-12 col-md-6">
                                                    <label class="form-label" for="modalEditStatus">Estado</label>
                                                    <select id="modalEditStatus" name="is_avaliable"
                                                        class="select2 form-select" aria-label="Default select example"
                                                        required>
                                                        <option value="{{ $car->is_avaliable }}" selected>
                                                            {{ $car->is_avaliable ? 'Disponible' : 'No disponible' }}
                                                        </option>

                                                        @if (!$car->is_avaliable || $car->is_avaliable !== 1)
                                                            <option option value="1">Disponible</option>
                                                        @else
                                                            <option value="0">No disponible</option>
                                                        @endif
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="row mb-5">
                                                <div class="col-12 col-md-6">
                                                    <label class="form-label" for="modalEditStatus">Tarifa</label>
                                                    <select id="modalEditStatus" name="rates_id" class="select2 form-select"
                                                        aria-label="Default select example" required>
                                                        <option value="{{ $car->rates_id }}" selected>{{ $car->tarifa }}
                                                        </option>

                                                        @foreach ($data['rates'] as $rate)
                                                            @if (!$car->rates_id || $car->rates_id !== $rate->id)
                                                                <option value="{{ $rate->id }}">{{ $rate->tarifa }}
                                                                </option>
                                                            @endif
                                                        @endforeach
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-12 text-center d-flex justify-content-center gap-2">
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
                        <!--/ Edit Vehicle Modal -->
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>

        <!-- Create Vehicle Modal -->
        <div class="modal fade" id="createVehicle" tabindex="-1" aria-hidden="true">
            <div class="modal-dialog modal-lg modal-simple modal-edit-user">
                <div class="modal-content p-3 p-md-5">
                    <div class="modal-body">
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        <div class="text-center mb-4">
                            <h3 class="mb-2">Agregar vehículo</h3>
                        </div>
                        <form id="editModalForm" class="row g-3" action="{{ route('vehicles.store') }}" method="POST">
                            @csrf
                            <div class="col-12 col-md-6">
                                <label class="form-label" for="modalEditMarca">Marca</label>
                                <select id="modalEditMarca" name="trademarks_id" class="select2 form-select"
                                    data-allow-clear="true" required>
                                    <option value="" disabled selected>Selecciona una marca</option>
                                    @foreach ($data['trademarks'] as $trademark)
                                        <option value="{{ $trademark->id }}">{{ $trademark->marca }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="col-12 col-md-6">
                                <label class="form-label" for="modalEditMarca">Modelo</label>
                                <select id="modalEditMarca" name="v_models_id" class="select2 form-select"
                                    data-allow-clear="true" required>
                                    <option value="" disabled selected>Selecciona un modelo</option>
                                    @foreach ($data['models'] as $model)
                                        <option value="{{ $model->id }}">{{ $model->nombre }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="col-12 col-md-6">
                                <label class="form-label" for="modalEditCategoria">Categoría</label>
                                <select id="modalEditCategoria" name="categories_id" class="select2 form-select"
                                    data-allow-clear="true" required>
                                    <option value="" disabled selected>Selecciona una categoría</option>
                                    @foreach ($data['categories'] as $category)
                                        <option value="{{ $category->id }}">{{ $category->categoria }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="col-12 col-md-6 mb-4">
                                <label class="form-label" for="modalEditStatus">Tarifa</label>
                                <select id="modalEditStatus" name="rates_id" class="select2 form-select"
                                    aria-label="Default select example" required>
                                    <option value="" disabled selected>Selecciona una tarifa</option>
                                    @foreach ($data['rates'] as $rate)
                                        <option value="{{ $rate->id }}">{{ $rate->tarifa }}</option>
                                    @endforeach
                                </select>
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
    @endsection
