<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PDF</title>
</head>

<div class="container">
  <h1>Listado para imprimir en formato PDF</h1>  
<table>
    <thead>
        <tr>
            <th scope="col">Identificacion</th>
            <th scope="col">Nombre</th>
            <th scope="col">Descriccion</th>
        </tr>
    </thead>
    <tbody class="tbody">
        @foreach($prueba as $campo)
        <tr>
            <th scope="row">{{$campo->id }}</th>
            <td>{{$campo->nombre }}</td>
            <td>{{$campo->descripcion}}</td>
            <td>    
        </tr>
        @endforeach
    </tbody>
</table>      
</div>
</body>
</html>