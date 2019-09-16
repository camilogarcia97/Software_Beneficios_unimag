<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Horario extends Model
{
    public function horarioDeEstudiante(){
    	return $this->belongsTo(Estudiante::class);
    } 
}
