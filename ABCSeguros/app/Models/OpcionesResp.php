<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OpcionesResp extends Model
{
    use HasFactory;

    protected $table='opcionesResp';
    protected $fillable=[
        'textoOpcion',
        'idPreguntas',
        'preguntas_idCuestionario',
        'preguntas_cuestionario_idRecursos',
        'preguntas_cuestionario_recursos_idCurso'
    ];
}
