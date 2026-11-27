@extends('layouts.app')

@section('title', 'Nuevo producto')

@section('content')
    <div class="heading"><div><h1>Nuevo producto</h1><p class="muted">Completa los datos del producto.</p></div></div>
    <section class="card">
        <form action="{{ route('productos.store') }}" method="POST">
            @csrf
            @include('productos._form')
            <div class="actions">
                <button class="button primary" type="submit">Guardar producto</button>
                <a class="button secondary" href="{{ route('productos.index') }}">Cancelar</a>
            </div>
        </form>
    </section>
@endsection
