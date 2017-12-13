<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Daily extends Model
{
    public function products()
    {
        return $this->belongsToMany('App\Models\Product', 'daily_products');
    }
}
