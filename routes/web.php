<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategoriesController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/hola', function () {
    return 'Bienvenidos';
});

Route::get('/nombre/{nombre}', function ($nombre) {
    return 'Hola, ' . $nombre;
});

Route::get('/contacto', function () {
    return view('contacto');
});

Route::get('/categorias', [CategoriesController::class, 'index']);

Route::get('/mostrarfecha', function () {
    return view('mostrarfecha');
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
