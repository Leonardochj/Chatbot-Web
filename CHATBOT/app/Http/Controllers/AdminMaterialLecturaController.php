<?php

namespace App\Http\Controllers;

use App\Models\Curso;
use App\Models\MaterialLectura;
use App\Models\Usuario;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class AdminMaterialLecturaController extends Controller
{
    public function index($nombreUsuario)
    {
        $datos = MaterialLectura::select('roles.id', 'roles.permisos', 'usuarios.usuario as usuario')
            ->join('usuarios', 'roles.id_usu', '=', 'usuarios.id') // Correct the join condition here
            ->paginate(3);

        return view('admin.adminMaterialLectura', compact('datos', 'nombreUsuario'));
    }

    public function destroy(Request $request)
    {

        $usuario = Auth::user();

        if ($usuario) {
            $usuarioId = $usuario->id;
            $nombreUsuario = $usuario->nombre;
        }

        $usuariosCount = Usuario::count();
        $permisosCount = MaterialLectura::count();

        // Recuperar los valores de los campos ocultos
        $idMaterialLectura = $request->input('idMaterialLectura');

        DB::delete('DELETE FROM roles WHERE id = ?', [$idMaterialLectura]);

        $error = 'Rol Eliminado Correctamente';
        
        return view('admin.adminIndex', compact('nombreUsuario', 'usuariosCount', 'permisosCount', 'error'));
    }
}
