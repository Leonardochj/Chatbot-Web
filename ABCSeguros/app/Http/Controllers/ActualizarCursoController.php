<?php

namespace App\Http\Controllers;

use App\Models\Curso;
use App\Models\Usuario;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ActualizarCursoController extends Controller
{
    public function index($id){
        
        $usuario = Auth::user();

        if ($usuario) {
            $usuarioId = $usuario->id;
            $nombreUsuario = $usuario->nombre;
        }

        $curso = Curso::find($id);

        return view('admin.actualizarCurso', compact('curso', 'nombreUsuario'));
    }

    public function update(Request $request, $id) {
        $usuario = Auth::user();

        if ($usuario) {
            $usuarioId = $usuario->id;
            $nombreUsuario = $usuario->nombre;
        }

        $curso = Curso::find($id);
        $curso->nombreCurso = $request->post('nombreCurso');
        $curso->descripCurso = $request->post('descripCurso');
        $curso->creador = $request->post('creador');
        $curso->nivelCurso = $request->post('nivelCurso');
        $curso->save();

        $usuariosCount = Usuario::count();
        $cursosCount = Curso::count();
        $error = 'Curso Actualizado Correctamente';

        return view('admin.adminIndex', compact('usuariosCount', 'cursosCount', 'nombreUsuario', 'error'));
    }
}
