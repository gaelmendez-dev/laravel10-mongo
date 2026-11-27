@extends('layouts.app')

@section('title', 'Productos')

@section('content')
    <div class="heading">
        <div>
            <h1>Productos</h1>
            <p class="muted">Administra el catálogo de TecnoTienda.</p>
        </div>
        <a class="button primary" href="{{ route('productos.create') }}">＋ Nuevo producto</a>
    </div>

    <section class="card">
        @if ($productos->isEmpty())
            <div class="empty">Aún no hay productos. Agrega el primero para comenzar.</div>
        @else
            <div class="table-wrap">
                <table>
                    <thead><tr><th>Nombre</th><th>Categoría</th><th>Precio</th><th>Acciones</th></tr></thead>
                    <tbody>
                    @foreach ($productos as $producto)
                        <tr>
                            <td><strong>{{ $producto->nombre }}</strong></td>
                            <td>{{ $producto->categoria }}</td>
                            <td>${{ number_format((float) $producto->precio, 2) }}</td>
                            <td>
                                <div class="actions">
                                    <a class="button secondary" href="{{ route('productos.show', $producto->getKey()) }}">Ver</a>
                                    <a class="button secondary" href="{{ route('productos.edit', $producto->getKey()) }}">Editar</a>
                                    <form class="inline" action="{{ route('productos.destroy', $producto->getKey()) }}" method="POST" onsubmit="return confirm('¿Eliminar este producto?')">
                                        @csrf
                                        @method('DELETE')
                                        <button class="button danger" type="submit">Eliminar</button>
                                    </form>
                                </div>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        @endif
    </section>
@endsection
