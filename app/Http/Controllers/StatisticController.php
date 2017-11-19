<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StatisticController extends Controller
{
    public function popular() {
        return view('admin.statistic.popular_product');
    }
}