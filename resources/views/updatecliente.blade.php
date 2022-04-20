@extends('plantilla')
@section('seccion')

<head>
    <link rel="stylesheet" href="{{asset('styles/updatecliente.css')}}">
    <link rel="stylesheet" href="{{asset('vendor/jquery-iu/jquery-ui.css')}}">
</head>
<div class="container">
    <h4>Actaulizar Cliente</h4>
    <div class="contenedor">
        <form action="route{{'buscar'}}" method="get">
            <div>
                <input type="text" name="nombre" id="id">
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
            <tr>
                <th scope="row">Identificacion</th>                
                <td>Nombre</th>
                <td>Direccion</td>
                <td>Email</td>
                <td><input type="text" class="btn btn-warning btn-sm" value="Editar"></td>
            </tr>
        </tbody>
    </table>
</div>
@endsection

@section('js')
<link rel="stylesheet" href="{{asset('vendor/jquery-iu/jquery-ui.js')}}">
<script>
    alert('ghfhgj')
    var nombres=['angel','mnuel','marcos','zorra'];
    $('#id').autocomplete({
        source:nombres
    });
</script>
@endsection