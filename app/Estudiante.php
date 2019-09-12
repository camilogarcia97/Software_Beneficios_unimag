<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Estudiante extends Model
{
    public function diasDeEstudio(){
    	return $this->hasMany(Horario::class);
    } 
}
