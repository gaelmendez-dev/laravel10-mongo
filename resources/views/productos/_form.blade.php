<div class="field">
    <label for="nombre">Nombre</label>
    <input id="nombre" name="nombre" type="text" maxlength="120" required value="{{ old('nombre', $producto->nombre ?? '') }}">
    @error('nombre')<div class="error">{{ $message }}</div>@enderror
</div>
<div class="field">
    <label for="precio">Precio</label>
    <input id="precio" name="precio" type="number" min="0" step="0.01" required value="{{ old('precio', $producto->precio ?? '') }}">
    @error('precio')<div class="error">{{ $message }}</div>@enderror
</div>
<div class="field">
    <label for="categoria">Categoría</label>
    <input id="categoria" name="categoria" type="text" maxlength="100" required value="{{ old('categoria', $producto->categoria ?? '') }}">
    @error('categoria')<div class="error">{{ $message }}</div>@enderror
</div>
