@extends('plantilla')

@section('seccion')

<div class="container my-4">
    <h1 class="display-4">Notas</h1>
</div>

@if(session('mensaje'))
    <div class="alert alert-success">
        {{ session('mensaje') }}
    </div>
    @endif

<table class="table table-striped table-bordered" id="datostabla">
    <thead>
        <tr>
            <th scope="col">Id</th>
            <th scope="col">Nombre</th>
            <th scope="col">Descriccion</th>
            <th scope="col">Operacion</th>
        </tr>
    </thead>
    <tbody>


        @foreach($notas as $campo)
        <tr>
            <th scope="row">{{$campo->id }}</th>
            <td>{{$campo->nombre }}</td>
            <td>{{$campo->descripcion}}</td>
            <td>
                <a href="{{ route('detalles', $campo)}}" class="btn btn-primary btn-sm">
                    Detalles
                </a>
            </td>

            <td>
                <a href="{{ route('updatePasiente',$campo)}}" class="btn btn-warning btn-sm">
                    Actualizar
                </a>
            </td>

            <td>

                <form action="{{ route('eliminar', $campo)}}" method="POST" class="d-inline">
                    @method('delete')
                    @csrf
                    <button class="btn btn-sm  btn-danger" type="submit">Eliminar</button>
                </form>


            </td>

        </tr>
        @endforeach
    </tbody>
</table>
<div class="d-flex justify-content-end">
    {{ $notas->links() }}
</div>
</div>


@endsection