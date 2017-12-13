<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\BillItem;
use App\Models\Bill;
use Carbon\Carbon;

class StatisticBillController extends Controller
{
    public function view() {
        $bills = Bill::all();
        $today = Carbon::now(7);
        // $startOfWeek = $today->startOfWeek();
        // $endOfWeek = $today->endOfWeek();





        return view('admin.statistic.bill_main', ['today' => $today
        ]);


        // return $today;
    }
}