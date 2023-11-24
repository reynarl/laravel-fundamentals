<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    use HasFactory;

    //recuperamos la informacion uno a uno inverso de user a profile
    public function user()
    {
        //forma manual:
        // $user = User::find($this->user_id);

        return $this->belongsTo(User::class);
    }
}
