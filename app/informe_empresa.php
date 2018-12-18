<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class informe_empresa extends Model
{
    //
    protected $table='informes_empresa';
    protected $primaryKey='id_informe';

    public function empresa(){
        return $this->belongsTo('app\empresa','id_empresa');
    }
}
