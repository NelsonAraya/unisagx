<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class usuario extends Model
{
    public function rutUsuario() {
      return $this->id. '-' . $this->dv;
    }

    public function estado(){
        return $this->belongsTo(estado_usuarios::class,'estado_id','id');
    }
}
