<?php

namespace App\Http\Controllers;

use App\Models\Curso;
use App\Models\Usuario;
use App\Models\MaterialLectura;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminUsuarioController extends Controller
{
    public function index($nombreUsuario) {

        $datos = Usuario::paginate(5);
        return view('admin.adminUsuarios', compact('datos', 'nombreUsuario'));
    }
    
    public function destroy($id){

        $usuario = Auth::user();

        if ($usuario) {
            $usuarioId = $usuario->id;

            $nombreUsuario = $usuario->nombre;
        }

        $usuariosCount = Usuario::count();
        $rolesCount = MaterialLectura::count();
        $usuario = Usuario::find($id);
        $usuario->delete();

        $error = 'Usuario Eliminado Correctamente';

        return view('admin.adminIndex', compact('nombreUsuario', 'usuariosCount', 'rolesCount', 'error'));
    }
}
