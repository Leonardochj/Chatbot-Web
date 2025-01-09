<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Videos extends Model
{
    use HasFactory;
    protected $table='videos';
    protected $fillable=[
        'urlVideo',
        'nombre',
        'duracionMin',
        'idCurso'
    ];

    public $timestamps = false;

    public function curso()
    {
        return $this->belongsTo(Curso::class, 'idCurso');
    }
}
