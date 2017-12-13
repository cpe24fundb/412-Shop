<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Daily extends Model
{
    public function product()
    {
        return $this->belongsTo('App\Models\DailyProduct');
    }

}