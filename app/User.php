<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'nombre', 'id_rol','email','password'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
         'remember_token','password'
    ];

    //public $timestamps = false;
    protected $primaryKey='id_usuario';

    public function empresa(){
        return $this->belongsTo('App\empresa','id_empresa');
    }
    public function rol(){
        return $this->hasOne('App\rol','id_rol');
    }
}
