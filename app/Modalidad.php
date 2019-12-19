<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Modalidad extends Model
{
    use SoftDeletes;
    protected $fillable = [
       'id','anio','semestre','anio_postulacion',
       'presentacion','conclusion','titulo','area_id',
       'guia_id','forma','anio_titulacion','tipo','user_id'
    ];

    public function user()
    {
        return $this->belongsTo('App\User','guia_id');
    }

    public function estudiante()
    {
        return $this->belongsTo('App\User','user_id');
    }

}
