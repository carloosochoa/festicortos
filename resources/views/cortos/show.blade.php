@extends('plantilla')
@section('titulo', 'Corto')
@section('contenido')

<div class="contenedor">
    <div class="tarjeta">
        <h2>{{ $corto['titulo'] }}</h2>
        <h4>{{ $corto['director'] }}</h4>
        <p>{{ $corto['sinapsis'] }}</p>
    </div>
</div>
@endsection