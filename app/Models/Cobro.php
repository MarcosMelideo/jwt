<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cobro extends Model
{
    protected $table = 'cobros';
    protected $fillable = ['fecha', 'cliente_nombre', 'id_cliente'];
    use HasFactory;
}
