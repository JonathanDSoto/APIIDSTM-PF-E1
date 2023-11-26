@extends ('layouts.template')
@section('menu')
@include('layouts.sidebar')
@endsection
@section('searchbar')
@include('layouts.searchbar')
@endsection
@section('content')

<link rel="stylesheet" href="../../assets/vendor/libs/datatables-bs5/datatables.bootstrap5.css">
<div class="container-xxl flex-grow-1 container-p-y">
    <div class="card shadow-none bg-transparent border border-primary mb-3 ml-4">
        <div class="card-body">
            <div class="card">
                <h5 class="card-header">Column Search</h5>
                <div class="card-datatable text-nowrap">
                    <table class="dt-column-search table">
                        <thead>
                            <tr>
                                <th>Cliente</th>
                                <th>Auto</th>
                                <th>Tarifa</th>
                                <th>Renta</th>
                                <th>Devolución</th>
                                <th>Dias</th>
                                <th>Total</th>
                            </tr>
                        </thead>
                        <tbody>

                            <tr>
                                <td>Juan Pérez</td>
                                <td>Toyota Corolla</td>
                                <td>$50</td>
                                <td>$300</td>
                                <td>$50</td>
                                <td>5</td>
                                <td>$350</td>
                            </tr>
                            <tr>
                                <td>Maria Rodriguez</td>
                                <td>Ford Focus</td>
                                <td>$45</td>
                                <td>$250</td>
                                <td>$30</td>
                                <td>4</td>
                                <td>$280</td>
                            </tr>
                            <tr>
                                <td>Carlos Gutiérrez</td>
                                <td>Chevrolet Malibu</td>
                                <td>$55</td>
                                <td>$400</td>
                                <td>$70</td>
                                <td>7</td>
                                <td>$470</td>
                            </tr>
                            <tr>
                                <td>Laura Fernández</td>
                                <td>Honda Civic</td>
                                <td>$48</td>
                                <td>$350</td>
                                <td>$40</td>
                                <td>3</td>
                                <td>$390</td>
                            </tr>
                            <tr>
                                <td>Ricardo Martínez</td>
                                <td>Nissan Altima</td>
                                <td>$52</td>
                                <td>$280</td>
                                <td>$25</td>
                                <td>6</td>
                                <td>$305</td>
                            </tr>
                            <tr>
                                <td>Ana López</td>
                                <td>Hyundai Elantra</td>
                                <td>$42</td>
                                <td>$200</td>
                                <td>$20</td>
                                <td>2</td>
                                <td>$220</td>
                            </tr>
                            <tr>
                                <td>Pablo Herrera</td>
                                <td>Subaru Impreza</td>
                                <td>$47</td>
                                <td>$320</td>
                                <td>$45</td>
                                <td>4</td>
                                <td>$365</td>
                            </tr>
                            <tr>
                                <td>Sofía Ramírez</td>
                                <td>Mazda3</td>
                                <td>$50</td>
                                <td>$300</td>
                                <td>$30</td>
                                <td>5</td>
                                <td>$330</td>
                            </tr>
                            <tr>
                                <td>Javier Torres</td>
                                <td>Volkswagen Jetta</td>
                                <td>$53</td>
                                <td>$380</td>
                                <td>$60</td>
                                <td>6</td>
                                <td>$440</td>
                            </tr>
                            <tr>
                                <td>Isabel Sánchez</td>
                                <td>Chrysler 300</td>
                                <td>$60</td>
                                <td>$450</td>
                                <td>$75</td>
                                <td>8</td>
                                <td>$525</td>
                            </tr>
                        </tbody>
                        <tfoot>
                            <tr>
                                <th>Cliente</th>
                                <th>Auto</th>
                                <th>Tarifa</th>
                                <th>Renta</th>
                                <th>Devolución</th>
                                <th>Dias</th>
                                <th>Total</th>
                            </tr>
                        </tfoot>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
</div>


<script src="../../assets/vendor/libs/jquery/jquery.js"></script>
<script src="../../assets/vendor/libs/popper/popper.js"></script>
<script src="../../assets/vendor/js/bootstrap.js"></script>
<script src="../../assets/vendor/libs/node-waves/node-waves.js"></script>
<script src="../../assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.js"></script>
<script src="../../assets/vendor/libs/hammer/hammer.js"></script>
<script src="../../assets/vendor/libs/i18n/i18n.js"></script>
<script src="../../assets/vendor/libs/typeahead-js/typeahead.js"></script>
<script src="../../assets/vendor/js/menu.js"></script>
<script src="../../assets/vendor/libs/datatables-bs5/datatables-bootstrap5.js"></script>
<script src="../../assets/vendor/libs/moment/moment.js"></script>
<script src="../../assets/vendor/libs/flatpickr/flatpickr.js"></script>
<script src="../../assets/js/tables-datatables-advanced.js"></script>


@endsection
