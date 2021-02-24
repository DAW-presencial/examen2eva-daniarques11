<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tutor extends Model
{
    use HasFactory;


    protected $fillable = [
        'nombreEmpresa',
        'tipoDocumento',
        'documentoIdentidad',
        'nombre',
        'primerApellido',
        'segundoApellido',
        'pais',
        'provincia',
        'municipio',
        'estado',
        'telefono',
        'email',
    ];

    protected $table = 'tutores';
}
