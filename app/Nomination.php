<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Nomination extends Model
{
    // Establish relationship to films
    public function film()
    {
        return $this->belongsTo('App\Film');
    }

    // Establish relationship to category
    public function category()
    {
        return $this->hasOne('App\Category');
    }
}
