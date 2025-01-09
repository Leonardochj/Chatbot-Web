<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Videos;
use App\Models\Curso;
use Illuminate\Support\Facades\Auth;
use App\Models\Usuario;

class VideosController extends Controller
{
    public function index($id)
    {
        $usuario = Auth::user();

        // Pasar solo el nombre del usuario
        $nombreUsuario = $usuario->nombre;

        // Consulta para obtener la descripción del curso
        $nombreVideo = Videos::where('id', $id)->value('nombre');
        $urlVideo = Videos::where('id', $id)->value('urlVideo');

        $cursosActuales = Curso::orderBy('id')->take(1)->get();

        return view('videos.adminVideos', compact('usuario', 'nombreUsuario', 'nombreVideo', 'urlVideo', 'cursosActuales'));
    }
}
