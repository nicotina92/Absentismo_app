<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class rol extends Model
{
    //
    protected $table='roles';
    protected $primaryKey='id_rol';

    public function usuario(){
        return $this->hasMany('app\User','rol');
    }
}
