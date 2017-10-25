<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class StockItem extends Model
{
    public function product(){
        return $this->belongsTo('App/Models/Product');
    }

    public function stock(){
        return $this->belongsTo('App/Models/Stock');
    }
}