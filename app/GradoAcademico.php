<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class GradoAcademico extends Model
{
    // use SoftDeletes;

    protected $table = 'grado_academicos';

    protected $fillable = [
        'grado'
    ];
}