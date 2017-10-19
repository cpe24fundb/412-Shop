<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Stock extends Model
{

    public function users()
    {
        return $this->belongsToMany('App\User');
    }

    public function products()
    {
        return $this->belongsToMany('App\Product');
    }

}