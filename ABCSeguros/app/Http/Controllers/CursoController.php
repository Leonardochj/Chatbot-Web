<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


use App\Models\Curso;
use Illuminate\Support\Facades\Auth;
use App\Models\Usuario;

class CursoController extends Controller
{
    public function index()
    {
        // Obtiene el usuario autenticado
        $usuario = Auth::user();

        // Verifica si el usuario está autenticado antes de acceder a sus propiedades
        if ($usuario) {
            // Accede al ID del usuario autenticado
            $usuarioId = $usuario->id;

            // Accede al nombre del usuario autenticado
            $nombreUsuario = $usuario->usuario;
        } else {
            // Si el usuario no está autenticado, proporciona valores predeterminados o realiza alguna acción alternativa
            $usuarioId = null;
            $nombreUsuario = 'Invitado';
        }

        // Consulta para obtener los tres primeros cursos actuales ordenados ascendentemente por id
        $cursosActuales = Curso::orderBy('id')->take(3)->get();

        // Consulta para obtener los tres últimos cursos recomendados ordenados descendentemente por id
        $cursosRecomendados = Curso::orderBy('id', 'desc')->take(3)->get();

        $fotos = [
            '../storage/app/public/img/unsplash_s7gyjnH7Ulk.png',
            '../storage/app/public/img/unsplash_1zO4O3Z0UJA.png',
            '../storage/app/public/img/unsplash_fiXLQXAhCfk.png'
        ];

        $fotos2 = [
            '../storage/app/public/img/image 4.png',
            '../storage/app/public/img/image 5.png',
            '../storage/app/public/img/image 6.png'
        ];

        return view('cursos.cursosIndex', compact('usuarioId', 'nombreUsuario', 'cursosActuales', 'cursosRecomendados', 'fotos', 'fotos2'));
    }
}