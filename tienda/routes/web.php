<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome');
});

// SERVICIO SPRING
Route::get('/producto/stock/{id}', 'App\Http\Controllers\PageController@stock')->name('stock');

// PRODUCTOS
Route::get('/producto/all', 'App\Http\Controllers\PageController@productosAll')->name('productosAll');
Route::get('/producto/{id}', 'App\Http\Controllers\PageController@productoPorID')->name('productoPorID');
Route::post('/producto/crear', 'App\Http\Controllers\PageController@crearProducto')->name('crearProducto');
Route::put('/producto/{id}/actualizar', 'App\Http\Controllers\PageController@actualizarProducto')->name('actualizarProducto');
Route::delete('/producto/{id}/borrar', 'App\Http\Controllers\PageController@borrarProducto')->name('borrarProducto');

// COMPRAS
Route::get('/compra/all', 'App\Http\Controllers\PageController@comprasAll')->name('comprasAll');


// USUARIOS
Route::get('/usuario/all', 'App\Http\Controllers\PageController@usuariosAll')->name('usuariosAll');


