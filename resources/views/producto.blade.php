@extends('plantilla')
@section('seccion')
<div>
    <h2>INGREAR PRODUCTOS</h2>
    <form action="{{route('addproducto')}}" method="post">
        @csrf
        <input type="number"  class="form-control mb-2" name="id" placeholder="Codigo del Producto">
        <input type="text"  class="form-control mb-2" name="nombre" placeholder="Nombre del Producto">
        <input type="number"  class="form-control mb-2" name="precio" placeholder="Precio del Producto">
        <input type="number"  class="form-control mb-2" name="cantidad" placeholder="Cantidad del Producto">
        <input type="text"  class="form-control mb-2" name="descripcion" placeholder="Descripcion del Producto">
        <div>
            <button type="submit" class="btn btn-primary">Ingresar</button>
            <button type="submit" class="btn btn-warning">cancelar</button>
            <button type="submit" class="btn btn-danger">Salir</button>
        </div>
    </form>
</div>
@endsection