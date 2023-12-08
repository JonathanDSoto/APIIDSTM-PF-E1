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
                            
                            <th>Nombres</th>
                            <th>Apellido Paterno</th>
                            <th>Correo electrónico</th>
                            <th>Teléfono</th>
                            <th>Dirección</th>
                            <th>Código postal</th>
                            <th>Acciones</th>
                        </tr>
                    </thead>
                    <tbody>
                    @foreach ($clients as $client)
                        <tr>
                            <td>{{ $client->name }}</td>
                            <td>{{ $client->lastname }}</td>
                            <td>{{ $client->email }}</td>
                            <td>{{ $client->phone }}</td>
                            
                            <td>{{ $client->idAddress->address }}</td>
                            <td>{{ $client->idAddress->code_postal }}</td>
                            
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
                                        <button type="button" class="dropdown-item edit-client-btn" data-client-id="{{ $client->id }}" 
                                            data-bs-toggle="modal" data-bs-target="#editClient">
                                            <i class="ti ti-edit me-1"></i>
                                            Editar
                                        </button>
                                        <button type="button" class="dropdown-item delete-client-btn" data-client-id="{{ $client->id }}"
                                            data-bs-toggle="modal" data-bs-target="#deleteClient">
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

        <!-- Create Client Modal -->
        <div class="modal fade" id="createClient" tabindex="-1" aria-hidden="true">
            <div class="modal-dialog modal-lg modal-simple modal-edit-user">
                <div class="modal-content p-3 p-md-5">
                    <div class="modal-body">
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        <div class="text-center mb-4">
                            <h3 class="mb-2">Agregar cliente</h3>
                        </div>
                        <form id="createClientForm" class="row g-3" action="{{ route('clients.create') }}" method="POST">
                        @csrf
                            <div class="col-12 col-md-6">
                                <label class="form-label" for="name">Nombres</label>
                                <input type="text" id="name" name="name" pattern="[A-Za-z\s]*"
                                    class="form-control modal-edit-marca-id" placeholder="Nombres" required/>
                            </div>
                            <div class="col-12 col-md-6">
                                <label class="form-label" for="modalShowMarca">Apellido Paterno</label>
                                <input type="text" id="lastname" name="lastname" pattern="[A-Za-z\s]*"
                                    class="form-control modal-edit-marca-id" placeholder="Apellido Paterno"/>
                            </div>
                            <div class="col-12 col-md-6">
                                <label class="form-label" for="modalShowMarca">Correo electrónico</label>
                                <input type="email" id="email" name="email"
                                    class="form-control modal-edit-marca-id" placeholder="Correo electrónico"/>
                            </div>
                            <div class="col-12 col-md-6">
                                <label class="form-label" for="modalShowMarca">Teléfono</label>
                                <input type="number" id="phone" name="phone" pattern="[^0-9]*"
                                    class="form-control modal-edit-marca-id" placeholder="Teléfono"/>
                            </div>
                            <div class="col-12 col-md-6">
                                <label class="form-label" for="address">Dirección</label>
                                <input type="text" id="address" name="address" 
                                    class="form-control modal-edit-marca-id" placeholder="Dirección" required/>
                            </div>
                            <div class="col-12 col-md-6">
                                <label class="form-label" for="code_postal">Código postal</label>
                                <input type="number" id="code_postal" name="code_postal" pattern="[^0-9]*"
                                    class="form-control modal-edit-marca-id" placeholder="Código postal" required/>
                            </div>

                           
                            <div class="col-12 text-center d-flex gap-2 justify-content-center">
                                <button type="button" class="btn btn-label-secondary" data-bs-dismiss="modal"
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
                        <form id="showClientForm" class="row g-3">
                            <div class="col-12 col-md-6">
                                <label class="form-label" for="modalShowMarca">Nombres</label>
                                <input type="text" id="showName" name="showName" pattern="[A-Za-z\s]*"
                                    class="form-control modal-edit-marca-id" value="{{ $client->name }}" placeholder="Nombres" disabled/>
                            </div>
                            <div class="col-12 col-md-6">
                                <label class="form-label" for="modalShowMarca">Apellido Paterno</label>
                                <input type="text" id="showLastname" name="showLastname" pattern="[A-Za-z\s]*"
                                    class="form-control modal-edit-marca-id" value="{{ $client->lastname }}" placeholder="Apellido Paterno" disabled/>
                            </div>
                            <div class="col-12 col-md-6">
                                <label class="form-label" for="modalShowMarca">Correo electrónico</label>
                                <input type="email" id="showEmail" name="showEmail"
                                    class="form-control modal-edit-marca-id" value="{{ $client->email }}" placeholder="Correo electrónico" disabled/>
                            </div>
                            <div class="col-12 col-md-6">
                                <label class="form-label" for="modalShowMarca">Teléfono</label>
                                <input type="number" id="showPhone" name="showPhone" pattern="[^0-9]*"
                                    class="form-control modal-edit-marca-id" value="{{ $client->phone }}" placeholder="Teléfono" disabled/>
                            </div>
                            <div class="col-12 col-md-6">
                                <label class="form-label" for="modalShowMarca">Dirección</label>
                                <input type="text" id="showAddress" name="showAddress" 
                                    class="form-control modal-edit-marca-id" value="{{ $client->idAddress->address }}" placeholder="Dirección" disabled/>
                            </div>
                            <div class="col-12 col-md-6">
                                <label class="form-label" for="modalShowMarca">Código postal</label>
                                <input type="number" id="showCodePostal" name="showCodePostal" pattern="[^0-9]*"
                                    class="form-control modal-edit-marca-id" value="{{ $client->idAddress->code_postal }}" placeholder="Código postal" disabled/>
                            </div>

                           
                            <div class="col-12 text-center d-flex gap-2 justify-content-center">
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
                        <form id="editModalForm" class="row g-3" action="{{ route('clients.update', ['client' => $client->id]) }}" method="POST">
                            @csrf
                            @method('PUT')
                            <div class="col-12 col-md-6">
                                <label class="form-label" for="modalShowMarca">Nombres</label>
                                <input type="text" id="nameEdit" name="nameEdit" pattern="[A-Za-z\s]*"
                                    class="form-control modal-edit-marca-id" placeholder="Nombres"/>
                            </div>
                            <div class="col-12 col-md-6">
                                <label class="form-label" for="modalShowMarca">Apellido Paterno</label>
                                <input type="text" id="lastnameEdit" name="lastnameEdit" pattern="[A-Za-z\s]*"
                                    class="form-control modal-edit-marca-id" placeholder="Apellido Paterno"/>
                            </div>
                            <div class="col-12 col-md-6">
                                <label class="form-label" for="modalShowMarca">Correo electrónico</label>
                                <input type="email" id="emailEdit" name="emailEdit"
                                    class="form-control modal-edit-marca-id" placeholder="Correo electrónico"/>
                            </div>
                            <div class="col-12 col-md-6">
                                <label class="form-label" for="modalShowMarca">Teléfono</label>
                                <input type="number" id="phoneEdit" name="phoneEdit" pattern="[^0-9]*"
                                    class="form-control modal-edit-marca-id" placeholder="Teléfono"/>
                            </div>
                            <div class="col-12 col-md-6">
                                <label class="form-label" for="modalShowMarca">Dirección</label>
                                <input type="text" id="addressEdit" name="addressEdit" pattern="[A-Za-z\s]*"
                                    class="form-control modal-edit-marca-id" placeholder="Dirección"/>
                            </div>
                            <div class="col-12 col-md-6">
                                <label class="form-label" for="modalShowMarca">Código postal</label>
                                <input type="number" id="code_postalEdit" name="code_postalEdit" pattern="[^0-9]*"
                                    class="form-control modal-edit-marca-id" placeholder="Código postal"/>
                            </div>

                           
                            <input type="hidden" name="client_id" value="{{ $client->id }}">
                            <div class="col-12 text-center d-flex gap-2 justify-content-center">
                            <button type="reset" class="btn btn-label-secondary" 
                                data-bs-dismiss="modal" aria-label="Close">Cancelar</button>
                                    <button type="submit" class="btn btn-primary me-sm-3 me-1" id="saveEditButton">Guardar cambios</button>
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
                        <form id="deleteClientForm" method="POST" onsubmit="return false">
                            @csrf
                            @method('DELETE')
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
    <!--Sección de JavaScript -->
    @if(session('toast'))
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            Swal.fire({
                icon: '{{ session('toast.type') }}',
                title: '{{ session('toast.message') }}',
                timer: 3000,
                showConfirmButton: false,
            });
        });
    </script>
    @endif

    <script>
        document.addEventListener('DOMContentLoaded', function () {
            const editButtons = document.querySelectorAll('.edit-client-btn');
            const editModalForm = document.getElementById('editModalForm');
            const saveEditButton = document.getElementById('saveEditButton');

            editButtons.forEach(button => {
                button.addEventListener('click', function () {
                    const clientId = this.getAttribute('data-client-id');

                fetch(`/clients/${clientId}/edit-data`)
                    .then(response => response.json())
                    .then(data => {
                        document.getElementById('name').value = data.name;
                        document.getElementById('lastname').value = data.lastname;
                        document.getElementById('email').value = data.email;
                        document.getElementById('phone').value = data.phone;
                        document.getElementById('address').value = data.idAddress.address;
                        document.getElementById('code_postal').value = data.idAddress.code_postal;
                    });
                    const row = this.closest('tr');
                    
                    const name = row.cells[0].textContent.trim();
                    const lastname = row.cells[1].textContent.trim();
                    const email = row.cells[2].textContent.trim();
                    const phone = row.cells[3].textContent.trim();
                    const address = row.cells[4].textContent.trim();
                    const code_postal = row.cells[5].textContent.trim();

                    document.getElementById('nameEdit').value = name;
                    document.getElementById('lastnameEdit').value = lastname;
                    document.getElementById('emailEdit').value = email;
                    document.getElementById('phoneEdit').value = phone;
                    document.getElementById('addressEdit').value = address;
                    document.getElementById('code_postalEdit').value = code_postal;

                    const editClientModal = new bootstrap.Modal(document.getElementById('editClient'));
                    editClientModal.show();
                });
            });

            saveEditButton.addEventListener('click', function () {
                const clientId = document.getElementById('client_id').value;

                fetch(`/clients/${clientId}/edit`, {
                method: 'PUT',
                body: new FormData(editModalForm),
                }).then(response => {
                    if (response.ok) {
                        console.log('Cliente actualizado exitosamente');
                    } else {
                        console.error('Error al actualizar el cliente');
                    }
                });
            });
        });
    </script>

    <script>
        document.addEventListener('DOMContentLoaded', function () {
            const deleteButtons = document.querySelectorAll('.delete-client-btn');
            const deleteClientModal = new bootstrap.Modal(document.getElementById('deleteClient'));
            const deleteForm = document.getElementById('deleteClientForm');

            deleteButtons.forEach(button => {
                button.addEventListener('click', function () {
                    const clientId = this.getAttribute('data-client-id');
                    const deleteClientUrl = `/clients/${clientId}`;

                    deleteForm.setAttribute('action', deleteClientUrl);
                    deleteClientModal.show();
                });
            });

            deleteForm.addEventListener('submit', function () {
                const deleteClientUrl = deleteForm.getAttribute('action');

                fetch(deleteClientUrl, {
                    method: 'DELETE',
                    headers: {
                        'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').content,
                    },
                })
                .then(response => {
                    if (response.ok) {
                        console.log('Cliente eliminado exitosamente');
                        window.location.reload();
                    } else {
                        console.error('Error al eliminar el cliente');
                    }
                })
                .catch(error => {
                    console.error('Error en la petición DELETE:', error);
                });
            });
        });
    </script>




@endsection