@extends('layouts.sidebar')


<style>
.card .card-body img{
    width:105.826772px;
    max-height: 120.944882px;
}
</style>

@section('admin-content')

<h3 class="text-center">EMPRESA {{ auth()->user()->empresa->nombre_empresa}}</h3>

@foreach ($usuarios as $user)

    <!-- <p>{{$user->nombre}}</p> -->
<div class="card mb-5">
    <!-- <div class="card-header">
        Featured
    </div> -->
    <div class="card-body">
        <div class="row">
            <div class="col-2">
                <img src="https://www.fotos-lienzo.es/blog/wp-content/uploads/2018/04/Taman%CC%83o-foto-carnet-espana.png" alt="" class="img-fluid border border-primary">
            </div>
            <div class="col">
                <div class="row pb-3">
                    <div class="col">
                        <label for="">Nombre:</label>
                        <span>{{$user->nombre}}</span>
                    </div>
                    <div class="col">
                        <label for="">Apellidos:</label>
                        <span>{{$user->apellidos}}</span>
                    </div>
                    <div class="col">
                        <label for="">Correo:</label>
                        <span>{{$user->email}}</span>
                    </div>
                    <!-- <div class="col">
                        <label for="">Nick:</label>
                        <span>{{$user->nick}}</span>
                    </div> -->
                </div>
                <div class="row mt-3">
                    <div class="col">
                        <label for="">Cargo:</label>
                        <span>{{$user->puesto}}</span>
                    </div>
                    <div class="col">
                        <label for="">Jornada Laboral:</label>
                        <span>{{$user->jornada_laboral}}</span>
                    </div>
                    <div class="col">
                        <label for="">Salario:</label>
                        <span>{{$user->salario}}</span>
                    </div>
                </div>
            </div>
            <div class="col-2 d-flex align-items-center justify-content-center">
                <span>GASTOS:5654€</span> 
            </div>
        </div>
        <div class="card-footer">
            <!-- <small class="text-muted">Last updated 3 mins ago</small> -->
            <div class="row d-flex justify-content-end">
                <div class="col-2">
                    <button class="btn">EDITAR</button>
                </div>
                <div class="col-2">
                    <button class="btn">BORRAR</button>
                </div>
            </div>
            
        </div>
        <!-- <h5 class="card-title">Special title treatment</h5>
        <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
        <a href="#" class="btn btn-primary">Go somewhere</a> -->
    </div>
</div>

@endforeach
@endsection