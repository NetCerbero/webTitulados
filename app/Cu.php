<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cu extends Model
{
    public function rol(){
        return $this->belongsToMany('App\Rol','rol_cus','cu_id','rol_id')->withPivot('rol_id', 'cu_id','leer','escribir','eliminar','editar')->withTimestamps();;
    }
}
