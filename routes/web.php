<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductoController;
use Illuminate\Support\Facades\DB;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', fn () => redirect()->route('productos.index'));

Route::resource('productos', ProductoController::class);

Route::get('/probar-mongo', function () {
    try {
        DB::connection('mongodb')->table('pruebas')->insert([
            'mensaje' => '¡Laravel 10 y MongoDB conectados!',
            'fecha' => now()->toDateTimeString(),
        ]);
        return '¡Conexión exitosa a MongoDB!';
    } catch (\Exception $e) {
        return 'Error al conectar: ' . $e->getMessage();
    }
});
