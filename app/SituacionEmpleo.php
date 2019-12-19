<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class SituacionEmpleo extends Model
{
    // use SoftDeletes;

    protected $table = 'situacion_empleo';

    protected $fillable = [
        'nombre',
        'descripcion'
    ];
}