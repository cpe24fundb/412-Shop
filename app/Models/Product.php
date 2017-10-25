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
}
