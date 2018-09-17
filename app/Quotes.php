<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Quotes extends Model
{
    protected $fillable = [
        'user_id','quotes','author'
    ];
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
