<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Series extends Model
{
    protected $fillable = [
        'user_id','name','cover_image'
    ];
    public  function user()
    {
        return $this->belongsTo(User::class);
    }
    public function actors()
    {
        return $this->hasMany(Actors::class);
    }
}
