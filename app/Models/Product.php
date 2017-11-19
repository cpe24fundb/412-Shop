<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    public function productCategory()
    {
        return $this->belongsTo('App\Models\ProductCategory');
    }

    public function notifications()
    {
        return $this->belongsToMany('App\Models\Notification', 'subscribes');
    }

    public function bills()
    {
        return $this->belongsToMany('App\Models\Bill', 'bill_items')->withPivot('quantity')->withTimestamps();
    }

    public function stocks()
    {
        return $this->belongsToMany('App\Models\Stock', 'stock_items')->withPivot('quantity')->withTimestamps();
    }

    public function balance(){
        return $this->stocks->sum('pivot.quantity') - $this->bills->sum('pivot.quantity');
    }
}
