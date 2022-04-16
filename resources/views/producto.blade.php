@extends('plantilla')
@section('seccion')
<div>
    <h2>INGREAR PRODUCTOS</h2>
    <form action="" method="post">
        @csrf
        <input type="text"  class="form-control mb-2" placeholder="nombre">
        <input type="text"  class="form-control mb-2" placeholder="precio">
        <input type="text"  class="form-control mb-2" placeholder="cantidad">
        <input type="text"  class="form-control mb-2" placeholder="descripcion">
        <div>
            <button type="submit" class="btn btn-primary">Ingresar</button>
            <button type="submit" class="btn btn-warning">cancelar</button>
            <button type="submit" class="btn btn-danger">Salir</button>
        </div>
    </form>
</div>
@endsection