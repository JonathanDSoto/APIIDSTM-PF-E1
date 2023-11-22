@extends ('layouts.template')
@section('menu')
@include('layouts.sidebar')
@endsection
@section('searchbar')
@include('layouts.searchbar')
@endsection
@section('content')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" integrity="sha384-mQ93GR66B00ZXjt0YO5KlohRA5SY2XofP+WI5P5Gn9We8eW5tOWNE4uPmk/P9Em" crossorigin="anonymous">

<link rel="stylesheet" href="../../assets/vendor/libs/datatables-bs5/datatables.bootstrap5.css">
<div class="container-xxl flex-grow-1 container-p-y">
    <div class="card-body">
        <div class="card">
            <div class="card-body text-center">
                <div class="btn-container">
                    <a href="/carform">
                        <button type="button" class="btn btn-info" style="width: 150px; height: 40px;">Nuevo Registro</button>
                    </a>
                    <a href="/carform">
                        <button type="button" class="btn btn-secondary" style="width: 150px; height: 40px;">Editar Registros</button>
                    </a>

                    <div class="demo-inline-spacing">
                        <button type="button" class="btn btn-danger" style="width: 150px; height: 40px;" data-bs-toggle="modal" data-bs-target="#smallModal">
                            Eliminar Registro
                        </button>
                        <div class="modal fade" id="smallModal" tabindex="-1" aria-hidden="true">
                            <div class="modal-dialog modal-sm" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        <div class="row">
                                            <div class="col mb-3">
                                                <label for="nameSmall" class="form-label">Incresa id del vehiculo a eliminar</label>
                                                <input type="text" id="nameSmall" class="form-control" placeholder="ID">
                                            </div>
                                        </div>

                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-label-secondary" data-bs-dismiss="modal">Close</button>
                                        <button type="button" class="btn btn-danger">Eliminar</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card-datatable table-responsive pt-0">
                    <table class="datatables-basic table">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Foto</th>
                                <th>Marca</th>
                                <th>Modelo</th>
                                <th>Categoria</th>
                                <th>Tarifa</th>
                                <th>Disponibilidad</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>21</td>
                                <td> <img src="..\assets\img\svgs\ferrari.svg" alt="Descripción del SVG"></td>
                                <td>Ferrari</td>
                                <td>LaFerrari</td>
                                <td>Deportivo</td>
                                <td>200.00</td>
                                <td>Disponible</td>
                            </tr>
                            <tr>
                                <td>22</td>
                                <td> <img src="..\assets\img\svgs\jeep.svg" alt="Descripción del SVG"></td>
                                <td>Jeep</td>
                                <td>Wrangler</td>
                                <td>SUV</td>
                                <td>65.99</td>
                                <td>Disponible</td>
                            </tr>
                            <tr>
                                <td>23</td>
                                <td> <img src="..\assets\img\svgs\volvo.svg" alt="Descripción del SVG"></td>
                                <td>Volvo</td>
                                <td>XC90</td>
                                <td>SUV</td>
                                <td>75.50</td>
                                <td>Disponible</td>
                            </tr>
                            <tr>
                                <td>24</td>
                                <td> <img src="..\assets\img\svgs\mazda.svg" alt="Descripción del SVG"></td>
                                <td>Mazda</td>
                                <td>CX-5</td>
                                <td>SUV</td>
                                <td>55.80</td>
                                <td>Disponible</td>
                            </tr>
                            <tr>
                                <td>25</td>
                                <td> <img src="..\assets\img\svgs\hyundai.svg" alt="Descripción del SVG"></td>
                                <td>Hyundai</td>
                                <td>Tucson</td>
                                <td>SUV</td>
                                <td>48.90</td>
                                <td>Disponible</td>
                            </tr>
                            <tr>
                                <td>26</td>
                                <td> <img src="..\assets\img\svgs\subaru.svg" alt="Descripción del SVG"></td>
                                <td>Subaru</td>
                                <td>Outback</td>
                                <td>Station Wagon</td>
                                <td>42.75</td>
                                <td>Disponible</td>
                            </tr>
                            <tr>
                                <td>27</td>
                                <td> <img src="..\assets\img\svgs\kia.svg" alt="Descripción del SVG"></td>
                                <td>Kia</td>
                                <td>Soul</td>
                                <td>Hatchback</td>
                                <td>38.50</td>
                                <td>Disponible</td>
                            </tr>
                            <tr>
                                <td>28</td>
                                <td> <img src="..\assets\img\svgs\jaguar.svg" alt="Descripción del SVG"></td>
                                <td>Jaguar</td>
                                <td>F-PACE</td>
                                <td>SUV</td>
                                <td>85.20</td>
                                <td>No disponible</td>
                            </tr>
                            <tr>
                                <td>29</td>
                                <td> <img src="..\assets\img\svgs\chrysler.svg" alt="Descripción del SVG"></td>
                                <td>Chrysler</td>
                                <td>Pacifica</td>
                                <td>Minivan</td>
                                <td>60.25</td>
                                <td>Disponible</td>
                            </tr>
                            <tr>
                                <td>30</td>
                                <td> <img src="..\assets\img\svgs\lexus.svg" alt="Descripción del SVG"></td>
                                <td>Lexus</td>
                                <td>RX</td>
                                <td>SUV</td>
                                <td>70.90</td>
                                <td>Disponible</td>
                            </tr>
                        </tbody>
                    </table>
                </div>


            </div>
        </div>
    </div>


    <script src="../../assets/vendor/libs/jquery/jquery.js"></script>
    <script src="../../assets/vendor/libs/popper/popper.js"></script>
    <!-- <script src="../../assets/vendor/js/bootstrap.js"></script> -->
    <script src="../../assets/vendor/libs/node-waves/node-waves.js"></script>
    <script src="../../assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.js"></script>
    <script src="../../assets/vendor/libs/hammer/hammer.js"></script>
    <script src="../../assets/vendor/libs/i18n/i18n.js"></script>
    <script src="../../assets/vendor/libs/typeahead-js/typeahead.js"></script>
    <script src="../../assets/vendor/js/menu.js"></script>
    <script src="../../assets/vendor/libs/datatables-bs5/datatables-bootstrap5.js"></script>
    <script src="../../assets/vendor/libs/moment/moment.js"></script>
    <script src="../../assets/vendor/libs/flatpickr/flatpickr.js"></script>
    <!-- <script src="../../assets/js/tables-datatables-basic.js"></script> -->




    @endsection
    @section('footer')
    @include('layouts.footer')
    @endsection