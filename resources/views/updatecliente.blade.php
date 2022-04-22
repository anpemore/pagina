@extends('plantilla')
@section('seccion')

<head>
    <link rel="stylesheet" href="{{asset('styles/updatecliente.css')}}">
    <link rel="stylesheet" href="{{asset('vendor/jquery-iu/jquery-ui.css')}}">
</head>
<div class="container">
    <h4>Actaulizar Cliente</h4>
    <div class="contenedor">
        <form action="{{route('updatecliente')}}" method="get">
            @csrf
            <div>
                <input type="text" name="nombre">
                <input type="submit" class="btn btn-warning btn-sm " value="Buscar">
            </div>
        </form>
    </div>
    <table class="table">
        <div>
            <tr>
                <th scope="col">Identificacion</th>
                <th scope="col">Nombre</th>
                <th scope="col">Direccion</th>
                <th scope="col">Email</th>
                <th scope="col">Operacion</th>
            </tr>
        </div>

        <tbody>
            @foreach($notas as $campo)
            <tr>
                <th scope="row">{{$campo->idpaciente }}</th>
                <td>{{$campo->nompaciente }}</td>
                <td>{{$campo->apepaciente}}</td>
                <td>{{$campo->emailpaciente}}</td>
            </tr>
            @endforeach
        </tbody>

    </table>
</div>
@endsection