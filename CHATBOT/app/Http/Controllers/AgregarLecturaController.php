<?php

namespace App\Http\Controllers;

use App\Models\Curso;
use App\Models\Usuario;
use App\Models\MaterialLectura;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AgregarLecturaController extends Controller
{
    public function index($nombreUsuario)
    {
        $usuarios = Usuario::select('id', 'nombre')->get();
        return view('admin.agregarMaterialLectura', compact('nombreUsuario', 'usuarios'));
    }

    public function store(Request $request)
    {   
        // Validación de datos
        $request->validate([
            'permisos' => 'required',
            'id_usu' => 'required',
        ], [
            'permisos.required' => 'Los permisos son obligatorios.',
            'id_usu.required' => 'El usuario es obligatorio.',
        ]);

        $usuario = Auth::user();

        if ($usuario) {
            $usuarioId = $usuario->id;
            $nombreUsuario = $usuario->nombre;
        }

        // Crear nuevo registro en la tabla 'roles'
        $existingMaterialLectura = MaterialLectura::where('id_usu', $request->input('id_usu'))
            ->where('permisos', $request->input('permisos'))
            ->first();

        if (!$existingMaterialLectura) {
            MaterialLectura::create([
                'permisos' => $request->input('permisos'),
                'id_usu' => $request->input('id_usu')
            ]);
        }


        return redirect()->route('adminLectura.index', compact('nombreUsuario'));
    }
}


