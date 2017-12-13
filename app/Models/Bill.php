<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Bill extends Model
{
    public function items()
    {
        return $this->hasMany('App\Models\BillItem');
    }

    public function products()
    {
        return $this->belongsToMany('App\Models\Product', 'bill_items')->withPivot('quantity')->withTimestamps();
    }

    public function quantity()
    {
        return $this->products->sum('pivot.quantity');
    }
}
