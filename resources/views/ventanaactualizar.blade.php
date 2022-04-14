@extends('plantilla')
@section('seccion')

<head>
    <link rel="stylesheet" href="{{asset('styles/styles.css')}}">
</head>

<div class="container">
    <h1>Formulario Para Actualizar</h1>
    <form action="{{ route('updateNota', $datos->id) }}" method="POST">
        @method('PUT')
        @csrf
        <div class="grupcampos ">
            <label for="">Identificacion</label>
            <input class="form-control mb-2" type="text" value="{{ $datos->id }}" name="id">
            <label for="">Nombres</label>
            <input class="form-control mb-2" type="text" value="{{ $datos->nombre }}" name="nombre">
            <label for="">Descripccion</label>
            <input class="form-control mb-2" type="text" value="{{ $datos->descripcion }}" name="descripcion">
        </div>
        <div class="contenedor_boton d-grid gap-2">
            <button class="btn  btn-warning btn-block" type="submit" >Actualizar</button>
            <button class="btn  btn-primary btn-block" type="submit" >Cancelar </button>
            <button class="btn  btn-success btn-block" type="submit" >Salir</button>
        </div>
    </form>

</div>
@endsection