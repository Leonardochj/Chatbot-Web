<?php

namespace App\Http\Controllers;

use App\Models\Usuario;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AgregarUsuarioController extends Controller
{
    public function index($nombreUsuario){
        return view('admin.agregarUsuario', compact('nombreUsuario'));
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
        
        $usuario = Auth::user();

        // Verifica si el usuario está autenticado antes de acceder a sus propiedades
        if ($usuario) {
            // Accede al ID del usuario autenticado
            $usuarioId = $usuario->id;

            // Accede al nombre del usuario autenticado
            $nombreUsuario = $usuario->nombre;
        }


        // Crear un nuevo usuario
        Usuario::create([
            'nombre' => $request->nombre,
            'apellido' => $request->apellido,
            'usuario' => $request->usuario,
            'rol' => $request->rol,
            'telefono' => $request->telefono,
            'correo' => $request->correo,
            'clave' => bcrypt($request->clave),
        ]);

        // Redirigir a la página de inicio de sesión
        return redirect()->route('adminUsuario.index', compact('nombreUsuario'));
    }
}
