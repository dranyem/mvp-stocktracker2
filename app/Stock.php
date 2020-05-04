<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Stock extends Model
{
    protected $table = 'stocktracker';
    public function users()
    {
        return $this->belongsToMany('App\User', 'user_id');
    }
}
