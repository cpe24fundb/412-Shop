<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Notification extends Model
{

    public function products(){
        return $this->belongsToMany('App/Models/Product', 'subscribes');
    }

}