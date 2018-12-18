<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class calendario_empresa extends Model
{
    //
    protected $table='calendario_empresa';
    protected $primaryKey='id_calendario';

    //

    public function empresa(){
        return $this->belongsTo('empresa','id_empresa');
    }
    
}
