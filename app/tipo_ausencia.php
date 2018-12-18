<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class tipo_ausencia extends Model
{
    //
    protected $table='tipo_ausencia';
    protected $primaryKey='id_tipo';

    public function ausencias(){
        return $this->hasMany('app\ausencias','tipo_ausencia');
    }
}
