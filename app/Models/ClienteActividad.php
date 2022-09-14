<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ClienteActividad extends Model
{
    protected $table = 'clientes_actividades';
    protected $fillable = ['id_cliente', 'id_actividad'];
    use HasFactory;
}
