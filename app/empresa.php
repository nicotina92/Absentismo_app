<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\informe_empresa;

class empresa extends Model
{
    //
    protected $table = 'empresas';
    protected $primaryKey='id_empresa';

    // Una Empresa Tiene muchos dias libres
    /*public function calendario_empresa(){
        return $this->hasMany('app/calendario_empresa','empresa_ref');
    }*/

    //Una empresa tiene muchos usuarios
    public function user(){
        return $this->hasMany('App\User','id_empresa');
    }


    public function informe_empresa(){
        return $this->hasMany('App\informe_empresa','id_empresa');
    }
}
