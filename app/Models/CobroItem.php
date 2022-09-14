<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CobroItem extends Model
{
    protected $table = 'cobros_item';
    protected $fillable = ['actividad_nombre', 'actividad_precio', 'id_cobro', 'id_cobro_dias', 'descuento'];
    use HasFactory;
}
