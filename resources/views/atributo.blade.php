@extends('layouts.app')
@section('title','Atributo')
@section('content')

    <div class="container">
        <div class="row ">
            <div style="text-align: center" class="col-md-12 center">
                <h3>Atributos de Calidad</h3>
            </div>
        </div>
        <div class="row mt-3">
            <div class="col-md-4">
                <div class="card" style="width: 18rem;">
                    <div class="card-body">
                        <h5 class="card-title">Disponibilidad</h5>
                        <p class="card-text">Hace referencia a lo listo que se encuentra el sistema para atender una solicitud en el momento que uno  lo espere</p>
                        <a href="#" class="btn btn-primary">Go somewhere</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card" style="width: 18rem;">
                    <div class="card-body">
                        <h5 class="card-title">Interoperabilidad</h5>
                        <p class="card-text">Hace referncia a que tan facil el sistema puede intercambiar datos con otros sistemas</p>
                        <a href="#" class="btn btn-primary">Go somewhere</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card" style="width: 18rem;">
                    <div class="card-body">
                        <h5 class="card-title">Modificabilidad</h5>
                        <p class="card-text">Trata de evaluar cual es el costo de hacer un cambio en el sistema, qué tan rapido lo puedo hacer y que tantos recursos necesito</p>
                        <a href="#" class="btn btn-primary">Go somewhere</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="row mt-3">
            <div class="col-md-4">
                <div class="card" style="width: 18rem;">
                    <div class="card-body">
                        <h5 class="card-title">Rendimiento</h5>
                        <p class="card-text">Hace referencia si el sistema hace lo que se espera que haga, en un tiempo esperado para nuestros usuarios</p>
                        <a href="#" class="btn btn-primary">Go somewhere</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card" style="width: 18rem;">
                    <div class="card-body">
                        <h5 class="card-title">Seguridad</h5>
                        <p class="card-text">Se trata de la capacidad de un sistema para proteger los datos de accesos no autorizados y permitir el acceso a partes autorizadas </p>
                        <a href="#" class="btn btn-primary">Go somewhere</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card" style="width: 18rem;">
                    <div class="card-body">
                        <h5 class="card-title">Testeabilidad</h5>
                        <p class="card-text">Evalua que tan facil es hacer la prueba de un sistema</p>
                        <a href="#" class="btn btn-primary">Go somewhere</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
