<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Daily extends Model
{
    public $timestamps = false;

    public function products()
    {
        return $this->belongsToMany('App\Models\Product', 'daily_products');
    }

    public function items()
    {
        return $this->hasMany('App\Models\DailyProduct');
    }
}
