<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contacto;

class SitioController extends Controller
{
    public function contactoForm($tipo = null)
    {
        return view('contacto', compact('tipo'));
    }

    public function contactoSave(Request $request)
    {
        //validamos el request
        $request->validate([
            ///agregamos reglas despues de la flecha
            'correo' => 'required|email',
            'comentario' => ['required','min:5','max:50'],
        ]);
        
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
    }
}
