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

        $datos = MaterialLectura::select('materiallectura.id', 'materiallectura.contenido', 'materiallectura.url', 'cursos.nombreCurso as nombreCurso')
            ->join('cursos', 'materiallectura.idCurso', '=', 'cursos.id')
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
        $cursosCount = Curso::count();

        // Recuperar los valores de los campos ocultos
        $idMaterialLectura = $request->input('idMaterialLectura');

        DB::delete('DELETE FROM materiallectura WHERE id = ?', [$idMaterialLectura]);

        $error = 'Recurso Bibliografico Eliminado Correctamente';
        
        return view('admin.adminIndex', compact('nombreUsuario', 'usuariosCount', 'cursosCount', 'error'));
    }
}
