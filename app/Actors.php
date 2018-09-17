<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Actors extends Model
{
    public function series()
    {
        return $this->belongsToMany(Series::class);
    }
}
