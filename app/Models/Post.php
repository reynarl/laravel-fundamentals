<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    //RELACION UNO A MUCHOS (INVERSA)
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function categoria()
    {
        return $this->belongsTo(Categoria::class);
    }

    //RELACION UNO A UNO POLIMORFICA
    public function image()
    {
        //pasamos la clase Image y como segundo parámetro tenemos que agregar el nombre de la función/método que pusimos en el modelo Image para poder recuperar los registros de esta relación
        return $this->morphOne(Image::class, 'imageable');
    }
}
