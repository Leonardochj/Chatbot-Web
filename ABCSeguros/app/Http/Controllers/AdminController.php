<?php

namespace App\Http\Controllers;

use App\Models\Curso;
use App\Models\Usuario;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    public function index() {
        $usuario = Auth::user();

        // Verifica si el usuario está autenticado antes de acceder a sus propiedades
        if ($usuario) {
            // Accede al ID del usuario autenticado
            $usuarioId = $usuario->id;

            // Accede al nombre del usuario autenticado
            $nombreUsuario = $usuario->nombre;
        }
        
        $usuariosCount = Usuario::count();
        $cursosCount = Curso::count();
        $error = null;

        return view('admin.adminIndex', compact('usuariosCount', 'usuarioId', 'nombreUsuario', 'cursosCount','error'));
    }
}
