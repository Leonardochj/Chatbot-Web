<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Preguntas extends Model
{
    use HasFactory;

    protected $table='preguntas';
    protected $fillable=[
        'enunciadoPregunta',
        'idCuestionario',
        'cuestionario_idRecursos',
        'cuestionario_recursos_idCurso'
    ];
}
