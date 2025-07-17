<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class usuario extends Model
{
    public function rutUsuario() {
      return $this->id. '-' . $this->dv;
    }
    
    public function getNombreCompletoAttribute(){
        return ucwords($this->nombres.' '.$this->apellidop.' '.$this->apellidom);
    }

    public function estado(){
        return $this->belongsTo(estado_usuarios::class,'estado_id','id');
    }
    
    public function cuentas_bancarias(){
        return $this->hasMany(cuenta_usuarios::class, 'usuario_id', 'id'); 
    }
}
