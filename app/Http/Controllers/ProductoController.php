<?php

namespace App\Http\Controllers;

use App\Models\Producto;
use Illuminate\Http\Request;

class ProductoController extends Controller
{
    public function index()
    {
        $productos = Producto::orderBy('nombre')->get();

        return view('productos.index', compact('productos'));
    }

    public function create()
    {
        return view('productos.create');
    }

    public function store(Request $request)
    {
        $datos = $request->validate([
            'nombre' => ['required', 'string', 'max:120'],
            'precio' => ['required', 'numeric', 'min:0'],
            'categoria' => ['required', 'string', 'max:100'],
        ]);

        Producto::create($datos);

        return redirect()->route('productos.index')->with('success', 'Producto creado correctamente.');
    }

    public function show(string $producto)
    {
        $producto = Producto::findOrFail($producto);

        return view('productos.show', compact('producto'));
    }

    public function edit(string $producto)
    {
        $producto = Producto::findOrFail($producto);

        return view('productos.edit', compact('producto'));
    }

    public function update(Request $request, string $producto)
    {
        $registro = Producto::findOrFail($producto);
        $datos = $request->validate([
            'nombre' => ['required', 'string', 'max:120'],
            'precio' => ['required', 'numeric', 'min:0'],
            'categoria' => ['required', 'string', 'max:100'],
        ]);

        $registro->update($datos);

        return redirect()->route('productos.index')->with('success', 'Producto actualizado correctamente.');
    }

    public function destroy(string $producto)
    {
        Producto::findOrFail($producto)->delete();

        return redirect()->route('productos.index')->with('success', 'Producto eliminado correctamente.');
    }
}
