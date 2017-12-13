<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\BillItem;
use Carbon\Carbon;

class StatisticBillController extends Controller
{
    public function view() {
        $startOfWeek = Carbon::now()->startOfWeek();
        $endOfWeek = Carbon::now()->endOfWeek();

        return view('admin.statistic.bill_main', []);


        // return $target + $target2;
    }
}