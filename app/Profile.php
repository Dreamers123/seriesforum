<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    protected $fillable = [
        'user_id','city','about', 'image_link'
    ];
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
