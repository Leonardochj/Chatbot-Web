<?php

namespace App\Http\Controllers;

use App\Models\Curso;
use App\Models\Videos;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class AgregarVideoController extends Controller
{
    public function index($nombreUsuario)
    {
        $cursos = Curso::select('id', 'nombreCurso')->get();

        return view('admin.agregarVideo', compact('nombreUsuario', 'cursos'));
    }

    public function store(Request $request)
    {   
        $request->validate([
            'nombre' => 'required',
            'idCurso' => 'required',
            'url' => 'required',
            'duracion' => ['required', 'numeric', 'min:1'],
        ], [
            'nombre.required' => 'El nombre es obligatorio.',
            'idCurso.required' => 'El ID es obligatorio.',
            'url.required' => 'La URL es obligatoria.',
            'duracion.required' => 'La duración es obligatoria.',
            'duracion.min' => 'La duración debe ser mayor a 0.',
        ]);        
        
        $usuario = Auth::user();

        if ($usuario) {
            $usuarioId = $usuario->id;
            $nombreUsuario = $usuario->nombre;
        }


        // Crear un nuevo usuario
        Videos::create([
            'urlVideo' => $request->url,
            'nombre' => $request->nombre,
            'duracionMin' => $request->duracion,
            'idCurso' => $request->idCurso
        ]);

        // Redirigir a la página de inicio de sesión
        return redirect()->route('adminVideo.index', compact('nombreUsuario'));
    }
}
