<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Build extends Model
{
    public function user() 
    {
        $this->belongsTo('App\User');
    }
}
