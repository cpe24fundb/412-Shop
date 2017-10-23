<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Notification extends Model
{
    public function subsrcibe(){
        return $this->belongsToMany('App/Models/Product');
    }


}