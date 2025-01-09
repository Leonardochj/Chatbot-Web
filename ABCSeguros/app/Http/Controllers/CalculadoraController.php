<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use DateTime;

class CalculadoraController extends Controller
{

    public function index()
    {

        $usuario = Auth::user();

        // Verifica si el usuario está autenticado antes de acceder a sus propiedades
        if ($usuario) {
            // Accede al ID del usuario autenticado
            $usuarioId = $usuario->id;

            // Accede al nombre del usuario autenticado
            $nombreUsuario = $usuario->usuario;
        } else {
            // Si el usuario no está autenticado, proporciona valores predeterminados o realiza alguna acción alternativa
            $usuarioId = null;
            $nombreUsuario = 'Invitado';
        }

        return view('calculadora.calculadora', compact('nombreUsuario'));
    }

    public function calcular(Request $request)
    {
        // Lógica de la calculadora
        $valor_contado = $request->input('valor_contado');
        $valor_nominal = $request->input('valor_nominal');
        $interes = $request->input('interes') / 100;
        $frecuencia = $request->input('frecuencia') == 'mensual' ? 12 : 1;
        $fecha_inicial = new DateTime($request->input('fecha_inicial'));
        $periodos_carencia = $request->input('periodos_carencia');
        $forma_carencia = $request->input('forma_carencia');

        $n = $frecuencia * (DateTime::createFromFormat('Y-m-d', $fecha_inicial->format('Y-m-d'))->diff(new DateTime())->y + 1);

        if ($forma_carencia == "sin_pagos") {
            $n += $periodos_carencia * $frecuencia;
        }

        $r = $interes / $frecuencia;

        $C = ($valor_contado * $r) / (1 - pow(1 + $r, -$n));
        $I = $valor_contado * $r;
        $A = $C - $I;

        return view('calculadora.resultado', [
            'C' => round($C, 2),
            'I' => round($I, 2),
            'A' => round($A, 2),
            'totalPagado' => round($C * $n, 2),
        ]);
    }
}