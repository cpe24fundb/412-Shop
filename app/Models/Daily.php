<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Daily extends Model
{
    public function dailyProduct()
    {
        return $this->hasMany('App\Models\DailyProduct');
    }
}
