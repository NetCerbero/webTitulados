<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class AreaEstudio extends Model
{
    // use SoftDeletes;

    protected $table = 'area_estudio';

    protected $fillable = [
        'nombre',
        'descripcion'
    ];
}