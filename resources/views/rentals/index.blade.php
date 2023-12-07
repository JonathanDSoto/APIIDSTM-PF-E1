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
                        @foreach($rentals as $rental)
                            <tr>
                                <td>{{ $rental->client_id }}</td>
                                <td>{{ $rental->id_vehiculo }}</td>
                                <td>{{ $rental->initial_day }}</td>
                                <td>{{ $rental->delivery_day }}</td>
                                <td>{{ $rental->dias_diferencia }}</td>
                                <td>@if($rental->idTarifa) 
                                        {{ $rental->idTarifa->tarifa }}
                                    @else
                                        Sin tarifa
                                    @endif
                                </td>
                                <td>
                                    @if($rental->billRental)
                                        {{ $rental->billRental->metodo_pago }}
                                    @else
                                        Sin información de pago
                                    @endif
                                </td>
                                <td>
                                    @if($rental->idTarifa)
                                        {{ $rental->total }}
                                    @else
                                        Sin tarifa definida
                                    @endif
                                </td>
                                <td>
                                    @if(Carbon\Carbon::now() < $rental->delivery_day)
                                        Activo
                                    @else
                                        Inactivo
                                    @endif
                                </td>
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
                        @endforeach
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
                        <form id="editModalForm" class="row g-3" action="{{ route('rentals.create') }}" method="post" onsubmit="return false">
                            @csrf
                            <div class="col-12 col-md-6">
                                <label class="form-label" for="modalEditMarca">Cliente</label>
                                <select id="modalEditMarca" name="modalEditMarca" class="select2 form-select" data-allow-clear="true">
                                    <option value="">Selecciona un cliente</option>
                                    @foreach($clients as $client)
                                        <option value="{{ $client->id }}">{{ $client->name }} {{ $client->lastname }}</option>
                                    @endforeach
                                </select>
                            </div>

                            <div class="col-12 col-md-6">
                                <label class="form-label" for="modalEditMarca">Vehículo</label>
                                <select id="modalEditMarca" name="modalEditMarca" class="select2 form-select" data-allow-clear="true">
                                    <option value="">Vehículo</option>
                                    @foreach($cars as $car)
                                        @php
                                            $modelName = $car->vmodel ? $car->vmodel->nombre : 'Nombre no disponible';
                                        @endphp
                                        <option value="{{ $car->id }}">{{ $modelName }} - ID {{ $car->id }}</option>
                                    @endforeach
                                </select>
                            </div>

                            <div class="col-12 col-md-6">
                                <label class="form-label" for="modalShowCategory">Fecha de prestamo</label>
                                <input type="text" id="fechaPrestamo" name="modalEditCategory" 
                                    class="form-control modal-edit-category-id" placeholder="Fecha de prestamo" />

                            </div>
                            <div class="col-12 col-md-6">
                                <label class="form-label" for="modalShowCategory">Fecha de entrega</label>
                                <input type="text" id="fechaEntrega" name="modalEditCategory" 
                                    class="form-control modal-edit-category-id flatpickr" placeholder="Fecha de entrega" />

                            </div>
                            <div class="col-12 col-md-6">
                                <label class="form-label" for="modalShowStatus">Días</label>
                                <input type="text" id="modalShowStatus" name="modalShowStatus" 
                                    class="form-control modal-edit-status-id" placeholder="Días" disabled />
                            </div>
                            <div class="col-12 col-md-6">
                                <label class="form-label" for="modalEditTarifa">Tarifa</label>
                                <select id="modalEditTarifa" name="modalEditTarifa" class="select2 form-select" aria-label="Default select example">
                                    <option value="" selected>Selecciona una tarifa</option>
                                    @foreach($rates as $rate)
                                        <option value="{{ $rate->id }}" data-descripcion="{{ $rate->descripcion }}" data-tarifa="{{ $rate->tarifa }}">
                                            {{ $rate->descripcion }} - {{ $rate->categoria }} - ${{ $rate->tarifa }}
                                        </option>
                                    @endforeach
                                </select>
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
                                <input type="text" id="totalModal" name="totalModal" 
                                    class="form-control modal-edit-tax-id" placeholder="Total" readonly />
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
                                <input type="text" id="totalModal" name="modalEditTarifa"
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
                                <input type="text" id="fechaEntrega" name="modalEditCategory" 
                                    class="form-control modal-edit-category-id flatpickr" placeholder="Fecha de entrega" />

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

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css">
    <script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>
    <script>
        // Script para activar flatpickr en el campo de fecha de entrega
        document.addEventListener('DOMContentLoaded', function () {
            // Obtén el campo de entrada de fecha de entrega
            var fechaPrestamoInput = document.getElementById('fechaPrestamo');
            var fechaEntregaInput = document.getElementById('fechaEntrega');

            // Configura flatpickr para el campo de fecha de entrega
            flatpickr(fechaPrestamoInput, {
                enableTime: false, // Puedes habilitar la hora si es necesario
                dateFormat: 'Y-m-d', // Formato de fecha deseado
                defaultDate: 'today',
                
            });

            flatpickr(fechaEntregaInput, {
                enableTime: false, // Puedes habilitar la hora si es necesario
                dateFormat: 'Y-m-d', // Formato de fecha deseado
            });
        });
    </script>
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            // Obtén los campos de fecha de préstamo, entrega y el campo de días
            var fechaPrestamoInput = document.getElementById('fechaPrestamo');
            var fechaEntregaInput = document.getElementById('fechaEntrega');
            var diasModalInput = document.getElementById('modalShowStatus');

            // Función para calcular y actualizar los días cuando cambian las fechas
            function actualizarDias() {
                // Obtén las fechas de préstamo y entrega
                var fechaPrestamo = new Date(fechaPrestamoInput.value);
                var fechaEntrega = new Date(fechaEntregaInput.value);

                // Calcula la diferencia en días
                var diasDiferencia = Math.ceil((fechaEntrega - fechaPrestamo) / (1000 * 60 * 60 * 24));

                // Actualiza el campo de días en el modal
                diasModalInput.value = diasDiferencia;
            }

            // Configura flatpickr para los campos de fecha de préstamo y entrega
            flatpickr(fechaPrestamoInput, {
                enableTime: false,
                dateFormat: 'Y-m-d',
                defaultDate: 'today',
                onChange: actualizarDias, // Llama a la función cuando cambia la fecha de préstamo
            });

            flatpickr(fechaEntregaInput, {
                enableTime: false,
                dateFormat: 'Y-m-d',
                defaultDate: 'tomorrow', // Establece el día siguiente como predeterminado
                onChange: actualizarDias, // Llama a la función cuando cambia la fecha de entrega
            });
        });
    </script>
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            var tarifaSelect = document.getElementById('modalEditTarifa');
            var diasInput = document.getElementById('modalShowStatus');
            var totalInput = document.getElementById('totalModal');

            function actualizarTotal() {
                var tarifaOption = tarifaSelect.options[tarifaSelect.selectedIndex];

                if (tarifaOption) {
                    var descripcion = tarifaOption.getAttribute('data-descripcion');
                    var tarifa = parseFloat(tarifaOption.getAttribute('data-tarifa'));
                    var dias = parseInt(diasInput.value);
                    console.log("descripcion: "+descripcion);
                    console.log("tarifa: "+tarifa);
                    console.log("dias: "+dias);

                    var total = 0;
                    switch (descripcion) {
                        case 'Diario':
                            total = tarifa * dias;
                            break;
                        case 'Semanal':
                            total = tarifa * Math.ceil(dias / 7);
                            break;
                        case 'Mensual':
                            total = tarifa * Math.ceil(dias / 30);
                            break;
                        case 'Anual':
                            total = tarifa * Math.ceil(dias / 365);
                            break;
                    }

                    totalInput.value = total.toFixed(2);
                } else {
                    totalInput.value = '0.00';
                }
            }

            tarifaSelect.addEventListener('change', actualizarTotal);
            diasInput.addEventListener('input', actualizarTotal);
        });
    </script>


@endsection
