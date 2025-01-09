<?php

namespace App\Http\Controllers;

use App\Models\Curso;
use App\Models\Usuario;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use App\Models\Videos;

class AdminVideoController extends Controller
{
    public function index($nombreUsuario)
    {

        $datos = Videos::select('videos.id', 'videos.nombre', 'videos.duracionMin', 'videos.urlVideo', 'cursos.nombreCurso as nombreCurso')
            ->join('cursos', 'videos.idCurso', '=', 'cursos.id')
            ->paginate(3);

        return view('admin.adminVideo', compact('datos', 'nombreUsuario'));
    }

    public function destroy(Request $request, $id)
    {

        $usuario = Auth::user();

        if ($usuario) {
            $usuarioId = $usuario->id;
            $nombreUsuario = $usuario->nombre;
        }

        $usuariosCount = Usuario::count();
        $cursosCount = Curso::count();
        
        $video = Videos::find($id);
        $video->delete();

        $error = 'Video Eliminado Correctamente';

        return view('admin.adminIndex', compact('nombreUsuario', 'usuariosCount', 'cursosCount', 'error'));
    }
}
