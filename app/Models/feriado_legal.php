<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class feriado_legal extends Model
{
    protected $casts = [
    'fecha_inicio' => 'date',
    'fecha_termino' => 'date',
    ];
}
