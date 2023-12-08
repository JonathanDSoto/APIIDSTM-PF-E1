@extends('layouts.template')

@section('menu')
@include('layouts.sidebar')
@endsection

@section('searchbar')
@include('layouts.searchbar')
@endsection

@section('content')
<div class="container-xxl flex-grow-1 container-p-y">
    <!-- User Card -->
    <div class="card mb-4">
        <div class="card-body">
            <div class="user-avatar-section">
                <div class="d-flex align-items-center flex-column">
                    <img class="img-fluid rounded mb-3 pt-1 mt-4" src="../../assets/img/avatars/user.png" height="100"
                        width="100" alt="User avatar" />
                    <div class="user-info text-center">
                        <h4 class="mb-2">{{ Auth::user()->name }} {{ Auth::user()->lastname }}</h4>
                        <span class="badge bg-label-secondary mt-1">{{ Auth::user()->role }}</span>
                    </div>
                </div>
            </div>
            <p class="mt-4 small text-uppercase text-muted">Detalles</p>
            <div class="info-container">
                <ul class="list-unstyled">
                    <li class="mb-2 pt-1">
                        <span class="fw-medium me-1">Nombre:</span>
                        <span>{{ Auth::user()->name }}</span>
                    </li>
                    <li class="mb-2 pt-1">
                        <span class="fw-medium me-1">Apellido:</span>
                        <span>{{ Auth::user()->lastname }}</span>
                    </li>
                    <li class="mb-2 pt-1">
                        <span class="fw-medium me-1">Correo:</span>
                        <span>{{ Auth::user()->email }}</span>
                    </li>
                    <li class="mb-2 pt-1">
                        <span class="fw-medium me-1">Contacto:</span>
                        <span>{{ Auth::user()->phone }}</span>
                    </li>

                </ul>

            </div>
        </div>
    </div>
</div>
@endsection