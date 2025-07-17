<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class cuenta_usuarios extends Model
{
    public function banco(){
        return $this->belongsTo(bancos::class,'banco_id','id');
    }

    public function banco_cuenta(){
        return $this->belongsTo(banco_cuentas::class,'banco_cuenta_tipo_id','id');
    }
}
