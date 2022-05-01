@extends('plantilla')
@section('seccion')
<div class="container">
    <table class="table">
        <div>
            <tr>
                <th scope="col">Identificacion</th>
                <th scope="col">Nombre</th>
                <th scope="col">Apellido</th>
                <th scope="col">Direccion</th>
                <th scope="col">Email</th>
                <th scope="col">Operacion</th>
            </tr>
        </div>

        <tbody>
            @foreach($cliente as $item)
            <tr>
                <form action="{{route('updates')}}" method="post">
                    @method('PUT')
                    @csrf
                    <td><input type="text" name="id" value=" {{$item->idpaciente}}"></td>
                    <td><input type="text" name="nombre" value=" {{$item->nompaciente}}"></td>
                    <td><input type="text" name="apellido" value=" {{$item->apepaciente}}"></td>
                    <td><input type="text" name="direccion" value=" {{$item->dirpaciente}}"></td>
                    <td><input type="text" name="email" value=" {{$item->emailpaciente}}"></td>
                    <td><input class="btn btn-warning btn-sm" type="submit" value="Actualizar"></td>
                </form>
            </tr>
            @endforeach
        </tbody>

    </table>
    <div  class="d-grid gap-1">
        <a class="btn btn-success btn-sm" href="{{route('busqueda')}}" >
            <h4>Retornar</h4>
        </a>
    </div>
</div>
@endsection