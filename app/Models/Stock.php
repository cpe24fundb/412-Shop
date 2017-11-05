<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Stock extends Model
{
    public function users()
    {
        return $this->belongsTo('App\Models\User');
    }

    public function items()
    {
        return $this->hasMany('App\Models\StockItems');
    }

    public function products()
    {
        return $this->belongsToMany('App\Models\Product', 'stock_items')->withPivot('quantity');
    }
}
