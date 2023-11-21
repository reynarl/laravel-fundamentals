<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Curso extends Model
{
    use HasFactory;

    // para que en el registro de asignacion masiva unicamente se puedan ingresar los campos que queremos y así proteger el envío de datos e ignore cualquier otro campo que no esté dentro de fillable
    protected $fillable = [
        'name', 'description', 'category'
    ];

    //guarded es lo contrario, en el podemos omitir/ignorar unicamente ese campo que queremos (cuando los campos son demasiados esta podría ser una mejor solucion).
    //omitirá unicamente ese campo y los demás no.

    // protected $guarded = ['status'];
}
