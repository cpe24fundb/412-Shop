<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Bill_items extends Model
{

    public function product()
    {
        return $this->belongsTo('App\Models\Product');
    }

    public function bill()
    {
        return $this->belongsTo('App\Models\Bill');
    }

}