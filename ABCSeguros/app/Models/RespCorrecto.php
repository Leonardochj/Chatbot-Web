<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RespCorrecto extends Model
{
    use HasFactory;

    protected $table='respCorrecta';
    protected $fillable=[
        'idOpcion',
        'idPregunta'
    ];
}
