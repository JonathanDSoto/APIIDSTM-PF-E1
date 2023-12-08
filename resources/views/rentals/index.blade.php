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
                                                data-bs-target="#editRental" data-rental-id="{{ $rental->id }}">
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
                                <label class="form-label" for="modalCliente">Cliente</label>
                                <select id="modalCliente" name="modalCliente" class="select2 form-select" data-allow-clear="true">
                                    <option value="">Selecciona un cliente</option>
                                    @foreach($clients as $client)
                                        <option value="{{ $client->id }}">{{ $client->name }} {{ $client->lastname }}</option>
                                    @endforeach
                                </select>
                            </div>

                            <div class="col-12 col-md-6">
                                <label class="form-label" for="modalVehiculo">Vehículo</label>
                                <select id="modalVehiculo" name="modalVehiculo" class="select2 form-select" data-allow-clear="true">
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
                                <input type="text" id="fechaPrestamo" name="modalprestamo" 
                                    class="form-control modal-edit-category-id" placeholder="Fecha de prestamo" />

                            </div>
                            <div class="col-12 col-md-6">
                                <label class="form-label" for="modalShowCategory">Fecha de entrega</label>
                                <input type="text" id="fechaEntrega" name="modalEntrega" 
                                    class="form-control modal-edit-category-id flatpickr" placeholder="Fecha de entrega" />

                            </div>
                            <div class="col-12 col-md-6">
                                <label class="form-label" for="modalShowStatus">Días</label>
                                <input type="text" id="modalDias" name="modalDias" 
                                    class="form-control modal-edit-status-id" placeholder="Días" disabled />
                            </div>
                            <div class="col-12 col-md-6">
                                <label class="form-label" for="modalTarifa">Tarifa</label>
                                <select id="modalTarifa" name="modalTarifa" class="select2 form-select" aria-label="Default select example">
                                    <option value="" selected>Selecciona una tarifa</option>
                                    @foreach($rates as $rate)
                                        <option value="{{ $rate->id }}" data-descripcion="{{ $rate->descripcion }}" data-tarifa="{{ $rate->tarifa }}">
                                            {{ $rate->descripcion }} - {{ $rate->categoria }} - ${{ $rate->tarifa }}
                                        </option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="col-12 col-md-6">
                                <label class="form-label" for="modalpago">Método de pago</label>
                                <select id="modalpago" name="modalpago" class="select2 form-select"
                                    aria-label="Default select example">
                                    <option selected disabled>Selecciona un método de pago</option>
                                    <option value="efectivo">Efectivo</option>
                                    <option value="transferencia">Transferencia</option>
                                    <option value="tarjeta">Tarjeta de crédito</option>
                                    <option value="paypal">paypal</option>
                                </select>
                            </div>
                            <div class="col-12 col-md-6">
                                <label class="form-label" for="modalTotal">Total</label>
                                <input type="text" id="modalTotal" name="modalTotal" 
                                    class="form-control modal-edit-tax-id" placeholder="Total" readonly />
                            </div>

                            <div class="col-12 text-center d-flex gap-2 justify-content-center">
                                <button type="reset" class="btn btn-label-secondary" data-bs-dismiss="modal"
                                    aria-label="Close">Cancelar</button>
                                <button type="submit" class="btn btn-primary me-sm-3 me-1" onclick="guardarRenta()">Guardar</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!--/ Create Rental Modal -->

       

        <!-- Edit Rental Modal -->
        <div class="modal fade" id="editRental" tabindex="-1" aria-hidden="true">
            <div class="modal-dialog modal-lg modal-simple modal-edit-user">
                <div class="modal-content p-3 p-md-5">
                    <div class="modal-body">
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        <div class="text-center mb-4">
                            <h3 class="mb-2">Editar información de la renta</h3>
                        </div>
                        <form id="editModalForm" class="row g-3" action="{{ route('rentals.create') }}" method="post" onsubmit="return false">
                            @csrf
                            <div class="col-12 col-md-6">
                                <label class="form-label" for="modalCliente">Cliente</label>
                                <select id="modalEditCliente" name="modalEditCliente" class="select2 form-select" data-allow-clear="true">
                                    <option value="">Selecciona un cliente</option>
                                    @foreach($clients as $client)
                                        <option value="{{ $client->id }}">{{ $client->name }} {{ $client->lastname }}</option>
                                    @endforeach
                                </select>
                            </div>

                            <div class="col-12 col-md-6">
                                <label class="form-label" for="modalVehiculo">Vehículo</label>
                                <select id="modalEditVehiculo" name="modalVehiculo" class="select2 form-select" data-allow-clear="true">
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
                                <input type="text" id="fechaPrestamoEdit" name="modalprestamo" 
                                    class="form-control modal-edit-category-id" placeholder="Fecha de prestamo" />

                            </div>
                            <div class="col-12 col-md-6">
                                <label class="form-label" for="modalShowCategory">Fecha de entrega</label>
                                <input type="text" id="fechaEntregaEdit" name="modalEntrega" 
                                    class="form-control modal-edit-category-id flatpickr" placeholder="Fecha de entrega" />

                            </div>
                            <div class="col-12 col-md-6">
                                <label class="form-label" for="modalShowStatus">Días</label>
                                <input type="text" id="modalEditDias" name="modalDias" 
                                    class="form-control modal-edit-status-id" placeholder="Días" disabled />
                            </div>
                            <div class="col-12 col-md-6">
                                <label class="form-label" for="modalTarifa">Tarifa</label>
                                <select id="modalEditTarifa" name="modalTarifa" class="select2 form-select" aria-label="Default select example">
                                    <option value="" selected>Selecciona una tarifa</option>
                                    @foreach($rates as $rate)
                                        <option value="{{ $rate->id }}" data-descripcion="{{ $rate->descripcion }}" data-tarifa="{{ $rate->tarifa }}">
                                            {{ $rate->descripcion }} - {{ $rate->categoria }} - ${{ $rate->tarifa }}
                                        </option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="col-12 col-md-6">
                                <label class="form-label" for="modalpago">Método de pago</label>
                                <select id="modalEditpago" name="modalpago" class="select2 form-select"
                                    aria-label="Default select example">
                                    <option selected disabled>Selecciona un método de pago</option>
                                    <option value="efectivo">Efectivo</option>
                                    <option value="transferencia">Transferencia</option>
                                    <option value="tarjeta">Tarjeta de crédito</option>
                                    <option value="paypal">paypal</option>
                                </select>
                            </div>
                            <div class="col-12 col-md-6">
                                <label class="form-label" for="modalTotal">Total</label>
                                <input type="text" id="modalEditTotal" name="modalTotal" 
                                    class="form-control modal-edit-tax-id" placeholder="Total" readonly />
                            </div>

                            <div class="col-12 text-center d-flex gap-2 justify-content-center">
                                <button type="reset" class="btn btn-label-secondary" data-bs-dismiss="modal"
                                    aria-label="Close">Cancelar</button>
                                <button type="submit" class="btn btn-primary me-sm-3 me-1" onclick="guardarRenta()">Guardar</button>
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
                <form id="deleteRentalForm" class="row g-3" onsubmit="return false">
                    @csrf
                    @method('DELETE') <!-- Agrega este campo -->
                    <input type="hidden" id="deleteRentalId" name="deleteRentalId" value="{{ $rental->id }}"> <!-- Campo oculto para almacenar el ID de la renta -->

                    <div class="col-12 text-center">
                        <button type="button" class="btn btn-label-secondary btn-reset" data-bs-dismiss="modal" aria-label="Close">Cancelar</button>
                        <button type="submit" class="btn btn-primary me-sm-3 me-1" onclick="eliminarRenta()">Aceptar</button>
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
            var fechaPrestamoInput = document.getElementById('fechaPrestamo');
            var fechaEntregaInput = document.getElementById('fechaEntrega');
            var fechaEditPrestamoInput = document.getElementById('fechaPrestamoEdit');
            var fechaEditEntregaInput = document.getElementById('fechaEntregaEdit');

            // Configura flatpickr para el campo de fecha de entrega
            flatpickr(fechaPrestamoInput, {
                enableTime: false, 
                dateFormat: 'Y-m-d', // Formato de fecha deseado
                defaultDate: 'today',
                
            });

            flatpickr(fechaEntregaInput, {
                enableTime: false, 
                dateFormat: 'Y-m-d', // Formato de fecha deseado
            });

                // Configura flatpickr para el campo de fecha de entrega edicion
                flatpickr(fechaEditPrestamoInput, {
                enableTime: false, 
                dateFormat: 'Y-m-d', // Formato de fecha deseado
                defaultDate: 'today',
                
            });

            flatpickr(fechaEditEntregaInput, {
                enableTime: false, 
                dateFormat: 'Y-m-d', // Formato de fecha deseado
            });


        });
    </script>
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            // campos de fecha de préstamo, entrega y el campo de días
            var fechaPrestamoInput = document.getElementById('fechaPrestamo');
            var fechaEntregaInput = document.getElementById('fechaEntrega');
            var diasModalInput = document.getElementById('modalDias');

            var fechaEditPrestamoInput = document.getElementById('fechaPrestamoEdit');
            var fechaEditEntregaInput = document.getElementById('fechaEntregaEdit');
            var diasModalInput = document.getElementById('modalEditDias');

            // Función para calcular y actualizar los días cuando cambian las fechas
            function actualizarDias() {
                var fechaPrestamo = new Date(fechaPrestamoInput.value);
                var fechaEntrega = new Date(fechaEntregaInput.value);

                var fechaEditPrestamo = new Date(fechaEditPrestamoInput.value);
                var fechaEditEntrega = new Date(fechaEditEntregaInput.value);

                // Calcula la diferencia en días
                var diasDiferencia = Math.ceil((fechaEntrega - fechaPrestamo) / (1000 * 60 * 60 * 24));
                var diasDiferenciaEdit = Math.ceil((fechaEditEntrega - fechaEditPrestamo) / (1000 * 60 * 60 * 24));

                // Actualiza el campo de días en el modal
                diasModalInput.value = diasDiferencia;
                diasModalInput.value = diasDiferenciaEdit;
            }

            // Configura flatpickr para los campos de fecha de préstamo y entrega
            flatpickr(fechaPrestamoInput, {
                enableTime: false,
                dateFormat: 'Y-m-d',
                defaultDate: 'today',
                onChange: actualizarDias, 
            });

            flatpickr(fechaEntregaInput, {
                enableTime: false,
                dateFormat: 'Y-m-d',
                defaultDate: 'tomorrow', // Establece el día siguiente como predeterminado
                onChange: actualizarDias, // Llama a la función cuando cambia la fecha de entrega
            });


            flatpickr(fechaEditPrestamo, {
                enableTime: false,
                dateFormat: 'Y-m-d',
                defaultDate: 'today',
                onChange: actualizarDias, 
            });

            flatpickr(fechaEditEntregaInput, {
                enableTime: false,
                dateFormat: 'Y-m-d',
                defaultDate: 'tomorrow', // Establece el día siguiente como predeterminado
                onChange: actualizarDias, // Llama a la función cuando cambia la fecha de entrega
            });
        });
    </script>
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            var tarifaSelect = document.getElementById('modalTarifa');
            var diasInput = document.getElementById('modalDias');
            var totalInput = document.getElementById('modalTotal');
            

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

<script>
        document.addEventListener('DOMContentLoaded', function () {
            var tarifaSelect = document.getElementById('modalEditTarifa');
            var diasInput = document.getElementById('modalEditDias');
            var totalInput = document.getElementById('modalEditTotal');
            

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

    <script>
        document.addEventListener('DOMContentLoaded', function () {
    // ...

    // Listener para botones de editar
    document.querySelectorAll('.dropdown-item.edit-rental').forEach(function (editButton) {
        editButton.addEventListener('click', function () {
            // Obtén el ID de la renta desde el atributo data
            var rentalId = this.getAttribute('data-rental-id');

            // Llama a la función para cargar y mostrar los datos en el modal de edición
            cargarDatosEdicion(rentalId);
        });
    });

    // Función para cargar y mostrar datos en el modal de edición
    function cargarDatosEdicion(rentalId) {
        // Realiza una solicitud AJAX para obtener los datos de la renta seleccionada
        // Puedes usar Axios, jQuery.ajax, fetch, u otro método para hacer la solicitud

        // Ejemplo usando fetch
        fetch('/rentals/' + rentalId)
            .then(response => response.json())
            .then(data => {
                // Llena los campos del modal con los datos obtenidos
                document.getElementById('modalEditCliente').value = data.client_id;
                document.getElementById('modalEditVehiculo').value = data.id_vehiculo;
                document.getElementById('fechaPrestamoEdit').value = data.initial_day;
                document.getElementById('fechaEntregaEdit').value = data.delivery_day;
                document.getElementById('modalEditTarifa').value = data.id_tarifa;
                document.getElementById('modalEditPago').value = data.billRental ? data.billRental.metodo_pago : '';

                // Actualiza cualquier otro campo necesario

                // Muestra el modal de edición
                var editRentalModal = new bootstrap.Modal(document.getElementById('editRental'));
                editRentalModal.show();
            })
            .catch(error => {
                console.error('Error al cargar datos de la renta', error);
            });
    }
});

    </script>
    <script>
        function eliminarRenta() {
            var rentalId = document.getElementById('deleteRentalId').value;
            console.log('Eliminar Renta ID:', rentalId);


            // Envía la solicitud de eliminación al servidor
            fetch('/rentals/' + rentalId, {
                method: 'DELETE',
                headers: {
                    'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').content,
                },
            }).then(response => {
                if (response.ok) {
                    // La renta se eliminó con éxito, puedes recargar la página o actualizar la lista de rentas de otra manera.
                    location.reload();
                } else {
                    // La eliminación falló, puedes manejar el error de otra manera.
                    console.error('Error al eliminar la renta');
                }
            }).catch(error => {
                console.error('Error al eliminar la renta', error);
            });
        }

    </script>


@endsection
