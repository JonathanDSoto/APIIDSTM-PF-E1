@php
function isActive($url)
{
return request()->url() == url($url);
}
@endphp

<ul class="menu-inner py-1">
    <!-- Primer elemento del menú -->
    <li class="menu-item{{ isActive('/vehicles')|| isActive('/carform') || isActive('/carform') ? ' active open' : '' }}">
        <a href="javascript:void(0);" class="menu-link menu-toggle">
            <i class="menu-icon tf-icons ti ti-truck"></i>
            <div data-i18n="Vehículos">Vehículos</div>
        </a>
        <ul class="menu-sub">
            <!-- Elemento del submenú para Consultas -->
            <li class="menu-item{{ isActive('/vehicles') ? ' active open' : '' }}">
                <a href="{{ url('/vehicles') }}" class="menu-link">
                    <div data-i18n="Consultas">Consultas</div>
                </a>
            </li>
            <li class="menu-item{{ isActive('/carform') ? ' active open' : '' }}">
                <a href="{{ url('/carform') }}" class="menu-link">
                    <div data-i18n="Registrar">Registrar</div>
                </a>
            </li>
            <li class="menu-item{{ isActive('/carform') ? ' active open' : '' }}">
                <a href="{{ url('/carform') }}" class="menu-link">
                    <div data-i18n="Editar">Editar</div>
                </a>
            </li>
        </ul>
    </li>
    <!-- Elemento adicional del menú: Clientes -->
    <li class="menu-item{{ isActive('/userlist') || isActive('/clients') || isActive('/newclient') ? ' active open' : '' }}">
        <a href="javascript:void(0);" class="menu-link menu-toggle">
            <i class="menu-icon tf-icons ti ti-users"></i>
            <div data-i18n="Clientes">Clientes</div>
        </a>
        <ul class="menu-sub">
            <!-- Elementos del submenú para Lista de clientes, Historial de rentas y Registrar -->
            <li class="menu-item{{ isActive('/userlist') ? ' active open' : '' }}">
                <a href="{{ url('/userlist') }}" class="menu-link">
                    <div data-i18n="Lista de Clientes">Lista de clientes</div>
                </a>
            </li>
            <li class="menu-item{{ isActive('/clients') ? ' active open' : '' }}">
                <a href="{{ url('/clients') }}" class="menu-link">
                    <div data-i18n="Historial de rentas">Historial de rentas</div>
                </a>
            </li>
            <li class="menu-item{{ isActive('/newclient') ? ' active open' : '' }}">
                <a href="{{ url('/newclient') }}" class="menu-link">
                    <div data-i18n="Registrar">Registrar</div>
                </a>
            </li>
        </ul>
    </li>
    <!-- Elemento adicional del menú: Rentas -->
    <li class="menu-item{{ isActive('/app-academy-dashboard.html') || isActive('/app-academy-course.html') || isActive('/app-academy-course-details.html') ? ' active open' : '' }}">
        <a href="javascript:void(0);" class="menu-link menu-toggle">
            <i class='menu-icon tf-icons ti ti-file-dollar'></i>
            <div data-i18n="Rentas">Rentas</div>
        </a>
        <ul class="menu-sub">
            <!-- Elementos del submenú para Consultar, Crear, Editar y Eliminar -->
            <li class="menu-item{{ isActive('/app-academy-dashboard.html') ? ' active open' : '' }}">
                <a href="{{ url('/app-academy-dashboard.html') }}" class="menu-link">
                    <div data-i18n="Consultar">Consultar</div>
                </a>
            </li>
            <li class="menu-item{{ isActive('/app-academy-course.html') ? ' active open' : '' }}">
                <a href="{{ url('/app-academy-course.html') }}" class="menu-link">
                    <div data-i18n="Crear">Crear</div>
                </a>
            </li>
            <li class="menu-item{{ isActive('/app-academy-course-details.html') ? ' active open' : '' }}">
                <a href="{{ url('/app-academy-course-details.html') }}" class="menu-link">
                    <div data-i18n="Editar">Editar</div>
                </a>
            </li>
            <li class="menu-item{{ isActive('/app-academy-course-details.html') ? ' active open' : '' }}">
                <a href="{{ url('/app-academy-course-details.html') }}" class="menu-link">
                    <div data-i18n="Eliminar">Eliminar</div>
                </a>
            </li>
        </ul>
    </li>
    <li class="menu-item{{ isActive('/app-academy-dashboard.html') || isActive('/app-academy-course.html') || isActive('/app-academy-course-details.html') ? ' active open' : '' }}">
        <a href="javascript:void(0);" class="menu-link menu-toggle">
        <i class='menu-icon fa-solid fa-list-check'></i>
            <div data-i18n="Categorías">Categorías</div>
        </a>
        <ul class="menu-sub">
            <!-- Elementos del submenú para Consultar, Crear, Editar y Eliminar -->
            <li class="menu-item{{ isActive('/app-academy-dashboard.html') ? ' active open' : '' }}">
                <a href="{{ url('/app-academy-dashboard.html') }}" class="menu-link">
                <div data-i18n="Consultar">Consultar</div>
                </a>
            </li>
            <li class="menu-item{{ isActive('/app-academy-course.html') ? ' active open' : '' }}">
                <a href="{{ url('/app-academy-course.html') }}" class="menu-link">
                <div data-i18n="Crear">Crear</div>
                </a>
            </li>
            <li class="menu-item{{ isActive('/app-academy-course-details.html') ? ' active open' : '' }}">
                <a href="{{ url('/app-academy-course-details.html') }}" class="menu-link">
                    <div data-i18n="Editar">Editar</div>
                </a>
            </li>
            <li class="menu-item{{ isActive('/app-academy-course-details.html') ? ' active open' : '' }}">
                <a href="{{ url('/app-academy-course-details.html') }}" class="menu-link">
                    <div data-i18n="Eliminar">Eliminar</div>
                </a>
            </li>
        </ul>
    </li>
    <li class="menu-item{{ isActive('/app-academy-dashboard.html') || isActive('/app-academy-course.html') || isActive('/app-academy-course-details.html') ? ' active open' : '' }}">
        <a href="javascript:void(0);" class="menu-link menu-toggle">
        <i class="menu-icon tf-icons fa-regular fa-bookmark"></i>
            <div data-i18n="Marcas">Marcas</div>
        </a>
        <ul class="menu-sub">
            <!-- Elementos del submenú para Consultar, Crear, Editar y Eliminar -->
            <li class="menu-item{{ isActive('/app-academy-dashboard.html') ? ' active open' : '' }}">
                <a href="{{ url('/app-academy-dashboard.html') }}" class="menu-link">
                <div data-i18n="Consultar">Consultar</div>
                </a>
            </li>
            <li class="menu-item{{ isActive('/app-academy-course.html') ? ' active open' : '' }}">
                <a href="{{ url('/app-academy-course.html') }}" class="menu-link">
                <div data-i18n="Crear">Crear</div>
                </a>
            </li>
            <li class="menu-item{{ isActive('/app-academy-course-details.html') ? ' active open' : '' }}">
                <a href="{{ url('/app-academy-course-details.html') }}" class="menu-link">
                    <div data-i18n="Editar">Editar</div>
                </a>
            </li>
            <li class="menu-item{{ isActive('/app-academy-course-details.html') ? ' active open' : '' }}">
                <a href="{{ url('/app-academy-course-details.html') }}" class="menu-link">
                    <div data-i18n="Eliminar">Eliminar</div>
                </a>
            </li>
        </ul>
    </li>
</ul>
</aside>
