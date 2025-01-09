<?php

namespace App\Models;

use Illuminate\Auth\Authenticatable;
use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Usuario extends Model implements AuthenticatableContract
{
    use HasFactory, Authenticatable;

    protected $table='usuarios';
    protected $fillable=[
        'nombre',
        'apellido',
        'usuario',
        'rol',
        'telefono',
        'correo',
        'fechaCuenta',
        'clave'
    ];

    protected $username = 'usuario';

    public $timestamps = false;

    public function getAuthIdentifierName()
    {
        return 'usuario';
    }
    
    public function getAuthPassword()
    {
        return $this->clave;
    }
    
    public function materialLectura()
    {
        return $this->hasMany(MaterialLectura::class, 'id_usu');
    }
}