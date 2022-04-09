@extends('layouts.miapp')
@section('content')
<div class="py-12">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
            <div class="p-6 bg-white border-b border-gray-200">
                <table>
                    <thead>
                        <tr>
                            <th>ID Video</th>
                            <th>Título</th>
                            <th>Descripción</th>
                            <th>Extensión</th>
                            <th>Ganancia</th>
                            <th>Cantidad Visitas</th>
                            <th>Fecha publicación</th>
                            <th>Comentario</th>
                            <th>Comentario Publicado</th>
                          </tr>
                    </thead>
                    @foreach ($data as $row)
                    <tr>
                        <td>{{ $row->idVideo }}</td>
                        <td>{{ $row->titulo }}</td>
                        <td>{{ $row->descripcion }}</td>
                        <td>{{ $row->extension }}</td>
                        <td>${{ number_format($row->ganancia_generada, 2) }}</td>
                        <td>{{ number_format($row->cantidad_visitas) }}</td>
                        <td>{{ $row->fecha_publicacion }}</td>
                        <td>{{ $row->comentario }}</td>
                        <td>@if($row->comentarioPublicado == 1)Sí@elseif(!isset($row->comentarioPublicado)) @else No @endif</td>
                    </tr>
                    @endforeach
                </table>
            </div>
        </div>
    </div>
</div>
@endsection
