@extends('plantilla')
@section('seccion')

<head>
    <link rel="stylesheet" href="{{asset('styles/plantilla.css')}}">
</head>
<div class="contenido grid-3">
    <div class="heade">
        <p>SISTEMA CONTROLADOR Y VENTAS DE PRODUCTOS DEL CAMPO A SUS CASA
        </p>
    </div>

    <div class="section">
        <p>
            <h1>Mision</h1>
            Lorem ipsum dolor sit amet consectetur, adipisicing elit. Expedita mollitia
            doloremque sunt accusantium eaque dolore quod blanditiis quasi dicta modi
            saepe nulla facere molestiae voluptatum minima, consequatur, temporibus recusandae
            eligendi? Eum accusantium mollitia eaque molestias ipsum nisi quam obcaecati
            nostrum error voluptate ratione commodi optio, veritatis possimus iure.
            Repellendus deleniti non totam. Qui deleniti debitis quod minus officia
            <h1>Vision</h1>
            culpa eveniet laboriosam eligendi? Repellat, nesciunt consectetur minus, dolores
            omnis, rem ab animi magnam distinctio in totam cupiditate? Magni voluptatem
            quae exercitationem. Id molestias nihil sit cupiditate beatae porro architecto
            quis, blanditiis quisquam ullam aut officiis rem dicta dolorum quos, eaque minus.
        </p>
    </div>

    <div class="aside">
        <p>
            <h1>Contactenos</h1>
            Lorem ipsum dolor sit amet consectetur
            adipisicing elit. Voluptatem, vero.
        </p>
    </div>
    <div class="pie">
        <a href="{{route('descargarPdf')}}" class="btn btn-sm btn-warning">Mostrar Pdf</a>
    </div>

</div>
@endsection