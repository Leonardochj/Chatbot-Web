<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Curso extends Model
{
    use HasFactory;

    protected $table='cursos';
    protected $fillable=[
        'nombreCurso',
        'descripCurso',
        'creador',
        'nivelCurso'
    ];

    public $timestamps = false;

    public function videos()
    {
        return $this->hasMany(Videos::class, 'idCurso');
    }

    public function materialLectura()
    {
        return $this->hasMany(MaterialLectura::class, 'idCurso');
    }
}
