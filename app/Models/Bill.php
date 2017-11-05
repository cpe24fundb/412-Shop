<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Bill extends Model
{
    public function items()
    {
        return $this->hasMany('App\Models\BillItems');
    }

    public function products()
    {
        return $this->belongsToMany('App\Models\Product', 'bill_items')->withPivot('quantity');
    }
}
