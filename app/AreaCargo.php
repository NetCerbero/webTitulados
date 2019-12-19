<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class AreaCargo extends Model
{
    // use SoftDeletes;

    protected $table = 'area_cargo';

    protected $fillable = [
        'nombre',
        'descripcion'
    ];
}