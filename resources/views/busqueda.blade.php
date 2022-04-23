@extends('plantilla')
@section('seccion')

<head>
    <link rel="stylesheet" href="{{asset('styles/updatecliente.css')}}">
    <link rel="stylesheet" href="{{asset('vendor/jquery-iu/jquery-ui.css')}}">
</head>
<h4>Buscar Cliente</h4>
    <div class="contenedor">
        <form action="{{route('getcliente')}}" method="get">
            @csrf
            <div>
                <input type="number" name="nombre" placeholder="Identificacion" >
                <input type="submit" class="btn btn-warning btn-sm " value="Buscar">
            </div>
        </form>
    </div>
   
    
@endsection