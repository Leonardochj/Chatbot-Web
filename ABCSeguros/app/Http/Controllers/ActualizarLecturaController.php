<?php

namespace App\Http\Controllers;

use App\Models\Curso;
use App\Models\MaterialLectura;
use App\Models\Usuario;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ActualizarLecturaController extends Controller
{
    public function index($id) {
        $usuario = Auth::user();

        if ($usuario) {
            $usuarioId = $usuario->id;
            $nombreUsuario = $usuario->nombre;
        }

        $material = MaterialLectura::find($id);

        return view('admin.actualizarMaterialLectura', compact('material', 'nombreUsuario'));
    }

    public function update(Request $request, $id) {
        $usuario = Auth::user();

        if ($usuario) {
            $usuarioId = $usuario->id;
            $nombreUsuario = $usuario->nombre;
        }

        $material = MaterialLectura::find($id);
        $material->contenido = $request->post('nombre');
        $material->url = $request->post('url');
        $material->save();

        $usuariosCount = Usuario::count();
        $cursosCount = Curso::count();
        $error = 'Recurso Bibliografico Actualizado Correctamente';

        return view('admin.adminIndex', compact('usuariosCount', 'cursosCount', 'nombreUsuario', 'error'));
    }
}
