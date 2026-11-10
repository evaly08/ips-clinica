<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Paciente extends Model
{
    protected $fillable = [
        'documento',
        'nombres',
        'apellidos',
        'fecha_nacimiento',
        'telefono',
        'correo',
        'direccion',
        'estado'
    ];
}