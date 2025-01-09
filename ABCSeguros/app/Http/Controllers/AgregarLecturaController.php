<?php

namespace App\Http\Controllers;

use App\Models\Curso;
use App\Models\MaterialLectura;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AgregarLecturaController extends Controller
{
    public function index($nombreUsuario)
    {
        $cursos = Curso::select('id', 'nombreCurso')->get();

        return view('admin.agregarMaterialLectura', compact('nombreUsuario', 'cursos'));
    }

    public function store(Request $request)
    {   
        // Validación de datos
        $request->validate([
            'nombre' => 'required',
            'idCurso' => 'required',
            'url' => 'required',
        ], [
            'nombre.required' => 'El nombre es obligatorio.',
            'idCurso.required' => 'El ID es obligatorio.',
            'url.required' => 'La URL es obligatorio.'
        ]);
        
        $usuario = Auth::user();

        if ($usuario) {
            $usuarioId = $usuario->id;
            $nombreUsuario = $usuario->nombre;
        }

        MaterialLectura::create([
            'contenido' => $request->nombre,
            'idCurso' => $request->idCurso,
            'url' => $request->url
        ]);

        return redirect()->route('adminLectura.index', compact('nombreUsuario'));
    }
}
