<?php

namespace App\Http\Controllers;

use App\Models\Curso;
use App\Models\Usuario;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ActualizarUsuarioController extends Controller
{
    public function index($id){
        
        $usuario = Auth::user();

        if ($usuario) {
            $usuarioId = $usuario->id;
            $nombreUsuario = $usuario->nombre;
        }

        $persona = Usuario::find($id);

        return view('admin.actualizarUsuario', compact('persona', 'nombreUsuario'));
    }

    public function update(Request $request, $id) {
        $usuario = Auth::user();

        if ($usuario) {
            $usuarioId = $usuario->id;
            $nombreUsuario = $usuario->nombre;
        }

        $persona = Usuario::find($id);
        $persona->nombre = $request->post('nombre');
        $persona->apellido = $request->post('apellido');
        $persona->usuario = $request->post('usuario');
        $persona->rol = $request->post('rol');
        $persona->telefono = $request->post('telefono');
        $persona->correo = $request->post('correo');
        $persona->clave = bcrypt($request->post('clave'));
        $persona->save();

        $usuariosCount = Usuario::count();
        $cursosCount = Curso::count();
        $error = 'Usuario Actualizado Correctamente';

        return view('admin.adminIndex', compact('usuariosCount', 'cursosCount', 'nombreUsuario', 'error'));
    }
}
