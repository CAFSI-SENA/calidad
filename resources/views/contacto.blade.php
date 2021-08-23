@extends('layouts.app')
@section('title','Contacto')
@section('content')
    <div class="container-fluid">
    <div class="row">
        <div class="col-lg-6">
            <div class="card">
                <div class="card-header bg-primary">
                    <h4 class="mb-0 text-white">Contacta con Nosotros</h4>
                </div>
                <form class="form-horizontal">
                    <div class="form-body">
                        <div class="card-body">
                            <h4 class="card-title">Datos de Contacto</h4>
                        </div>
                        <hr class="mt-0 mb-5">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group row">
                                        <label class="control-label text-right col-md-3">Nuestra Oficina:</label>
                                        <div class="col-md-9">
                                            <p class="form-control-static"> Carrera 59 No. 26-21 </p>
                                        </div>
                                    </div>
                                </div>
                                <!--/span-->
                                <div class="col-md-6">
                                    <div class="form-group row">
                                        <label class="control-label text-right col-md-3">Datos de Contacto:</label>
                                        <div class="col-md-9">
                                            <p class="form-control-static"> Cel. 3117498542 </p>
                                        </div>
                                    </div>
                                </div>
                                <!--/span-->
                            </div>
                            <!--/row-->
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group row">
                                        <label class="control-label text-right col-md-3">e-mail:</label>
                                        <div class="col-md-9">
                                            <p class="form-control-static"> proyectos@cafsi.com </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    </div>
@endsection
