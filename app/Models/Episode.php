<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Episode extends Model
{
    public function movie()
    {
        return $this->belongsTo('App\Models\Movie');
    }
}
