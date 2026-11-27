@extends('layouts.app')

@section('title', 'Editar producto')

@section('content')
    <div class="heading"><div><h1>Editar producto</h1><p class="muted">Actualiza los datos y guarda los cambios.</p></div></div>
    <section class="card">
        <form action="{{ route('productos.update', $producto->getKey()) }}" method="POST">
            @csrf
            @method('PUT')
            @include('productos._form')
            <div class="actions">
                <button class="button primary" type="submit">Guardar cambios</button>
                <a class="button secondary" href="{{ route('productos.index') }}">Cancelar</a>
            </div>
        </form>
    </section>
@endsection
