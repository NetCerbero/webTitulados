<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Database\Eloquent\SoftDeletes;
class User extends Authenticatable
{
    use Notifiable;
    use SoftDeletes;
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'nombre', 'email', 'password','apellidos','genero','telefono','registro',
        'fecha_nac','codigo','tipo','role_id'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function role(){
        return $this->hasOne('App\Rol', 'id','role_id');
    }

    public function modalidad(){
        return $this->hasOne('App\Modalidad','guia_id');
    }

    public function hasRole($id){
        $c = 0;
        $rsp = [
            "leer"=>false,
            "escribir"=>false,
            "editar"=>false,
            "eliminar"=>false,
            "total" => 0
        ];
        foreach($this->role->caso_usos as $cu){
            if($cu->pivot->cu_id == $id){
                if($cu->pivot->escribir == 1){
                    $rsp['escribir'] = true;
                    $c++;
                }
                if($cu->pivot->leer == 1){
                    $rsp['leer'] = true;
                    $c++;
                }
                if($cu->pivot->eliminar == 1){
                    $rsp['eliminar'] = true;
                    $c++;
                }
                if($cu->pivot->editar == 1){
                    $rsp['editar'] = true;
                    $c++;
                }
                $rsp['total'] = $c;
                break;
            }
        }
        return $rsp;
    }
}
