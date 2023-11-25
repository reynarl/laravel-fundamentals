<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Image extends Model
{
    protected $guarded = [];

    use HasFactory;

    //RELACION UNO A UNO POLIMORFICA

    //El nombre de la función deberá coincidir con el nombre de los campos establecidos en la tabla (imageable_id, imageable_type)
    public function imageable()
    {
        //indicamos que en la tabla images se realizará una relacion polimorfica
        return $this->morphTo();
    }
}
