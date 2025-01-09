<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MaterialLectura extends Model
{
    use HasFactory;

    protected $table='materiallectura';
    protected $fillable=[
        'contenido',
        'url',
        'idCurso'
    ];

    public $timestamps = false;

}
