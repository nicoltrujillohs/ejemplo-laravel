<?php


use App\Http\Controllers\SitioController;
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

Route::get('/contacto/{tipo?}', [SitioController::class, 'contactoForm']);

//la peticion es tipo post cambiamos metodo recibimos datos
Route::post('validar-contacto', [SitioController::class, 'contactoSave']);
