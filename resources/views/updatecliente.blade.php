@extends('plantilla')
@section('seccion')
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
              <td><input type="text" value=" {{$item->idpaciente}}"></td>
              <td><input type="text" value=" {{$item->nompaciente}}"></td>
              <td><input type="text" value=" {{$item->apepaciente}}"></td>
              <td><input type="text" value=" {{$item->dirpaciente}}"></td>
              <td><input type="text" value=" {{$item->emailpaciente}}"></td>
              <td><input class="btn btn-warning btn-sm" type="submit"></td>

            </tr>  
            @endforeach  
        </tbody>

    </table>
</div>
@endsection
