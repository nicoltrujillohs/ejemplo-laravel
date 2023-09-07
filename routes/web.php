<?php

use App\Models\Contacto;
use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;


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

Route::get('/contacto/{tipo?}', function ($tipo = null) {
    return view('contacto', compact('tipo'));
});

//la peticion es tipo post cambiamos metodo recibimos datos
Route::post('validar-contacto', function (Request $request) {
    //guardar en base de datos
    //creamos instancia del modelo Contacto
    $contacto = new Contacto();

    //asignar atributos que correspondan a las columnas de las tablas
    $contacto->correo = $request->correo;
    $contacto->comentario = $request->comentario;

    //se vaya a la base de datos
    $contacto->save();

    //redirecciona a la pagian que envio el formulario
    return redirect()->back();
});
