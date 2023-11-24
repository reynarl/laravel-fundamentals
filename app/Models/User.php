<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    //RELACION UNO A UNO:
    //para que podamos acceder a los registros que están en profile desde user
    public function profile()
    {
        //obtenemos los datos de profile de forma manual:
        // $profile = Profile::where('user_id', $this->id)->first();
        // return $profile;

        //hasOne considera que la llave primaria de la tabla users es id y la llave foranea de la tabla profile es user_id, de lo contrario se tendrán que  pasar por parámetros por aparte los nombre de las llaves foraneas
        return $this->hasOne(Profile::class);
        // pe. return $this->hasOne(Profile::class, 'foreing_key', 'local_key');
    }

    //UNO A MUCHOS:
    public function posts()
    {
        return $this->hasMany(Post::class);
    }

    public function videos()
    {
        return $this->hasMany(Video::class);
    }

    //MUCHOS A MUCHOS
    public function roles()
    {
        return $this->belongsToMany(Role::class);
    }
}
