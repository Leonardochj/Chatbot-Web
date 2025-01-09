<?php

namespace App\Http\Controllers;

use App\Models\Curso;
use App\Models\Usuario;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminCursoController extends Controller
{
    public function index($nombreUsuario)
    {

        $datos = Curso::paginate(5);

        return view('admin.adminCursos', compact('datos', 'nombreUsuario'));
    }

    public function destroy($id)
    {

        $usuario = Auth::user();

        if ($usuario) {
            $usuarioId = $usuario->id;

            $nombreUsuario = $usuario->nombre;
        }

        $usuariosCount = Usuario::count();
        $cursosCount = Curso::count();
        $curso = Curso::find($id);

        if ($curso) {
            // Eliminar videos relacionados
            $videos = $curso->videos;
            foreach ($videos as $video) {
                $video->delete();
            }
        
            // Eliminar materiales de lectura relacionados
            $materialesLectura = $curso->materialLectura;
            foreach ($materialesLectura as $materialLectura) {
                $materialLectura->delete();
            }
        
            // Finalmente, eliminar el curso
            $curso->delete();
        }

        $error = 'Curso Eliminado Correctamente';

        return view('admin.adminIndex', compact('nombreUsuario', 'usuariosCount', 'cursosCount', 'error'));
    }
}
