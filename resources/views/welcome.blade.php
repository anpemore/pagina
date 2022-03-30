@extends('plantilla')
@section('seccion')
   <div class="container grid-3" >
       <div class="container text-center bg-primary "><p>
           Lorem ipsum dolor sit amet consectetur 
           adipisicing elit. Voluptatem, vero.
       </p></div>

       <div class="container text-center  "><p>
           Lorem ipsum dolor sit amet consectetur 
           adipisicing elit. Voluptatem, vero.
       </p></div>

       <div class="container text-center bg-primary "><p>
           Lorem ipsum dolor sit amet consectetur 
           adipisicing elit. Voluptatem, vero.
       </p></div>
       <a href="{{route('descargarPdf')}}" class="btn btn-sm btn-warning">Mostrar Pdf</a>
   </div>
 @endsection   