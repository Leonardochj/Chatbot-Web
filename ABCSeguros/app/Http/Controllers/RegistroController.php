<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Usuario;

class RegistroController extends Controller
{
    public function index()
    {
        return view('sesion.registro');
    }

    public function store(Request $request)
    {
        // Validación de datos
        $request->validate([
            'nombre' => 'required',
            'apellido' => 'required',
            'usuario' => 'required|unique:usuarios,usuario|alpha_num',
            'telefono' => 'required|numeric',
            'correo' => 'required|email|unique:usuarios,correo',
            'clave' => 'required|min:6',
        ], [
            'nombre.required' => 'El campo nombre es obligatorio.',
            'apellido.required' => 'El campo apellido es obligatorio.',
            'usuario.required' => 'El campo usuario es obligatorio.',
            'usuario.unique' => 'El usuario ya está en uso.',
            'usuario.alpha_num' => 'El usuario debe contener solo caracteres alfanuméricos.',
            'telefono.required' => 'El campo teléfono es obligatorio.',
            'telefono.numeric' => 'El teléfono debe ser un número.',
            'correo.required' => 'El campo correo es obligatorio.',
            'correo.email' => 'El correo no tiene un formato válido.',
            'correo.unique' => 'El correo ya está registrado.',
            'clave.required' => 'La clave es obligatoria.',
            'clave.min' => 'La clave debe tener al menos :min caracteres.',
        ]);
        

        // Crear un nuevo usuario
        Usuario::create([
            'nombre' => $request->nombre,
            'apellido' => $request->apellido,
            'usuario' => $request->usuario,
            'rol' => 'Estudiante',
            'telefono' => $request->telefono,
            'correo' => $request->correo,
            'clave' => bcrypt($request->clave),
        ]);

        // Redirigir a la página de inicio de sesión
        return redirect()->route('iniciarSesion')->with('success', 'Usuario registrado con éxito');
    }
}
