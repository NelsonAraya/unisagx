<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class permiso extends Model
{
    public function tipo_permiso(){
        return $this->belongsTo(permiso_tipo::class,'permiso_tipo_id','id');
    }

    
    protected $casts = [
    'fecha_inicio' => 'date',
    'fecha_termino' => 'date',
    ];
}
