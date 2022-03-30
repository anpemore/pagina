@extends('plantilla')
@section('seccion')

<h1>Elemento en el arreglo</h1>
@foreach($nombre as $elemento)
<a href="{{route('arreglo',$elemento)}}" class="h4 text-danger">
    {{$elemento}}
</a>
@endforeach
@if(!empty($dato))
@switch($dato)
@case($dato=='Angel')
<p>
   <h1>Hola {{ $dato }} </h1>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Explicabo
    molestias quod minus impedit. Repudiandae fuga odit aut quasi, sequi
    illum provident a laboriosam nam tempore asperiores molestiae aperiam
    corporis temporibus!
</p>
@break

@case($dato=='Ramon')
<p>
   <h1>Hola {{ $dato }} </h1>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Explicabo
    molestias quod minus impedit. Repudiandae fuga odit aut quasi, sequi
    illum provident a laboriosam nam tempore asperiores molestiae aperiam
    corporis temporibus!
</p>
@break

@case($dato=='Manuela')
<p>
   <h1>Hola {{ $dato }} </h1>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Explicabo
    molestias quod minus impedit. Repudiandae fuga odit aut quasi, sequi
    illum provident a laboriosam nam tempore asperiores molestiae aperiam
    corporis temporibus!
</p>
@break

@case($dato=='Milagro')
<p>
   <h1>Hola {{ $dato }} </h1>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Explicabo
    molestias quod minus impedit. Repudiandae fuga odit aut quasi, sequi
    illum provident a laboriosam nam tempore asperiores molestiae aperiam
    corporis temporibus!
</p>
@break

@case($dato=='Maria')
<p>
   <h1>Hola {{ $dato }} </h1>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Explicabo
    molestias quod minus impedit. Repudiandae fuga odit aut quasi, sequi
    illum provident a laboriosam nam tempore asperiores molestiae aperiam
    corporis temporibus!
</p>

@break
@endswitch
@endif
@endsection