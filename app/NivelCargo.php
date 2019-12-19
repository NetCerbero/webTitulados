<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class NivelCargo extends Model
{
    // use SoftDeletes;

    protected $table = 'nivel_cargo';

    protected $fillable = [
        'nombre',
        'descripcion'
    ];
}