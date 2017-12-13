<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class DailyProduct extends Model
{
    public function product()
    {
        return $this->hasone('App\Models\Daily');
    }

}
