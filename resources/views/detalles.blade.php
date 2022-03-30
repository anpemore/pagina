@extends('plantilla')
@section('seccion')
<h1>Detalle de la historia</h1>

<div class="container">
<dr>Identificacion: {{$notas->id}}</dr><br>
<dr>Nombre Paciente: {{$notas->nombre}}</dr><br>
<dr>Detalle de Historia: {{$notas->descripcion}}</dr>
<form   class="form-control mb-2"action="{{route('addNota')}}" method="POST">
@csrf
    <input type="number" name="id" class="form-control mb-2" placeholder="identificacion">
    <input type="text" name="nombre" class="form-control mb-2" placeholder="Nombre">
    <input type="text" name="descripcion" class="form-control mb-2" placeholder="Descripcion">

    <div class="d-grid">
        <button class="btn btn-primary btn-block" type="submit">Ingresar</button>
    </div>
</form>
@if(session('mensaje'))
    <div class="alert alert-success">
        {{ session('mensaje') }}
    </div>
    @endif
</div>
@endsection