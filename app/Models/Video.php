<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Video extends Model
{
    use HasFactory;

    //RELACION UNO A MUCHOS (INVERSA)
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    //RELACION UNO A MUCHOS POLIMORFICA

    public function comments()
    {
        return $this->morphMany(Comment::class, 'commentable');
    }

    //RELACION MUCHOS A MUCHOS POLIFORMICA
    public function tags()
    {
        return $this->morphToMany(Tag::class, 'taggable');
    }
}
