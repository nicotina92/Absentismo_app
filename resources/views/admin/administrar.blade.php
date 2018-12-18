@extends('layouts.app')

@section('content')

<h3>EMPRESA {{ auth()->user()->empresa->nombre_empresa}}</h3>

@foreach ($usuarios as $user)

    <p>{{$user->nombre}}</p>

@endforeach

@endsection