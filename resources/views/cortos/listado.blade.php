@extends('plantilla')
@section('titulo', 'Listado')

@section('contenido')

<h1>Listado de cortos</h1>
<table>
    <tr class="titulo">
        <td>nº</td>
        <td>Título</td>
        <td>Botón</td>
    </tr>
    @forelse($corto as $elemento)
    <tr>
        <td>{{ $loop->index+1 }}</td>
        <td>{{ $elemento['titulo'] }}</td>
        <td><a href="{{ route('cortos.show', $elemento['id']) }}" class="btn btn-outline-secondary">Mostrar</a></td>
    </tr>
    @empty
    <tr>
        <td>No hay cortos</td>
    </tr>
    @endforelse
</table>
@endsection