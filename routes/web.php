<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
/* no olvidar llamar a los controladores para poderlos usar */
use App\Http\Controllers\UserController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\ProductoController;

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
/* ruta para que por defecto inicie en el inicio de la pagina */
Route::get('/', function () {
    return view('Inicio');
});

/* aqui le coloco la ruta /actualizar a el admin controller para llamar sus metodos es importante el orden de los controladores*/
Route::resource('actualizar', AdminController::class);
Route::resource('productos', ProductoController::class);
Route::get('download-pdf','\App\Http\Controllers\AdminController@generar_pdf')->name('descargar-pdf');
Auth::routes();
/* esta ruta es para al estar logueado permitirme que aparezca el estas logueado y aparte dejar que funcionen las demas vistas*/
/* en si es la que manda a las rutas especificas del admin */
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

/* Route::resource('/actualizar', App\Http\Controllers\HomeController::class); */
Route::resource('/user', UserController::class);

