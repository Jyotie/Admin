@extends('pdf.layout')

@section('content')
<table class="table table-hover table-striped">
    <thead>
        <tr>
            <th>Nombre</th>
            <th>Descripción</th>
            <th>Precio €</th>
            <th>Categoría</th>
            <th>Acciones</th>
        </tr>                            
    </thead>
    <tbody>
        @foreach ($productos as $producto)

        <tr class="gradeA odd" role="row">
            <td>{{ $producto->Nombre }}</td>
            <td>{{ $producto->Descripcion }}</td>
            <td>{{ $producto->Precio }}</td>
            <td>{{ $producto->idCategoria }}</td>
        </tr>

        @endforeach
    </tbody>
</table>
@endsection