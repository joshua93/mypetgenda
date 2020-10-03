<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    // hacer referencia a las cosas en el codigo
    public function user(){
        return $this->belongsTo(User::class);
    }
//Tareas: crear ER, jugar con migrations, avisar a Ken
//en otro branch: bregar con los modelos (hacer las relaciones como en este)  (many to any, one to one, many to one, etc) Todo en documentacion
}
