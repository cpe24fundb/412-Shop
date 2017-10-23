<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{

    public function productCategory()
    {
        return $this->belongsTo('App\Models\ProductCategory');
    }

    public function notification()
    {
        return $this->belongsToMany('App\Models\Notification');
    }
}