<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cuestionario extends Model
{
    use HasFactory;

    protected $table='cuestionario';
    protected $fillable=[
        'nombreCuestionario',
        'idRecursos',
        'recursos_idCursos'
    ];
}
