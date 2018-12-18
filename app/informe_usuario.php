<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class informe_usuario extends Model
{
    //
    protected $table='informes_usuarios';
    protected $primaryKey='id_informe';

    public function usuario(){
        return $this->belongsTo('app\User','id_usuario');
    }
}
