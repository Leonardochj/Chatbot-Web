<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Usuario;
use Illuminate\Support\Facades\Auth;

class IniciarSesionController extends Controller
{
    protected $username = 'usuario';

    public function __invoke()
    {
        return view('sesion.iniciarSesion');
    }

    public function login(Request $request)
    {
        $credentials = $request->only('usuario', 'password');

        if (Auth::attempt($credentials, $request->has('remember'))) {
            // Autenticación exitosa
            $user = Auth::user();

            // Validar el rol del usuario
            if ($user->rol == 'Admin') {
                return redirect()->route('admin.index');
            } else {
                return redirect()->route('admin.index');
            }
        } else {
            // Autenticación fallida
            return redirect()->route('iniciarSesion')->with('error', 'Datos incorrectos');
        }
    }

    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        return redirect('/');
    }
}
