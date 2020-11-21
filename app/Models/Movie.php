<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Movie extends Model
{
    public function genre()
    {
        return $this->belongsTo('App\Models\Genre');
    }
    public function episodes()
    {
        return $this->hasMany('App\Models\Episode');
    }
}
