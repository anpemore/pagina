@extends('plantilla')
@section('seccion')
<div>
    <h2>INGRESAR PEDIDOS</h2>
    <form action="" method="post">
        @csrf
        <input type="text" class="form-control mb-2" placeholder="Nombre del Producto">
        <input type="number" class="form-control mb-2" placeholder="Precio del Producto">
        <input type="number" class="form-control mb-2" placeholder="Cantidad">
        <input type="text" class="form-control mb-2" placeholder="Descripcion">
        <input type="tel" class="form-control mb-2" placeholder="Telefon">
        <input type="text" class="form-control mb-2" placeholder="Direccion">
        <input type="email" class="form-control mb-2" placeholder="ejemplo@gmail.com">
         <input type="date" class="form-control mb-2">

        <div>
            <button type="submit" class="btn btn-primary">Ingresar</button>
            <button type="submit" class="btn btn-warning">cancelar</button>
            <button type="submit" class="btn btn-danger">Salir</button>
        </div>
    </form>
</div>
@endsection