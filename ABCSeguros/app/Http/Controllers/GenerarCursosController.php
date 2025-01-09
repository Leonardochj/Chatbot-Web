<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Curso;
use App\Models\Videos;
use Illuminate\Support\Facades\Auth;
use App\Models\Usuario;
use App\Models\Cuestionario;

class GenerarCursosController extends Controller
{
    public function __invoke($id)
    {
        // Obtén la descripción del curso usando Eloquent
        $curso = Curso::find($id);
        $usuario = Auth::user();
        $cuestionario = Cuestionario::where('id', $id)->value('id');
    
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
            $nombreUsuario = $usuario->usuario;
        } else {
            // Si el usuario no está autenticado, proporciona valores predeterminados o realiza alguna acción alternativa
            $usuarioId = null;
            $nombreUsuario = 'Invitado';
        }
    
        // Ahora, también obtén la URL del video usando Eloquent
        $video = Videos::select('videos.id', 'videos.urlVideo', 'videos.nombre')
            ->join('cursos', 'videos.idCurso', '=', 'cursos.id')
            ->where('cursos.id', $id)
            ->first();
    
        // Verifica si se encontró un video
        if ($video) {
            $nombreVideo = $video->nombre;
            $urlVideo = $video->urlVideo;
        } else {
            $nombreVideo = 'Video no encontrado';
            $urlVideo = null;
        }
        
        $videosDeLectura = Videos::select('videos.id', 'videos.urlVideo', 'videos.nombre')
            ->join('cursos', 'videos.idCurso', '=', 'cursos.id')
            ->where('cursos.id', $id)
            ->get();

        return view('generarCursos.generarCursos', [
            'nombreCurso' => $nombreCurso,
            'nombreVideo' => $nombreVideo,
            'nombreUsuario' => $nombreUsuario,
            'cuestionario' => $cuestionario,
            'videosDeLectura' => $videosDeLectura,
            'urlVideo' => $urlVideo
        ]);
    }   
}
