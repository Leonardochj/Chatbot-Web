<?php

namespace App\Http\Controllers;

use App\Models\Curso;
use App\Models\Usuario;
use App\Models\Videos;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class ActualizarVideoController extends Controller
{
    public function index($id) {
        $usuario = Auth::user();

        if ($usuario) {
            $usuarioId = $usuario->id;
            $nombreUsuario = $usuario->nombre;
        }

        $video = Videos::find($id);

        return view('admin.actualizarVideo', compact('video', 'nombreUsuario'));
    }

    public function update(Request $request, $id) {
        $usuario = Auth::user();

        if ($usuario) {
            $usuarioId = $usuario->id;
            $nombreUsuario = $usuario->nombre;
        }

        $video = Videos::find($id);
        $video->nombre = $request->post('nombre');
        $video->urlVideo = $request->post('url');
        $video->duracionMin = $request->post('duracion');
        $video->save();

        $usuariosCount = Usuario::count();
        $cursosCount = Curso::count();
        $error = 'Video Actualizado Correctamente';
            
        return view('admin.adminIndex', compact('usuariosCount', 'cursosCount', 'nombreUsuario', 'error'));
    }
}