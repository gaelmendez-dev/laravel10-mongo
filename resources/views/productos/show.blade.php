@extends('layouts.app')

@section('title', $producto->nombre)

@section('content')
    <div class="heading">
        <div><h1>{{ $producto->nombre }}</h1><p class="muted">Detalle del producto</p></div>
        <div class="actions">
            <a class="button secondary" href="{{ route('productos.edit', $producto->getKey()) }}">Editar</a>
            <a class="button secondary" href="{{ route('productos.index') }}">Volver</a>
        </div>
    </div>
    <section class="card">
        <dl class="details">
            <div><dt>Nombre</dt><dd>{{ $producto->nombre }}</dd></div>
            <div><dt>Precio</dt><dd>${{ number_format((float) $producto->precio, 2) }}</dd></div>
            <div><dt>Categoría</dt><dd>{{ $producto->categoria }}</dd></div>
        </dl>
    </section>
@endsection
