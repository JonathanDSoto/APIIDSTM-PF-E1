<aside id="layout-menu" class="layout-menu menu-vertical menu bg-menu-theme">
    <div class="app-brand demo">
        <a href={{ route('vehicles.index') }} class="app-brand-link">
            <img src="../assets/img/brand/logo_small_icon_only.png" alt="Logo" width="auto" height="40">
            <span class="app-brand-text demo menu-text fw-bold">Autoexpress</span>
        </a>
    </div>

    <div class="menu-inner-shadow"></div>

    <ul class="menu-inner py-1">

        <!-- Vehicles -->
        <li class="menu-item">
            <a href="javascript:void(0);" class="menu-link menu-toggle">
                <i class="menu-icon tf-icons ti ti-truck"></i>
                <div>Vehiculos</div>
            </a>
            <ul class="menu-sub">
                <li class="menu-item">
                    <a href={{ route('vehicles.index') }} class="menu-link">
                        <div>Dashboard</div>
                    </a>
                </li>
                
            </ul>
        </li>
        <!-- Clients -->
        <li class="menu-item">
            <a href="javascript:void(0);" class="menu-link menu-toggle">
                <i class="menu-icon tf-icons tf-icons ti ti-users"></i>
                <div>Clientes</div>
            </a>
            <ul class="menu-sub">
                <li class="menu-item">
                    <a href={{ route('clients.index') }} class="menu-link">
                        <div>Dashboard</div>
                    </a>
                </li>
            </ul>
        </li>
        <li class="menu-item">
            <a href={{ route('rentals.index') }} class="menu-link">
                <i class="menu-icon tf-icons ti ti-file-dollar"></i>
                <div>Rentas</div>
            </a>
        </li>
        <li class="menu-item">
            <a href={{ route('categories.index') }} class="menu-link">
                <i class="menu-icon fa-solid fa-list-check"></i>
                <div>Categorías</div>
            </a>
        </li>
    </ul>
</aside>
