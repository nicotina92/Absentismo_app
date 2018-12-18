<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ausencias extends Model
{
    //
    protected $table = 'ausencias';
    protected $primaryKey='id_ausencia';

    public function user(){
        return $this->belongsTo('app\User','id_usuario');
    }

    public function tipo_ausencia(){
        return $this->hasOne('app\tipo_ausencia','id_tipo');
    }
}
