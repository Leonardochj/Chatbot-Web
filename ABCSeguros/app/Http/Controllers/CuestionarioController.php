<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Curso;
use Illuminate\Support\Facades\Auth;
use App\Models\Usuario;
use App\Models\Videos;
use App\Models\Cuestionario;


class CuestionarioController extends Controller
{
    public function index($id)
    {
        $usuario = Auth::user();

        // Pasar solo el nombre del usuario
        $nombreUsuario = $usuario->nombre;
        $cuestionario = Cuestionario::where('id', $id)->value('id');
        $curso = Curso::find($id);

        $nombreVideo = Videos::where('id', $id)->value('nombre');
        $cursosActuales = Curso::orderBy('id')->take(1)->get();

        if ($curso) {
            $nombreCurso = $curso->nombreCurso;
        } else {
            $nombreCurso = 'Nombre no encontrado';
        }

        if (request()->segment(3) === 'siguiente') {
            return view('cuestionarios.adminCuestionario2', compact('usuario', 'nombreUsuario', 'cursosActuales', 'nombreVideo', 'nombreCurso'));
        }

        $videosDeLectura = Videos::select('videos.id', 'videos.urlVideo', 'videos.nombre')
            ->join('cursos', 'videos.idCurso', '=', 'cursos.id')
            ->where('cursos.id', $id)
            ->get();

        $cuestionarioLectura = Cuestionario::select('cuestionario.id', 'cuestionario.nombreCuestionario')
            ->join('cursos', 'cuestionario.idCursos', '=', 'cursos.id')
            ->where('cursos.id', $id)
            ->get();

        return view('cuestionarios.adminCuestionario1', 
        compact('usuario', 'nombreUsuario', 'nombreVideo','cursosActuales', 
        'cuestionario', 'cuestionarioLectura', 'videosDeLectura', 'nombreCurso'));
        
    }
    
}
