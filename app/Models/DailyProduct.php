<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class DailyProduct extends Model
{
    public function daily()
    {
        return $this->belongsTo('App\Models\Product');
    }

    public function product()
    {
        return $this->hasOne('App\Models\Product');
    }
}
