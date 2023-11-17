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
                                        <th>Name</th>
                                        <th>Email</th>
                                        <th>City</th>
                                        <th>Date</th>
                                        <th>Salary</th>
                                    </tr>
                                </thead>
                                <tfoot>
                                    <tr>
                                        <th>Name</th>
                                        <th>Email</th>
                                        <th>City</th>
                                        <th>Date</th>
                                        <th>Salary</th>
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
@section('footer')
@include('layouts.footer')
@endsection
