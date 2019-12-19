<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Regimen extends Model
{
    // use SoftDeletes;

    protected $table = 'regimen';

    protected $fillable = [
        'nombre',
        'descripcion'
    ];
}