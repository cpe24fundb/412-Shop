<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class User extends Model
{

    public function stocks()
    {
        return $this->hasMany('App\Models\Stock' );
    }

}
