<?php

namespace App\Http\Controllers;

use App\Models\Curso;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AgregarCursoController extends Controller
{

    public function index($nombreUsuario){
        return view('admin.agregarCurso', compact('nombreUsuario'));
    }

    public function store(Request $request)
    {
        // Validación de datos
        $request->validate([
            'nombreCurso' => 'required',
            'descripCurso' => 'required',
            'creador' => 'required',
            'nivelCurso' => 'required',
        ], [
            'nombreCurso.required' => 'El nombre del curso es obligatorio.',
            'descripCurso.required' => 'La descripcion del curso es obligatorio.',
            'creador.required' => 'El creador es obligatorio.',
            'nivelCurso.required' => 'El nivel del curso es obligatorio.'
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
        Curso::create([
            'nombreCurso' => $request->nombreCurso,
            'descripCurso' => $request->descripCurso,
            'creador' => $request->creador,
            'nivelCurso' => $request->nivelCurso
        ]);

        // Redirigir a la página de inicio de sesión
        return redirect()->route('adminCurso.index', compact('nombreUsuario'));
    }
}
