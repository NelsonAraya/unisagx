<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class asistencia_usuarios extends Model
{
    public function tipo()
    {
        return $this->belongsTo(asistencia_tipo::class, 'asistencia_tipo_id');
    }

    public function reloj()
    {
        return $this->belongsTo(asistencia_relojes::class, 'reloj_id');
    }
}
