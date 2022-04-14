@extends('plantilla')
@section('seccion')
<h1>Detalle de la historia</h1>
<div class="container my-5">
<dr>Identificacion: {{$notas->id}}</dr><br>
<dr>Nombre Paciente: {{$notas->nombre}}</dr><br>
<dr>Detalle de Historia: {{$notas->descripcion}}</dr>
<div class="container">
    <a href="{{route('descargarPdf')}}" class="btn btn-primary my-5" >Descargar PDF</a>
</div>
@endsection