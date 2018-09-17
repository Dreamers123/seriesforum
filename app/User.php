<?php

namespace App;

use Illuminate\Database\Events\QueryExecuted;
use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;


    protected $fillable = [
        'name', 'email', 'password',
    ];

    protected $hidden = [
        'password', 'remember_token',
    ];

    public function profile()
    {
        return $this->hasOne(Profile::class);
    }
    public function series()
    {
    return $this->hasMany(Series::class);
    }
    public function quotes()
    {
        return $this->hasMany(Quotes::class);
    }
}
