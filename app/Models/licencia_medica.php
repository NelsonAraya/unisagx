<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class licencia_medica extends Model
{
    protected $casts = [
        'fecha_inicio' => 'date',
        'fecha_termino' => 'date',
    ];
}
