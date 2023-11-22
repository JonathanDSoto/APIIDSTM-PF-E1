@extends ('layouts.template')
@section('menu')
@include('layouts.sidebar')
@endsection
@section('searchbar')
@include('layouts.searchbar')
@endsection
@section('content')
<div class="container-xxl flex-grow-1 container-p-y">
    <div class="card mb-4">
        <div class="card-header d-flex justify-content-between align-items-center">
            <h5 class="mb-0">Nuevo Vehículo</h5>
        </div>
        <div class="card-body">
            <small class="text-muted float-start">Foto del vehículo</small><br>
            <form action="https://demos.pixinvent.com/upload" class="dropzone needsclick" id="dropzone-basic">
                <div class="dz-message needsclick">
                    Selecciona una imagen para subirla
                </div>
                <div class="fallback">
                    <input name="file" type="file" />
                </div>
            </form>
            <hr class="my-5">
            <form>
                <div class="col-12">
                    <div class="card mb-4">
                        <div class="row">
                            <div class="col-md-6 mb-4">
                                <label for="select2Basic" class="form-label">Marca</label>
                                <select id="select2Basic" class="select2 form-select form-select-lg" data-allow-clear="true">
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
                                </select>
                            </div>
                            <div class="col-md-6 mb-4">
                                <label for="select2Basic" class="form-label">Modelo</label>
                                <select id="select2Basic" class="select2 form-select form-select-lg" data-allow-clear="true">
                                    <option value="camry">Camry</option>
                                    <option value="accord">Accord</option>
                                    <option value="mustang">Mustang</option>
                                    <option value="silverado">Silverado</option>
                                    <option value="altima">Altima</option>
                                    <option value="3series">3 Series</option>
                                    <option value="e-class">E-Class</option>
                                    <option value="a4">A4</option>
                                    <option value="golf">Golf</option>
                                    <option value="model-s">Model S</option>
                                </select>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6 mb-4">
                                <label for="select2Basic" class="form-label">Categoría</label>
                                <select id="select2Basic" class="select2 form-select form-select-lg" data-allow-clear="true">
                                    <option value="compacto">Compacto</option>
                                    <option value="sedan">Sedán</option>
                                    <option value="suv">SUV</option>
                                    <option value="camioneta">Camioneta</option>
                                    <option value="deportivo">Deportivo</option>
                                    <option value="hatchback">Hatchback</option>
                                    <option value="todoterreno">Todo Terreno</option>
                                    <option value="furgoneta">Furgoneta</option>
                                    <option value="descapotable">Descapotable</option>
                                    <option value="híbrido">Híbrido</option>
                                </select>
                                </select>
                            </div>
                            <div class="col-md-6 mb-4">
                                <label for="select2Basic" class="form-label">Disponibilidad</label>
                                <select id="select2Basic" class="select2 form-select form-select-lg" data-allow-clear="true">
                                    <option value="camry">Disponible</option>
                                    <option value="accord">No disponible</option>
                                    <option value="accord">Reparación</option>
                                </select>
                            </div>
                        </div>
                        <label class="form-label" for="basic-default-phone">Tarifa Por Día</label><br>
                        <div class="input-group input-group-merge">
                            <span class="input-group-text">$</span>
                            <input type="number" class="form-control" placeholder="100" aria-label="Amount (to the nearest dollar)" />
                            <span class="input-group-text">.00</span>
                        </div>
                    </div>
                </div>

                

            </form>
            <a href="{{ url('/vehicles') }}">
                    <button type="submit" class="btn btn-primary">Guardar</button>
                </a>
                <a href="/carform">
                    <button type="submit" class="btn btn-dark">Cancelar</button>
                </a>
        </div>
    </div>
</div>
<!-- <script src="../../assets/vendor/js/bootstrap.js"></script> -->
<script src="../../assets/vendor/libs/jquery/jquery.js"></script>
<script src="../../assets/vendor/libs/popper/popper.js"></script>
<script src="../../assets/vendor/libs/node-waves/node-waves.js"></script>
<script src="../../assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.js"></script>
<script src="../../assets/vendor/libs/hammer/hammer.js"></script>
<script src="../../assets/vendor/libs/i18n/i18n.js"></script>
<script src="../../assets/vendor/libs/typeahead-js/typeahead.js"></script>
<script src="../../assets/vendor/js/menu.js"></script>
<!-- Page JS -->
<script src="../../assets/js/form-layouts.js"></script>



@endsection
@section('footer')
@include('layouts.footer')
@endsection