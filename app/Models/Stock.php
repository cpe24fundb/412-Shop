<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Stock extends Model
{

    public function users()
    {
        return $this->belongsToMany('App\Models\User');
    }

    public function products()
    {
        return $this->belongsToMany('App\Models\StockItems');
    }

}