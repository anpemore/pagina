@extends('plantilla')
@section('seccion')
<head>
    <link rel="stylesheet" href="{{asset('styles/styles.css')}}">
</head>
<h1>Ingresar Cliente</h1>
<div class="container">
    @if(session('mensaje'))
    <div class="alert alert-success">
        {{ session('mensaje') }}
    </div>
    @endif
    <form action="{{route('addpaciente')}}" method="POST">
        @csrf 
        @error('nombre')
        <div class="alert alert-primary d-flex align-items-center" role="alert">Se requiere llenar el campo nombre</div>
        
        @enderror


        <div>
            <input type="number" class="form-control mb-2" name="id" value="{{old('id')}}" placeholder="Identificacion">
            <input type="text" class="form-control mb-2" name="nombre" value="{{old('nombre')}}" placeholder="Nombre">
            <input type="text" class="form-control mb-2" name="apellido" value="{{old('apellido')}}"
                placeholder="Apellido">
            <input type="text" class="form-control mb-2" name="direccion" value="{{old('direccion')}}"
                placeholder="Direccion">
            <input type="email" class="form-control mb-2" name="email" value="{{old('email')}}" placeholder="Email">
            <input type="date" class="form-control mb-2" name="fecha" value="{{old('fecha')}}" placeholder="Fecha">
        </div>
        <div class="container my-5 text-center">
            <input type="submit" class="btn btn-primary" value="Ingresar">
            <input type="submit" class="btn btn-warning" value="Cancelar">
            <input type="submit" class="btn btn-danger" value="Salir">
        </div>
    </form>
</div>
@endsection