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
            $nombreUsuario = $usuario->nombre;
        }

        $material = MaterialLectura::find($id);

        return view('admin.actualizarMaterialLectura', compact('material', 'nombreUsuario'));
    }

    public function update(Request $request, $id) {
        $usuario = Auth::user();

        if ($usuario) {
            $nombreUsuario = $usuario->nombre;
        }

        // Encuentra el material de lectura
        $material = MaterialLectura::find($id);

        // Actualiza solo el campo de permisos
        $material->permisos = $request->input('permisos');
        $material->save();

        $usuariosCount = Usuario::count();
        $cursosCount = Curso::count();
        $error = 'Permisos Actualizados Correctamente';

        return view('admin.adminIndex', compact('usuariosCount', 'cursosCount', 'nombreUsuario', 'error'));
    }
}

