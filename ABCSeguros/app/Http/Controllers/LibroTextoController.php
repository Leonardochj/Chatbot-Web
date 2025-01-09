<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Curso;
use App\Models\Videos;
use Illuminate\Support\Facades\Auth;
use App\Models\Usuario;

class LibroTextoController extends Controller
{

    public function __invoke($id)
    {
        // Obtén la descripción del curso usando Eloquent
        $curso = Curso::find($id);
        $usuario = Auth::user();

        // Verifica si el curso existe
        if ($curso) {
            $nombreCurso = $curso->nombreCurso;
        } else {
            $nombreCurso = 'Nombre no encontrado';
        }

        if ($usuario) {
            // Accede al ID del usuario autenticado
            $usuarioId = $usuario->id;

            // Accede al nombre del usuario autenticado
            $nombreUsuario = $usuario->nombre;
        } else {
            // Si el usuario no está autenticado, proporciona valores predeterminados o realiza alguna acción alternativa
            $usuarioId = null;
            $nombreUsuario = 'Invitado';
        }

        return view('texto.adminLibroTexto', [
            'nombreCurso' => $nombreCurso,
            'nombreUsuario' => $nombreUsuario
        ]);
    }
}
